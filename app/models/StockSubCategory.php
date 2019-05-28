<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;
/**
 **/


class StockSubCategory extends Eloquent {
	protected $table = 'stock_subcategory'; 
	protected $primaryKey = 'subcat_id';
	
	protected $fillable = ['cat_id','category','description','status'];

	public function stockcategory(){
        return $this->belongsTo('App\Models\StockCategory', 'cat_id');
	}

	public function stock(){
		return $this->hasMany('App\Models\Stock', 'subcat_id');
	}

	public function inventory(){
		return $this->hasMany('App\Models\Inventory', 'subcat_id');
	}

}

?>