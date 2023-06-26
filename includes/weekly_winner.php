<?php
  require "../classes/Database.php";
// var_dump($_POST);


if($_SERVER['REQUEST_METHOD'] == 'POST' ){
     $db = new Database();
     $conn = $db->getConn();

     //sql stmt
      $sql = "INSERT INTO weekly_draw (msisdn)
       VALUES (:msisdn)";
      //prepare
      $stmt = $conn->prepare($sql);
      //bind
      $stmt->bindValue(':msisdn', $_POST['winner'], PDO::PARAM_STR);
      //execute
      if($stmt->execute()){
        $conn->lastInsertId();
       return true;
      }
   
}