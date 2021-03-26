<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PublicController extends Controller
{
  public function index()
  {
      $pizzas = Pizza::all();
      return view('public-pizzas-index',compact('pizzas'));
  }
}
