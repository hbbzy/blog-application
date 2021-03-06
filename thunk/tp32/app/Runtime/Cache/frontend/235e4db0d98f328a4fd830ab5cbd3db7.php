<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>blog</title>
    <link href="<?php echo (C("CSS_PATH")); ?>bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php echo (C("CSS_PATH")); ?>global.css" rel="stylesheet"/>
</head>
<body>
<nav class="navbar navbar-inverse">
    <dir class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#navbar-collapse">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?php echo (C("WEB_PATH")); ?>" class="navbar-brand">
                Hbbzy
            </a>
        </div>
        <div class="navbar-right navbar-collapse collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
                <li class="active">
                    <a href="<?php echo (C("WEB_PATH")); ?>">
                        首页
                    </a>
                </li>
                <li class="dropdown">
                    <a href="<?php echo (C("WEB_PATH")); ?>" class="dropdown-toggle" data-toggle="dropdown">
                        编程语言
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">
                                PHP
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Java
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                C#
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        服务器
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">
                                Linux
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Windows
                            </a>
                        </li>
                    </ul>
                </li>
                <li><a href="#">批处理</a></li>
                <li>
                    <a href="#">
                        Other
                    </a>
                </li>
                <li>
                    <a href="#">
                        计算机组成原理
                    </a>
                </li>
                <li>
                <li>
                    <form class="navbar-form navbar-left" role="search" action="#" method="post">
                        <div class="input-group">
                            <input type="text" name="kw" class="form-control" placeholder="Search">
                            <span  class="input-group-btn">
                                <button type="submit" class="btn btn-default">Go!</button>
                            </span>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </dir>
