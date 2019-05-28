<?php
use App\Controllers\StaffController as Staff;
use App\Controllers\StockController as Stock;

class Helpers {

	public function all_roles(){
		return Staff::all_roles();
	}

	public static function all_category(){
		return Stock::all_category();
	}

	public static function concise($role_id){
		return trim(explode(' ', $role_id)[0], ',');
	}

	public static function subcategory(){
		return Stock::subcategory();
	}

	public static function clean($string) {
	   $string = str_replace(' ', '-', $string);
	   return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
}

}



?>