
@extends('layout')

@section('title', 'Home')

@section('content')
    <h1>Home</h1>

    Bienvenid@ <?php echo $nombre ?? 'Invitado' ?>
    {{-- Blade el motor de plantillas --}}
    Bienvenid@ {{ $nombre ?? 'Invitado' }}

    {{-- Blade el motor de plantillas, No permite la inyeccion de codigo --}}
    {{-- Bienvenid@ <?php echo "<script>alert('Hola')</script>" ?> --}}
    Bienvenid@ {{ "<script>alert('Hola')</script>" }}
@endsection
