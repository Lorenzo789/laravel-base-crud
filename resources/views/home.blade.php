@extends('layouts.main')

{{-- @dump($comics) --}}

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
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>{{ $comic->seies }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->type }}</td>
                </tr>
            @empty

            @endforelse
        </table>
    </div>
@endsection