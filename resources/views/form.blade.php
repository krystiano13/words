@extends('layout.index');

@section('content')
<div class="formContainer">
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
        <textarea placeholder="Definition" name="definition_text"></textarea>
        <button type="submit">ADD</button>
    </form>
</div>
@endsection