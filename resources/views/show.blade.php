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

    <a class="btn btn-info" href="{{ route('dogs.index') }}">@lang("Come Back")</a>

    <a class="btn btn-primary" href="{{ route('dogs.edit',$dog) }}">@lang("Edit")</a>

    {{-- DELETE DOG --}}
    <form method="post" action="{{ route('dogs.destroy', $dog->id) }}">
        @method('delete')
        @csrf
        <button>@lang("Delete")</button>
    </form>


</body>
</html>
