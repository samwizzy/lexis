<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;
/**
 * 
 */

class StockCategory extends Eloquent {
	protected $table = 'stock_category'; 
	protected $primaryKey = 'cat_id';
	
	protected $fillable = ['category','description','status'];

	public function stocksubcategory(){
        return $this->hasMany('App\Models\StockSubCategory', 'cat_id');
	}

	public function inventory(){
        return $this->hasMany('App\Models\Inventory', 'cat_id');
	}

}

?>