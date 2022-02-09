@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('dogs') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
    {{-- Agregar traducción a contenido html con __() --}}
    <h1>{{ $dog->nombre }}</h1>
    {{-- Otra forma: --}}
    {{-- <h1>@lang("Create Dog")</h1> --}}
    <p>
        ID: {{ $dog->id }}
    </p>
    <br>

    <p>
        @lang("Race"): {{ $dog->raza }}
    </p>
    <br>
    <p>
        @lang("is it Vacunated?"): {{ $dog->isVacunado ? __("Yes") : __("No") }}
    </p>
    <br>
    <p>
        @lang("Date Birthday"): {{ $dog->fecha_nacimiento }}
    </p>
    <br>
    <p>
        @lang("Age"): {{ $dog->edad }}
    </p>
    <br>
    <p>
        @lang("Price"): {{ $dog->price }}
    </p>
    <br>
    <p>
        @lang("Size:") {{ $dog->tamanyo }}
    </p>
    <br>
    <p>
        @lang("Description"): {{ $dog->descripcion }}
    </p>
    <br>

    <a class="btn btn-info" href="{{ route('dogs.index') }}">@lang("Come Back")</a> <br>

    @auth

        <a class="btn btn-primary" style=" {{
            (!Gate::allows('admin')) ? "pointer-events:none;" : ""}} "
            href="{{ route('dogs.edit',$dog) }}">@lang("Edit")</a> <br>

        {{-- DELETE DOG --}}
        <form method="post" action="{{ route('dogs.destroy', $dog->id) }}">
            @method('delete')
            @csrf
            <button {{ (!Gate::allows('admin')) ? "disabled" : "enabled"}} >@lang("Delete")</button>
        </form>

    @endauth



</div>
</div>
</div>
</div>
@endsection
