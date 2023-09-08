@extends('layout.index')

@section('content')

<div class="formContainer">
    <form class="accountForm" action="/login" method="POST">
        @csrf
        <input placeholder="username" name="name" type="text" value="{{ old('name') }}" />
        <input placeholder="password" name="password" type="password" />
        <button type="submit">Login</button>
    </form>
</div>

@endsection