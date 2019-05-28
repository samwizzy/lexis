<?php
require 'app/init.php';

use App\Controllers\StaffController as Staff;
use App\Controllers\StockController as Stock;
use App\Controllers\SessionHandler as Session;

// $staff = Staff::create_user('okeke','samuel','samwize.inc@gmail.com','samwize');

/* foreach ($subcats as $i => $subc) {
	echo $subc->category;
} */

echo "<code>";

// print_r($staff);

Staff::run();

?>
<!DOCTYPE html>
<html>
<head>
<title>X-Debug</title>
<link rel="stylesheet" type="text/css" href="<?= getenv('APP_URL') ?>assets/css/themes/vertical-modern-menu-template/materialize.css">
<link rel="stylesheet" type="text/css" href="<?= getenv('APP_URL') ?>assets/vendors/flag-icon/css/flag-icon.min.css">
<link rel="stylesheet" type="text/css" href="<?= getenv('APP_URL') ?>assets/fonts/fontawesome/css/all.min.css">
<link rel="stylesheet" type="text/css" href="<?= getenv('APP_URL') ?>assets/css/themes/vertical-modern-menu-template/style.css">

</head>
<body>

<div id="container">
<table border="1" cellpadding="1" cellspacing="0">	
<?php
echo microtime();


$subcats = Helpers::subcategory();
foreach ($subcats as $subcat) {
	foreach($subcat->stocksubcategory as $category){
		$con = $category['subcat_id'];
		echo "<tr>";
		echo "<td>$subcat->category $subcat->cat_id</td>";
		echo "<td>$category->category $category->subcat_id</td>";
		echo "<td><a href='' class='dropdown-trigger' data-target='dropdown1'>
	              <i class='material-icons'>more_horiz</i></a>
	              <ul id='dropdown1' class='dropdown-content'>
	                <li><a class='modal-trigger' data-subcat_id='{$category->subcat_id}' href='?id=$category->subcat_id'>hide {$con}</a></li>
	                <li><a class='modal-trigger' data-subcat_id='{$category->subcat_id}' href=''>delete {$category->subcat_id}</a></li>
	              </ul>
	            </td>";
		echo "</tr>";
	}
}	
?>
</table>

</div>

<!-- <a class="btn toast-basic">Toast!</a> -->


<!-- Modal Trigger -->
<a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>
<!-- Modal Structure -->
<div id="modal1" class="modal modal-fixed-footer">
<div class="modal-content">
  <h4>Modal Header</h4>
  <p>A bunch of text</p>
</div>
<div class="modal-footer">
  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
</div>
</div>


<table>
<?php

$array = ['one','two','three','four','five','six','seven','eight','nine','ten','eleven','twelve'];
$count = count($array);
$rows = ceil($count / 3);
$start = 1;


for ($i=0; $i < count($array); $i++) { 
	echo "<tr>";
	for ($x=0; $x < $rows; $x++) { 
		echo "<td>" . $array[$x] . "</td>";
	}
	echo "</tr>";

	// $start++;
}


?>
</table>

<script type="text/javascript" src="./node_modules/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?= getenv('APP_URL') ?>dist/test.js"></script>

<script type="text/javascript">
M.toast({
	html: 'I am a toast!'
});

$('.dropdown-trigger').dropdown({
  inDuration: 300,
  outDuration: 225,
  constrainWidth: false, // Does not change width of dropdown to that of the activator
  hover: true, // Activate on hover
  gutter: 0, // Spacing from edge
  coverTrigger: true, // Displays dropdown below the button
  alignment: 'left', // Displays dropdown with edge aligned to the left of button
  stopPropagation: true // Stops event propagation
  }
);   


</script>

</body>
</html>