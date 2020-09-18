<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta charset="utf-8">
    <title>@yield('title') | Community Center Booking</title>
    @include('layouts.partials.header')
</head>
<body>
    <div id="wrapper">
        @include('layouts.partials.top_header')
        @yield("body_content")
        @include('layouts.partials.footer')
    </div>
@include('layouts.script.js')
</body>
</html>
