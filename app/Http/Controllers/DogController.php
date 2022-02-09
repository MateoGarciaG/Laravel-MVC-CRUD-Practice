<?php

namespace App\Http\Controllers;

use App\Http\Requests\DogRequest;
use App\Models\Dog;

class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dogs = Dog::latest("updated_at")->get();
        // $dogs = Dog::get();
        return view("dogs", compact("dogs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DogRequest $request)
    {
        Dog::create([
            "nombre" => request("nombre"),
            "raza" => request("raza"),
            "isVacunado" => request("isVacunado"),
            "fecha_nacimiento" => request("fecha_nacimiento"),
            "edad" => request("edad"),
            "price" => request("price"),
            "tamanyo" => request("tamanyo"),
            "descripcion" => request("descripcion"),
        ]);

        return redirect("dogs");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function show(Dog $dog)
    {
        // $dog = Dog::findOrFail($id);
        return view("show", compact("dog"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function edit(Dog $dog)
    {
        return view("edit", compact("dog"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function update(DogRequest $request, Dog $dog)
    {
        $dog->update([
            "nombre" => request("nombre"),
            "raza" => request("raza"),
            "isVacunado" => request("isVacunado"),
            "fecha_nacimiento" => request("fecha_nacimiento"),
            "edad" => request("edad"),
            "price" => request("price"),
            "tamanyo" => request("tamanyo"),
            "descripcion" => request("descripcion"),
        ]);

        return redirect("dogs");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dog $dog)
    {
        $dog->delete();

        return redirect("dogs");
    }
}
