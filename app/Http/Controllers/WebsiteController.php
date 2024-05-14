<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //

    public function aboutPage()
    {
    	return view('website.about');
    }

    public function contactPage()
    {
    	return view('website.contact');
    }
}
