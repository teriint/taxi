<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoAlbum extends Controller
{
    public function index() {

	return view('photoalbum');
	}
}
