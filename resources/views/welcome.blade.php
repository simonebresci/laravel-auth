@extends('layouts.base')

@section('title','Public pizza index')

@section('content')
  {{-- <div class="main-content"> --}}

    <h1> WELCOME TO PIZZA STORE </h1>

    <a href={{route('public-pizzas')}}>
      <img class="welcome-img" src="{{asset('/img/pizza-clipart.png')}}" alt="">
    </a>



 {{-- </div> --}}
@endsection
