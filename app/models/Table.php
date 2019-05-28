<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;

/** Business ProFile **/

class Table extends Eloquent {
	protected $table = 'tables'; 
	protected $fillable = ['number','icon','status'];
}

?>