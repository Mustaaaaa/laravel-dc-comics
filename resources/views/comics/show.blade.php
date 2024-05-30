@extends('layouts.app')




@section('content')

<div class="container mt-5">
    <h1>{{$comic->title}}</h1>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <img src="{{ $comic->thumb }}" class="img-fluid comic-cover" alt="">
        </div>
        <div class="col-md-8">
            <p><strong>Description:</strong> {{ $comic->description }}</p>
            <p><strong>Price:</strong> ${{ $comic->price }}</p>
            <p><strong>Series:</strong> {{ $comic->series }}</p>
            <p><strong>Type:</strong> {{ $comic->type }}</p>
            <p><strong>Artists:</strong> {{ $comic->artists }}</p>
            <p><strong>Writers:</strong> {{ $comic->writers }}</p>
            <p><strong>Sale date:</strong> {{ $comic->sale_date }}</p>
        </div>
    </div>
</div>

@endsection