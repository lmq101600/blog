<!doctype html>
<html>
<head>
    <meta charset="gbk">
    <title>首页</title>
    <meta name="keywords" content="个人博客,杨青个人博客,个人博客模板,杨青" />
    <meta name="description" content="杨青个人博客，是一个站在web前端设计之路的女程序员个人网站，提供个人博客模板免费资源下载的个人原创网站。" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--<link href="{{ asset('css/base.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/index.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/m.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/about.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/info.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/infopic.css') }}" rel="stylesheet">--}}
   
    {{--<link href="{{ asset('css/time.css') }}" rel="stylesheet">--}}

    <!-- Scripts -->

    {{--<script src="{{ asset('js/page2.js') }}"></script>--}}
    {{--<script src="{{ asset('js/time.js') }}"></script>--}}
    {{--<script src="{{ asset('js/page.js') }}"></script>--}}
    {{--<script src="{{ asset('js/app.js') }}"></script>--}}

    {{--<script src="{{ asset('js/jquery.min.js') }}"></script>--}}
    {{--<script src="{{ asset('js/hc-sticky.js') }}"></script>--}}
    {{--<script src="{{ asset('js/comm.js') }}"></script>--}}
    {{--<script src="{{ asset('js/scrollReveal.js') }}"></script>--}}
{{--    <script src="{{ asset('js/modernizr.js') }}"></script>--}}
    {{--<script src="{{ asset('js/ab.js') }}"></script>--}}
    {{--<script src="{{ asset('js/piccontent.min.js') }}"></script>--}}
</head>
<body>
<header class="header-navigation" id="header">
    <nav>
        <div class="logo"><a href="http://www.yangqq.com">LMQ</a></div>
        <h2 id="mnavh"><span class="navicon"></span></h2>
        <ul id="starlist">
            <li><a href="{{url('home/')}}" style="text-decoration: none;">网站首页</a></li>
            <li><a href="{{url('share/')}}" style="text-decoration: none;">模板分享</a></li>
            <li><a href="{{url('list/')}}" style="text-decoration: none;">博客日记</a></li>

            <li class="menu"><a href="{{url('study/')}}" style="text-decoration: none;">学无止境</a>
                <ul class="sub">
                    <li><a href="#">慢生活</a></li>
                    <li><a href="#">美文欣赏</a></li>
                </ul>
            </li>
            <li><a href="{{url('time/')}}" style="text-decoration: none;">时间轴</a></li>
            <li><a href="{{url('aboutme/')}}" style="text-decoration: none;">关于我</a></li>
        </ul>
        <div class="searchbox">
            <div id="search_bar" class="search_bar">
                <form  id="searchform" action="[!--news.url--]e/search/index.php" method="post" name="searchform">
                    <input class="input" placeholder="想搜点什么呢.." type="text" name="keyboard" id="keyboard">
                    <input type="hidden" name="show" value="title" />
                    <input type="hidden" name="tempid" value="1" />
                    <input type="hidden" name="tbname" value="news">
                    <input type="hidden" name="Submit" value="搜索" />
                    <p class="search_ico"> <span></span></p>
                </form>
            </div>
        </div>
    </nav>
</header>






@yield('content')



<!-- 公共尾部代码 -->
<footer>
    <p>Design by <a href="http://www.yangqq.com" target="_blank">LMQ个人博客</a> <a href="/">京ICP备11002373号-1</a><a href="/" class="links">友情链接</a></p>
</footer>
<a href="#" class="cd-top">Top</a>


</body>
</html>

