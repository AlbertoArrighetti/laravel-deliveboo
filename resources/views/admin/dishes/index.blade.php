@extends('layouts.app')

@section('content')
    <div class="container py-5 ">
        <h1>
            Menù
        </h1>

        <ul>
            @foreach ($dishes as $dish)
            <li>
                {{$dish->name}}
            </li>
            @endforeach
        </ul>
    </div>
@endsection