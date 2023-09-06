@extends('layout.index')

@section('content')
    <form class="accountForm" action="/login" method="POST">
        @csrf
        <input placeholder="username" name="name" type="text" />
        <input placeholder="password" name="password" type="password" />
        <button type="submit">Login</button>
    </form>
@endsection