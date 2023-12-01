@extends('layouts.app')

@section('content')
    <h2>{{ $page->title }}</h2>
    {!! $page->content !!}

    <a href="{{ route('pages.index') }}" class="btn btn-secondary">Back to Pages</a>
@endsection
