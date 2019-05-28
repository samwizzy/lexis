<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;
/**
 * 
 */


class Session extends Eloquent {
	protected $table = 'Sessions'; 
	protected $fillable = ['access','data'];
}

?>