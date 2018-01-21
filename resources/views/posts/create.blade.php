@extends('layouts.app')
@section('title', 'Create')
@section('content')
    <div class="container">
        <h3 class="title is-2">Créer votre articles :</h3>
        <p class="subtitle is-5 has-text-grey">Remplissez les champs si dessous.</p>
        <div class="columns">
            <div class="column is-8">
                <form method="POST" action="/posts">
                    {{ csrf_field() }}
                    <div class="field">
                        <label class="label">Title</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Title" name="title">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Content</label>
                        <div class="control">
                            <textarea class="textarea" placeholder="Your Article" name="body"></textarea>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="column is-4">
                @include('layouts.partials.sidebar')
            </div>
        </div>
    </div>
@endsection