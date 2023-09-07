@extends('layout.index');

@section('content')
    <form 
        class="accountForm" 
        @if ($mode === "all")
            action="/addWord" 
        @else
            action="/addDefinition/{{ $word_id }}" 
        @endif
        method="POST"
    >
        @csrf
        @if ($mode === "all")
            <input placeholder="Word name" name="name" type="text" />
        @endif
        <textarea placeholder="definition" name="definition_text"></textarea>
        <button type="submit">ADD</button>
    </form>
@endsection