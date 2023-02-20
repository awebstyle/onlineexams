@include('template.partials._head')

<body>
    @include('template.partials._header')
    @yield('content')
    @include('template.partials._footer')
</body>
</html>