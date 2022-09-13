@extends('layouts.main')

@section('main-content')
    <div>
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
                </tr>
            @empty

            @endforelse
        </table>
    </div>
@endsection