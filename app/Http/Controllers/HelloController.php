<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

// global $head, $style, $body, $end;
// $head = '<html><head>';
// $style = <<<EOF
// <style>
// body {font-size:16pt; color:#999; }
// h1{ font-size:100pt; text-align:right; color:#eee; 
//     margin:-40px 0px -50px 0px; }
// </style>
// EOF;
// $body = '</head><body>';
// $end = '</body></html>';

// function tag($tag, $txt){
//     return "<{$tag}>" . $txt . "</{$tag}>";
// }

class HelloController extends Controller
{
    public function index(){
        $data = ['himari','kento','kotaro'];
        return view('hello.index', ['data'=>$data]);
    }

    // public function post(Request $request)
    // {
    //     return view('hello.index', [ 
    //         'msg'=>$request->msg
    //     ]);
    // }

}
?>