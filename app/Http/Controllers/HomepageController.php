<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomepageController extends Controller
{
  public function welcome() {
    return view('homepage');
  }
}
