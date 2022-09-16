@extends('layouts.main')

@section('main-content')
    <form action="{{ route('comics.store') }}" method="post">
        @csrf

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div>
            <label for="title">Title</label>
            <input type="text" name="title">
        </div>

        <div>
            <label for="description">Description</label>
            <textarea class="w-textarea" name="description" id="description" cols="30" rows="10">
                
            </textarea>
        </div>

        <div>
            <label for="thumb">Thumb</label>
            <input type="text" name="thumb">
        </div>

        <div>
            <label for="price">Price</label>
            <input type="text" name="price">
        </div>

        <div>
            <label for="series">Series</label>
            <input type="text" name="series">
        </div>

        <div>
            <label for="sale-date">Sale Date</label>
            <input type="date" name="sale-date">
        </div>

        <div>
            <label for="type">Type</label>
            <input type="text" name="type">
        </div>

        <input type="submit" value="send">
    </form>
@endsection