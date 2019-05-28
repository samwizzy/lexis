<?php
require_once dirname(dirname(__DIR__)) . '/app/init.php';
use App\Controllers\ProfileController as Profile;

print_r($_POST);
print_r($_FILES);

$data = json_decode(json_encode((object) $_POST), FALSE);

$log = array();

if((!empty($_POST) && !empty($_FILES)) && $_SERVER['REQUEST_METHOD'] == 'POST'){
	$error = array();
	if($_FILES['logo']['error'] == 0){

		$filename = basename($_FILES['logo']['name']);
		$filetype = $_FILES['logo']['type'];
		$filetmp = $_FILES['logo']['tmp_name'];
		$filesize = $_FILES['logo']['size'];
		$fileExts = explode(".", $filename);
		$ext = strtolower(end($fileExts));
		$newFileName = md5(time() . $filename) . '.' . $ext;
		$uploadFileDir = __DIR__ .'/../../assets/uploaded_files/';
		$dest_path = $uploadFileDir . $newFileName;

		$allowedfileExtensions = array('jpg', 'jpeg', 'gif', 'png');
		if (!in_array($ext, $allowedfileExtensions)) {
			$error['extension'] = "File extension is not allowed, expected: png, jpg";
		}

		if($filesize >= '1048576'){ $error['size'] = "File is too large, max: 1mb"; }

		if(empty($error)){
			if(is_uploaded_file($filetmp)){
				if(move_uploaded_file($filetmp, $dest_path)){
					if(Profile::store($data->company, $data->email, $data->contact, $data->website, $data->strapline, $data->address, $newFileName)){
						$log['code'] = "200";
						$log['message'] = "Great! Your Settings has been saved successfully";
					}
				}else{
					$log['code'] = "404";
					$log['message'] = "There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.";	
				}
			}else{
				$log['code'] = "402";
				$log['message'] = "This file wasn't uploaded via HTTP POST.";
			}
		}else{
			$log['code'] = "400";
			$log['message'] = implode(', ', $error);
		}
	}
}else{
	if(Profile::store($data->company, $data->email, $data->contact, $data->website, $data->strapline, $data->address)){
		$log['code'] = "200";
		$log['message'] = "Great! Your Seetings has been saved successfully";
	}else{
		$log['code'] = "400";
		$log['message'] = "Sorry, Your settings failed to saved, please try again";
	}	
}	

echo json_encode($log);

?>