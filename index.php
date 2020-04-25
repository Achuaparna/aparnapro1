<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$db = mysqli_connect('localhost', 'root','', 'fresh_gro');
$email = "";
$password="";
if (isset($_POST['btn_submit']))
{
  // receive all input values from the form
  $email = $_POST['email'];
  $password = $_POST['password'];
  $pass=md5($password);
 $query="SELECT email,Password,type_id,login_id,status FROM login WHERE email='$email' AND Password='$pass'";
 $result = mysqli_query($db,$query) or die(mysqli_error());

 if ($result->num_rows > 0)
  { 
    while($row = $result->fetch_assoc()) 
    {
        
        $usertype=$row["type_id"];
        $em=$row["email"];
        $s=$row["status"];
        $r=$row["login_id"];
        if ($s != 1)
        {
            echo '<script language="javascript">';
            echo 'alert("You Have Been Blocked For Some Reason,Please Contact Admin")';
            echo '</script>';
        }
        else
        {

         if(!(strcmp($em, $email)))
         {
        switch ($usertype) {
            
            case '0':
            $_SESSION['email'] = $email;
            $_SESSION['Role'] = "Admin";
            $_SESSION['login_id'] = $r;
            echo '<script language="javascript">';
            echo 'alert("Login Success")';
            echo '</script>';
            echo "<script>setTimeout(\"location.href = '/fresh_gro1/admin/admin.php';\",300);</script>";
                break;
            case '1':
            $_SESSION['email'] = $email;
            $_SESSION['Role'] = "Staff";
            $_SESSION['login_id'] = $r;
            echo '<script language="javascript">';
            echo 'alert("Login Success")';
            echo '</script>';
            echo "<script>setTimeout(\"location.href = '/fresh_gro1/staff/staff.php';\",300);</script>";
                break;
            case '2':
            $_SESSION['email'] = $email;
            $_SESSION['Role'] = "Supplier";
            $_SESSION['login_id'] = $r;
            echo '<script language="javascript">';
            echo 'alert("Login Success")';
            echo '</script>';
            echo "<script>setTimeout(\"location.href = '/fresh_gro1/supplier/supplier.php';\",300);</script>";
                break;
            case '3':
            $_SESSION['email'] = $email;
            $_SESSION['Role'] = "Customer";
            $_SESSION['login_id'] = $r;
            echo '<script language="javascript">';
            echo 'alert("Login Success")';
            echo '</script>';
            echo "<script>setTimeout(\"location.href = '/fresh_gro1/Customer/index.php';\",300);</script>";
                break;
        }
    }
}
    
}
     
}
 else
 {
    echo '<script language="javascript">';
    echo 'alert("login error")';
    echo '</script>';
 }
 
}


?>

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>Fresh Gro</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/drop.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/orange.css" />

    <!-- Modernizer -->
    <script src="js/modernizer.js"></script>

   

</head>

<body>
    <div id="loader">
        <div id="status"></div>
    </div>
    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                        
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="#banner">Home</a></li>
                                    <li><a href="#about">About us</a></li>
									
								  
								   <script>
                          /* When the user clicks on the button, 
                         toggle between hiding and showing the dropdown content */
                        function myFunction() {
                              document.getElementById("myDropdown").classList.toggle("show");
                            }

                         // Close the dropdown if the user clicks outside of it
                         window.onclick = function(event) {
                          if (!event.target.matches('.dropbtn')) {
                              var dropdowns = document.getElementsByClassName("dropdown-content");
                               var i;
                               for (i = 0; i < dropdowns.length; i++) {
                               var openDropdown = dropdowns[i];
                                if (openDropdown.classList.contains('show')) {
                                 openDropdown.classList.remove('show');
                                  }
                                }
                                 }
                               }
                             </script>
                                </ul>
                            </div>
                            <!-- end nav-collapse -->
                        </nav>
                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>
	<!-- end site-header -->
	
    <div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h1>Fresh <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Gro" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
                            <h2>Your shopping partner </h2>
                            <div class="book-btn">
                                <a href="#login" class="table-btn hvr-underline-from-center">Login</a>
                            </div>
                            <a href="#about">
                                <div class="mouse"></div>
                            </a>
                        </div>
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
    </div>
    <!-- end banner -->

    <div id="about" class="about-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title"> About Us </h2>
                        <h3>We are Fresh Gro</h3>
                        <p> Fresh Gro is an online web application for automating the process of ordering grocery products from suppliers in advance.Therefore, there is no need for the suppliers to wait for a long time and pay as cash at the time of delivey.This system also help farmers to sell their product through this system. </p>

                        <p>The current system is not much efficient and can lead to a major waste of time as the supplier needs to wait for a long period of time. The main purpose to design this application is providing an environment where user will be able to order products from supplier and pay in advance.</p>

                    </div>
                </div>
                
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <div class="banner full-screen-mode parallax">
    <div class="login-page" id="login">
        <div class="lgform" id="lgform">
      <h2 style="color:orange">LOGIN</h2>
          <form class="login-form" onsubmit="return validate(this)" method="POST" action="index.php">
            <input type="email" id="email" placeholder="Email" name="email" autocomplete="off"/>
            <input type="password" id="password"placeholder="Password" name="password" autocomplete="off"/>
            <button type="submit" name="btn_submit">login</button>
            <p class="message" id="forgot">Forgot <a>Password? </a></p>
            <p class="message">Not a registered customer? <a href="/fresh_gro1/Customer/reg.html">Create an account </a></p>
            
          </form>
        </div>


    <div class="lgform" id="forgotform">
    <h2 style="color:orange">FORGOT PASSWORD</h2>
      <div class="login-form">
        <input type="email" id="foremail" placeholder="Email" name="email" autocomplete="off"/>
        
        <button type="submit" name="btn_submit" id="btn_reset">Reset</button>
        <p class="message" id="bklogin">Back to <a>Login</a></p>
        
     </div>
    </div>





      </div>
    </div>
   


    <a href="#" class="scrollup" style="display: none;">Scroll</a>


    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/loginval.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>

</html>