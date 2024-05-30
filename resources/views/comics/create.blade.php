@extends('layouts.app')




@section('content')

<div class="container mt-5">
    <div>
        <h1><strong>Inserisci i dati del nuovo comic!</strong></h1>
    </div>
    <form action="{{route('comics.store')}}" method="POST">
    @csrf
        <div class="mb-3">
            <label for="thumb" class="form-label">Link immagine</label>
            <input type="text" class="form-control" name="thumb" id="thumb">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" name="description" id="description">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" name="price" id="price">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" name="series" id="series">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" name="type" id="type">
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label">Artista/i</label>
            <input type="text" class="form-control" name="artists" id="artists">
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label">Scrittore/i</label>
            <input type="text" class="form-control" name="writers" id="writers">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di uscita</label>
            <input type="text" class="form-control" name="sale_date" id="sale_date">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>

@endsection