@extends('layouts.app')

@section('content')
    <div class="container col-md-10 col-sm-12">
        <div class="text-right">
            <a href="{{ route('post.create') }}" class="btn btn-outline-success">Create Post</a>
        </div>
        @foreach ($data as $item)
            <div class="card my-3">
                <div class="card-header bg-light text-dark text-center">
                    <b>{{ $item->title }}</b>
                </div>
                <div class="card-body">
                    <p>{{ $item->content }}</p>
                    <em>{{ $item->User->name }}</em>
                </div>
                @if ($item->user_id == auth()->user()->id)
                    <div class="card-footer text-right">
                        <form action="{{ route('post.destroy', ['post' => $item->id]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{ route('post.edit', ['post' => $item->id]) }}" class="btn btn-outline-info">Edit</a>
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
@endsection