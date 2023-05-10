@extends('layouts.app')

@section('content')
    <div class="container mt-5 border rounded py-4 px-3">

        <form method="POST" action="{{ route('notes.update', $note->id) }}">
            @csrf
            @method('PUT')
            <div class="col rounded ">
                <h2>{{ $note->title }}</h2>
                <div class="form-group p-0 mt-3">

                    <textarea name="body" id="body" class="form-control bg-transparent border-0 p-0 " rows="15" required>{{ $note->body }}</textarea>
                </div>
                <a href="{{ route('notes.edit', $note->id) }}" class="btn btn-secondary ">Edit Note</a>
                <a href="{{ route('notes.delete', $note->id) }}" class="btn btn-danger ">Delete Note</a>
            </div>

        </form>
    </div>
@endsection
