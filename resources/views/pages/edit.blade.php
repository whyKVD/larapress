@extends('layouts.app')

@section('style')
#main-content{
float: right;
width: 80%;
}
aside{
position: absolute;
float: left;
width: 18%;
}
main:after{
display: table;
content: '';
clear: both;
}
@endsection

@section('content')
    <div id="main-content">
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
    </div>
    <aside>
      <h3>Menù</h3>
      <label for="stylesheetInput">Aggiungi File css</label>
      <input type="text" name="stylesheet" id="stylesheetInput"/>
      <ul>
      @foreach ($stylesheets as $sheet)
        <li>$sheet</li>
      @endforeach
      </ul>

      <a href="{{ route('pages.index') }}" class="btn btn-secondary">Back to Pages</a>

    </aside>
@endsection
