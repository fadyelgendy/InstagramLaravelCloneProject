<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilesController extends Controller
{
    public function index($user) 
    {
    	$user = \App\User::findOrFail($user);

    	return view('profiles.index', [
    		'user'=> $user,
    	]);
    }
}
