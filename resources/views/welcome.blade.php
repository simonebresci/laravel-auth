@extends('layouts.base')

@section('title','Public pizza index')

@section('content')
  {{-- <div class="main-content"> --}}

    <h1> WELCOME TO PIZZA STORE </h1>
    <h2><a href={{route('public-pizzas')}}> MENU PIZZE </a></h2>

 {{-- </div> --}}
@endsection
