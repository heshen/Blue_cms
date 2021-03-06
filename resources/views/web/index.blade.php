<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Blue个人博客</title>
    <meta name="keywords" content="Blue个人博客" />
    <meta name="description" content="Blue个人博客" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @include('web.public.css')
</head>
<body>
@include('web.public.head')
{{--<div class="container-full adaptive">
    <div class="banner" id="adaptive">
        <ul>
            <li><img src="/dist/images/article.png"></li>
            <li><img src="/dist/images/article.png"></li>
            <li><img src="/dist/images/article.png"></li>
        </ul>
    </div>
</div>--}}

<div class="container-full photo-index">
    <div class="tab">
        <ul>
            <li><a class="btn btn-sm btn-primary " href="{{ url('/') }}"><i class="fa fa-paper-plane-o">&nbsp;</i>最新发布</a></li>
            <li><a class="btn btn-sm btn-primary" href="{{ url('/?orderBy=clicks&sortedBy=desc') }}"><i class="fa fa-free-code-camp">&nbsp;</i>点击排行</a></li>
        </ul>
    </div>
    <div class="photo-body">
        @foreach($articlesNewTake as $k => $v)
        <div class="col-md-3 photo-out">
            <div class="photo-box">
            <div class="photo-head">
                <img src="{{ url('back/photo/public/'.$v->photo) }}" >
            </div>
            <div class="photo-body">
                <a href="{{ url('content/'.$v->category_id.'/'.$v->id) }}">{{ $v->title }}</a>
            </div>
            <div class="photo-foot">
                <button type="button" class="btn btn-default btn-xs" title="赞"><span class="fa fa-thumbs-o-up"></span></button>
                <button type="button" class="btn btn-default btn-xs" title="踩"><span class="fa fa-thumbs-o-down"></span></button>
                <button type="button" class="btn btn-default btn-xs" title="收藏"><span class="fa fa-star-half-empty"></span></button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="点击次数"><span class="fa fa-free-code-camp">&nbsp;{{ $v->clicks }}点击</span></button>
            </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- PAGINATION  -->
<div class="container-full text-center">
<nav aria-label="pagination pagination-sm">
    {!! $articlesNewTake->links() !!}
</nav>
</div>
{{--
<div class="container-full photo-index">
    <div class="tab">
        <ul>
            <li class="active"><a href="">文章文章</a></li>
            <li><a href="">最新文章</a></li>
            <li><a href="">最热文章</a></li>
        </ul>
    </div>
    <div class="waterfall"></div>
</div>





<script id="waterfall-template" type="text/template">
   @foreach($articlesNewTake as $k => $v)
    <ul class="list-group">
        <li class="list-group-item">
            <a href="{{ url('content/'.$v->category_id.'/'.$v->id) }}">
                <img src="{{ url('back/photo/public/'.$v->photo) }}" />
            </a>
        </li>
        <li class="list-group-item">
            <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="fa fa-thumbs-o-up"></span></button>
            <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="fa fa-thumbs-o-down"></span></button>
            <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="fa fa-star-half-empty"></span></button>
        </li>
        <li class="list-group-item">
            <div class="media">
                --}}{{--<div class="media-left">
                    <a href="javascript:;">
                        <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="images/avatar_30.png" />
                    </a>
                </div>--}}{{--
                <div class="media-body">
                    <h5 class="media-heading">{{ $v->articleCategory->name }}</h5>
                    <small>{{ $v->title }}</small>
                </div>
            </div>
        </li>
    </ul>
    @endforeach
</script>
<script>
    $('.waterfall')
        .data('bootstrap-waterfall-template', $('#waterfall-template').html())
        .waterfall();
</script>--}}

