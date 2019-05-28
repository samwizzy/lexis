<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;

/** Business ProFile **/

class Station extends Eloquent {
	protected $table = 'Stations'; 
	protected $fillable = ['station'];

	public $timestamps = false;
}

?>