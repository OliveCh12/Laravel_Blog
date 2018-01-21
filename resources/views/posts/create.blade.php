@extends('layouts.app')
@section('title', 'Create')
@section('content')
    <div class="container">
        <div class="columns">
            <div class="column is-6">
                <form method="POST" action="/posts">
                    {{ csrf_field() }}
                    <div class="field">
                        <label class="label">Title</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Title" name="title">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Message</label>
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
            <div class="column is-6">
                <h3>Informations suplémentaires</h3>
            </div>
        </div>
    </div>
@endsection