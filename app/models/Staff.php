<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;
/**
 * 
 */


class Staff extends Eloquent {
	protected $table = 'Staffs'; 
	protected $primaryKey = 'staff_id';
	protected $fillable = ['surname','firstname','email','password','pin','gender'];
}

?>