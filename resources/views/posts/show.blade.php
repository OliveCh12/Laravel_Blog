@extends ('layouts.app')
@section('title', 'Show')
@section ('content')
    <div class="container">
        <article>
            <h3 class="title is-3">{{$post->title}}</h3>
            <p class="subtitle is-5 has-text-grey">{{ $post->created_at->diffForHumans() }}</p>
            <p>{{ $post->body }}</p>
            <br>
            <a href="/" class="button is-light is-rounded">Return Home <i class="fas fa-home button-icon"></i></a>
        </article>
        <hr>
        <section class="section-comments">
            <h3 class="title is-3">Commentaires :</h3>
            <form method="POST" action="/posts/{{ $post->id }}/comments">
                {{ csrf_field() }}
                <div class="field">
                    <label class="label">Comment</label>
                    <div class="control">
                        <textarea class="textarea" placeholder="Your comment" name="body" rows="1"></textarea>
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <button class="button is-link">Submit</button>
                    </div>
                </div>

            </form>
            @foreach($post->comments as $comment)
                <article>
                    <p class="">{{  $comment->body }}</p>
                    <p class="subtitle is-7 has-text-grey">{{ $comment->created_at->diffForHumans() }}</p>
                </article>
            @endforeach

        </section>
    </div>
@endsection