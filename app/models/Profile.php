<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;

/** Business ProFile **/

class Profile extends Eloquent {
	protected $table = 'Profile'; 
	protected $fillable = ['company','email','contact','website','strapline','address','logo'];
}

?>