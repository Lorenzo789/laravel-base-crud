@extends('layouts.main')

@section('main-content')
    <div class="centered-table">
        <table>
            <tr>
                <th>Title</th>
                <th>Price</th>
                <th>Series</th>
                <th>Sale_Date</th>
                <th>Type</th>
            </tr>

            @forelse ($comics as $comic )
                <tr>
                    <td>
                        <a href="{{ route('comics.show', $comic->id) }}">
                            {{ $comic->title }}
                        </a>
                    </td>
                    <td>{{ $comic->price }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>
                        <a href="{{ route('comics.edit', $comic->id) }}"><button>Edit</button></a>
                    </td>
                </tr>
            @empty
            @endforelse
        </table>
    </div>
@endsection