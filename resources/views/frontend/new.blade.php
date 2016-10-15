
@extends('frontend')
@section('title')
    Canhgiamgia.com | {{$post->title}}
@endsection
@section('facebook_meta')
    <meta property="og:url" content="{{$post->title}}">
    <meta property="og:image" content="{{$post->image}}">
    <meta property="og:description" content="{{$post->desc}}">
    <meta property="og:title" content="{{$post->title}}">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <article class="post">

                <div class="post-inner">
                    <h3 class="post-title">{{$post->title}}</h3>
                    <ul class="post-meta">
                        <li><i class="fa fa-calendar"></i><a href="#">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->toDateString()}}</a>
                        </li>
                        <li><i class="fa fa-user"></i>by <a href="#">canhgiamgia.com</a>
                        </li>
                    </ul>
                    <div class="gap gap-mini"></div>
                    {!! $post->content !!}
                </div>
            </article>

            <div class="gap"></div>
            <div class="fb-like" data-href="{{url()->current()}}" data-layout="standard" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
            <div class="gap"></div>
            <h2 class="mb20">Bình luận</h2>
            <!-- START COMMENTS -->
            <div class="fb-comments " data-href="{{url()->current()}}" data-numposts="5" data-width="100%"></div>

            <!-- END COMMENTS -->
            <div class="gap"></div>
        </div>
        <div class="col-md-3">
            <aside class="sidebar-right hidden-phone">

                {{--<div class="sidebar-box">--}}

                    {{--<h5>Đăng ký tin khuyến mại</h5>--}}
                    {{--<form class="sign-up">--}}
                        {{--<input type="text" class="form-control" placeholder="E-mail">--}}
                        {{--<small class="help-block">Chúng tôi sẽ không spam </small>--}}
                        {{--<input type="submit" class="btn btn-primary" value="Đăng ký">--}}
                    {{--</form>--}}
                {{--</div>--}}


                <div class="sidebar-box">
                    <h5>Bài viết ngẫu nhiên</h5>
                    <ul class="thumb-list">
                        @foreach($relatedPosts as $post)
                        <li>
                            <a href="#">
                                <img src="{{$post->image}}" alt="{{$post->title}}" title="{{$post->title}}" />
                            </a>
                            <div class="thumb-list-item-caption">
                                <p class="thumb-list-item-meta">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->toDateString()}}</p>
                                <h5 class="thumb-list-item-title"><a href="#">{{$post->title}}</a></h5>
                                <p class="thumb-list-item-desciption">{{\Illuminate\Support\Str::words($post->desc, 20) }}</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </aside>
        </div>
    </div>

</div>
    @endsection

