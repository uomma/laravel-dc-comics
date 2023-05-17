@extends('layouts.app')


@section('page.title')
    elenco comics
@endsection

@section('page.main')
    <ul>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">title</th>
                    <th scope="col">description</th>
                    <th scope="col">price</th>
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
                    </tr>
                    @endforeach
               
            </tbody>
        </table>

    </ul>
@endsection
