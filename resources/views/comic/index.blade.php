@extends('layouts.app')


@section('page.title')
    elenco comics
@endsection

@section('page.main')
    <ul>
        <table class="table">
            <a href="{{route('comics.create')}}" class="btn btn-primary">crea comic</a>
            <thead>
                <tr>
                    <th scope="col">title</th>
                    <th scope="col">description</th>
                    <th scope="col">price</th>
                    <th scope="col">info</th>

                </tr>
            </thead>
            <tbody>
                
                    @foreach ($comics as $comic)
                    <tr class="list-unstyled">
                        <th scope="row">
                            <li>{{ $comic->title }}</li>
                        </th>
                        <td colspan="1">{{ $comic->description }}</td>
                        <td>{{ $comic->price }}</td>
                        <td><a href="{{route('comics.show', $comic  ->id)}}" class="btn btn-primary">info</a></td>
                    </tr>
                    @endforeach
               
            </tbody>
        </table>

    </ul>
@endsection
