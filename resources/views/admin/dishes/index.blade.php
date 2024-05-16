@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="d-flex justify-content-between my-4">
            <h2 class="fs-4">{{$restaurant->restaurant_name}} <span class="fw-lighter">menù</span></h2>

            {{-- add a new dish --}}
            <a class="btn btn-warning" href="{{route('admin.dishes.create')}}">Aggiungi</a>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="d-inline-flex">
            <table class=" manu-table table border">
                <thead class="table-secondary">
                    <tr>
                    <th scope="col">Piatto</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Disponibilità</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
    
                <tbody>
                    @forelse ($dishes as $dish)
                        <tr>
                            <td>
                                <a href="{{route('admin.dishes.show', $dish)}}">{{$dish->name}}</a>
                            </td>
                            
                            <td>
                                € {{$dish->price}}
                            </td>

                            <td>
                                @if ($dish->viewable)
                                <i class="fa-regular fa-circle-check text-success "></i>
                                @else
                                <i class="fa-regular fa-circle-xmark text-danger "></i>
                                @endif
                            </td>

                            <td>
                                <a class="" href="{{route('admin.dishes.edit', $dish)}}">Modifica</a>
                            </td>                 
                        </tr>
                    @empty
                        <tr>
                        <td>Nessun piatto inserito</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        </div>
</section>
@endsection