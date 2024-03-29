@extends('layout.index')

@section('content')
<div class="formContainer">
    <form class="accountForm" action="/register" method="POST">
        @csrf
        <input placeholder="username" name="name" type="text" value="{{ old('name') }}" />
        <input placeholder="email" name="email" type="email" value="{{ old('email') }}"/>
        <input placeholder="password" name="password" type="password" />
        <input placeholder="repeat password" name="password_confirmation" type="password" />
        <button type="submit">Create Account</button>
    </form>
</div>
@endsection