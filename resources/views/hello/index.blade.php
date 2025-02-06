@extends('layouts.helloapp')
@section('title','Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>小太郎がめっちゃ可愛いです！</p>
@endsection

@section('footer')
copyright 2020 himari.
@endsection