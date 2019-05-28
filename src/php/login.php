<?php
require_once dirname(dirname(__DIR__)) . '/app/init.php';
use App\Controllers\StaffController as Staff;

$hd = fopen('php://input', 'r');

$request = urldecode(stream_get_contents($hd));
parse_str($request, $data);
// print_r($data);

$log = array();
if(Staff::login($data['email'], $data['password'])){
	$log['msg'] = "Login was successful";
	$log['status'] = true;
}else{
	$log['msg'] = "Invalid Login details";
	$log['status'] = false;
}


echo json_encode($log);
exit;
?>