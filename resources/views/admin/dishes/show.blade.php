@extends('layouts.app')

@section('content')
<section>
    <div class="container">

        <h2 class="fs-4 text-secondary my-4">{{$dish->name}}</h2>



        @if ($dish->image)
        <img src="{{ asset('storage/' . $dish->image) }}" alt="immagine piatto">
        @endif

        <p>{{$dish->description}}</p>

        <p>
            prezzo:
            {{$dish->price}}
            €
        </p>

        <p>
            il piatto è nel menu?
            @if($dish->viewable == 1)
            si
            @else
            no
            @endif
        </p>

        <div class="my-4 d-flex justify-content-between ">

            <div>

                {{-- edit --}}
                <a class="btn btn-secondary" href="{{route('admin.dishes.edit', $dish)}}">Modifica</a>
                
                {{-- delete --}}
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                    Elimina
                </button>
                
                <!-- delete modal -->
                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="deleteModalLabel">Elimina il progetto</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            
                            <div class="modal-body">
                                Confermi l'eliminazione?
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                <form action="{{route('admin.dishes.destroy', $dish->id)}}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btn-danger">Elimina</button>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            
            
            </div>

            <div>
                {{-- go back to the list --}}
                <a class="btn btn-success" href="{{route('admin.dishes.index')}}">Torna alla lista</a>
                
            </div>
                
        </div>
    
    </div>
</section>
@endsection