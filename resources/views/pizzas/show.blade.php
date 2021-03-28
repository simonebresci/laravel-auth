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
    
    <div class="actions">

        <button class="btn btn-primary" >
          <a href={{route('pizzas.show',compact('pizza'))}}>
            <i class="fas fa-eye fa-lg"></i>
          </a>
        </button>


      <button class="btn btn-secondary">
        <a href={{route('pizzas.edit',compact('pizza'))}}>
          <i class="fas fa-edit fa-lg"></i>
        </a>
      </button>

      <form  action={{route('pizzas.destroy', compact('pizza'))}}  method="post">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt fa-lg"></i></button>

      </form>
    </div>
  {{-- </div> --}}
@endsection
