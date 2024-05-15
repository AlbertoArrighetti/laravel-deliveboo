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

        <div class="px-3 mb-4">
            
            @foreach($restaurant->types as $type)
            {{$type->name}}
            @endforeach
        </div>
       
       
        <a href="{{route('admin.dishes.index')}}">
            Visualizza il tuo menù
        </a>
    </div>
@endsection