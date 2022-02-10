@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dogs') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
    {{-- Agregar traducción a contenido html con __() --}}
    <h1>{{ __("Edit Dog") }}</h1>
    {{-- Otra forma: --}}
    {{-- <h1>@lang("Create Dog")</h1> --}}

    <a class="btn btn-info" href="{{ route('dogs.index') }}">@lang("Come Back")</a>

<form method="post" action="{{ route('dogs.update', $dog->id) }}">
    @csrf
    @method('patch')

    @if ($errors->any())
        <h3>@lang("Errors Validation")</h3>

        @foreach ($errors->all() as $error)

            <li style="color:red"> {{ $error }}</li>
        @endforeach
    @endif

    <br>
    {!! $errors->first("nombre", "<p style=\"color:red\"> :message </p>") !!}

    <label>
        @lang("Name") <br>
        <input type="text" name="nombre" value="{{ old('nombre', $dog->nombre) }}" required>
        <br>
    </label>
    <br>
    {!! $errors->first("raza", "<p style=\"color:red\"> :message </p>") !!}

    <label>
        @lang("Race") <br>
        <input type="text" name="raza" value="{{ old('raza', $dog->raza) }}" >
        <br>

    </label>
    <br>
    {!! $errors->first("isVacunado", "<p style=\"color:red\"> :message </p>") !!}

    <label>
        @lang("is it Vacunated?") <br>

        <input type="checkbox" value="{{true}}" name="isVacunado" {{ old('isVacunado', $dog->isVacunado) === 'true' ? 'checked='.'"checked"' : '' }}>


        {{-- Usando Radio para enviar valores en vez de un bool --}}
        {{-- <label>@lang("Few")</label> <br>
        <input type="radio" name="fuerza" value="poca" checked={{ $dog->fuerza == "poca" }}/>
        <br>
        <label>@lang("A lot")</label><br>
        <input type="radio" name="fuerza" value="mucha" checked={{ $dog->fuerza == "mucha" }}/> --}}

    </label>
    <br>
    {!! $errors->first("fecha_nacimiento", "<p style=\"color:red\"> :message </p>") !!}

    <label>
        @lang("Date Birthday") <br>
        <input type="date" name="fecha_nacimiento" value="{{ old('fecha_nacimiento', $dog->fecha_nacimiento) }}"/>
        <br>
    </label>
    <br>
    {!! $errors->first("edad", "<p style=\"color:red\"> :message </p>") !!}

    <label >
        @lang("Age") <br>
        <input type="number" name="edad" value="{{ old('edad', $dog->edad) }}" >
    </label>
    <br>
    {!! $errors->first("price", "<p style=\"color:red\"> :message </p>") !!}

    <label >
        @lang("Price") <br>
        <input type="number" step=".01" name="price" value="{{ old('price', $dog->price) }}" >
    </label>
    <br>
    {!! $errors->first("descripcion", "<p style=\"color:red\"> :message </p>") !!}

    <label>
        @lang("Description") <br>
        <textarea name="descripcion" value="{{ old('descripcion', $dog->descripcion) }}">{{ old('descripcion', $dog->descripcion) }}</textarea><br>
    </label>
    <br>
    {!! $errors->first("tamanyo", "<p style=\"color:red\"> :message </p>") !!}

    <label>
        @lang("Size:") <br>
        <select name="tamanyo">
            <option {{old("tamanyo", $dog->tamanyo) == "little" ? "selected" : ""}} value="little">little</option>
            <option {{old("tamanyo", $dog->tamanyo) == "big" ? "selected" : ""}} value="big">big</option>
        </select>
        <br>
    </label>

    <button>@lang("Send")</button>
</form>

</div>
</div>
</div>
</div>
@endsection
