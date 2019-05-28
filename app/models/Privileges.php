<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;
/**
 * 
 */


class Privileges extends Eloquent {
	protected $table = 'Privileges'; 
	protected $fillable = ['priv_id','priv_desc'];
}

?>