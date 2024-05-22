@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="page-title">
            <h2 class="title">{{$dish->name}}</h2>

            {{-- go back to the list --}}
            <a class="btn btn-warning" href="{{route('admin.dishes.index')}}"><i class="fa-solid fa-angle-left"></i> Torna alla lista</a>
        </div>

        <div class="dish-card">
            <div class="dish-card_img">
                @if ($dish->image)
                <img src="{{ asset('storage/' . $dish->image) }}" alt="immagine piatto">
                @endif
            </div>            
            <div class="dish-card_text">
                <div class="dish-info"> 
                    <p><span class="title">Descrizione:</span><br>{{$dish->description}}</p>
                    <p><span class="title">Prezzo: </span>{{$dish->price}}€</p>
                    <p>
                        <span class="title">Attivo: </span>
                        @if($dish->viewable == 1)
                        <i class="fa-regular fa-circle-check text-success "></i>
                        @else
                        <i class="fa-regular fa-circle-xmark text-danger "></i>
                        @endif
                    </p>
                </div>
                <div class="dish-card_btn">
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
                                    <h1 class="modal-title fs-5" id="deleteModalLabel">Elimina il piatto</h1>
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

        

            </div>
        </div>
 
    </div>
</section>
@endsection