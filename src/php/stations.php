<?php
require_once dirname(dirname(__DIR__)) . '/app/init.php';
use App\Controllers\StockController as Stock;

$hd = fopen('php://input', 'r');
$request = urldecode(stream_get_contents($hd));
parse_str($request, $data);

$log = array();

if($_GET['action'] == 'delete'){
	$station = (int) $data['station_id'];
	if(Stock::deleteStation($station) === true){
		$log['message'] = "Great! Station has been deleted successfully";
		$log['status'] = true;
	}else{
		$log['message'] = "Oops! Station deletion failed";
		$log['status'] = false;
	}
}elseif($_GET['action'] == 'edit') {
	$station_id = (int) $data['station_id'];
	$station = $data['station'];
	if(Stock::updateStation($station_id, $station) === true){
		$log['message'] = "Great! Station has been updated successfully";
		$log['status'] = true;
	}else{
		$log['message'] = "Oops! Station update failed";
		$log['status'] = false;
	}
}


echo json_encode($log);

?>