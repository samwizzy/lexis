<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;
/**
 * 
 */

class Stock extends Eloquent {
	protected $table = 'stock'; 
	protected $primaryKey = 'stock_id';
	
	protected $fillable = ['category_id','type','stock_item','quantity','cost','price','current','total','stock_limit'];

	public function stocksubcategory(){
        return $this->belongsTo('App\Models\StockSubCategory', 'category_id');
	}

}

?>