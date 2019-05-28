<!--page vendor starts-->
<script src="<?= getenv('APP_URL') ?>assets/vendors/data-tables/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?= getenv('APP_URL') ?>assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
<script src="<?= getenv('APP_URL') ?>assets/vendors/data-tables/js/dataTables.select.min.js" type="text/javascript"></script>
<!--page vendor js ends-->
<!--theme js starts-->
<script src="<?= getenv('APP_URL') ?>assets/js/plugins.js" type="text/javascript"></script>
<script src="<?= getenv('APP_URL') ?>assets/js/custom/custom-script.js" type="text/javascript"></script>
<script src="<?= getenv('APP_URL') ?>assets/js/scripts/customizer.js" type="text/javascript"></script>
<!--theme js ends-->
<!--page level js starts-->
<?= (Helpers::clean($_GET['url'])=='dashboard')?
'<script src="'. getenv('APP_URL') . 'assets/vendors/sparkline/jquery.sparkline.min.js"></script>
<script src="'. getenv('APP_URL') . 'assets/vendors/chartjs/chart.min.js"></script>
<script src="'. getenv('APP_URL') . 'assets/vendors/jquery-jvectormap/jquery-jvectormap.min.js"></script>
<script src="'. getenv('APP_URL') . 'assets/vendors/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="' . getenv('APP_URL') . 'assets/js/scripts/dashboard-analytics.js" type="text/javascript"></script>
<script src="' . getenv('APP_URL') . 'assets/js/scripts/vectormap-script.js" type="text/javascript"></script>'
: ''; 
?>

<script src="<?= getenv('APP_URL') ?>assets/js/scripts/data-tables.js" type="text/javascript"></script>
<script src="<?= getenv('APP_URL') ?>assets/js/scripts/page-contact.js" type="text/javascript"></script>
<!--page level js ends-->