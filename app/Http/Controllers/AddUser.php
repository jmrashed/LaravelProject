<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AddUser extends Controller
{
    function adduser(){
    	return view("adduser");
    }

    
    function addusersubmit(Request $request){

    	echo 'i am submit data.....';

    	//$input = $request->only('fullname','email', 'password');
		$fullname = $request->get("fullname");
		 

		$user = App\Flight::create(['name' => 'Flight 10']);
	 
    }


}
