@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Notes</h1>
        @foreach ($notes as $n)
            {{ dd($n->content) }}
        @endforeach
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($notes as $note)
                    <tr>
                        <td>{{ $note->title }}</td>
                        <td>{{ $note->content }}</td>
                        <td>
                            <a href="{{ route('notes.show', $note->id) }}" class="btn btn-primary btn-sm">View</a>
                            <a href="{{ route('notes.edit', $note->id) }}" class="btn btn-secondary btn-sm">Edit</a>
                            <form method="POST" action="{{ route('notes.destroy', $note->id) }}" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('notes.create') }}" class="btn btn-success">Add Note</a>
    </div>
@endsection
