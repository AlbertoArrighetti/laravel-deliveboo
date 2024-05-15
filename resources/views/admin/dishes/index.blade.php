@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="d-flex justify-content-between my-4">
            <h2 class="fs-4 text-secondary">Menù</h2>

            {{-- Aggiungere un nuovo piatto --}}
            <a class="btn btn-primary" href="{{route('admin.dishes.create')}}">Aggiungi</a>
        </div>
    </div>
</section>

<section>
    <div class="container">

        <table class="table my-4">
            <thead>
              <tr>
                <th scope="col">Piatto</th>
                <th scope="col">Descrizione</th>
                <th scope="col"></th>
              </tr>
            </thead>

            <tbody>
              <tr>
               @forelse ($dishes as $dish)
                   <tr>
                    <td>
                        <a href="{{route('admin.dishes.show', $dish)}}">{{$dish->name}}</a></td>
                    <td>{{$dish->description}}</td>
                    <td>
                        <a href="{{route('admin.dishes.edit', $dish)}}"><i class="fa-solid fa-pen-to-square"></i></a>
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
</section>
@endsection