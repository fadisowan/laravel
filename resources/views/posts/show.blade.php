@extends('layout.master')

@section('content')
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>


    <hr>
    <div class="list-group">

        @foreach($post->comments as $comment)
            <li class="list-group-item">
                <strong>{{$comment->created_at->diffForHumans()}} &nbsp;</strong>{{$comment->body}}

            </li>
        @endforeach
<hr>
        <div class="card">
            <div class="card-block">
                <form method="post" action="/posts/{{$post->id}}/comment">

                    {{csrf_field()}}
                    <div class="form-group">
                        <textarea placeholder="Some Comments." id="body" name="body" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>
                    @include('layout.error')
                </form>
            </div>
        </div>
    </div>
@endsection