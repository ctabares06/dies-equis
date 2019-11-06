@extends('layouts.app')

@section('content')
<div class="container col-md-10 col-sm-12">
        <div class="text-right">
            <a href="{{ route('post.index') }}" class="btn btn-outline-primary">View Posts</a>
        </div>
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <div class="card my-3">
                <div class="card-header bg-light text-dark text-center">
                    <input type="text" class="form-control" placeholder="Title for the post" name="title">
                    @error('title')
                    <div class="text-right text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="card-body text-center">
                    <textarea name="content" class="form-control" rows="10">

                    </textarea>
                    @error('content')
                    <div class="text-right text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="card-footer text-right"> 
                    <button type="submit" class="btn btn-outline-success">Create post</button>
                 </div>
            </div>
        </form>
    </div>
@endsection