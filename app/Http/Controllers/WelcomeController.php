<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
	public function getview() {
		echo 'Here is my workplace';
		return redirect()->route('tiachopbac');
	}
}
