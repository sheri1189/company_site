<!doctype html>
<html class="no-js" lang="en">

<head>
    {{-- Header includes --}}
    <x-header.header-files />
    {{-- End header includes --}}
</head>

<body>
    <div class="page-wrapper pbmit-bg-color-light">
        {{-- Navbar includes --}}
        <x-navbar.content />
        {{-- End navbar includes --}}

        {{-- Main content --}}
        @yield('main-content')
        {{-- End main content --}}

        {{-- Footer includes --}}
        <x-footer.footer />
        {{-- End footer includes --}}
    </div>

    {{-- Footer files includes --}}
    <x-footer.footer-files />
    {{-- End footer files includes --}}
</body>

</html>
