<!-- resources/views/pages/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Pages</h2>

    <a href="{{ route('pages.create') }}" class="btn btn-success">Create Page</a>

    @if ($pages->count())
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pages as $page)
                    <tr>
                        <td>{{ $page->id }}</td>
                        <td>{{ $page->title }}</td>
                        <td>
                            <a href="{{ route('pages.show', $page->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('pages.destroy', $page->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No pages found.</p>
    @endif
@endsection
