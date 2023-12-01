@extends('layouts.app')

@section('content')
    <h2>Edit Page</h2>

    <form action="{{ route('pages.update', $page->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $page->title }}" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" class="form-control" rows="4" required>{{ $page->content }}</textarea>
        </div>
        <!-- Add other form fields as needed -->

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
