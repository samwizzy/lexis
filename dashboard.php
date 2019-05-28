<?php require_once __DIR__ . '/app/init.php'; ?>

<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
<meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
<meta name="author" content="ThemeSelect">
<title>Dashboard Analytics | <?= getenv('APP_NAME') ?></title>

<!--vendor css starts-->
<?php include_once(__DIR__.'/shared/styles.php'); ?>
</head>
<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns" data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

<!--header starts-->
<?php include_once(__DIR__.'/shared/header.php'); ?>
<!--header ends-->

<!--sidebar starts-->
<?php include_once(__DIR__.'/shared/sidebar.php'); ?>
<!--sidebar ends-->


<!--main section starts-->
<div id="main">
   <div class="row">
      <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
      <div class="col s12">
         <div class="container">

            <!-- main content starts -->
            <?php
            if(isset($_GET['url'])){

               $qsa = urldecode(strtolower(trim($_GET['url'])));
               $path = __DIR__."/dashboard/$qsa.php";
               if(file_exists($path)){
                  include_once($path); 
               }elseif(file_exists(__DIR__."/$qsa/index.php")){
                  include_once(__DIR__."/$qsa/index.php");
               }else{
                  echo "No Current Activity";
                  exit;
               }
            }
            ?>
            <!-- main content ends -->


            <!-- right sidebar starts -->
            <?php include_once(__DIR__.'/shared/right-sidebar.php'); ?>
            <!-- right sidebar ends -->

         </div>
      </div>
   </div>
</div>
<!--main section ends-->

<!--theme customizer starts-->
<?php include_once(__DIR__.'/shared/theme-customizer.php'); ?>
<!--theme customizer ends-->

<!--footer starts-->
<?php include_once(__DIR__.'/shared/footer.php'); ?>
<!--footer ends-->

<script type="text/javascript" src="./node_modules/jquery/dist/jquery.min.js"></script>
<!--vendor js starts-->
<script src="<?= getenv('APP_URL') ?>assets/js/vendors.min.js" type="text/javascript"></script>
<!--vendor js ends-->

<script src="<?= getenv('APP_URL') ?>assets/js/scripts/advance-ui-modals.js" type="text/javascript"></script>
<script src="<?= getenv('APP_URL') ?>assets/js/scripts/advance-ui-toasts.js" type="text/javascript"></script>

<!--bundle custom js-->
<script type="text/javascript" src="<?= getenv('APP_URL') ?>dist/bundle.js"></script>
<!--bundle custom js ends-->

<!-- <script type="text/javascript">
$('.dropdown-trigger').dropdown({
  inDuration: 300,
  outDuration: 225,
  constrainWidth: false, // Does not change width of dropdown to that of the activator
  hover: true, // Activate on hover
  gutter: 0, // Spacing from edge
  coverTrigger: false, // Displays dropdown below the button
  alignment: 'left', // Displays dropdown with edge aligned to the left of button
  stopPropagation: false // Stops event propagation
  }
);   
</script> -->

<?php
include_once(__DIR__.'/shared/scripts.php');  
?>

</body>
</html>