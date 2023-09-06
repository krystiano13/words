@extends('layout.index')

@section('content')
    <form class="accountForm" action="/register" method="POST">
        @csrf
        <input placeholder="username" name="name" type="text" />
        <input placeholder="email" name="email" type="email"/>
        <input placeholder="password" name="password" type="password" />
        <input placeholder="repeat password" name="password_confirmation" type="password" />
        <button type="submit">Create Account</button>
    </form>
@endsection