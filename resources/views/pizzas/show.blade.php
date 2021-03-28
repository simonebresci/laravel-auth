@extends('layouts.base')

@section('title','Pizza show')

@section('content')
  {{-- <div class="main-content"> --}}
    <div class="pizza-show">
      <h2>Name: {{$pizza->name}}</h2> <br>
      <h4>Ingredients {{$pizza->ingredients}}</h4>
      <h4>Price: {{$pizza->price}}</h4>
      <h4>Description: {{$pizza->description}}</h4>
      <h4>Peso: {{$pizza->peso}}</h4>
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

      {{-- <form  action={{route('pizzas.destroy', compact('pizza'))}}  method="post">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt fa-lg"></i></button>

      </form> --}}

      @include('layouts.modal-delete')
    </div>
  {{-- </div> --}}
@endsection
