<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/html">


<!-- Mirrored from remtsoy.com/tf_templates/couponia/demo_v3_3/category-page-coupon.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2016 03:08:52 GMT -->
<head>
    <title>Couponia - Category page coupon</title>
    <!-- meta info -->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Koupon HTML5 Template" />
    <meta name="description" content="Koupon - Premiun HTML5 Template for Coupons Website">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>
    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="{{ url ('coupon/css/boostrap.css') }}">
    <!-- Font Awesome styles (icons) -->
    <link rel="stylesheet" href="{{ url ('coupon/css/font_awesome.css') }}">
    <!-- Main Template styles -->
    <link rel="stylesheet" href="{{ url ('coupon/css/styles.css') }}">
    <!-- IE 8 Fallback -->
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="{{ url ('coupon/css/ie.css') }}" />
    <![endif]-->

    <!-- Your custom styles (blank file) -->
    <link rel="stylesheet" href="{{ url ('coupon/css/mystyles.css') }}">

    <link rel="stylesheet" href="{{ url ('coupon/css/switcher.css') }}">
    <!-- Demo Examples -->
    <link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/apple.css') }}" title="apple" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/pink.css') }}" title="pink" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/teal.css') }}" title="teal" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/gold.css') }}" title="gold" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/downy.css') }}" title="downy" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/atlantis.css') }}" title="atlantis" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/red.css') }}" title="red" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/violet.css') }}" title="violet" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/pomegranate.css') }}" title="pomegranate" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/violet-red.css') }}" title="violet-red" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/mexican-red.css') }}" title="mexican-red" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/victoria.css') }}" title="victoria" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/orient.css') }}" title="orient" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/jgger.css') }}" title="jgger" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/de-york.css') }}" title="de-york" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/blaze-orange.css') }}" title="blaze-orange" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/hot-pink.css') }}" title="hot-pink" media="all" />
    <!-- END Demo Examples -->

</head>
<div id="fb-root"></div>
<script>


</script>

<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.4&appId=1428478800723370";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<body>


<div class="global-wrap">

    <!-- //////////////////////////////////
