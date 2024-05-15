@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>
            Benvenuto, {{$user->name}} {{$user->lastname}}
        </h1>

        <h2>
            il tuo ristorante:
        </h2>

        <div class="px-3 mb-3">

            <h4>
                Nome: 
                {{$restaurant->restaurant_name}}
            </h4>
    
            <h4>
                Indirizzo: 
                {{$restaurant->address}}
            </h4>
    
            <h4>
                Immagine:
                {{$restaurant->image}}
            </h4>
                
            @foreach($restaurant->types as $type)
            <span class="badge rounded-pill text-bg-primary">{{$type->name}}</span>
            @endforeach

        </div>
       
       
        <a href="{{route('admin.dishes.index')}}">
            Visualizza il tuo menù
        </a>
    </div>
@endsection