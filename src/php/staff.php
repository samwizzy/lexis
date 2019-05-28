<?php
require_once dirname(dirname(__DIR__)) . '/app/init.php';
use App\Controllers\StaffController as Staff;

$hd = fopen('php://input', 'r');
$request = urldecode(stream_get_contents($hd));
parse_str($request, $data);

$log = array();

if($_GET['action'] == "update"){
    $status = Staff::updateStaff($data['staff_id'], $data['firstname'], $data['lastname'], $data['email'], $data['role']);
    if($status === true){
        $log['code'] = "200";
        $log['message'] = "Great! Staff profile has been updated successfully";
    }else{
        $log['code'] = "400";
        $log['message'] = "Sorry! Staff profile failed to update: " . $status;
    }
}elseif($_GET['action'] == "logout"){
    $status = Staff::logoutStaff($data['staff_id']);
    if($status === true){
        $log['code'] = "200";
        $log['message'] = "Great! Staff has been logged out successfully";
    }else{
        $log['code'] = "400";
        $log['message'] = "Sorry! Logging out this staff failed: " . $status;
    }
}

echo json_encode($log);

?>