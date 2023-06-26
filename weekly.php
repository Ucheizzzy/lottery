<?php 
    require "classes/Database.php";
    require "classes/User.php";

    $db = new Database();
    $conn = $db->getConn();

    $msisdn = User::getMsisdn($conn);

    // echo "<pre>";
    // var_dump($msisdn[2]);
    // echo "</pre>";

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>LuckyMe</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">
                
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-festava-live.css" rel="stylesheet">

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

            <section class="draw draw-padding">
                <div class="draw-overlay"></div>

            <div class="container">

                    <div class="row" id="draw-form">
                        <div class="col-lg-6 col-10 mx-auto">
                            <form class="animate__animated animate__fadeInRight custom-form draw-form-weekly mb-5 mb-lg-0" action="" method="" role="form">
                                <h2 class="text-center mb-4">Weekly Raffle Draw</h2>

                                <div class="draw-form-body">
                                <div class="col-lg-4 col-md-10 col-8">
                                        <button onclick="rollMsisdnOne()" class="btn btn-warning rounded-3 px-4 py-2" id="roll_one">Let's Roll</button>
                                        <button onclick="stopMsisdnOne()" class="btn btn-warning rounded-3 px-4 py-2" id="select_one">Select</button>
                                    </div>
                                <div class="numbers">
                                    <span class="mb-4" id="msisdn_one">xxxxxxxxxxxxx</span>
                                </div>
                            
                                </div>
                                <div class="draw-form-body">
                                   <div class="col-lg-4 col-md-10 col-8">
                                        <button onclick="rollMsisdnTwo()" class="btn btn-warning rounded-3 px-4 py-2" id="roll2">Let's Roll</button>
                                        <button onclick="stopMsisdnTwo()" class="btn btn-warning rounded-3 px-4 py-2" id="select2">Select</button>
                                    </div>
                                <div class="numbers">
                                    <span class="nb-4" id="msisdn2">xxxxxxxxxxxxx</span>
                                </div>
                            
                                </div>
                                <div class="draw-form-body">
                                   <div class="col-lg-4 col-md-10 col-8">
                                        <button onclick="rollMsisdnThree()" class="btn btn-warning rounded-3 px-4 py-2" id="roll3">Let's Roll</button>
                                        <button onclick="stopMsisdnThree()" class="btn btn-warning rounded-3 px-4 py-2" id="select3">Select</button>
                                    </div>
                                <div class="numbers">
                                    <span class="nb-4" id="msisdn3">xxxxxxxxxxxxx</span>
                                </div>
                            
                                </div>
                                <div class="draw-form-body">
                                   <div class="col-lg-4 col-md-10 col-8">
                                        <button onclick="rollMsisdnFour()" class="btn btn-warning rounded-3 px-4 py-2" id="roll4">Let's Roll</button>
                                        <button onclick="stopMsisdnFour()" class="btn btn-warning rounded-3 px-4 py-2" id="select4">Select</button>
                                    </div>
                                <div class="numbers">
                                    <span class="nb-4" id="msisdn4">xxxxxxxxxxxxx</span>
                                </div>
                            
                                </div>
                                <div class="draw-form-body">
                                   <div class="col-lg-4 col-md-10 col-8">
                                        <button onclick="rollMsisdnFive()" class="btn btn-warning rounded-3 px-4 py-2" id="roll5">Let's Roll</button>
                                        <button onclick="stopMsisdnFive()" class="btn btn-warning rounded-3 px-4 py-2" id="select5">Select</button>
                                    </div>
                                <div class="numbers">
                                    <span class="nb-4" id="msisdn5">xxxxxxxxxxxxx</span>
                                </div>
                            
                                </div>
                            </form>
                </div>
                    </div>

                <div class="row" id="start-page">
                <div class="col-lg-6 col-10 mx-auto animate__animated animate__fadeInRight custom-form draw-form mb-5 mb-lg-0">
                    <h2 class="text-center" id="daily">Weekly Raffle Draw</h2>
                            <div class="text-center">
                            
                                <!-- <img src="./images/junetoken.jpeg" class="w-50" /> -->
                                <div id="countdown" style="font-size: 200px; font-weight:800"></div>
                                <button type="button" class="btn btn-warning rounded-3 px-4 py-2" id="start">Start Draw</button>
                        
                            </div>
                        </div>
                </div>
                
        </div>
            </section>
        </main>


        <footer class="site-footer">

            <div class="site-footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-12 mt-5">
                            <p class="copyright-text">© LuckMe 2023</p>
                            </div>

                        <div class="col-lg-8 col-12 mt-lg-5">
                            <ul class="site-footer-links">
                                <li class="site-footer-link-item">
                                    <a href="#" class="site-footer-link">Terms &amp; Conditions</a>
                                </li>

                                <li class="site-footer-link-item">
                                    <a href="#" class="site-footer-link">Privacy Policy</a>
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
        <script  type="text/javascript" language="javascript">
            $(document).ready(function(){

                $('#draw-form').hide();
                $('#start').hide();

                $('#start').click(function(){
                    $('#start-page').hide();
                    $('#draw-form').show();
                })
                var timeLeft = 20;
                var elem = document.getElementById('countdown');
                
                var timerId = setInterval(countdown, 1000);
                
                function countdown() {
                    if(timeLeft == 19){
                    document.getElementById('daily').innerHTML = "<h1 class='animate__animated animate__bounceIn' style='font-size: 62px;'>Starting Now.. </h1>";
                    }
                    if(timeLeft == 15){
                    document.getElementById('daily').innerHTML = "<h1 class='animate__animated animate__bounceIn'style='font-size: 62px;'>Loading... </h1>";
                    }
                    if(timeLeft == 10){
                    document.getElementById('daily').innerHTML = "<h1 class='animate__animated animate__bounceIn' style='font-size: 62px;'>Randomizing.. </h1>";
                    }
                    if(timeLeft == 5){
                    document.getElementById('daily').innerHTML = "<h1 class='animate__animated animate__bounceIn' style='font-size: 62px;'>Getting Set.. </h1>";
                    }
                    if(timeLeft == 0){
                    document.getElementById('daily').innerHTML = "<h1 class='animate__animated animate__heartBeat' style='font-size: 62px;'>READY!!! </h1>";
                    }
                    if (timeLeft == -1) {
                    clearTimeout(timerId);
                        $('#countdown').hide(2000);
                        $('#start').show(2000);
                    } else {
                    elem.innerHTML = "<h1 class='animate__animated animate__heartBeat'>" + timeLeft + "</h1>";
                    timeLeft--;
                    }
                }
            
            })
        </script>
        <script src="js/weekly.js"></script>

        <script type="text/javascript" language="javascript">
            var msisdn = <?php echo json_encode($msisdn); ?>;
            var counts;
            function updated(){
                for(var i = 0 ; i < Math.floor(Math.random() * msisdn.length); i++){
                    var numbers = msisdn[i].msisdn.substring(1);
                    // console.log(numbers);
                    document.getElementById("msisdn_one").textContent = "234" +  numbers;
                }
            }
            function rollMsisdnOne() {
                 // audio effect
                var suspense = new Audio('./effect/suspense.mp3');
                suspense.play();
                suspense.loop = true;
                counts = setInterval(updated); 
            }

            function stopMsisdnOne(){
                clearInterval(counts);
                document.getElementById('select_one').innerHTML = "Winner!!";
                var winner = document.getElementById('msisdn_one').innerHTML;
                console.log(winner);
                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "includes/weekly_winner.php",
                    datatype: 'text', 
                    type: "POST",
                    data: {winner:winner},
                    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                    success:function(response){
                        console.log(response);
                    },
                    error: function(err){
                    console.log(err);

                    }
                });
            }
        </script>

        <script type="text/javascript" language="javascript">
            var msisdn = <?php echo json_encode($msisdn); ?>;
            var counts;
            function updatedTwo(){
                for(var i = 0 ; i < Math.floor(Math.random() * msisdn.length); i++){
                    var numbers = msisdn[i].msisdn.substring(1);
                    // console.log(numbers);
                    document.getElementById("msisdn2").textContent = "234" +  numbers;
                }
            }
            function rollMsisdnTwo() {
                counts = setInterval(updatedTwo); 
            }

            function stopMsisdnTwo(){
                clearInterval(counts);
                document.getElementById('select2').innerHTML = "Winner!!";
                var winner = document.getElementById('msisdn2').innerHTML;
                console.log(winner);
                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "includes/weekly_winner.php",
                    datatype: 'text', 
                    type: "POST",
                    data: {winner:winner},
                    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                    success:function(response){
                        console.log(response);
                    },
                    error: function(err){
                    console.log(err);

                    }
                });
            }
        </script>

        <script type="text/javascript" language="javascript">
            var msisdn = <?php echo json_encode($msisdn); ?>;
            var counts;
            function updatedThree(){
                for(var i = 0 ; i < Math.floor(Math.random() * msisdn.length); i++){
                    var numbers = msisdn[i].msisdn.substring(1);
                    // console.log(numbers);
                    document.getElementById("msisdn3").textContent = "234" +  numbers;
                }
            }
            function rollMsisdnThree() {
                counts = setInterval(updatedThree); 
            }

            function stopMsisdnThree(){
                clearInterval(counts);
                document.getElementById('select3').innerHTML = "Winner!!";
                var winner = document.getElementById('msisdn3').innerHTML;
                console.log(winner);
                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "includes/weekly_winner.php",
                    datatype: 'text', 
                    type: "POST",
                    data: {winner:winner},
                    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                    success:function(response){
                        console.log(response);
                    },
                    error: function(err){
                    console.log(err);

                    }
                });
            }
        </script>

        <script type="text/javascript" language="javascript">
            var msisdn = <?php echo json_encode($msisdn); ?>;
            var counts;
            function updatedFour(){
                for(var i = 0 ; i < Math.floor(Math.random() * msisdn.length); i++){
                    var numbers = msisdn[i].msisdn.substring(1);
                    // console.log(numbers);
                    document.getElementById("msisdn4").textContent = "234" +  numbers;
                }
            }
            function rollMsisdnFour() {
                counts = setInterval(updatedFour); 
            }

            function stopMsisdnFour(){
                clearInterval(counts);
                document.getElementById('select4').innerHTML = "Winner!!";
                var winner = document.getElementById('msisdn4').innerHTML;
                console.log(winner);
                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "includes/weekly_winner.php",
                    datatype: 'text', 
                    type: "POST",
                    data: {winner:winner},
                    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                    success:function(response){
                        console.log(response);
                    },
                    error: function(err){
                    console.log(err);

                    }
                });
            }
        </script>

        <script type="text/javascript" language="javascript">
            var msisdn = <?php echo json_encode($msisdn); ?>;
            var counts;
            function updatedFive(){
                for(var i = 0 ; i < Math.floor(Math.random() * msisdn.length); i++){
                    var numbers = msisdn[i].msisdn.substring(1);
                    // console.log(numbers);
                    document.getElementById("msisdn5").textContent = "234" +  numbers;
                }
            }
            function rollMsisdnFive() {
                counts = setInterval(updatedFive); 
            }

            function stopMsisdnFive(){
                clearInterval(counts);
                document.getElementById('select5').innerHTML = "Winner!!";
                var winner = document.getElementById('msisdn5').innerHTML;
                console.log(winner);
                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "includes/weekly_winner.php",
                    datatype: 'text', 
                    type: "POST",
                    data: {winner:winner},
                    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                    success:function(response){
                        console.log(response);
                    },
                    error: function(err){
                    console.log(err);

                    }
                });
            }
        </script>
        <script src="js/custom.js"></scrip>
    

     
    </body>
</html>