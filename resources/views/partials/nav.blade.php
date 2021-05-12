{{-- <pre>{{ dump(request()) }}</pre> --}}
{{-- <pre>{{ dump(request()->url()) }}</pre> --}}
{{-- <pre>{{ dump(request()->path()) }}</pre> --}}
{{-- <pre>{{ dump(request()->routeIs('portfolio.index')) }}</pre> --}}

<nav>
    <ul>
        <li class="{{ setActive('home') }}"><a href="/">Home</a></li>
        <li class="{{ setActive('about') }}"><a href="/about">About</a></li>
        <li class="{{ setActive('contact') }}"><a href="/contact">Contact</a></li>
        <li class="{{ setActive('portfolio.index') }}"><a href="/portfolio">Portfolio</a></li>
    </ul>
</nav>
