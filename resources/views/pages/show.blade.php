@extends('layouts.nonav')

@section('content')
    <h2>{{ $page->title }}</h2>
    </br>
    {!! $page->content !!}

    <a href="{{ route('pages.index') }}" class="btn btn-secondary">Back to Pages</a>
@endsection
