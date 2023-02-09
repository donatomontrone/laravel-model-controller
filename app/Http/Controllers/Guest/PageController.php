<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //inserire la funzione di index per la rotta

public function index(){

    $movies = Movie::all();
    return view('home', ['movies' => $movies]);
    }
}