//////////////MAIN HEADER/////////////
////////////////////////////////////-->
    <div class="top-main-area text-center">
        <div class="container">
            <a href="index.html" class="logo mt5">
                <img src="{{url('coupon/img/logo-small-dark.png') }}" alt="Image Alternative text" title="Image Title" />
            </a>
        </div>
    </div>
    <header class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- MAIN NAVIGATION -->
                    <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>
                    <nav>
                        <ul class="nav nav-pills flexnav" id="flexnav" data-breakpoint="800">
                            <li><a href="{{url('/')}}">Trang chủ</a>

                            </li>
                            <li class="active"><a href="{{url('khuyen-mai')}}">Khuyến mại</a>
                                <ul>
                                    <?php $providers = \App\Deal\Functions::getProviders();?>
                                    @foreach($providers as $provider)
                                        <li><a href="{{url('khuyen-mai/nha-phan-phoi', ['id'=>$provider->id])}}">{{$provider->name}}</a>

                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{url('san-pham')}}">Sản phẩm khuyến mãi</a>
                                <ul>
                                    @foreach($providers as $provider)
                                        <li>

                                        <li><a href="{{url('san-pham/nha-phan-phoi', ['id'=>$provider->id])}}">{{$provider->name}}</a>

                                        </li>
                                    @endforeach




                                </ul>
                            </li>

                            <li><a href="{{url('blog')}}">Blog</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- END MAIN NAVIGATION -->
                </div>
                <div class="col-md-6">
                    <!-- LOGIN REGISTER LINKS -->
                    <ul class="login-register">

                        <li><a class="popup-text" href="#login-dialog" data-effect="mfp-move-from-top"><i class="fa fa-sign-in"></i>Đăng nhập</a>
                        </li>
                        <li><a class="popup-text" href="#register-dialog" data-effect="mfp-move-from-top"><i class="fa fa-edit"></i>Đăng ký</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- LOGIN REGISTER LINKS CONTENT -->
    <div id="login-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
        <i class="fa fa-sign-in dialog-icon"></i>
        <h3>Member Login</h3>
        <h5>Welcome back, friend. Login to get started</h5>
        <form class="dialog-form">
            <div class="form-group">
                <label>E-mail</label>
                <input type="text" placeholder="email@domain.com" class="form-control">
            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <input type="password" placeholder="My secret password" class="form-control">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox">Lưu đăng nhập
                </label>
            </div>
            <input type="submit" value="Sign in" class="btn btn-primary">
        </form>
        <ul class="dialog-alt-links">
            <li><a class="popup-text" href="#register-dialog" data-effect="mfp-zoom-out">Chưa là thành viên</a>
            </li>
            <li><a class="popup-text" href="#password-recover-dialog" data-effect="mfp-zoom-out">Quên mật khẩu</a>
            </li>
        </ul>
    </div>


    <div id="register-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
        <i class="fa fa-edit dialog-icon"></i>
        <h3>Đăng ký thành viên</h3>
        <h5>Sẵn sàng để nhận những ưu đãi hot nhất ? Cùng bắt đầu nào!</h5>
        <form class="dialog-form">
            <div class="form-group">
                <label>E-mail</label>
                <input type="text" placeholder="email@domain.com" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" placeholder="My secret password" class="form-control">
            </div>
            <div class="form-group">
                <label>Repeat Password</label>
                <input type="password" placeholder="Type your password again" class="form-control">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox">Nhận khuyến mãi qua email
                </label>
            </div>
            <input type="submit" value="Sign up" class="btn btn-primary">
        </form>
        <ul class="dialog-alt-links">
            <li><a class="popup-text" href="#login-dialog" data-effect="mfp-zoom-out">Đã là thành viên</a>
            </li>
        </ul>
    </div>


    <div id="password-recover-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
        <i class="icon-retweet dialog-icon"></i>
        <h3>Khôi phục mật khẩu</h3>
        <h5>Quên mật khẩu của bạn? Đừng lo lắng, chúng tôi có thể hỗ trợ bạn</h5>
        <form class="dialog-form">
            <label>E-mail</label>
            <input type="text" placeholder="email@domain.com" class="span12">
            <input type="submit" value="Request new password" class="btn btn-primary">
        </form>
    </div>
    <!-- END LOGIN REGISTER LINKS CONTENT -->



    <!-- SEARCH AREA -->
    <form class="search-area form-group">
        <div class="container">
            <div class="row">
                <div class="col-md-11 clearfix">
                    <label><i class="fa fa-search"></i><span>Tôi đang tìm kiếm khuyến mãi</span>
                    </label>
                    <div class="search-area-division search-area-division-input">
                        <input class="form-control" type="text" placeholder="Sách" />
                    </div>
                </div>

                <div class="col-md-1">
                    <button class="btn btn-block btn-white search-btn" type="submit">Tìm</button>
                </div>
            </div>
        </div>
    </form>
    <!-- END SEARCH AREA -->

    <div class="gap"></div>


    <!-- //////////////////////////////////
//////////////END MAIN HEADER//////////
////////////////////////////////////-->


    <!-- //////////////////////////////////
//////////////PAGE CONTENT/////////////
////////////////////////////////////-->
@yield('content')
    <!-- //////////////////////////////////
	//////////////END PAGE CONTENT/////////
	////////////////////////////////////-->



    <!-- //////////////////////////////////
