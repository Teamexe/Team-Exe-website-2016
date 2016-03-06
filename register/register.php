<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>.EXE NIMBUS NITH</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="css/ionicons.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="css/slider.css">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <!-- template main css file -->
        <link rel="stylesheet" href="css/main.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
        
        
        <!-- modernizr js -->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- jquery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <!-- owl carouserl js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- bootstrap js -->

        <script src="js/bootstrap.min.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <!-- slider js -->
        <script src="js/slider.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <!-- template main js -->
        <script src="js/main.js"></script>
    </head>
    <body>
        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="index.php" >
                            .EXE (Executing Ideas)
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php" >Home</a></li>
                            <li><a href="index.php#about" >About</a></li>
                            <li><a href="index.php#call-to-action" >Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>
        
        <!--
        ==================================================
        Slider Section Start
        ================================================== -->
        <section id="hero-area" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="block wow fadeInUp" data-wow-delay=".3s">
                            
                            <!-- Slider -->
                            
                                <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                                <a>Want to participate in .exe whatsapp event</a></h1>
                                <h2>(This event is open for students of all the branches irrespective of the semesters they are studying in.)</h2>
                                
                                <!-- /.slider -->
                                <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                                   <?php

      $errors_array = array();

      if(isset($_REQUEST["welcome_already_seen"])){

         check_data();
         if(count($errors_array) != 0){
           show_errors();
           show_welcome();
         } 
         else {
           handle_data();
         }
      } 
      else {
        show_welcome();
      }

      function check_data()
      {
        global $errors_array;
        if($_REQUEST["data"] == "" || $_REQUEST["phn"] == "" || $_REQUEST["bran"] == "") {
          $errors_array[] = "<font color='red'>Please fill in both the fields</font>";
        }
       }

      function show_errors()
      {
        global $errors_array;

        foreach ($errors_array as $err){
          echo $err, "<br>";
        }
      }

      function handle_data()
      {

        $name=$_REQUEST["data"];
        $mbl=$_REQUEST["phn"];
        $bra=$_REQUEST["bran"];
        $ab="\t";
        $aa="\n";
        echo "<div id='main'>";
        echo "Your name - ";
        echo $_REQUEST["data"];
        echo "<br>";
        echo $_REQUEST["bran"];
        echo "<br>";
        echo "Your number - ";
        echo $_REQUEST["phn"];
        echo "<br><br><b><font color='#000080'>Thanks You'll be added to .EXE whatsapp events group shortly</b></font><br>";
        echo "</div>";

        $open=fopen("wp.txt", "a");
        fwrite($open, $aa);
        fwrite($open, $name);
        fwrite($open, $ab);
        fwrite($open, $bra);
        fwrite($open, $ab);
        fwrite($open, $mbl);
        fclose($open);
      }

      function show_welcome()
      {
        echo "<div id='form'>";
        echo "<form method='post'>";
        echo "What is your name?  ";
        echo "<input name='data' type='text'>";
        echo "<br>";
        echo "What is your branch?  ";
        echo "<input name='bran' type='text'>";
        echo "<br>";
        echo "What is your whatsapp no.? ";
        echo "<input name='phn' type='text'>";
        echo "<br><br>";
        echo "<input type='submit' value='Submit'>";
        echo"<input type='reset' value='reset'>";
        echo "<input type='hidden' name='welcome_already_seen'         
         value='already_seen'>";
        echo "</form>";
      }
    ?>
                                </h2>
                                                                
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--/#main-slider-->
           <!--footer section here   -->
                    
            <footer id="footer">
            <?php include("footer.php");
             ?><br/>
                         &copy; : <a href="index.php" target="_blank">Team .EXE</a>  All rights reserved
                            <ul class="social">
                            <br/>
                            <li>
                                <a href="https://www.facebook.com/teamexe" target="_blank" class="Facebook">
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/rishabh04021" target="_blank" class="Twitter">
                                    <i class="ion-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/103972351197492037858/about" target="_blank" class="Google Plus">
                                    <i class="ion-social-googleplus"></i>
                                </a>
                            </li>
                        </ul>
            </footer> 
                
        </body>
    </html>