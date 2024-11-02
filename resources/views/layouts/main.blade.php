<!DOCTYPE html>
<html lang="en">

@include('components.head')

<body class="d-flex flex-column min-vh-100">
    @include('components.navbar')
    <main class="flex-grow-1">
        @yield('container')
    </main>
    @include('components.footer')
    @include('components.js-script')
</body>

</html>
