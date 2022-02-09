<?php

namespace App\Http\Controllers;

use App\Http\Requests\DogRequest;
use App\Models\Dog;
use Illuminate\Support\Facades\Gate;

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
        return view("dog.dogs", compact("dogs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dog.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DogRequest $request)
    {
        // Dog::create([
        //     "nombre" => request("nombre"),
        //     "raza" => request("raza"),
        //     "isVacunado" => request("isVacunado"),
        //     "fecha_nacimiento" => request("fecha_nacimiento"),
        //     "edad" => request("edad"),
        //     "price" => request("price"),
        //     "tamanyo" => request("tamanyo"),
        //     "descripcion" => request("descripcion"),
        // ]);


        // Forma corta
        if(!Gate::allows("admin")) {
            abort(403);
        }

        Dog::create(request()->all());

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
        return view("dog.show", compact("dog"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function edit(Dog $dog)
    {
        return view("dog.edit", compact("dog"));
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

        if(!Gate::allows("admin")) {
            abort(403);
        }

        $dog->update([
            "nombre" => request("nombre"),
            "raza" => request("raza"),
            // Checkbox input, si no está chequeado, input:checkbox
            // enviará un null en la request, para evitar null,
            // coloco como valor por defecto 0
            "isVacunado" => request("isVacunado", 0),
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

        if(!Gate::allows("admin")) {
            abort(403);
        }

        $dog->delete();

        return redirect("dogs");
    }
}
