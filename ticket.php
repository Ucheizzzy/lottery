<?php
    require "classes/Database.php";
    require "classes/User.php";


    $user = new User();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $db = new Database();
        $conn = $db->getConn();

        $user->name = $_POST['name'];
        $user->msisdn = $_POST['msisdn'];
        $user->email = $_POST['email'];

        if($user->register($conn)){
            header("location:success.php?msisdn=$user->msisdn");
        }
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>LuckyMe</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">
                
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-festava-live.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">

         <!-- css animate -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />


    </head>
    
    <body>

        <main>

         <header class="site-header">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-12 d-flex flex-wrap">
              <p class="d-flex mx-auto mb-0">
                <i class="bi-person custom-icon me-2"></i>
                <strong class="text-dark animate__heartBeat"
                  >Welcome to <a href="index.php">LuckyMe</a></strong
                >
              </p>
            </div>
          </div>
        </div>
      </header>

            <section class="ticket-section section-padding">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-10 mx-auto">
                            <form class="animate__animated animate__flipInY custom-form ticket-form mb-5 mb-lg-0" action="" method="post" role="form" >
                                <h2 class="text-center mb-4">Register Here To Enter Raffle Draw</h2>

                                <div class="ticket-form-body">
        
                                    <input  class="form-control " name="name" type="text" placeholder="Your Name"value="<?= htmlspecialchars($user->name) ;?>">
                                <div class="text-danger"><em><?php if(isset($user->errors['name'])) echo $user->errors['name'];   ?></em></div>

                                    <input type="tel" class="form-control w-100" name="msisdn" maxlength="11" minlength="11" id="phone" value="<?= htmlspecialchars($user->msisdn) ;?>" >
                                <div class="text-danger"><em><?php if(isset($user->errors['msisdn'])) echo $user->errors['msisdn'];   ?></em></div>


                                    <input type="email" name="email"class="form-control mt-4" placeholder="Your Email"value="<?= htmlspecialchars($user->email) ;?>">
                                    <div class="text-danger"><em><?php if(isset($user->errors['email'])) echo $user->errors['email'];   ?></em></div>


                                    <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                        <button type="submit" class="form-control">Join Draw</button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </section>
        </main>


        <footer class="site-footer">

            <div class="site-footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-12 mt-5">
                            <p class="copyright-text">© LuckyMe 2023</p>
                            </div>

                        <div class="col-lg-8 col-12 mt-lg-5">
                            <ul class="site-footer-links">
                                <li class="site-footer-link-item">
                                    <a href="#" class="site-footer-link">Terms &amp; Conditions</a>
                                </li>


                                <li class="site-footer-link-item">
                                    <a href="#" class="site-footer-link">support@luckyme.ng</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/custom.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>

    </body>
</html>