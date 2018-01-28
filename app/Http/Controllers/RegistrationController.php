<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('users.create');
    }

    public function store(){
	    $this->validate(request(),[
		    'name' => 'required|min:4',
		    'email' => 'required|email|unique:users,email',
		    'password' => 'required|min:6|max:50|confirmed',

	    ]);
	    User::create([
	    	'name' => request('name'),
	    	'email' => request('email'),
	    	'password' => bcrypt(request('password')),
	    ]);
	    return redirect('/');
    }
}
