@extends('layouts.app')




@section('content')

<div class="container mt-5">
    <div class="row">
        @foreach ($comics as $comic)
        
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="{{$comic->thumb}}" class="card-img-top" style="height: 400px ;" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <!-- <p class="card-text"><strong>Description:</strong> {{$comic->description}}</p> -->
                </div>
                <!-- <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Price:</strong> ${{$comic->price}}</li>
                    <li class="list-group-item"><strong>Series:</strong> {{$comic->series}}</li>
                    <li class="list-group-item"><strong>Type:</strong> {{$comic->type}}</li>
                    <li class="list-group-item"><strong>Artists:</strong> {{$comic->artists}}</li>
                    <li class="list-group-item"><strong>Writers:</strong> {{$comic->writers}}</li>
                    <li class="list-group-item"><strong>Sale date:</strong> {{$comic->sale_date}}</li> -->
                <!-- </ul> -->
                <div class="card-body">
                    <a href="{{route('comics.show', $comic)}}" class="card-link">Dettagli</a>
                    <a href="#" class="card-link">{{$comic->title}}</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection