@extends('layouts.base')

@section('title','Public pizza index')

@section('content')
  {{-- <div class="main-content"> --}}

    <table class="table">
      <thead class="thead-light">
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

              {{-- @include('layouts.modal-delete') --}}
              <form action={{route('pizzas.destroy', compact('pizza'))}}  method="post">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt fa-lg"></i></button>

              </form>


            </div>
          </td>
          @endauth


          </a>
        </tr>
        @endforeach

     </tbody>
   </table>
 {{-- </div> --}}
@endsection
