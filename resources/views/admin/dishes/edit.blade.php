@extends('layouts/app')

@section('content')
<section>
    <div class="container">
        
        <div class="page-title">
            <h2 class="title">Modifica <span class="fw-lighter">{{$dish->name}}</span></h2>

            {{-- go back to the dish --}}
            <a class="btn btn-warning" href="{{route('admin.dishes.index')}}"><i class="fa-solid fa-angle-left"></i> Annulla</a>
        </div>

        {{-- form --}}
        <form action="{{ route('admin.dishes.update', $dish->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nome *</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ?? $dish->name }}" required>
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') ?? $dish->description }}</textarea>
                @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image">Inserisci un'immagine di copertina</label>
                <input type="file" class="form-control" name="image">
                @if ($dish->image)
                <img src="{{ asset('storage/' . $dish->image) }}" style="max-width: 200px; height: auto;">
                @endif
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo *</label>
                <input type="number" min="0" max="1000" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') ?? $dish->price }}" required>
                @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 form-check">
                <input class="form-check-input" type="checkbox" id="viewable" name="viewable" value="1" {{ $dish->viewable ? 'checked' : '' }}>
                <label class="form-check-label" for="viewable">Seleziona se il piatto è disponibile</label>
                @error('viewable')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
    
            <div class="d-flex justify-content-between ">
                <div>
                    <button type="submit" class="btn btn-success">Salva Modifiche</button>
                </div>
    
                <div>
                    {{-- go back to the list --}}
                    <a class="btn btn-warning" href="{{route('admin.dishes.show', $dish->id)}}">Annulla</a>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection