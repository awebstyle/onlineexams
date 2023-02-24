@include('template.partials._head')

<body>
    @include('template.partials._header')
    @yield('content')
    @if(Session::has('developer') || Request::is('/'))
        @include('template.partials._footer')
    @endif
</body>
</html>