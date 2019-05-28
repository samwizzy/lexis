<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;
/**
 * 
 */


class Roles extends Eloquent {
	protected $table = 'Roles'; 
	protected $primaryKey = 'role_id';
	protected $fillable = ['role_id','role_name'];
}

?>