@extends('layouts.main')

@section('main-content')
    <div class="container-show">
        <h2>Image: {{ $comic->thumb }}</h2>
    </div>
    <div class="details-comic">
        <div>
            <h1>Title: {{ $comic->title }}</h1>
            <div>
                <h4>Series: {{ $comic->series }}</h4>
                <p>Description: {{ $comic->description }}</p>
            </div>
        </div>
    </div>
    <div class="container-show">
        <pre>€{{ $comic->price }} | {{ $comic->sale_date }} | {{ $comic->type }}</pre>
    </div>
@endsection