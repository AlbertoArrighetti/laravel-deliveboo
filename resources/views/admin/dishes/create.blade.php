@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="page-title">
            <h2 class="title">Aggiungi un piatto</h2>

            {{-- go back to the dish --}}
            <a class="btn btn-outline-secondary" href="{{route('admin.dishes.index')}}">Indietro</a>
        </div>

        <form action="{{route('admin.dishes.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nome *</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}">
                @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image">Inserisci un'immagine di copertina</label>
                <input type="file" class="form-control" name="image">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('description')}}</textarea>
                @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo *</label>
                <input type="number" min="0" max="1000" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price')}}">
                @error('price')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Disponibile</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" checked id="viewable" name="viewable" value="1" {{ old('viewable') ? 'checked' : '' }}>
                    <label class="form-check-label" for="viewable">
                        Seleziona se il piatto è disponibile
                    </label>
                </div>
            </div>


            <div class="d-flex justify-content-between mt-4">
                
                <div>
                    {{-- go back to the list --}}
                    <a class="btn btn-warning" href="{{route('admin.dishes.index')}}">Annulla</a>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Aggiungi il piatto</button>
                </div>
            </div>

        </form>
    </div>
</section>
@endsection