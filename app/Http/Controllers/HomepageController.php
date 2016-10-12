<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Book;

class HomepageController extends Controller
{
     public function welcome(Request $request) {

       return view('homepage',['bookSession' => Book::bookInSession($request->session()->get('viewed'))]);
     }
}
