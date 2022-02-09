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
    <h1>{{ __("Show Dogs") }}</h1>
    {{-- Otra forma: --}}
    {{-- <h1>@lang("Create Dog")</h1> --}}

    <h3>
        <a class="btn btn-info" href="{{ route('dogs.create') }}">@lang("Add")</a>
    </h3>

    <ul>
        @forelse ($dogs as $dog)
            <li>
                <h2>@lang("Name"): {{ $dog->nombre }}</h2>
                    <br>
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


                    <a class="btn btn-info" href="{{ route('dogs.show',$dog->id) }}">@lang("Show")</a>

                    <a class="btn btn-primary" href="{{ route('dogs.edit',$dog) }}">@lang("Edit")</a>

                    {{-- DELETE DOG --}}
                    <form method="post" action="{{ route('dogs.destroy', $dog->id) }}">
                        @method('delete')
                        @csrf
                        <button>@lang("Delete")</button>
                    </form>
            </li>
        @empty

        <h2>
            @lang("There are not any dog right now")
        </h2>
        @endforelse

    </ul>

</body>
</html>
