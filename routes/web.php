<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

$html = <<<EOF
<html>
<head>
<title>Hello</title>
<style>
body { font-size:16pt; color:#999; }
h1 { font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px; }
</style>
</head>
<body>
<h1>Hello</h1>
<p>This is sample page.</p>
<p>これは、サンプルで作ったページです</p>
</body>
</html>
EOF;
// Route::get('hello/{msg?}',function($msg='no message.') {
//     $html = <<<EOF
//     <html>
//     <head>
//     <title>Hello</title>
//     <style>
//     body { font-size:16pt; color:#999; }
//     h1 { font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px; }
//     </style>
//     </head>
//     <body>
//     <h1>Hello</h1>
//     <p>{$msg}</p>
//     <p>これは、サンプルで作ったページです</p>
//     </body>
//     </html>
//     EOF;
//     return $html;
// });

// Route::get('hello','App\Http\Controllers\HelloController@index');
// Route::get('hello/other','App\Http\Controllers\HelloController@other');

Route::get('hello','App\Http\Controllers\HelloController@index');


require __DIR__.'/auth.php';
