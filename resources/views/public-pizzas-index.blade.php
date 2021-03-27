@extends('layouts.base')

@section('title','Public pizza index')

@section('content')
  {{-- <div class="main-content"> --}}

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Img_path</th>
          <th scope="col">Name</th>
          <th scope="col">Ingredients</th>
          <th scope="col">Price</th>
          <th scope="col">Description</th>
          <th scope="col">Peso</th>
          @auth
            <th scope="col">Action</th>
          @endauth
        </tr>
      </thead>
      <tbody>
        @foreach ($pizzas as $pizza)
        <tr class="pizza-record">
          {{-- <a href={{route('pizza.show',compact('pizza'))}} --}}

            @auth
              <td><a href={{route('pizzas.show',compact('pizza'))}}>{{$pizza->id}}</a></td>
              <td>
                <a href={{route('pizzas.show',compact('pizza'))}}>
                  <img class="pizza-index-icon"src="{{$pizza->img_path}}" alt="icona pizza">
                </a>
              </td>
              <td><a href={{route('pizzas.show',compact('pizza'))}}>{{$pizza->name}}</a></td>
            @endauth

            @guest
              <td>{{$pizza->id}}</td>
              <td><img class="pizza-index-icon"src="{{$pizza->img_path}}" alt="icona pizza"></td>
              <td>{{$pizza->name}}</td>
            @endguest

          {{-- <td><img class="pizza-index-icon"src="{{$pizza->img_path}}" alt="icona pizza"></a></td>
          <td>{{$pizza->name}}</a></td> --}}
          <td>{{$pizza->ingredients}}</td>
          <td>{{$pizza->price}}</td>
          <td>{{$pizza->description}}</td>
          <td>{{$pizza->peso}}</td>
          @auth
          <td>
            <a href={{route('pizzas.show',compact('pizza'))}}><i class="fas fa-eye fa-2x"></i></a>
            <a href={{route('pizzas.edit',compact('pizza'))}}><i class="fas fa-edit fa-2x"></i></a>
            <form  action={{route('pizzas.destroy', compact('pizza'))}}  method="post">
              @csrf
              @method('DELETE')

              <button type="submit" class="btn btn-default"><i class="fas fa-trash-alt fa-2x"></i></button>

            </form>
          </td>
          @endauth


          </a>
        </tr>
        @endforeach

     </tbody>
   </table>
 {{-- </div> --}}
@endsection
