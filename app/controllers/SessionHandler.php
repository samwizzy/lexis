<?php
namespace App\Controllers;

use App\Models\Session;

class SessionHandler implements SessionHandlerInterface {

	public function __construct(){
		session_set_save_handler([$this, 'open'], [$this, 'close'], [$this, 'read'], [$this, 'write'], [$this, 'destroy'], [$this, 'gc']);
		register_shutdown_function('session_write_close');
	}

	 public function open($id, $savepath=""){
        // If successful
        $sess = Session::where('session_id', $id)->first();
        if($sess){
            return true;
        }
        return false;
    }

    public static function read($id) {
        $sess = Session::where('session', $id)->get('data');
        if ($sess) {
            return $sess->data;
        } else {
            return false;
        }
    }

    public static function write($id, $data) {
        // create timestamp
        $access = time();

        // Set query
        $session = new Session;
        $session->session_id = $id;
        $session->access = 	   $access;
        $session->data = 	   $data;
        if ($session->save()) {
            return true;
        } else {
            return false;
        }
    }

    public static function destroy($id) {
        // Set query
		if(Session::where('session_id', $id)->delete()){
            return true;
        } else {
            return false;
        }
    }
    
    public static function close() {
        // Close the database connection
        if($this->database->dbiLink->close){
            // Return True
            return true;
        }
        return false;
    }

    // Garbage Collection 
    public static function gc($max) {
        // Calculate what is to be deemed old
        $old = time() - $max;

        if (Session::where('access', '<', $old)->delete()) {
            return true;
        } else {
            return false;
        }
    }

    public function __destruct() {
        Session::close();
    }
}

?>