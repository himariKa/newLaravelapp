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
        <p>loopディレクティブの利用</p>
        <ol>
            @foreach($data as $item)
                @if($loop->first)
                    <p>データ一覧を表示</p><ul>
                @endif
                    <li>{{$loop->iteration}}.{{$item}}</li>
                @if($loop->last)
                </ul><p>ここまで！</p>
                @endif
            @endforeach
        </ol>
        {{-- <form method="POST" action="/hello">
            @csrf
            <input type="text" name="msg">
            <input type="submit">
        </form> --}}
    </body>
</html>