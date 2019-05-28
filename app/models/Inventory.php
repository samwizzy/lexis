<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;
/**
 * 
 */

class Inventory extends Eloquent {
	protected $table = 'inventory'; 
	protected $primaryKey = 'id';
	
	protected $fillable = ['cat_id','subcat_id','type','item','quantity','cost','price','current','total','stock_limit'];

	public function stocksubcategory(){
        return $this->belongsTo('App\Models\StockSubCategory', 'category_id');
	}

	public function stockcategory(){
        return $this->belongsTo('App\Models\StockCategory', 'cat_id');
	}

}

?>