<?php
require_once dirname(dirname(__DIR__)) . '/app/init.php';

$hd = fopen('php://input', 'r');

$request = urldecode(stream_get_contents($hd));
parse_str($request, $data);
// print_r($data);

$log = Staff::create_staff($data['firstname'], $data['email'], $data['password'], $data['pin'], $data['gender'], $data['role']);
if($log === true){
	echo "Great! You have successfully created a new staff";
}else{
	echo "Error: " . $log;
}


// echo json_encode($data);

?>