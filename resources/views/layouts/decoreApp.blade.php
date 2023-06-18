<!DOCTYPE html>
<html>
<head>
    <title> A Decore </title>
    @include('includes.styles')
</head>
<body>
    <!-- welcome  :) -->
    {{-- <div class="lodding_1">
        <ul>
            <li>l</li>
            <li>o</li>
            <li>a</li>
            <li>d</li>
            <li>i</li>
            <li>n</li>
            <li>g</li>
        </ul>
    </div> --}}
    <!-- start header  -->
    
    <!-- end header  -->

    @yield('content')

@include('includes.footer')


@include('includes.scripts')

</body>
<!-- end-body
=================== -->

</html>