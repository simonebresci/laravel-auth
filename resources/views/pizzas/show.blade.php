@extends('layouts.base')

@section('title','Pizza show')

@section('content')
  {{-- <div class="main-content"> --}}
    <div class="pizza-show">
      <b>Name: {{$pizza->name}}</b> <br>
      Ingredients {{$pizza->ingredients}} <br>
      Price: {{$pizza->price}} <br>
      Description: {{$pizza->description}} <br>
      Peso: {{$pizza->peso}} <br>
      <img class="pizza-show-img" src="{{$pizza->img_path}}" alt="Immagine pizza">
    </div>
  {{-- </div> --}}
@endsection
