@extends('layouts.app')

{{-- 
@section('page.title')
    {{ $comics->title }}
@endsection --}}

@section('page.main')
<ul class="list-unstyled">
    <li>{{ $comics->title }}
    </li>
    <li>    {{ $comics->description }}
    </li>
</ul>

@endsection
