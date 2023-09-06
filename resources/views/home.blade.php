@extends('layout.index')

@section('content')
    <main>
        <div class="userPanel">
            <section class="userSection">
                @auth
                    <h1>{{ auth() -> user() -> name }}</h1>
                @endauth
            </section>
            <div class="userButtons">
                @auth
                    <a href="/">Add Word</a>
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>           
                @else
                    <a href="/loginView">Login</a>
                    <a href="/registerView">Register</a>
                @endauth
            </div>
        </div>
        <div class="words">

        </div>
    </main>
@endsection