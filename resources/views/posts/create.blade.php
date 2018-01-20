@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 class="title is-3">Post <strong class="has-text-primary">Create</strong> Method</h3>
        <div class="columns">
            <div class="column is-6">
                <form method="POST" action="/post">
                    {{ csrf_field() }}
                    <div class="field">
                        <label class="label">Title</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Title" name="title" id="title">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Message</label>
                        <div class="control">
                            <textarea class="textarea" placeholder="Textarea" name="body" id="body"></textarea>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">Submit</button>
                        </div>
                        <div class="control">
                            <button class="button is-light" type="reset" href="/">Cancel</button>
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