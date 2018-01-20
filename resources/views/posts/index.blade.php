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
                <h3 class="title is-2">Sidebar</h3>
                <aside class="menu">
                    <p class="menu-label">
                        General
                    </p>
                    <ul class="menu-list">
                        <li><a>Dashboard</a></li>
                        <li><a>Customers</a></li>
                    </ul>
                    <p class="menu-label">
                        Administration
                    </p>
                    <ul class="menu-list">
                        <li><a>Team Settings</a></li>
                        <li>
                            <a class="is-active">Manage Your Team</a>
                            <ul>
                                <li><a>Members</a></li>
                                <li><a>Plugins</a></li>
                                <li><a>Add a member</a></li>
                            </ul>
                        </li>
                        <li><a>Invitations</a></li>
                        <li><a>Cloud Storage Environment Settings</a></li>
                        <li><a>Authentication</a></li>
                    </ul>
                    <p class="menu-label">
                        Transactions
                    </p>
                    <ul class="menu-list">
                        <li><a>Payments</a></li>
                        <li><a>Transfers</a></li>
                        <li><a>Balance</a></li>
                    </ul>
                </aside>
            </div>

        </div>
    </div>
@endsection