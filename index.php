
<?php 

  if(isset($_POST['connexion']))
  {
    include 'database.php'; 

    extract($_POST);
    $requette = "SELECT * FROM user WHERE login = '$login' and pwd = '$password' ";
    $exec = mysql_query($requette);
    if($exec)
    {
      $user = mysql_fetch_assoc($exec);

      if($user)
      {
        session_start();
              $_SESSION['login'] = $user['login'];
              $_SESSION['profil'] = $user['profil'];  
              if($_SESSION['profil'] == "admin")
              {
                   header("Location:page-blank.php?messages=Bienvenue");
              }
              else
              {
                  header("Location:page-blank.php?messages=Bienvenue");
              }
           
          }
          else
          {
            header("Location:index.php?messages=votre identifiant ou mot de passe n'est pas valide");
          }
      } 
      else{

        echo mysql_error();
      }  
    }
?>
<!DOCTYPE html>

<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->


<!-- Mirrored from demo.geekslabs.com/materialize/v3.1/user-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Jan 2017 16:39:36 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>L'oeil du client | TOTAL</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/logo_total.ico" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body class="cyan">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form"  method="POST">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="images/logot.png" alt="" class="circle responsive-img valign profile-image-login">
            <!--p class="center login-form-text">Total</p-->
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="login" name="login" type="text">
            <label for="login" class="center-align">Utilisateur</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" name="password" type="password">
            <label for="password">Mot de passe</label>
          </div>
        </div>
         <div class="row">
          <div class="input-field col s12">
            <button type="submit" value="connexion" name="connexion" class="btn waves-effect waves-light col s12">connexion</button> 
          </div>
        </div>
        </div>
       
      </form>
    </div>
  </div>

  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <!--prism-->
  <script type="text/javascript" src="js/plugins/prism/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>

</body>


<!-- Mirrored from demo.geekslabs.com/materialize/v3.1/user-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Jan 2017 16:39:40 GMT -->
</html>