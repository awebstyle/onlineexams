@include('template.partials._head')

<body>
    @include('template.partials._header')
    @yield('content')
    @if(Request::is('admin/*'))
        
    @else
        @include('template.partials._footer')
    @endif
</body>
</html>