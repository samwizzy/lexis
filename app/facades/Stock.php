<?php
use App\Controllers\StockController as Store;


class Stock {

	public static function all_stations(){
		return Store::all_stations();
	}

	public static function all_stock(){
		return Store::all_stock();
	}

	public static function categoryById($cat_id){
		return Store::categoryById($cat_id);
	}

	public static function subcategoryById($subcat_id){
		return Store::subcategoryById($subcat_id);
	}

	public static function categoryBySubCatId($subcat_id){
		return Store::categoryBySubCatId($subcat_id);
	}

	public static function all_inventory(){
		return Store::all_inventory();
	}

}