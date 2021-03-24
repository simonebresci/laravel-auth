<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PublicController extends Controller
{
  public function index()
  {
      echo "<h1> PUBLIC CONTROLLER </h1> ";
      echo "public-pizzas.index";
      // $pizzas = Pizza::all();
      // return view('public-pizzas.index',compact('pizzas'));
  }
}