//////////////MAIN FOOTER//////////////
////////////////////////////////////-->

    <footer class="main" id="main-footer">
        <div class="footer-top-area">
            <div class="container">
                <div class="row row-wrap">
                    <div class="col-md-4">
                        <a href="index.html">
                            <img src="{{url('coupon/img/logo.png') }}" alt="logo" title="logo" class="logo">
                        </a>
                        <ul class="list list-social">
                            <li>
                                <a class="fa fa-facebook box-icon" href="#" data-toggle="tooltip" title="Facebook"></a>
                            </li>
                            <li>
                                <a class="fa fa-twitter box-icon" href="#" data-toggle="tooltip" title="Twitter"></a>
                            </li>
                            <li>
                                <a class="fa fa-flickr box-icon" href="#" data-toggle="tooltip" title="Flickr"></a>
                            </li>
                            <li>
                                <a class="fa fa-linkedin box-icon" href="#" data-toggle="tooltip" title="LinkedIn"></a>
                            </li>
                            <li>
                                <a class="fa fa-tumblr box-icon" href="#" data-toggle="tooltip" title="Tumblr"></a>
                            </li>
                        </ul>
                        <p>Hãy theo dõi My Deal trên các mạng xã hội, để không bao giờ bỏ lỡ những ưu đãi tốt nhất</p>
                    </div>
                    <div class="col-md-4">
                        <h4>Đăng ký nhận tin</h4>
                        <div class="box">
                            <form id="form-email-submit">
                                <div class="form-group mb10">
                                    <label>E-mail</label>
                                    <input type="text" class="form-control" name="email" />
                                </div>
                                <p class="mb10" id="submit-email-info"></p>
                                <button type="button" class="btn btn-primary" value="Đăng ký" id="btn-submit-email">Đăng ký</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4>Couponia trên Facebook</h4>
                        <!-- START TWITTER -->
                        <div class="fb-page" data-href="https://www.facebook.com/hotrohoctapUET/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-height="400px"><blockquote cite="https://www.facebook.com/hotrohoctapUET/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/hotrohoctapUET/">Bluebee-uet.com - Hỗ trợ học tập UET</a></blockquote></div>
                        <!-- END TWITTER -->
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p>Copyright © {{date('Y')}}, My Deal, All Rights Reserved</p>
                    </div>
                    <div class="col-md-6 col-md-offset-2">
                        <div class="pull-right">
                            <ul class="list-inline list-payment">
                                <li>
                                    <img src="{{url('coupon/img/payment/american-express-curved-32px.png') }}" alt="Image Alternative text" title="Image Title" />
                                </li>
                                <li>
                                    <img src="{{url('coupon/img/payment/cirrus-curved-32px.png')}}" alt="Image Alternative text" title="Image Title" />
                                </li>
                                <li>
                                    <img src="{{url('coupon/img/payment/discover-curved-32px.png')}}" alt="Image Alternative text" title="Image Title" />
                                </li>
                                <li>
                                    <img src="{{url('coupon/img/payment/ebay-curved-32px.png')}}" alt="Image Alternative text" title="Image Title" />
                                </li>
                                <li>
                                    <img src="{{url('coupon/img/payment/maestro-curved-32px.png')}}" alt="Image Alternative text" title="Image Title" />
                                </li>
                                <li>
                                    <img src="{{url('coupon/img/payment/mastercard-curved-32px.png')}}" alt="Image Alternative text" title="Image Title" />
                                </li>
                                <li>
                                    <img src="{{url('coupon/img/payment/visa-curved-32px.png')}}" alt="Image Alternative text" title="Image Title" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //////////////////////////////////
//////////////END MAIN  FOOTER/////////
////////////////////////////////////-->



    <!-- Scripts queries -->
    <script src="{{ url ('coupon/js/jquery.js') }}"></script>
    <script src="{{ url ('coupon/js/boostrap.min.js') }}"></script>
    <script src="{{ url ('coupon/js/countdown.min.js') }}"></script>
    <script src="{{ url ('coupon/js/flexnav.min.js') }}"></script>
    <script src="{{ url ('coupon/js/magnific.js') }}"></script>
    <script src="{{ url ('coupon/js/tweet.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <script src="{{ url ('coupon/js/fitvids.min.js') }}"></script>
    <script src="{{ url ('coupon/js/mail.min.js') }}"></script>
    <script src="{{ url ('coupon/js/ionrangeslider.js') }}"></script>
    <script src="{{ url ('coupon/js/icheck.js') }}"></script>
    <script src="{{ url ('coupon/js/fotorama.js') }}"></script>
    <script src="{{ url ('coupon/js/card-payment.js') }}"></script>
    <script src="{{ url ('coupon/js/owl-carousel.js') }}"></script>
    <script src="{{ url ('coupon/js/masonry.js') }}"></script>
    <script src="{{ url ('coupon/js/nicescroll.js') }}"></script>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: { 'X-CSRF-Token' : $('meta[name=csrf_token]').attr('content') }
        });
        var baseUrl = "{{url('/')}}";

    </script>

    <!-- Custom scripts -->
    <script src="{{ url ('coupon/js/custom.js') }}"></script>
    <script src="{{ url ('coupon/js/switcher.js') }}"></script>


</div>
</body>


<!-- Mirrored from remtsoy.com/tf_templates/couponia/demo_v3_3/category-page-coupon.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2016 03:08:52 GMT -->
</html>

