@extends('layouts.main')

@section('main-content')
    @include('comics.includes.formEditUpdate', [
        'routeName' => 'comics.store',
        'methodName' => 'POST',
    ])
@endsection