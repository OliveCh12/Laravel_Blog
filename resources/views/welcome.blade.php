@extends('layouts.app')
@section('content')
    <section class="hero is-info">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Bienvenue sur le Blog
                </h1>
                <h2 class="subtitle">
                    Laravel Project made by "Olivier Chemla" & "Noutcha Tchatat"
                </h2>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="container">
            <a href="{{ URL::to('posts') }}" class="button is-primary">Clickez</a>
        </div>
    </div>
@endsection
