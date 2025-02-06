<html>
    <head>
        <title>@yield('title')</title>
        <style>
        body {font-size:16pt; color:#999; }
        h1{ font-size:100pt; text-align:right; color:#eee; 
            margin:-40px 0px -50px 0px; }
        </style>
    </head>
    <body>
        <h1>@yield('title')</h1>
        @section('menubar')
        <h2 class="menutitle">※メニュー</h2>
        <ul>
            <li>@show</li>
        </ul>
        <hr size="1">
        <div class="content">
            @yield('content')
        </div>
        <div class="footer">
            @yield('footer')
        </div>
    </body>
</html>