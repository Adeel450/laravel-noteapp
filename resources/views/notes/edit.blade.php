@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Note</h1>
        <form method="POST" action="{{ route('notes.update', $note->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $note->title }}" required>
            </div>
            <div class="form-group">
                <label for="body">Content</label>
                <textarea name="body" id="body" class="form-control" rows="5" required>{{ $note->body }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('notes.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
