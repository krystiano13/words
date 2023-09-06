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
    <div class="wordSection">
        <h2 class="word">{{ $word[0] -> name }}</h2>
        <h3 class="date">Created at: {{ $word[0] -> created_at }}</h3>
        <h2 class="desc">Description:</h2>
        @if (isset($text))
            <p>{{ $text }}</p>
        @else
            <p>This word hasn't got his definition</p>
        @endif
    </div>
</main>
@endsection