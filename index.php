<?php require_once realpath('app/init.php'); ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
<meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
<meta name="author" content="ThemeSelect">
<title>User Login | <?= getenv('APP_NAME') ?></title>
<link rel="apple-touch-icon" href="assets/images/favicon/apple-touch-icon-152x152.png">
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon-32x32.png">
<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
<!--vendor css starts-->
<link rel="stylesheet" type="text/css" href="assets/vendors/vendors.min.css">
<!--vendor css ends-->
<!--page level css starts-->
<link rel="stylesheet" type="text/css" href="assets/css/themes/vertical-modern-menu-template/materialize.css">
<link rel="stylesheet" type="text/css" href="assets/css/themes/vertical-modern-menu-template/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/pages/login.css">
<!--page level css ends-->
<!--custom style starts-->
<link rel="stylesheet" type="text/css" href="assets/css/custom/custom.css">
<!--custom css ends-->
</head>

<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 1-column login-bg blank-page blank-page" data-open="click" data-menu="vertical-modern-menu" data-col="1-column">

<div class="row">
   <div class="col s6 offset-s3">

      <div class="card-alert card gradient-45deg-green-teal hide" id="log">
         <div class="card-content white-text">
         <p></p>
         </div>
         <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
         </button>
      </div>

   </div>
</div>


<div class="row">

   <div class="col s12">
      <div class="container">

         <div id="login-page" class="row">            
            <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">


               <form class="login-form" id="login-form" name="login" action="" method="POST">
                  <div class="row">
                     <div class="input-field col s12">
                        <h5 class="ml-4">Sign in</h5>
                     </div>
                  </div>
                  <div class="row margin">
                     <div class="input-field col s12">
                        <i class="material-icons prefix pt-2">person_outline</i>
                        <input id="email" name="email" type="text" value="">
                        <label for="email" class="center-align">Username</label>
                     </div>
                  </div>
                  <div class="row margin">
                     <div class="input-field col s12">
                        <i class="material-icons prefix pt-2">lock_outline</i>
                        <input id="password" name="password" type="password" value="">
                        <label for="password">Password</label>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col s12 m12 l12 ml-2 mt-1">
                        <p>
                           <label>
                              <input type="checkbox" name="remember" />
                              <span>Remember Me</span>
                           </label>
                        </p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="input-field col s12">
                        <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">
                           Login
                        </button>
                     </div>
                  </div>
                  <div class="row">
                     <div class="input-field col s6 m6 l6">
                        <p class="margin medium-small"><a href="user-register.html">Register Now!</a></p>
                     </div>
                     <div class="input-field col s6 m6 l6">
                        <p class="margin right-align medium-small">
                           <a href="user-forgot-password.html">
                              Forgot password ?
                           </a>
                        </p>
                     </div>
                  </div>
                  <div class="progress" id="progress">
                     <div class="indeterminate"></div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

<!--vendor js starts-->
<script src="assets/js/vendors.min.js" type="text/javascript"></script>
<!--vendor js ends-->

<!--theme js starts-->
<!-- <script src="assets/js/plugins.js" type="text/javascript"></script> -->
<script src="assets/js/custom/custom-script.js" type="text/javascript"></script>
<!--theme js ends-->

<script type="text/javascript" src="dist/login.js"></script>

</body>

</html>