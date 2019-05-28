<?php
require_once dirname(dirname(__DIR__)) . '/app/init.php';
use App\Controllers\StaffController as Staff;

$hd = fopen('php://input', 'r');
$request = urldecode(stream_get_contents($hd));
parse_str($request, $data);

$log = array();

if($_GET['action'] == "privilege"){
	if($data['role'] === "") return false;
	foreach ($data['privilege'] as $p => $priv) {
		$status = Staff::addRolePrivilege($data['role'], $priv);
		if($status === true){
			$log['code'] = "200";
			$log['message'] = "Great! Your privileges has been updated successfully";
		}else{
			$log['code'] = "400";
			$log['message'] = "Sorry! Your privileges failed to update: " . $status;
		}
	}
}elseif($_GET['action'] == "callback"){
	if($data['role'] === "") return false;
	$privileges = Staff::fetchRolePrivileges($data['role']);
	$log['data'] = $privileges;
}

echo json_encode($log);

?>