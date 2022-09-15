@extends('layouts.main')

@section('main-content')
    <form action="{{ route('comics.update', $comic->id) }}" method="post">
        @method('PUT')
        @csrf

        <div>
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ $comic->title }}">
        </div>

        <div>
            <label for="description">Description</label>
            <textarea class="w-textarea" name="description" id="description" cols="30" rows="10">
                {{ $comic->description }}"
            </textarea>
        </div>

        <div>
            <label for="thumb">Thumb</label>
            <input type="text" name="thumb" value="{{ $comic->thumb }}">
        </div>

        <div>
            <label for="price">Price</label>
            <input type="text" name="price" value="{{ $comic->price }}">
        </div>

        <div>
            <label for="series">Series</label>
            <input type="text" name="series" value="{{ $comic->series }}">
        </div>

        <div>
            <label for="sale-date">Sale Date</label>
            <input type="date" name="sale-date" value="{{ $comic->sale_date }}">
        </div>

        <div>
            <label for="type">Type</label>
            <input type="text" name="type" value="{{ $comic->type }}">
        </div>

        <div>
            <button class="btn-edit" type="submit">Edit</button>
            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="form-delete">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn-delete">
                    Delete
                </button>
            </form>
        </div>
    </form>
@endsection