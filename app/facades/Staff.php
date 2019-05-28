<?php
use App\Controllers\StaffController as User;

class Staff {
	public static function create_staff($firstname, $email, $password, $pin, $gender, $role){
		$staff = User::create_staff($firstname, $email, $password, $pin, $gender, $role);
		if($staff){
			return $staff;
		}
		return false;
	}

	public static function staffs(){
		return User::all_staffs();
	}

	public static function privileges($offset, $row){
		return User::offset_privileges($offset, $row);
	}

	public static function staff_tables($staff_id){
		return User::staff_tables($staff_id);
	}

	public static function active_staffs(){
		return User::active_staffs();
	}

	public static function roleById($role_id){
		return User::roleById($role_id);
	}
}