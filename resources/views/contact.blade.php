@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>

    {{-- {{ $errors }} --}}
    {{-- {{ var_dump($errors->any()) }} --}}
    <ul>

        @if ($errors->any())
            {{-- {{ var_dump($errors->all()) }} --}}
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        @endif
    </ul>

    <form action="{{ route('contact') }}" method="POST">
        {{-- {{ csrf_field() }} --}}
        @csrf

        <input type="text" name="name" placeholder="Nombre..." value="{{ old('name') }}"> {{-- required --}}
        <br>
        {{-- {{ $errors->first('name') }}<br> --}}
        {!! $errors->first('name', '<small>:message</small>') !!}<br>

        <input type="text" name="email" placeholder="Email..." value="{{ old('email') }}">
        <br>
        {{ $errors->first('email') }}<br>

        <input type="text" name="subject" placeholder="Asunto..." value="{{ old('subject') }}">
        <br>
        {{ $errors->first('subject') }}<br>

        <textarea name="content" placeholder="Mensaje...">{{ old('content') }}</textarea>
        <br>
        {{ $errors->first('content') }}<br>

        <button>Enviar</button>
    </form>
@endsection
