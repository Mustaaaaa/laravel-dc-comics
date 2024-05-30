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
                    <p class="card-text">{{$comic->description}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$comic->price}}</li>
                    <li class="list-group-item">{{$comic->series}}</li>
                    <li class="list-group-item">{{$comic->type}}</li>
                    <li class="list-group-item">{{$comic->artists}}</li>
                    <li class="list-group-item">{{$comic->writers}}</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">{{$comic->title}}</a>
                    <a href="#" class="card-link">{{$comic->title}}</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection