<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{
    //
    public function index()
    {
        return view('home.contactUs.contact');
    }
}
