<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilePageController extends Controller
{
    public function index(){
        return view('profile');
    }
}
