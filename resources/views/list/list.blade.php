@extends('layout')



@section('content')
    <link href="{{ asset('css/base.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/m.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery.easyfader.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}" ></script>
    <script src="{{ asset('js/jquery.easyfader.min.js') }}"></script>
    <script src="{{ asset('js/hc-sticky.js') }}"></script>
    <script src="{{ asset('js/comm.js') }}"></script>
    <script src="{{ asset('js/scrollReveal.js') }}"></script>
    <article>
    <main>
        <div class="blogs" data-scroll-reveal="enter bottom over 1s" >
            <h3 class="blogtitle"><a href="/" target="_blank">别让这些闹心的套路，毁了你的网页设计!</a></h3>
            <span class="blogpic"><a href="/" title=""><img src="images/1.jpg" alt=""></a></span>
            <p class="blogtext">如图，要实现上图效果，我采用如下方法：1、首先在数据库模型，增加字段，分别是图片2，图片3。2、增加标签模板，用if，else if 来判断，输出。思路已打开，样式调用就可以多样化啦！... </p>
            <div class="bloginfo">
                <ul>
                    <li class="author"><a href="/">杨青</a></li>
                    <li class="lmname"><a href="/">学无止境</a></li>
                    <li class="timer">2018-5-13</li>
                    <li class="view"><span>34567</span>已阅读</li>
                    <li class="like">9999</li>
                </ul>
            </div>
        </div>
        <div class="blogs" data-scroll-reveal="enter bottom over 1s" >
            <h3 class="blogtitle"><a href="/" target="_blank">帝国cms 首页或者列表页 实现图文不同样式调用方法</a></h3>
            <p class="blogtext">如图，要实现上图效果，我采用如下方法：1、首先在数据库模型，增加字段，分别是图片2，图片3。2、增加标签模板，用if，else if 来判断，输出。思路已打开，样式调用就可以多样化啦！...</p>
            <div class="bloginfo">
                <ul>
                    <li class="author"><a href="/">杨青</a></li>
                    <li class="lmname"><a href="/">学无止境</a></li>
                    <li class="timer">2018-5-13</li>
                    <li class="view">4567已阅读</li>
                    <li class="like">9999</li>
                </ul>
            </div>
        </div>
        <div class="blogs" data-scroll-reveal="enter bottom over 1s" >
            <h3 class="blogtitle"><a href="/" target="_blank">别让这些闹心的套路，毁了你的网页设计!</a></h3>
            <span class="bplist"><a href="/" title="">
      <li><img src="images/2.jpg" alt=""></li>
      <li><img src="images/3.jpg" alt=""></li>
      <li><img src="images/4.jpg" alt=""></li>
      </a></span>
            <p class="blogtext">如图，要实现上图效果，我采用如下方法：1、首先在数据库模型，增加字段，分别是图片2，图片3。2、增加标签模板，用if，else if 来判断，输出。思路已打开，样式调用就可以多样化啦！... </p>
            <div class="bloginfo">
                <ul>
                    <li class="author"><a href="/">杨青</a></li>
                    <li class="lmname"><a href="/">学无止境</a></li>
                    <li class="timer">2018-5-13</li>
                    <li class="view"><span>34567</span>已阅读</li>
                    <li class="like">9999</li>
                </ul>
            </div>
        </div>
        <div class="blogs" data-scroll-reveal="enter bottom over 1s" >
            <h3 class="blogtitle"><a href="/" target="_blank">别让这些闹心的套路，毁了你的网页设计!</a></h3>
            <span class="bigpic"><a href="/" title=""><img src="images/5.jpg" alt=""></a></span>
            <p class="blogtext">如图，要实现上图效果，我采用如下方法：1、首先在数据库模型，增加字段，分别是图片2，图片3。2、增加标签模板，用if，else if 来判断，输出。思路已打开，样式调用就可以多样化啦！... </p>
            <div class="bloginfo">
                <ul>
                    <li class="author"><a href="/">杨青</a></li>
                    <li class="lmname"><a href="/">学无止境</a></li>
                    <li class="timer">2018-5-13</li>
                    <li class="view"><span>34567</span>已阅读</li>
                    <li class="like">9999</li>
                </ul>
            </div>
        </div>
        <div class="blogs" data-scroll-reveal="enter bottom over 1s" >
            <h3 class="blogtitle"><a href="/" target="_blank">别让这些闹心的套路，毁了你的网页设计!</a></h3>
            <span class="blogpic"><a href="/" title=""><img src="images/6.jpg" alt=""></a></span>
            <p class="blogtext">如图，要实现上图效果，我采用如下方法：1、首先在数据库模型，增加字段，分别是图片2，图片3。2、增加标签模板，用if，else if 来判断，输出。思路已打开，样式调用就可以多样化啦！... </p>
            <div class="bloginfo">
                <ul>
                    <li class="author"><a href="/">杨青</a></li>
                    <li class="lmname"><a href="/">学无止境</a></li>
                    <li class="timer">2018-5-13</li>
                    <li class="view"><span>34567</span>已阅读</li>
                    <li class="like">9999</li>
                </ul>
            </div>
        </div>
        <div class="blogs" data-scroll-reveal="enter bottom over 1s" >
            <h3 class="blogtitle"><a href="/" target="_blank">帝国cms 首页或者列表页 实现图文不同样式调用方法</a></h3>
            <p class="blogtext">如图，要实现上图效果，我采用如下方法：1、首先在数据库模型，增加字段，分别是图片2，图片3。2、增加标签模板，用if，else if 来判断，输出。思路已打开，样式调用就可以多样化啦！...</p>
            <div class="bloginfo">
                <ul>
                    <li class="author"><a href="/">杨青</a></li>
                    <li class="lmname"><a href="/">学无止境</a></li>
                    <li class="timer">2018-5-13</li>
                    <li class="view">4567已阅读</li>
                    <li class="like">9999</li>
                </ul>
            </div>
        </div>
        <div class="blogs" data-scroll-reveal="enter bottom over 1s" >
            <h3 class="blogtitle"><a href="/" target="_blank">别让这些闹心的套路，毁了你的网页设计!</a></h3>
            <span class="bplist"><a href="/" title="">
      <li><img src="images/7.jpg" alt=""></li>
      <li><img src="images/8.jpg" alt=""></li>
      <li><img src="images/9.jpg" alt=""></li>
      </a></span>
            <p class="blogtext">如图，要实现上图效果，我采用如下方法：1、首先在数据库模型，增加字段，分别是图片2，图片3。2、增加标签模板，用if，else if 来判断，输出。思路已打开，样式调用就可以多样化啦！... </p>
            <div class="bloginfo">
                <ul>
                    <li class="author"><a href="/">杨青</a></li>
                    <li class="lmname"><a href="/">学无止境</a></li>
                    <li class="timer">2018-5-13</li>
                    <li class="view"><span>34567</span>已阅读</li>
                    <li class="like">9999</li>
                </ul>
            </div>
        </div>
        <div class="blogs" data-scroll-reveal="enter bottom over 1s" >
            <h3 class="blogtitle"><a href="/" target="_blank">别让这些闹心的套路，毁了你的网页设计!</a></h3>
            <span class="bigpic"><a href="/" title=""><img src="images/10.jpg" alt=""></a></span>
            <p class="blogtext">如图，要实现上图效果，我采用如下方法：1、首先在数据库模型，增加字段，分别是图片2，图片3。2、增加标签模板，用if，else if 来判断，输出。思路已打开，样式调用就可以多样化啦！... </p>
            <div class="bloginfo">
                <ul>
                    <li class="author"><a href="/">杨青</a></li>
                    <li class="lmname"><a href="/">学无止境</a></li>
                    <li class="timer">2018-5-13</li>
                    <li class="view"><span>34567</span>已阅读</li>
                    <li class="like">9999</li>
                </ul>
            </div>
        </div>
        <div class="blogs" data-scroll-reveal="enter bottom over 1s" >
            <h3 class="blogtitle"><a href="/" target="_blank">别让这些闹心的套路，毁了你的网页设计!</a></h3>
            <span class="blogpic"><a href="/" title=""><img src="images/1.jpg" alt=""></a></span>
            <p class="blogtext">如图，要实现上图效果，我采用如下方法：1、首先在数据库模型，增加字段，分别是图片2，图片3。2、增加标签模板，用if，else if 来判断，输出。思路已打开，样式调用就可以多样化啦！... </p>
            <div class="bloginfo">
                <ul>
                    <li class="author"><a href="/">杨青</a></li>
                    <li class="lmname"><a href="/">学无止境</a></li>
                    <li class="timer">2018-5-13</li>
                    <li class="view"><span>34567</span>已阅读</li>
                    <li class="like">9999</li>
                </ul>
            </div>
        </div>
        <div class="blogs" data-scroll-reveal="enter bottom over 1s" >
            <h3 class="blogtitle"><a href="/" target="_blank">帝国cms 首页或者列表页 实现图文不同样式调用方法</a></h3>
            <p class="blogtext">如图，要实现上图效果，我采用如下方法：1、首先在数据库模型，增加字段，分别是图片2，图片3。2、增加标签模板，用if，else if 来判断，输出。思路已打开，样式调用就可以多样化啦！...</p>
            <div class="bloginfo">
                <ul>
                    <li class="author"><a href="/">杨青</a></li>
                    <li class="lmname"><a href="/">学无止境</a></li>
                    <li class="timer">2018-5-13</li>
                    <li class="view">4567已阅读</li>
                    <li class="like">9999</li>
                </ul>
            </div>
        </div>
        <div class="blogs" data-scroll-reveal="enter bottom over 1s" >
            <h3 class="blogtitle"><a href="/" target="_blank">别让这些闹心的套路，毁了你的网页设计!</a></h3>
            <span class="bplist"><a href="/" title="">
      <li><img src="images/2.jpg" alt=""></li>
      <li><img src="images/3.jpg" alt=""></li>
      <li><img src="images/4.jpg" alt=""></li>
      </a></span>
            <p class="blogtext">如图，要实现上图效果，我采用如下方法：1、首先在数据库模型，增加字段，分别是图片2，图片3。2、增加标签模板，用if，else if 来判断，输出。思路已打开，样式调用就可以多样化啦！... </p>
            <div class="bloginfo">
                <ul>
                    <li class="author"><a href="/">杨青</a></li>
                    <li class="lmname"><a href="/">学无止境</a></li>
                    <li class="timer">2018-5-13</li>
                    <li class="view"><span>34567</span>已阅读</li>
                    <li class="like">9999</li>
                </ul>
            </div>
        </div>
        <div class="blogs" data-scroll-reveal="enter bottom over 1s" >
            <h3 class="blogtitle"><a href="/" target="_blank">别让这些闹心的套路，毁了你的网页设计!</a></h3>
            <span class="bigpic"><a href="/" title=""><img src="images/5.jpg" alt=""></a></span>
            <p class="blogtext">如图，要实现上图效果，我采用如下方法：1、首先在数据库模型，增加字段，分别是图片2，图片3。2、增加标签模板，用if，else if 来判断，输出。思路已打开，样式调用就可以多样化啦！... </p>
            <div class="bloginfo">
                <ul>
                    <li class="author"><a href="/">杨青</a></li>
                    <li class="lmname"><a href="/">学无止境</a></li>
                    <li class="timer">2018-5-13</li>
                    <li class="view"><span>34567</span>已阅读</li>
                    <li class="like">9999</li>
                </ul>
            </div>
        </div>
        <div class="blogs" data-scroll-reveal="enter bottom over 1s" >
            <h3 class="blogtitle"><a href="/" target="_blank">别让这些闹心的套路，毁了你的网页设计!</a></h3>
            <span class="blogpic"><a href="/" title=""><img src="images/6.jpg" alt=""></a></span>
            <p class="blogtext">如图，要实现上图效果，我采用如下方法：1、首先在数据库模型，增加字段，分别是图片2，图片3。2、增加标签模板，用if，else if 来判断，输出。思路已打开，样式调用就可以多样化啦！... </p>
            <div class="bloginfo">
                <ul>
                    <li class="author"><a href="/">杨青</a></li>
                    <li class="lmname"><a href="/">学无止境</a></li>
                    <li class="timer">2018-5-13</li>
                    <li class="view"><span>34567</span>已阅读</li>
                    <li class="like">9999</li>
                </ul>
            </div>
        </div>
        <div class="blogs" data-scroll-reveal="enter bottom over 1s" >
            <h3 class="blogtitle"><a href="/" target="_blank">帝国cms 首页或者列表页 实现图文不同样式调用方法</a></h3>
            <p class="blogtext">如图，要实现上图效果，我采用如下方法：1、首先在数据库模型，增加字段，分别是图片2，图片3。2、增加标签模板，用if，else if 来判断，输出。思路已打开，样式调用就可以多样化啦！...</p>
            <div class="bloginfo">
                <ul>
                    <li class="author"><a href="/">杨青</a></li>
                    <li class="lmname"><a href="/">学无止境</a></li>
                    <li class="timer">2018-5-13</li>
                    <li class="view">4567已阅读</li>
                    <li class="like">9999</li>
                </ul>
            </div>
        </div>
        <div class="blogs" data-scroll-reveal="enter bottom over 1s" >
            <h3 class="blogtitle"><a href="/" target="_blank">别让这些闹心的套路，毁了你的网页设计!</a></h3>
            <span class="bplist"><a href="/" title="">
      <li><img src="images/7.jpg" alt=""></li>
      <li><img src="images/8.jpg" alt=""></li>
      <li><img src="images/9.jpg" alt=""></li>
      </a></span>
            <p class="blogtext">如图，要实现上图效果，我采用如下方法：1、首先在数据库模型，增加字段，分别是图片2，图片3。2、增加标签模板，用if，else if 来判断，输出。思路已打开，样式调用就可以多样化啦！... </p>
            <div class="bloginfo">
                <ul>
                    <li class="author"><a href="/">杨青</a></li>
                    <li class="lmname"><a href="/">学无止境</a></li>
                    <li class="timer">2018-5-13</li>
                    <li class="view"><span>34567</span>已阅读</li>
                    <li class="like">9999</li>
                </ul>
            </div>
        </div>
        <div class="blogs" data-scroll-reveal="enter bottom over 1s" >
            <h3 class="blogtitle"><a href="/" target="_blank">别让这些闹心的套路，毁了你的网页设计!</a></h3>
            <span class="bigpic"><a href="/" title=""><img src="images/10.jpg" alt=""></a></span>
            <p class="blogtext">如图，要实现上图效果，我采用如下方法：1、首先在数据库模型，增加字段，分别是图片2，图片3。2、增加标签模板，用if，else if 来判断，输出。思路已打开，样式调用就可以多样化啦！... </p>
            <div class="bloginfo">
                <ul>
                    <li class="author"><a href="/">杨青</a></li>
                    <li class="lmname"><a href="/">学无止境</a></li>
                    <li class="timer">2018-5-13</li>
                    <li class="view"><span>34567</span>已阅读</li>
                    <li class="like">9999</li>
                </ul>
            </div>
        </div>
        <div class="pagelist"><a title="Total record">&nbsp;<b>160</b> </a>&nbsp;&nbsp;&nbsp;<b>1</b>&nbsp;<a href="/jstt/index_2.html">2</a>&nbsp;<a href="/jstt/index_3.html">3</a>&nbsp;<a href="/jstt/index_4.html">4</a>&nbsp;<a href="/jstt/index_5.html">5</a>&nbsp;<a href="/jstt/index_6.html">6</a>&nbsp;<a href="/jstt/index_2.html">下一页</a>&nbsp;<a href="/jstt/index_14.html">尾页</a></div>
    </main>
    <aside class="r_box" >

        <div class="wdxc">
            <h2>图文精选</h2>
            <ul>
                <li><a href="/"><img src="images/7.jpg"></a></li>
                <li><a href="/"><img src="images/8.jpg"></a></li>
                <li><a href="/"><img src="images/9.jpg"></a></li>
                <li><a href="/"><img src="images/10.jpg"></a></li>
                <li><a href="/"><img src="images/11.jpg"></a></li>
                <li><a href="/"><img src="images/12.jpg"></a></li>
            </ul>
        </div>
        <div class="cloud">
            <h2>标签云</h2>
            <ul>
                <a href="/">陌上花开</a> <a href="/">校园生活</a> <a href="/">html5</a> <a href="/">SumSung</a> <a href="/">青春</a> <a href="/">温暖</a> <a href="/">阳光</a> <a href="/">三星</a><a href="/">索尼</a> <a href="/">华维荣耀</a> <a href="/">三星</a> <a href="/">索尼</a>
            </ul>
        </div>
        <div class="tuijian">
            <h2 id="tab"><a href="#"class="current">点击排行</a><a href="#">站长推荐</a></h2>

            <div id="content">
                <ul style="display:block;">
                    <li><a href="/">第二届 优秀个人博客模板比赛参选活动</a></li>
                    <li><a href="/">【活动作品】柠檬绿兔小白个人博客模板</a></li>
                    <li><a href="/">帝国cms 列表页调用子栏目，没有则不显示栏目名称</a></li>
                    <li><a href="/">2014年度优秀个人博客评选活动</a></li>
                    <li><a href="/">你是什么人便会遇上什么人</a></li>
                    <li><a href="/">帝国cms 列表页调用子栏目，没有则不显示栏目名称</a></li>
                    <li><a href="/">第二届 优秀个人博客模板比赛参选活动</a></li>
                    <li><a href="/">个人博客模板《绅士》后台管理</a></li>
                </ul>

                <ul>
                    <li><a href="/">个人博客，我为什么要用帝国cms？</a></li>
                    <li><a href="/">D设计师博客-一个热爱生活的设计师</a></li>
                    <li><a href="/">东轩博客，我看到了你的坚持！</a></li>
                    <li><a href="/">程序员创业，就得“豁得出去”！</a></li>
                    <li><a href="/">张建华 一个90后年轻站长！我们是对手亦是朋友！</a></li>
                    <li><a href="/">《奋斗电商》看知名微商如何做博客引流？</a></li>
                    <li><a href="/">《寻之旅》一个关于旅游，游记的个人博客</a></li>
                    <li><a href="/">【匆匆那些年】总结个人博客经历的这四年</a></li>
                </ul>
            </div>
        </div>
        <div class="guanzhu">
            <h2>关注我 么么哒</h2>
            <ul>
                <img src="images/wx.jpg">
            </ul>
        </div>

    </aside>
</article>
@stop
