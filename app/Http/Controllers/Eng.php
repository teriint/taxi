<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Eng extends Controller
{

    public function about() {

	return view('about_en');
	}

  public function interests() {

	return view('interests_en');
	}
	  public function contact() {

	return view('contact_en');
	}
	  public function study() {

	return view('study_en');
	}

}
