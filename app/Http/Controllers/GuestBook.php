<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestBook extends Controller
{
     public function index() {

	return view('guestBook');
	}
}
