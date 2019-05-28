<?php
namespace App\Controllers;

use App\Models\StockCategory as StockCategory;
use App\Models\StockSubCategory as StockSubCategory;
use App\Models\Stock as Stock;
use App\Models\Inventory as Inventory;
use App\Models\Station as Station;

class StockController {

	public static function subcategory(){
		$stock = StockCategory::with('stocksubcategory')->get();
		return $stock; 
	}

	public static function sub_category($category){
		$stock = StockCategory::find($category)->stocksubcategory;
		return $stock; 
	}

	public static function all_category(){
		$category = StockCategory::all();
		return $category;
	}

	public static function all_inventory(){
		$inventory = Inventory::all();
		return $inventory;
	}

	public static function all_stock(){
		$stock = Stock::all();
		return $stock;
	}

	public static function subcategoryById($subcat_id){
		$subs = StockSubCategory::find($subcat_id);
		return $subs;
	}

	public static function categoryById($cat_id){
		$cat = StockCategory::find($cat_id);
		return $cat;
	}

	public static function categoryBySubCatId($subcat_id){
		$cat_id = StockSubCategory::find($subcat_id)->cat_id;
		$category = StockCategory::find($cat_id);
		return $category;
	}

	public static function all_stations(){
		$stations = Station::all();
		return $stations; 
	}

	public static function deleteStation($id){
		$stations = Station::find($id);
		return $stations->delete(); 
	}

	public static function updateStation($id, $station){
		$stations = Station::find($id);
		$stations->station = $station;
		return $stations->save(); 
	}

	public static function addStockSubCategory($cat_id, $category){
		try {
			$stock = new StockSubCategory;
			$stock->cat_id = $cat_id;
			$stock->category = $category;
			$stock->save();
		} catch (\Illuminate\Database\QueryException $e) {
			$errorCode = $e->errorInfo[1];
			return "Error code: " . $errorCode;
		}
		return true;
	}

	public static function updateStockSubCategory($subcat_id, $cat_id, $subcategory){
		try {
			$stock = StockSubCategory::find($subcat_id);
			$stock->cat_id = $cat_id;
			$stock->category = $subcategory;
			$stock->save();
		} catch (\Illuminate\Database\QueryException $e) {
			$errorCode = $e->errorInfo[1];
			return "Error code: " . $errorCode;
		}
		return true;
	}

	public static function addStockItem($subcategory, $item, $quantity, $cost, $price, $profit, $reorder){
		try {
			$stock = new Stock();
			$stock->category_id = $subcategory;
			$stock->stock_item = $item;
			$stock->quantity = $quantity;
			$stock->cost = $cost;
			$stock->price = $price;
			$stock->profit = $profit;
			$stock->stock_limit = $reorder;
			$stock->save();
		} catch (\Illuminate\Database\QueryException $e) {
			$error = $e->errorInfo[2];
			$errorCode = $e->errorInfo[1];
			return "Error code: " . $errorCode . ", Message: $error";
		}
		return true;
	}

	public static function hideStockSubCategory($subcat_id, $status='disabled'){
		try {
			$stock = StockSubCategory::find($subcat_id);
			$stock->status = $status;
			$stock->save();
		} catch (\Illuminate\Database\QueryException $e) {
			$errorCode = $e->errorInfo[1];
			return "Error code: " . $errorCode;
		}
		return true;
	}
}

?>