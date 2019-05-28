<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;

/** Business ProFile **/

class StaffTables extends Eloquent {
	protected $table = 'staff_tables'; 
	protected $fillable = ['staff_id','table_id'];
}

?>