@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Note</h1>
        <form method="POST" action="{{ route('notes.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="body">Content</label>
                <textarea name="body" id="body" class="form-control" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="{{ route('notes.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
