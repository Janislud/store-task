<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DealsPageController extends Controller
{
    public function index() {
        return view('deals');
    }
}
