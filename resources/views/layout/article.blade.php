<div class="blog-post">
    <h2 class="blog-post-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
    <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} | {{$post->created_at->diffForHumans()}}</p>
<section>
    <article> {{str_limit($post->body, $limit = 100, $end = '')}} <a class="btn btn-sm btn-primary " href="/posts/{{$post->id}}">red More...</a>
        {{str_slug($post->title,'-')}}


    </article>
</section>

</div>