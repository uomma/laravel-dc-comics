@extends('layouts.app')

@section('page.main')
    <ul class="list-unstyled">
       
        <li>modifica pasta: {{$comic->title}}
        </li>
             <li>
            <a href="{{ route('comics.index') }}" class="btn btn-primary">goback    </a>
        </li>

        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">title</label>
              <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">

            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{$comic->description}}">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb"value="{{$comic->thumb}}">
  
              </div>
            <div class="mb-3 form-check">
                <label for="price" class="form-label">price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{$comic->price}}">
            </div>
            <div class="mb-3 form-check">
                <label for="series" class="form-label">series</label>
                <input type="number" class="form-control" id="series" name="series" value="{{$comic->series}}">
            </div>
            <div class="mb-3 form-check">
                <label for="sale_date" class="form-label">sale_date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
            </div>
            <div class="mb-3">
                <label for="artists" class="form-label">artists</label>
                <input type="text" class="form-control" id="artists" name="artists"value="{{$comic->artists}}">
  
              </div> <div class="mb-3">
                <label for="writers" class="form-label">writers</label>
                <input type="text" class="form-control" id="writers" name="writers" value="{{$comic->writers}}">
  
              </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </ul>
@endsection
