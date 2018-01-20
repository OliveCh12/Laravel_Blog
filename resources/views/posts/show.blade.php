@extends ('layouts.app')
@section ('content')
    <div class="container">
        <article>
            <h3 class="title is-3">{{$post->title}}</h3>
            <p class="subtitle is-5 has-text-grey">{{ $post->created_at->diffForHumans() }}</p>
            <p>{{ $post->body }}</p>
        </article>
    </div>
@endsection