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
        <section class="name">
            <h2 class="title">{{ $word[0] -> name }}</h2>
        </section>
        <section class="creationDate">
            <h2 class="title">Created at:</h2>
            <h3 class="date">{{ $word[0] -> created_at }}</h3>
        </section>
        <section class="definition">
            <h2 class="title">Definition:</h2>
            @if (isset($text))
                <p>{{ $text }}</p>
            @else
                <p>This word hasn't got its definition</p>

                @auth
                    <p>You can add it using this button</p>
                    <a href="/addDefinition">Add</a>
                @endauth
            @endif
        </section>
    </div>
</main>
@endsection