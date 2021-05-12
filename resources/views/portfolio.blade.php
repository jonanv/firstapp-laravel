@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <h1>Portfolio</h1>

    <ul>
        {{-- <?php
            foreach ($portfolio as $portfolioItem) {
                echo "<li>" . $portfolioItem['title'] . "</li>";
            }
        ?> --}}

        {{-- <?php foreach ($portfolio as $portfolioItem) { ?>
            <li><?=$portfolioItem['title']?></li>
        <?php } ?> --}}

        {{-- <?php foreach ($portfolio as $portfolioItem): ?>
            <li>{{ $portfolioItem['title'] }}</li>
        <?php endforeach ?> --}}

        {{-- Blade --}}
        {{-- @if ($portfolio)
            @foreach ($portfolio as $portfolioItem)
                <li>{{ $portfolioItem['title'] }}</li>
            @endforeach
        @else
            <li>No hay proyectos para mostrar</li>
            @endif --}}

        @forelse ($portfolio as $portfolioItem)
            {{-- <li>{{ $portfolioItem['title'] }} <pre>{{ var_dump($portfolio) }}</pre></li> --}}
            {{-- <li>{{ $portfolioItem['title'] }} <small>{{ $loop->last ? 'Es el último' : '' }}</small></li> --}}
            <li>{{ $portfolioItem['title'] }} <small>{{ $loop->first ? 'Es el primero' : '' }}</small></li>
        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse
    </ul>
@endsection
