<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Pizza;
use App\Http\Controllers\Controller;

class PrivateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('public-pizzas');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pizzas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Prendi dati da request Http
        $data = $request->all();

        // Valida il dato
        // $request->validate([
        //   'name' => 'required | max:255',
        //   'type' => 'required | max:40',
        //   'quantityL' => 'required | numeric',
        //   'price' => 'required | numeric',
        //   'description' => 'required | max:2048',
        //   'img_path' => 'required | max:2048'
        // ]);

        // Crea nuovo oggetto birra
        $pizza = new Pizza();

        // Riempi i campi dell'oggetto - versione compatta
        $pizza->fill($data); //Regole di fill descritte nel modello Beer

        // Salva nuovo oggetto in db
        $pizza->save();

        // Redirect su nuova birra salvata
        $pizzaStored = Pizza::orderBy('id','desc')->first();
        return redirect()->route('pizzas.show',$pizzaStored);
    }

    /**
     * Display the specified resource.
     *
     * @param  Pizza $pizza
     * @return \Illuminate\Http\Response
     */
    public function show(Pizza $pizza)
    {
        return view('pizzas.show',compact('pizza'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pizza $pizza)
    {
        return view('pizzas.edit',compact('pizza'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Pizza $pizza)
    {
      $data = $request->all();

      // Valida il dato
      // $request->validate([
      //   'name' => 'required | max:255',
      //   'type' => 'required | max:40',
      //   'quantityL' => 'required | numeric',
      //   'price' => 'required | numeric',
      //   'description' => 'required | max:2048',
      //   'img_path' => 'required | max:2048'
      // ]);


      $pizza->update($data);

      return redirect()->route('pizzas.show',compact('pizza'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pizza $pizza)
    {
      $pizza->delete();
      return redirect()->route('pizzas.index');
    }
}
