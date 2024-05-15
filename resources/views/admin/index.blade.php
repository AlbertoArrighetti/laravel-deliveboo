@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>
            Benvenuto, {{$user->name}} {{$user->lastname}}
        </h1>

        <h2>
            {{$restaurant->restaurant_name}}
        </h2>

        <h2>
            {{$restaurant->address}}
        </h2>

        <h2>
            {{$restaurant->image}}
        </h2>
    </div>
@endsection