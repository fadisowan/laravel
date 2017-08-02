@extends('layout.master')

@section('content')
    <h1>Publish a Post</h1>
    <hr>

    <form method="post" action="/posts">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" id="body" rows="4"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Publish</button>
        </div>
           @include('layout.error')
    </form>
@endsection