<?php

class User{
    public $id;

    public $name;

    public $msisdn;

    public $email;

    public $created_at;

    public $errors =[];


  /**
     * Validate the properties, putting any validation error messages in the $errors property
     *
     * @return boolean True if the current properties are valid, false otherwise
     */
    // since we are not calling this method outside the class we make it protected
  protected function validate(){
     $this->errors = [];

      if($this->name == ''){
      $this->errors['name'] ='You cannot be nameless';
     }
     if($this->msisdn == ''){
      $this->errors['msisdn'] = 'Your phoone number is required';
     }
     if(strlen($this->msisdn) < 11 && strlen($this->msisdn > 0)){
       $this->errors['msisdn'] = 'Your phoone number is not complete';
     }
     if($this->email == '' ){
       $this->errors['email'] = 'Your email is required';
     }
    return empty($this->errors);
   }

   public function register($conn){

     if($this->validate()){
      //sql stmt
      $sql = "INSERT INTO user (name, msisdn, email)
       VALUES (:name, :msisdn, :email)";
      //prepare
      $stmt = $conn->prepare($sql);
      //bind
      $stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
      $stmt->bindValue(':msisdn', $this->msisdn, PDO::PARAM_STR);
      $stmt->bindValue(':email', $this->email, PDO::PARAM_STR);
      //execute
      if($stmt->execute()){
       $this->id = $conn->lastInsertId();
       return true;
      }
     }else{
      return false;
     }

   }

   public static function getMsisdn($conn){
      $sql = "SELECT msisdn FROM user ORDER BY id DESC";
      $results = $conn->query($sql);
      // fetch results as objects
      // $results->setFetchMode(PDO::FETCH_CLASS, 'User');
      return $results->fetchAll(PDO::FETCH_ASSOC);;
   }

}