{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Dashboard</div>--}}

                {{--<div class="panel-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--You are logged in!--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}

{{--@extends('layouts.app')--}}

{{--@section('content')--}}
    {{--<div id="title" style="text-align: center;">--}}
        {{--<h1>Learn Laravel 5</h1>--}}
        {{--<div style="padding: 5px; font-size: 16px;">Laravel</div>--}}
    {{--</div>--}}
    {{--<hr>--}}
    {{--<div id="content">--}}
        {{--<ul>--}}
            {{--@foreach ($articles as $article)--}}
                {{--<li style="margin: 50px 0;">--}}
                    {{--<div class="title">--}}
                        {{--<a href="{{ url('article/'.$article->id) }}">--}}
                            {{--<h4>{{ $article->title }}</h4>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="body">--}}
                        {{--<p>{{ $article->body }}</p>--}}
                    {{--</div>--}}
                {{--</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--@endsection--}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<div id="title" style="text-align: center;">
    <h1>Laravel</h1>
    <div style="padding: 5px; font-size: 16px;">Laravel</div>
</div>
<hr>
<div id="content">
    <ul>
        @foreach ($articles as $article)
            <li style="margin: 50px 0;">
                <div class="title">
                    <a href="{{ url('article/'.$article->id) }}">
                        <h4>{{ $article->title }}</h4>
                    </a>
                </div>
                <div class="body">
                    <p>{{ $article->body }}</p>
                </div>
            </li>
        @endforeach
    </ul>
</div>

</body>
</html>
