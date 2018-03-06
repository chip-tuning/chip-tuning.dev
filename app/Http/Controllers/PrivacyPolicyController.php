<?php

namespace App\Http\Controllers;

class PrivacyPolicyController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('privacy.index');
	}
}
