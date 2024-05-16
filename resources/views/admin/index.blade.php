@extends('layouts.app')

@section('content')
        <section>
            <div class="container">
                <div class="my-4">
                    <h2 class="fs-4">Ciao {{$user->name}}!</h2>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        <h3 class="card-title mt-2">{{$restaurant->restaurant_name}}</h3>
                    </div>
                    <div class="card-body p-0">
                        {{-- IMAGE --}}
                        <img class="card-img-top" src="{{'storage/' . $restaurant->image}}" alt="{{$restaurant->restaurant_name}}">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{$restaurant->address}}</li>
                            <li class="list-group-item">+39 {{$user->phone_number}}</li>
                            <li class="list-group-item">P.IVA: {{$user->vat}}</li>
                            <li class="list-group-item">Cucina: 
                                @foreach ($restaurant->types as $type)
                                <div class="badge rounded-pill text-bg-secondary bt-2 mb-3">{{$type->name}}</div>
                                @endforeach
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <a href="{{route('admin.dishes.index')}}" class="btn btn-warning">Vai al menù</a>
                    </div>
                </div>
            </div>
        </section>
@endsection