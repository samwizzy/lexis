<?php
require_once dirname(dirname(__DIR__)) . '/app/init.php';
use App\Controllers\StockController as Stock;

$hd = fopen('php://input', 'r');
$request = urldecode(stream_get_contents($hd));
parse_str($request, $data);

$log = array();

if($_GET['action'] == 'update'){
	if(Stock::updateStockSubCategory($data['subcat_id'], $data['category'], $data['subcategory'])){
		$log['code'] = "200";
		$log['message'] = "Great! Your category has been updated successfully";
	}else{
		$log['code'] = "404";
		$log['message'] = "Sorry! category update failed";
	}
}elseif($_GET['action'] == 'hide'){
	if(Stock::hideStockSubCategory($data['subcat_id'])){
		$log['code'] = "200";
		$log['message'] = "Great! Your category has been updated successfully";
	}else{
		$log['code'] = "404";
		$log['message'] = "Sorry! category update failed";
	}
}elseif($_GET['action'] == 'populate') {
	if($_POST['category']){
		$log['message'] = Stock::sub_category($_POST['category']);
	}
}

echo json_encode($log);

?>