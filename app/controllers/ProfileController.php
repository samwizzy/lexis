<?php
namespace App\Controllers;
/**
 * 
 */
use App\Models\Profile;

class ProfileController {

	public static function store($company, $email, $contact, $website, $strapline, $address, $logo=''){
		try {
			$profile = Profile::firstOrCreate(
			[
				'company'  => $company,
				'email'    => $email,
				'contact'  => $contact,
				'website'  => $website,
				'strapline'=> $strapline,
				'address'  => $address,
				'logo'     => $logo
			]);
	
		} catch (\Illuminate\Database\QueryException $e){
		    $errorCode = $e->errorInfo[1];
		    if($errorCode == 1062){
		    	return false;
		        return "Sorry, duplicate entry is not allowed";
		    }
		}
		return true;	
	}

	public static function save($company, $email, $contact, $website, $strapline, $address, $logo=''){
		try {
			$profile = new Profile;
			$profile->company   = $company;
			$profile->email     = $email;
			$profile->contact   = $contact;
			$profile->website   = $website;
			$profile->strapline = $strapline;
			$profile->address   = $address;
			$profile->logo      = $logo;

			if($profile->save()){
				return true;
			}
		} catch (\Illuminate\Database\QueryException $e){
		    $errorCode = $e->errorInfo[1];
		    if($errorCode == 1062){
		    	return false;
		        return "Sorry, duplicate entry is not allowed";
		    }
		}
		return true;	
	}

	public static function update($id, $company, $email, $contact, $website, $strapline, $address, $logo=''){
		$profile = Profile::find($id);
		$profile->company   = $company;
		$profile->email     = $email;
		$profile->contact   = $contact;
		$profile->website   = $website;
		$profile->strapline = $strapline;
		$profile->address   = $address;
		$profile->logo      = $logo;

		if($profile->save()){
			return true;
		}
		return false;
	}

}

?>