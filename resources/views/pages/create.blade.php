@extends('layouts.app')

@section('content')
    <h2>Create Page</h2>

    <form action="{{ route('pages.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" class="form-control" rows="4" required></textarea>
        </div>
        <!-- Add other form fields as needed -->

        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
