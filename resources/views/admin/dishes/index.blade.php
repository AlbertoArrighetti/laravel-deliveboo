@extends('layouts.app')

@section('content')
<section>
    <div class="container"> 
        <div class="page-title">
            <h2 class="title">{{$restaurant->restaurant_name}} <p class="fw-lighter">Menù</p></h2>

            {{-- add a new dish --}}
            <a class="btn btn-warning" href="{{route('admin.dishes.create')}}"><i class="fa-solid fa-plus"> Aggiungi piatto</i></a>
        </div>

        <div class="dishes-list">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">Piatto</th>
                    <th scope="col" class="text-center">Prezzo</th>
                    <th scope="col" class="text-center">Disponibilità</th>
                    <th scope="col" class="text-center">Modifica Piatto</th>
                    </tr>
                </thead>
                
                <tbody>
                    @forelse ($dishes as $dish)
                        <tr class="align-middle">
                            <td>
                                <a href="{{route('admin.dishes.show', $dish)}}">{{$dish->name}}</a>
                            </td>
                            
                            <td class="text-center">
                                € {{$dish->price}}
                            </td>

                            <td class="text-center">
                                @if ($dish->viewable)
                                <i class="fa-regular fa-circle-check text-success "></i>
                                @else
                                <i class="fa-regular fa-circle-xmark text-danger "></i>
                                @endif
                            </td>

                            <td class="text-center">
                                <a class="mod-del" href="{{route('admin.dishes.edit', $dish)}}"><i class="fa-solid fa-pen-to-square"></i></a>
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