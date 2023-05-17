@extends('layouts.app')

@section('page.main')
    <ul class="list-unstyled">
        <li>
            <a href="{{ route('comics.index', $comic->id) }}" class="btn btn-primary">torna all elenco</a>
        </li>
        <li>{{ $comic->title }}
        </li>
        <li> {{ $comic->description     }}
        </li>
    </ul>
@endsection
