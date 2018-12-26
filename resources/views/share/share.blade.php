@extends('layout')



@section('content')
    <link href="{{ asset('css/base.css') }}" rel="stylesheet">
    <link href="{{ asset('css/share.css') }}" rel="stylesheet">
    <link href="{{ asset('css/m.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery.min.js') }}" ></script>
    <script src="{{ asset('js/share.js') }}"></script>
    <!--[if lt IE 9]>
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <![endif]-->
    <article>
    <div class="topbox">
        <ul>
            <li><i><a href="/"><span class="tnum">1</span><span class="tpic"><img src="images/5.jpg"></span><span class="toptext">html5个人博客模板《simple》</span></a></i></li>
            <li><i><a href="/"><span class="tnum">2</span><span class="tpic"><img src="images/mb2.jpg"></span><span class="toptext">html5个人博客模板《simple》</span></a></i></li>
            <li><i><a href="/"><span class="tnum">3</span><span class="tpic"><img src="images/mb3.jpg"></span><span class="toptext">html5个人博客模板《simple》</span></a></i></li>
            <li><i><a href="/"><span class="tnum">4</span><span class="tpic"><img src="images/mb4.jpg"></span><span class="toptext">html5个人博客模板《simple》</span></a></i></li>
        </ul>
    </div>
    <div class="fenlei">
        <ul>
            <li class="flselect"><a href="#top1">古典个人博客</a> </li>
            <li><a href="#top2">小清新</a> </li>
            <li><a href="#top3">时尚简洁</a> </li>
            <li><a href="#top4">技术门户</a> </li>
            <li><a href="#top5">国外html5</a> </li>
            <li><a href="#top6">PSD设计图</a> </li>
        </ul>
    </div>
    <div class="mbans">
        <div class="mban"  style="display: block;" name="top1">
            <ul>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb1.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb2.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb3.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb4.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb5.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb1.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb2.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb3.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb4.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb5.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
            </ul>
        </div>
        <div class="mban" name="top2">
            <ul>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb1.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb4.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb2.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb3.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb5.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
            </ul>
        </div>
        <div class="mban" name="top3">
            <ul>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb2.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb3.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb4.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb5.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb1.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
            </ul>
        </div>
        <div class="mban" name="top4">
            <ul>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb3.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb1.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb2.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb4.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb5.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
            </ul>
        </div>
        <div class="mban" name="top5">
            <ul>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb2.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb1.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb4.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb3.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb5.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
            </ul>
        </div>
        <div class="mban" name="top6">
            <ul>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb5.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb1.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb2.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb3.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
                <li><i><a href="/"><span class="tnum">原创</span><img src="images/mb4.jpg"> <span class="mbtitle">个人博客模板《simple》</span> </a></i></li>
            </ul>
        </div>
    </div>
</article>
@stop
