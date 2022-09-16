@extends('layouts.main')

@section('main-content')
    <form action="{{ route('comics.store') }}" method="post">
        @csrf

        <div>
            <label for="title">Title</label>
            <input type="text" name="title">
            @error('title')
                <div class="validation-failed">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <label for="description">Description</label>
            <textarea class="w-textarea" name="description" id="description" cols="30" rows="10">
                
            </textarea>
            @error('description')
                <div class="validation-failed">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <label for="thumb">Thumb</label>
            <input type="text" name="thumb">
            @error('thumb')
                <div class="validation-failed">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <label for="price">Price</label>
            <input type="text" name="price">
            @error('price')
                <div class="validation-failed">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <label for="series">Series</label>
            <input type="text" name="series">
            @error('series')
                <div class="validation-failed">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <label for="sale-date">Sale Date</label>
            <input type="date" name="sale-date">
            @error('sale-date')
                <div class="validation-failed">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <label for="type">Type</label>
            <input type="text" name="type">
            @error('type')
                <div class="validation-failed">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <input type="submit" value="send">
    </form>
@endsection