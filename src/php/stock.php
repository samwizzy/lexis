<?php
require_once dirname(dirname(__DIR__)) . '/app/init.php';
use App\Controllers\StockController as Stock;

$hd = fopen('php://input', 'r');
$request = urldecode(stream_get_contents($hd));
parse_str($request, $data);


$cat_id = array_shift($data);
$cat = array_pop($data);

$log = array();
foreach ($cat as $i => $dt) {
	if(Stock::addStockSubCategory($cat_id, $dt)){
		$log['code'] = "200";
		$log['message'] = "Great! Your category has been added successfully";
	}else{
		$log['code'] = "404";
		$log['message'] = "Great! Your category has been added successfully";
	}
}

echo json_encode($log);

?>