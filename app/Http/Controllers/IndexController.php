<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Role;

class IndexController extends Controller
{
    //
    public function index() {
    	
    
		$header = 'Hello woed';
		$message = 'FDSFSDFDSDSFDfdsfsdfsdfd dsf we dfs wefsf sds';

		
	return view('page')->with(['message'=>$message, 'header'=>$header]);
	}
	
    //
    
	
	public function interests() {

	return view('interests');
	}
	public function study() {

	return view('study');
	}
	public function photoalbum() {

	return view('photoalbum');
	}
	public function contact() {

	return view('contact');
	}
	public function test() {

	return view('test');
	}
	public function watchHistory() {

	return view('watchHistory');
	}
	public function guestBook() {

	return view('guestBook');
	}
	public function blog() {

	return view('blog');
	}
}
