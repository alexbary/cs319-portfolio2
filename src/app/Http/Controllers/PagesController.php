<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {
	public function frontpage() {
		return view('auth.login');
	}

	// public function profile() {
	// 	return view('posts.index');
	// }

	public function profile($id) {
	  	$data = $id;
	  	return view('posts.profile')->with('data', $data);
	}

}
