<!doctype html>
<html lang="en">

    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        {{-- Style --}}
        @stack('before-style')
        @include('includes.style')
        @method('after-style')
    </head>

    <body>
        <!-- WRAPPER -->
        <div id="wrapper">
            {{-- Navbar --}}
            @include('includes.navbar')

            {{-- Sidebar --}}
            @include('includes.sidebar')
            <!-- MAIN -->
            <div class="main">
                <!-- MAIN CONTENT -->
                <div class="main-content">
                    @yield('content')
                </div>
                <!-- END MAIN CONTENT -->
            </div>
            <!-- END MAIN -->
            <div class="clearfix"></div>
            @include('includes.footer')
        </div>
        <!-- END WRAPPER -->
        
        {{-- Script --}}
        @stack('before-script')
        @include('includes.script')
        @stack('after-script')
    </body>
</html>
