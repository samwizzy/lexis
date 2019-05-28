<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;
/**
 * 
 */


class RolePrivilege extends Eloquent {
    protected $table = 'role_privilege'; 

    protected $primaryKey = null;
    public $incrementing = false;
    public $timestamps = false;
    
    protected $fillable = ['role_id','priv_id'];
    
}

?>