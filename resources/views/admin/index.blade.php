@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>
            Benvenuto, {{$user->name}} {{$user->lastname}}
        </h1>

        <h2>
            il tuo ristorante:
        </h2>

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
        </div>
    </div>
@endsection