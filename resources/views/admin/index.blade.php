@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>
            Benvenuto, {{$user->name}} {{$user->lastname}}
        </h1>

        <h2>
            il tuo ristorante:
        </h2>

        <h2>
            {{$restaurant->address}}
        </h2>

        <h2>
            {{$restaurant->image}}
        </h2>

        <a href="{{route('admin.dishes.index')}}">
            Visualizza il tuo menù
        </a>
        <div class="px-3">

            <h4>
                {{$restaurant->restaurant_name}}
            </h4>
    
            <h4>
                {{$restaurant->address}}
            </h4>
    
            <h4>
                {{$restaurant->image}}
            </h4>

            @foreach($restaurant->types as $type)
            {{$type->name}}
            @endforeach
        </div>
    </div>
@endsection