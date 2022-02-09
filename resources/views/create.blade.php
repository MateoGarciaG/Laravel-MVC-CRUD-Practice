<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang("Create Dog")</title>
</head>
<body>
    {{-- Agregar traducción a contenido html con __() --}}
    <h1>{{ __("Create Dogs") }}</h1>
    {{-- Otra forma: --}}
    {{-- <h1>@lang("Create Dog")</h1> --}}

    <a class="btn btn-info" href="{{ route('dogs.index') }}">@lang("Come Back")</a>

<form method="post" action="{{ route('dogs.store') }}">
    @csrf
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
        <input type="text" name="nombre" value="{{ old('nombre') }}" required>
        <br>
    </label>
    <br>
    {!! $errors->first("raza", "<p style=\"color:red\"> :message </p>") !!}

    <label>
        @lang("Race") <br>
        <input type="text" name="raza" value="{{ old('raza') }}" >
        <br>

    </label>
    <br>
    {!! $errors->first("isVacunado", "<p style=\"color:red\"> :message </p>") !!}

    <label>
        @lang("is it Vacunated?") <br>
        <input type="checkbox" name="isVacunado" value="0" {{ old("isVacunado") == "0" ? "checked": ""}}  />

        {{-- Usando Radio para enviar valores en vez de un bool --}}
        {{-- <label>@lang("Few")</label> <br>
        <input type="radio" name="fuerza" value="poca" />
        <br>
        <label>@lang("A lot")</label><br>
        <input type="radio" name="fuerza" value="mucha" /> --}}

    </label>
    <br>
    {!! $errors->first("fecha_nacimiento", "<p style=\"color:red\"> :message </p>") !!}

    <label>
        @lang("Date Birthday") <br>
        <input type="date" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}"/>
        <br>
    </label>
    <br>
    {!! $errors->first("edad", "<p style=\"color:red\"> :message </p>") !!}

    <label >
        @lang("Age") <br>
        <input type="number" name="edad" value="{{ old('edad') }}" >
    </label>
    <br>
    {!! $errors->first("price", "<p style=\"color:red\"> :message </p>") !!}

    <label >
        @lang("Price") <br>
        <input type="number" step=".01" name="price" value="{{ old('price') }}" >
    </label>
    <br>
    {!! $errors->first("descripcion", "<p style=\"color:red\"> :message </p>") !!}

    <label>
        @lang("Description") <br>
        <textarea name="descripcion" value="{{ old('descripcion') }}">{{ old('descripcion') }}</textarea><br>
    </label>
    <br>
    {!! $errors->first("tamanyo", "<p style=\"color:red\"> :message </p>") !!}

    <label>
        @lang("Size:") <br>
        <select name="tamanyo">
            <option {{old("tamanyo") == "little" ? "selected" : ""}} value="little">little</option>
            <option {{old("tamanyo") == "big" ? "selected" : ""}} value="big">big</option>
        </select>
        <br>
    </label>

    <button>@lang("Send")</button>
</form>

</body>
</html>
