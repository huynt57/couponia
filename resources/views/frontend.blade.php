<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/html">


<!-- Mirrored from remtsoy.com/tf_templates/canhgiamgia.com/demo_v3_3/category-page-coupon.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2016 03:08:52 GMT -->
<head>
    <title>@yield('title')</title>
    <!-- meta info -->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="khuyến mãi, lazada, tiki, adayroi" />
    <meta name="description" content="Canhgiamgia.com - Khuyến mại hot nhất từ Lazada, Adayroi, Tiki, ...">
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

    {{--<link rel="stylesheet" href="{{ url ('coupon/css/switcher.css') }}">--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="57x57" href="{{ url('coupon/img/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ url('coupon/img/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url('coupon/img/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('coupon/img/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('coupon/img/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url('coupon/img/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ url('coupon/img/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('coupon/img/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('coupon/img/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ url('coupon/img/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('coupon/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ url('coupon/img/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('coupon/img/favicon/favicon-16x16.png') }}">
    <!-- Demo Examples -->
    {{--<link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes{{ url('coupon/img/favicon/apple.css') }}" title="apple" media="all" />--}}
    {{--<link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/pink.css') }}" title="pink" media="all" />--}}
    {{--<link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/teal.css') }}" title="teal" media="all" />--}}
    {{--<link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/gold.css') }}" title="gold" media="all" />--}}
    {{--<link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/downy.css') }}" title="downy" media="all" />--}}
    {{--<link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/atlantis.css') }}" title="atlantis" media="all" />--}}
    {{--<link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/red.css') }}" title="red" media="all" />--}}
    {{--<link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/violet.css') }}" title="violet" media="all" />--}}
    {{--<link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/pomegranate.css') }}" title="pomegranate" media="all" />--}}
    {{--<link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/violet-red.css') }}" title="violet-red" media="all" />--}}
    {{--<link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/mexican-red.css') }}" title="mexican-red" media="all" />--}}
    {{--<link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/victoria.css') }}" title="victoria" media="all" />--}}
    {{--<link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/orient.css') }}" title="orient" media="all" />--}}
    {{--<link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/jgger.css') }}" title="jgger" media="all" />--}}
    {{--<link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/de-york.css') }}" title="de-york" media="all" />--}}
    {{--<link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/blaze-orange.css') }}" title="blaze-orange" media="all" />--}}
    {{--<link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/schemes/hot-pink.css') }}" title="hot-pink" media="all" />--}}
    <link rel="alternate stylesheet" type="text/css" href="{{ url ('coupon/css/toast.css') }}" title="hot-pink" media="all" />

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-55422921-5', 'auto');
        ga('send', 'pageview');

    </script>
    <!-- END Demo Examples -->

    @yield('facebook_meta')

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
            <a href="{{url('/')}}" class="logo mt5">
                <img src="{{url('coupon/logo.png') }}" alt="Canhgiamgia.com" title="Canhgiamgia.com" style="height: 150px;" />
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
                            <li><a href="{{url('khuyen-mai')}}">Khuyến mại</a>

                            </li>
                            <li><a href="{{url('san-pham')}}">Sản phẩm khuyến mãi</a>

                            </li>

                            {{--<li><a href="{{url('tin-tuc')}}">Tin tức</a>--}}
                            {{--</li>--}}
                        </ul>
                    </nav>
                    <!-- END MAIN NAVIGATION -->
                </div>
                {{--<div class="col-md-6">--}}
                    {{--<!-- LOGIN REGISTER LINKS -->--}}
                    {{--<ul class="login-register">--}}

                        {{--<li><a class="popup-text" href="#login-dialog" data-effect="mfp-move-from-top"><i class="fa fa-sign-in"></i>Đăng nhập</a>--}}
                        {{--</li>--}}
                        {{--<li><a class="popup-text" href="#register-dialog" data-effect="mfp-move-from-top"><i class="fa fa-edit"></i>Đăng ký</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            </div>
        </div>
    </header>

    <!-- LOGIN REGISTER LINKS CONTENT -->
    <div id="login-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
        <i class="fa fa-sign-in dialog-icon"></i>
        <h3>Đăng nhập thành viên</h3>
        <h5>Chào mừng trở lại, rất vui được gặp bạn !</h5>
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
    <form class="search-area form-group" method="get" action="{{url('tim-kiem/khuyen-mai')}}">
        <div class="container">
            <div class="row">
                <div class="col-md-11 clearfix">
                    <label><i class="fa fa-search"></i><span>Tôi đang tìm kiếm khuyến mãi</span>
                    </label>
                    <div class="search-area-division search-area-division-input">


                            <input name="q" class="form-control" type="text" placeholder="Lazada, Tiki, Sách khuyến mại, đồ gia dụng, ..." />

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
                        <a href="{{url('/')}}">
                            <img src="{{url('coupon/logo.png') }}" alt="logo" title="logo" class="logo">
                        </a>
                        <ul class="list list-social">
                            <li>
                                <a class="fa fa-facebook box-icon" href="https://www.facebook.com/canhgiamgia/" data-toggle="tooltip" title="Facebook"></a>
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
                        <p>Hãy theo dõi Canhgiamgia.com trên các mạng xã hội, để không bao giờ bỏ lỡ những ưu đãi tốt nhất</p>
                    </div>
                    <div class="col-md-4">
                        <h4>Đăng ký nhận tin để không bỏ lỡ khuyến mại</h4>
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
                        <h4>canhgiamgia.com trên Facebook</h4>
                        <!-- START TWITTER -->
                        <div class="fb-page" data-href="https://www.facebook.com/canhgiamgia/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-height="400px"><blockquote cite="https://www.facebook.com/hotrohoctapUET/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/hotrohoctapUET/">Bluebee-uet.com - Hỗ trợ học tập UET</a></blockquote></div>
                        <!-- END TWITTER -->
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p>Copyright © {{date('Y')}}, Canhgiamgia.com, All Rights Reserved</p>
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
    <script src="{{ url ('coupon/js/fitvids.min.js') }}"></script>
    <script src="{{ url ('coupon/js/mail.min.js') }}"></script>
    <script src="{{ url ('coupon/js/ionrangeslider.js') }}"></script>
    <script src="{{ url ('coupon/js/icheck.js') }}"></script>
    <script src="{{ url ('coupon/js/fotorama.js') }}"></script>
    <script src="{{ url ('coupon/js/card-payment.js') }}"></script>
    <script src="{{ url ('coupon/js/owl-carousel.js') }}"></script>
    <script src="{{ url ('coupon/js/masonry.js') }}"></script>
    <script src="{{ url ('coupon/js/nicescroll.js') }}"></script>
    <script src="{{ url ('coupon/js/clipboard.js') }}"></script>
    <script src="{{ url ('coupon/js/toast.js') }}"></script>

    <script type="text/javascript">
        (function(d,s,id){var z=d.createElement(s);z.type="text/javascript";z.id=id;z.async=true;z.src="//static.zotabox.com/0/4/046cea2a75ec5db2c37fc227f3021f54/widgets.js";var sz=d.getElementsByTagName(s)[0];sz.parentNode.insertBefore(z,sz)}(document,"script","zb-embed-code"));
    </script>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') }
        });
        var baseUrl = "{{url('/')}}";

        function getURLParam(key, target) {
            var values = [];
            if (!target) {
                target = location.href;
            }
            key = key.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
            var pattern = key + '=([^&#]+)';
            var o_reg = new RegExp(pattern, 'ig');
            while (true) {
                var matches = o_reg.exec(target);
                if (matches && matches[1]) {
                    values.push(matches[1]);
                }
                else {
                    break;
                }
            }
            if (!values.length) {
                return [];
            }
            else {
                return values;
            }
        }

        function removeParamTime(currentUrl)
        {
            currentUrl = decodeURI(currentUrl);
            currentUrl = currentUrl.replace('%3Ftime%3Dlatest', '');
            currentUrl = currentUrl.replace('%3Ftime%3Dnearly-end', '');
            currentUrl = currentUrl.replace('%3Ftime%3Dlatest', '');
            currentUrl = currentUrl.replace('%3Ftime%3Dnearly-end', '');
            currentUrl = currentUrl.replace('?time=latest', '');
            currentUrl = currentUrl.replace('?time=nearly-end', '');
            currentUrl = currentUrl.replace('&amp;time=latest', '');
            currentUrl = currentUrl.replace('&amp;time=nearly-end', '');
            return currentUrl;
        }



        var currentUrl = '{{ Request::fullUrl() }}';



        console.log(decodeURI(currentUrl));

        $(document).ready(function() {
            var url = window.location.href;

            $('a[href="' + url + '"]').parent().addClass('active');

            url =  url.substring(0, url.length - 1);

            $('a[href="' + url + '"]').parent().addClass('active');

            $('.iCheck-helper').click(function() {

                var dataGo = $(this).siblings().attr('data-go');



                if(typeof (dataGo) != 'undefined')
                {
                    currentUrl = currentUrl.replace('amp;', '');
                    switch(dataGo)
                    {
                        case 'latest':
                           currentUrl = removeParamTime(currentUrl);
                                if(currentUrl.indexOf('?') != -1) {
                                    url = currentUrl + '&time=latest';
                                } else {
                                    url = currentUrl + '?time=latest';
                                }
                            window.location.href = url;
                            break;
                        case 'nearly-end':
                            currentUrl = removeParamTime(currentUrl);
                            if(currentUrl.indexOf('?') != -1) {
                                url = currentUrl + '&time=nearly-end';
                            } else {
                                url = currentUrl + '?time=nearly-end';
                            }
                            window.location.href = url;
                            break;
                    }
                }
            });

            var encodedUrl = window.location.href;
            var decodedUrl = decodeURIComponent(encodedUrl);

            var time = getURLParam('time', decodedUrl);

            $('[data-go=' + time + ']').parent().addClass('checked');


//            $('#btn-submit-filter-price').click(function() {
//                var minPrice  = $('#min_price').val();
//                var maxPrice = $('#max_price').val();
//
//
//
//
//
//              //  console.log(currentUrl); return;
//
//
//                currentUrl = currentUrl.replace('amp;', '');
//
//
//
//                if(typeof (minPrice) != 'undefined' && typeof (maxPrice) != 'undefined')
//                {
//                    currentUrl = currentUrl.replace('amp;', '');
//                    if(currentUrl.indexOf('?') != -1) {
//                        url = currentUrl + '&min_price[]='+minPrice+'&max_price[]='+maxPrice;
//                    } else {
//                        url = currentUrl + '?min_price[]='+minPrice+'&max_price[]='+maxPrice;
//                    }
//
//                    window.location.href = url;
//                }
//
//            });







        });

    </script>

    <!-- Custom scripts -->
    <script src="{{ url ('coupon/js/custom.js') }}"></script>
    <script src="{{ url ('coupon/js/switcher.js') }}"></script>




</div>
</body>


<!-- Mirrored from remtsoy.com/tf_templates/canhgiamgia.com/demo_v3_3/category-page-coupon.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2016 03:08:52 GMT -->
</html>

