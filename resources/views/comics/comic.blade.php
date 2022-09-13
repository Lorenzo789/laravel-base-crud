@extends('layouts.main')

@section('main-content')
    <div>
        <h2>{{ $comic->series }}</h2>
        <h3>{{ $comic->title }}</h3>
        <p>{{ $comic->description }}</p>
        <pre>{{ $comic->price }}</pre>
    </div>
@endsection