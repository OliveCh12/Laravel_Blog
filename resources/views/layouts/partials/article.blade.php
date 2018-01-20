<article>
    <br>
    <h3 class="title is-3">{{$post->title}}</h3>
    <p class="subtitle is-5 has-text-grey">{{ $post->created_at->toFormattedDateString() }}</p>
    <hr>
    <p>{{$post->body}}</p>
    <br>
    <a href="" class="button is-primary">Read More >></a>
    <br>
</article>