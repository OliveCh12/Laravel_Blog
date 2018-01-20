@extends('layouts.app')
@section('content')
    <div class="container">
        @foreach ($posts as $post)
            @include('layouts.partials.articles')
        @endforeach
    </div>
@endsection