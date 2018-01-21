@extends('layouts.app')
@section('title', 'Index')
@section('content')
    <div class="container">
        <div class="columns">
            <div class="column is-8 is-12-mobile">
                <h3 class="title is-2">Les derniers articles :</h3>
                <p class="subtitle is-5 has-text-grey">Cette page présente les dernières actualités :</p>
                @foreach ($posts as $post)
                    @include('layouts.partials.articles')
                @endforeach
            </div>
            <div class="column is-4">
                @include('layouts.partials.sidebar')
        </div>
    </div>
@endsection