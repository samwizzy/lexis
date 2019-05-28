<?php
namespace App\Controllers;
/**
 * 
 */
use App\Models\Staff;
use App\Models\Roles;
use App\Models\Privileges;
use App\Models\RolePrivilege;
use App\Models\StaffTables;

class StaffController {
	public static function create_user($surname, $firstname, $email, $password){
		$staff = Staff::create(['surname'=>$surname,'firstname'=>$firstname,'email'=>$email,'password'=>password_hash($password, PASSWORD_DEFAULT)]);
		return $staff;
	}

	public static function create_staff($firstname, $email, $password, $pin, $gender, $role){
		try {
			$staff = Staff::firstOrCreate(
			[
				'firstname'=>$firstname,
				'email'=>$email,
				'password'=>password_hash($password, PASSWORD_DEFAULT),
				'pin'=>$pin,
				'gender'=>$gender,
				'role'=>$role
			]);
			// return $staff;
		} catch (\Illuminate\Database\QueryException $e){
		    $errorCode = $e->errorInfo[1];
		    if($errorCode == 1062){
		        return "Sorry, duplicate entry is not allowed";
		    }
		}
		return true;	
	}

	public static function updateStaff($staff_id, $firstname, $lastname, $email, $role){
		try {
			$staff = Staff::find($staff_id);

			$staff->firstname = $firstname;
			$staff->surname = $lastname;
			$staff->email = $email;
			$staff->role = $role;
			$staff->save();
		} catch (\Illuminate\Database\QueryException $e){
		    $errorCode = $e->errorInfo[1];
		    if($errorCode == 1062){
		        return "Sorry, duplicate entry is not allowed";
			}elseif($errorCode == 1054){
				return "Unknown column: " . $errorCode;
			}
		}
		return true;	
	}

	public static function logoutStaff($staff_id){
		try {
			$staff = Staff::find($staff_id);
			$staff->active = 0;
			$staff->save();
		} catch (\Illuminate\Database\QueryException $e){
		    $errorCode = $e->errorInfo[1];
		    if($errorCode == 1062){
		        return "Sorry, duplicate entry is not allowed";
			}elseif($errorCode == 1054){
				return "Unknown column: " . $errorCode;
			}
		}
		return true;
	}

	public static function login($email, $password){
		$staff = Staff::where('email', $email)->first();
		// $password = Staff::where('password', $staff->password)->get();
		if($staff){
			if(password_verify($password, $staff->password)){
				$_SESSION['role'] = $staff->role;
				$_SESSION['id'] = $staff->staff_id;
				return true;
			}
		}
		return false;
	}

	public static function all_staffs(){
		$staffs = Staff::all();
		return $staffs;
	}

	public static function active_staffs(){
		$staffs = Staff::where('active', 1)->get();
		return $staffs;
	}

	public function isLoggedIn(){
		if(!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== true){
			// back to login page
			header("Location: http://localhost/lexuspos/index.php");
			exit();
		}
	}

	public static function verify_password($password){
		$hash = password_hash($password, PASSWORD_DEFAULT);
		if(password_verify($password, $hash)){
			return true;
		}
		return false;
	}

	public static function staff_tables($staff_id){
		$tables = StaffTables::where('staff_id', $staff_id)->get();
		return $tables;
	}

	public static function all_roles(){
		$roles = Roles::all();
		return $roles;
	}

	public static function roleById($role_id){
		$roles = Roles::find($role_id);
		return $roles;
	}

	public static function addRolePrivilege($role_id, $privilege){
		try {
			RolePrivilege::firstOrCreate([
				'role_id' => $role_id,
				'priv_id' => $privilege
			]);
		} catch (\Illuminate\Database\QueryException $e) {
			$errorCode = $e->errorInfo[1];
			return "Error code: " . $errorCode;
		}
		return true;
	}

	public static function fetchRolePrivileges($role_id){
		try {
			$privileges = RolePrivilege::where([
				'role_id' => $role_id
			])->get();
		} catch (\Illuminate\Database\QueryException $e) {
			$errorCode = $e->errorInfo[1];
			return "Error code: " . $errorCode;
		}
		return $privileges;
	}

	public static function all_privileges(){
		$privileges = Privileges::all();
		return $privileges;
	}

	public static function offset_privileges($offset, $row){
		$privileges = new Privileges;
		$rows = $offset; 
		$offset = $offset * ($row - 1);
		return $privileges->skip($offset)->take($rows)->get();
	}

	public static function run(){
		$staffs = Staff::where('firstname', 'samuel')->first();

		// foreach ($staffs as $key => $staff) {
		// 	echo $staff->email;
		// }
		echo $staffs->email;
	}


}


?>