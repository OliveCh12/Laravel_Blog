<article class="article-{{$post->id}}">
    <h3 class="title is-3">{{$post->title}}</h3>
    <p class="subtitle is-5 has-text-grey">{{ $post->created_at->diffForHumans() }}</p>
    <p>{{ substr($post->body, 0, 500) . ' ect...'}}</p>
    <br>
    <span class="tag is-rounded">Article n°{{$post->id}}</span>
    <br><br>
    <a href="/posts/{post}" class="button is-primary is-rounded">Read More >></a>
</article>
<hr>