</nav>
<div class="container">
    <div class="row">
        <div class="col-xs-ct col-md-ct">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <a href="#">MySQL 5.7新特性</a>
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="entry-meta hidden-xs">
                        <time itemprop="datePublished" pubdate="" datetime="2016-07-12T11:09:31+00:00" class="entry-date">
                            2016-07-12
                        </time>
                        <span class="dot">•</span>
                        <span itemprop="keywords" class="categories-links">
                            <a rel="category tag" href="http://www.hbbzy.me/category/pl/css/">CSS</a>
                            、<a rel="category tag" href="http://www.hbbzy.me/category/pl/js/">Javasript</a>
                        </span>
                        <span class="dot">•</span>
                        <a class="comments-link" href="#">0 条评论</a>
                    </div>
                    <p>
                        新增特性 Security improvements. mysql.user表新增plugin列，且若某账户该字段值为空则账户不能使用。
                        从低版本MySQL升级至MySQL5.7时要注意该问题，且建议 DBA将使用mysql_old_password插件的账户替换
                        为使用 mysql_native_password插件。
                    </p>
                    <div class="hidden-xs pull-left">
                        <span class="label label-default">默认标签</span>
                        <span class="label label-default">默认标签</span>
                        <span class="label label-default">默认标签</span>
                        <span class="label label-default">默认标签</span>
                        <span class="label label-default">默认标签</span>
                    </div>
                    <div class="pull-right">
                        <a href="#">继续阅读</a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <a href="#">从浏览器输入地址按下回车后，究竟发生了什么？</a>
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="entry-meta hidden-xs">
                        <time itemprop="datePublished" pubdate="" datetime="2016-07-12T11:09:31+00:00" class="entry-date">
                            2016-07-12
                        </time>
                        <span class="dot">•</span>
                        <span itemprop="keywords" class="categories-links">
                            <a rel="category tag" href="http://www.hbbzy.me/category/pl/css/">CSS</a>
                            、<a rel="category tag" href="http://www.hbbzy.me/category/pl/js/">Javasript</a>
                        </span>
                        <span class="dot">•</span>
                        <a class="comments-link" href="#">0 条评论</a>
                    </div>
                    <p>
                        我遇到过很多问题，有浏览器缓存造成的，有服务器缓存造成的，也有程序原因引起的。
                        很多时候，当我们发现一个页面出现问题，第一个反应是：为什么会这样？ 对，为什
                        么会这样？这个问题就引出了一个问题：“从浏览器输入地址按下回车后，究竟发生了
                        什么？”它的答案可以让我们能判断页面出现错误时，是在哪一个过程里出现了问题。
                        这个问题似乎
                    </p>
                    <div class="hidden-xs pull-left">
                        <span class="label label-default">默认标签</span>
                        <span class="label label-default">默认标签</span>
                        <span class="label label-default">默认标签</span>
                        <span class="label label-default">默认标签</span>
                        <span class="label label-default">默认标签</span>
                    </div>
                    <div class="pull-right">
                        <a href="#">继续阅读</a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <a href="#">浏览器是怎样工作的</a>
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="entry-meta hidden-xs">
                        <time itemprop="datePublished" pubdate="" datetime="2016-07-12T11:09:31+00:00" class="entry-date">
                            2016-07-12
                        </time>
                        <span class="dot">•</span>
                        <span itemprop="keywords" class="categories-links">
                            <a rel="category tag" href="http://www.hbbzy.me/category/pl/css/">CSS</a>
                            、<a rel="category tag" href="http://www.hbbzy.me/category/pl/js/">Javasript</a>
                        </span>
                        <span class="dot">•</span>
                        <a class="comments-link" href="#">0 条评论</a>
                    </div>
                    <p>
                        译注： 前两天看到一篇不错的英文文章，叫做 How browsers work， 该文概要的介绍了浏览器从头到尾的工作机制，
                        包括HTML等的解析，DOM树的生成，节点与CSS的渲染等等，对于想学习浏览器源码的同学来说，实在是很 棒的一篇科普文章。
                        尽管对于每部分，该文的描述并不足够深入，但综合来讲，即使没兴趣学浏览器源码
                    </p>
                    <div class="hidden-xs pull-left">
                        <span class="label label-default">默认标签</span>
                        <span class="label label-default">默认标签</span>
                        <span class="label label-default">默认标签</span>
                        <span class="label label-default">默认标签</span>
                        <span class="label label-default">默认标签</span>
                    </div>
                    <div class="pull-right">
                        <a href="#">继续阅读</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-4 hidden-xs hidden-sm .pull-left">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <a href="#"> 分类</a>
                    </h3>
                </div>
                <ul class="list-group">
                    <li class="list-group-item"><span class="badge">Hot</span><a href="#"> 免费域名注册</a></li>
                    <li class="list-group-item"><span class="badge">新</span><a href="#">免费域名注册</a></li>
                    <li class="list-group-item"><a href="#">免费域名注册</a></li>
                    <li class="list-group-item"><a href="#">免费域名注册</a></li>
                    <li class="list-group-item"><a href="#">免费域名注册</a></li>
                </ul>
            </div>
            <div class="panel panel-default clearfix">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <a href="#"> 归档</a>
                    </h3>
                </div>
                <ul class="list-group">
                    <li class="list-group-item col-md-6 col-xs-6"><a href="#">08/2016</a></li>
                    <li class="list-group-item col-md-6 col-xs-6"><a href="#">07/2016</a></li>
                    <li class="list-group-item col-md-6 col-xs-6"><a href="#">06/2016</a></li>
                    <li class="list-group-item col-md-6 col-xs-6"><a href="#">05/2016</a></li>
                    <li class="list-group-item col-md-6 col-xs-6"><a href="#">04/2016</a></li>
                    <li class="list-group-item col-md-6 col-xs-6"><a href="#">03/2016</a></li>
                </ul>
            </div>
            <div class="panel panel-default ">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <a href="#"> 标签云</a>
                    </h3>
                </div>
                <div>
                    <label class="lb1"><a href="#">Css <span class="badge">21</span></a></label>
                    <label class="lb8"><a href="#">javascript <span class="badge">34</span></a></label>
                    <label class="lb5"><a href="#">PHP<span class="badge">12</span></a></label>
                    <label class="lb3"><a href="#">转载<span class="badge">8</span></a></label>
                    <label class="lb7"><a href="#">原创<span class="badge">14</span></a></label>
                    <label class="lb6"><a href="#">收件箱 <span class="badge">4</span></a></label>
                    <label class="lb5"><a href="#">收件箱 <span class="badge">11</span></a></label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container ">
    <ul class="pagination hidden-sm hidden-xs">
        <li><a href="#">&laquo;</a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li class="disabled"><a href="#">...</a></li>
        <li><a href="#">8</a></li>
        <li class="disabled"><a href="#">...</a></li>
        <li><a href="#">13</a></li>
        <li><a href="#">14</a></li>
        <li><a href="#">15</a></li>
        <li><a href="#">&raquo;</a></li>
    </ul>
    <ul class="pager hidden-md hidden-lg">
        <li class="previous"><a href="#">&larr; Prev</a></li>
        <li class="next"><a href="#">Next &rarr;</a></li>
    </ul>
</div>
<footer>
    <div class="container">
        <nav class="links hidden-sm hidden-xs">
            <a href="http://www.hbbzy.me/category/%e6%9c%8d%e5%8a%a1%e5%99%a8/">服务器</a>
            //
            <a href="http://www.hbbzy.me/category/pl/">编程/语言</a>
            //
            <a href="http://www.hbbzy.me/category/line/">组网互联技术</a>
            //
            <a href="http://www.hbbzy.me/category/pl/%e6%89%b9%e5%a4%84%e7%90%86/">批处理</a>
            //
            <a href="http://www.hbbzy.me/category/base/">计算机组成原理</a>
            //
            <a href="http://www.hbbzy.me/category/other/">Other</a>
        </nav>
        <div class="copyright">
            &copy; 2016 <a href="http://www.hbbzy.me/">hbbzy</a> · Powered by
            <a rel="generator" target="_blank" href="http://114.55.30.6/">Haifeng</a>
            · 粤ICP备16058144号
        </div>
    </div>
</footer>
</body>
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo (C("JS_PATH")); ?>bootstrap.min.js"></script>
</html>