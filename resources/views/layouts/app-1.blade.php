<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body>

    @include('layouts.header')
    @include('layouts.sidebar')
    <main>
        @yield('content')
    </main>
    @include('layouts.footer')
    @stack('scripts')

</body>

</html>
