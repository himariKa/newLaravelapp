<html>
    <head>
        <title>Hello/Index</title>
        <style>
        body {font-size:16pt; color:#999; }
        h1{ font-size:100pt; text-align:right; color:#eee; 
            margin:-40px 0px -50px 0px; }
        </style>
    </head>
    <body>
        <h1>Blade/Index</h1>
        <p>forディレクティブの利用</p>
        <ol>
            @for($i = 1;$i<=10;$i++)
                {{-- 奇数の場合 --}}
                @if($i % 2 == 1)
                    <li>奇数です
                    @continue
                {{-- 10以下で偶数の場合 --}}
                @elseif($i <= 10)
                    <li>{{$i}}は偶数です
                @else
                    @break
                @endif
            @endfor
        </ol>
        {{-- <form method="POST" action="/hello">
            @csrf
            <input type="text" name="msg">
            <input type="submit">
        </form> --}}
    </body>
</html>