{{--<div class="container">
<div class="col-md-8">
    <div class="tab">
        <ul>
            <li class="active"><a href="">最新文章</a></li>
            <li><a href="">推荐文章</a></li>
        </ul>
    </div>
            <ul class="list-group content-index">
                @foreach($articlesNewTake as $k => $v)
                    <li class="list-group-item">
                        <div class="col-md-3">
                            <img src="{{ url('back/photo/public/'.$v->photo) }}" width="100%">
                        </div>
                        <div class="col-md-9">
                        <div class="col-md-11">
                            <a href="{{ url('content/'.$v->category_id.'/'.$v->id) }}">{{ $v->title }}</a>
                        </div>
                        <div class="col-md-1">
                            <a  href="{{ url('content/'.$v->category_id.'/'.$v->id) }}" class="badge"><i class="fa fa-comments"></i> 14</a>
                        </div>
                        <div class="col-md-12">
                            @foreach($v->articleArticleTag as $key => $value)
                                <a href="#" class="label label-info">{{ $value->articleTagTag->name }}</a>
                            @endforeach
                            <span><i class="fa fa-calendar-check-o"></i> {{ $v->created_at->format('Y-m-d') }}</span>
                            <span><i class="fa fa-address-book-o"></i> 由{{ $v->articleBackUser->name }}发布</span>
                            <p>{{ str_limit($v->intro, 100, '...') }}</p>
                        </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    <div class="col-md-4">
        <div class="question-index">
            <div class="tab">
                &nbsp;<i class="fa fa-vcard">&nbsp;&nbsp;</i>热门问题
            </div>
            <div>
                <ul class="list-group">
                    <li class="list-group-item"><a href="">说的上弹时间快点就看似简单</a></li>
                    <li class="list-group-item"><a href="">说的上弹时间快点就看似简单</a></li>
                    <li class="list-group-item"><a href="">说的上弹时间快点就看似简单</a></li>
                    <li class="list-group-item"><a href="">说的上弹时间快点就看似简单</a></li>
                    <li class="list-group-item"><a href="">说的上弹时间快点就看似简单</a></li>
                    <li class="list-group-item"><a href="">说的上弹时间快点就看似简单</a></li>
                    <li class="list-group-item"><a href="">说的上弹时间快点就看似简单</a></li>
                    <li class="list-group-item"><a href="">说的上弹时间快点就看似简单</a></li>
                    <li class="list-group-item"><a href="">说的上弹时间快点就看似简单</a></li>

                </ul>
            </div>
        </div>

        <div class="question-index">
            <div class="tab">
                &nbsp;<i class="fa fa-diamond">&nbsp;&nbsp;</i>合作网站
            </div>
            <div>
                <ul class="list-group">
                    <li class="list-group-item"><a href="">说的上弹时间快点就看似简单</a></li>
                    <li class="list-group-item"><a href="">说的上弹时间快点就看似简单</a></li>
                    <li class="list-group-item"><a href="">说的上弹时间快点就看似简单</a></li>
                    <li class="list-group-item"><a href="">说的上弹时间快点就看似简单</a></li>
                    <li class="list-group-item"><a href="">说的上弹时间快点就看似简单</a></li>
                    <li class="list-group-item"><a href="">说的上弹时间快点就看似简单</a></li>
                    <li class="list-group-item"><a href="">说的上弹时间快点就看似简单</a></li>
                    <li class="list-group-item"><a href="">说的上弹时间快点就看似简单</a></li>
                    <li class="list-group-item"><a href="">说的上弹时间快点就看似简单</a></li>

                </ul>
            </div>
        </div>
    </div>
</div>--}}


{{--<div class="container">
<div class="friend">
    <div class="tab">
        &nbsp;&nbsp;<i class="fa fa-diamond">&nbsp;&nbsp;</i>合作网站
    </div>
    <div class="friend-group">
    <ul>
        <li><a href="">大叔大叔多</a></li>
        <li><a href="">大叔大叔多</a></li>
        <li><a href="">大叔大叔多</a></li>
        <li><a href="">大叔大叔多</a></li>
        <li><a href="">大叔大叔多</a></li>
    </ul>
    </div>
</div>
</div>--}}
@include('web.public.footer')
</body>
@include('web.public.js')
</html>
