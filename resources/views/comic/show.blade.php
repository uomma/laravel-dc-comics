@extends('layouts.app')


@section('page.title')
    {{$comics->title}}
@endsection

@section('page.main')
   
        {{$comics->description}}


@endsection
