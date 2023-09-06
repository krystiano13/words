@extends('layout.index')

@section('content')
    <main>
        <div class="userPanel">
            <section class="userSection">
                @auth
                    <h1>Welcome {{ auth() -> user() }}</h1>
                @endauth
            </section>
            <div class="userButtons">
                @auth
                    <button>Add Word</button>
                    <button>Logout</button>
                @else
                    <button>Login</button>
                    <button>Reguster</button>
                @endauth
            </div>
        </div>
        <div class="words">

        </div>
    </main>
@endsection