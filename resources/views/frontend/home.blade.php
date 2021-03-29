<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Hoàng Lương ISTORE - Home</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">
    <script type="text/javascript" src="{{ asset('frontend/js/jquery-3.2.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('css/frontend/home.css') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <script>
        $('#myCarousel').carousel({
            interval: 3500
        });
    </script>
    <script>
        $('#demo').carousel({
            interval: 3500
        });
    </script>
    <script type="text/javascript">
        $(function() {
            var pull = $('#pull');
            menu = $('nav ul');
            menuHeight = menu.height();

            $(pull).on('click', function(e) {
                e.preventDefault();
                menu.slideToggle();
            });
        });

        $(window).resize(function() {
            var w = $(window).width();
            if (w > 320 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }
        });
    </script>
    <style>
        #myCarousel .thumbnail {
            margin-bottom: 0;
        }

        .carousel-control.left,
        .carousel-control.right {
            background-image: none !important;
        }

        .carousel-control {
            color: #999;
            top: 40%;
            color: #428BCA;
            bottom: auto;
            padding-top: 4px;
            width: 30px;
            height: 30px;
            opacity: 1;
        }

        .carousel-control:hover {
            color: #999;
        }

        .carousel-control.left,
        .carousel-control.right {
            background-image: none !important;
        }

        .carousel-control.right {
            left: auto;
            right: -32px;
        }

        .carousel-control.left {
            right: auto;
            left: -32px;
        }

        .carousel-indicators2 {
            bottom: -30px;
        }
    </style>
</head>

<body>
    @include('frontend.partials.header')

    <!-- main -->
    @include('frontend.partials.slide')


    @include('frontend.partials.category')
    <div class="product-hot">
        <div class="container">
            <h3 style=" margin-top: 40px; margin-bottom: 30px;color: var(--red);font-size: 22px;font-weight: 700; text-transform: uppercase;">
                Sản phẩm nổi bật
            </h3>
            <div class="container">
                <div class="row">
                    <div id="myCarousel" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="thumbnail"> <img src="{{ asset('frontend/img/home/product-1.png')}}" alt="Sản phẩm 1">
                                            <div class="caption">
                                            

                                                <p><a href="http://hocwebgiare.com/" class="btn btn-primary" role="button">Xem chi tiết</a> <a href="http://hocwebgiare.com/" class="btn btn-default" role="button">Đặt hàng</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <a class="left carousel-control" href="http://hocwebgiare.com/#myCarousel" data-slide="prev"><i class="fa fa-chevron-left fa-2x"></i></a> <a class="right carousel-control" href="http://hocwebgiare.com/cpadmin/#myCarousel" data-slide="next"><i class="fa fa-chevron-right fa-2x"></i></a>
                        <ol class="carousel-indicators2">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container products">
        <h3>sản phẩm mới</h3>
        <div class="product-list row">
            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                <a href="#"><img src="{{ asset('frontend/img/home/product-1.png')}}" class="img-thumbnail"></a>
                <p><a href="#">iPhone 6S Plus 64G</a></p>
                <p class="price">10.000.000</p>
                <div class="marsk">
                    <a href="#">Xem chi tiết</a>
                </div>
            </div>
            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                <a href="#"><img src="{{ asset('frontend/img/home/product-2.png')}}" class="img-thumbnail"></a>
                <p><a href="#">iPhone 6S Plus 64G</a></p>
                <p class="price">10.000.000</p>
                <div class="marsk">
                    <a href="#">Xem chi tiết</a>
                </div>
            </div>
            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                <a href="#"><img src="{{ asset('frontend/img/home/product-3.png')}}" class="img-thumbnail"></a>
                <p><a href="#">iPhone 6S Plus 64G</a></p>
                <p class="price">10.000.000</p>
                <div class="marsk">
                    <a href="#">Xem chi tiết</a>
                </div>
            </div>
            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                <a href="#"><img src="{{ asset('frontend/img/home/product-4.png')}}" class="img-thumbnail"></a>
                <p><a href="#">iPhone 6S Plus 64G</a></p>
                <p class="price">10.000.000</p>
                <div class="marsk">
                    <a href="#">Xem chi tiết</a>
                </div>
            </div>
            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                <a href="#"><img src="{{ asset('frontend/img/home/product-1.png')}}" class="img-thumbnail"></a>
                <p><a href="#">iPhone 6S Plus 64G</a></p>
                <p class="price">10.000.000</p>
                <div class="marsk">
                    <a href="#">Xem chi tiết</a>
                </div>
            </div>
            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                <a href="#"><img src="{{ asset('frontend/img/home/product-2.png')}}" class="img-thumbnail"></a>
                <p><a href="#">iPhone 6S Plus 64G</a></p>
                <p class="price">10.000.000</p>
                <div class="marsk">
                    <a href="#">Xem chi tiết</a>
                </div>
            </div>
            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                <a href="#"><img src="{{ asset('frontend/img/home/product-3.png')}}" class="img-thumbnail"></a>
                <p><a href="#">iPhone 6S Plus 64G</a></p>
                <p class="price">10.000.000</p>
                <div class="marsk">
                    <a href="#">Xem chi tiết</a>
                </div>
            </div>
            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                <a href="#"><img src="{{ asset('frontend/img/home/product-4.png')}}" class="img-thumbnail"></a>
                <p><a href="#">iPhone 6S Plus 64G</a></p>
                <p class="price">10.000.000</p>
                <div class="marsk">
                    <a href="#">Xem chi tiết</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- end main -->
    </div>
    </div>
    </div>

    <!-- endmain -->
    <div class="plc">
        <ul>
            <li><i class="icGh"></i><span>Giao hàng nhanh chóng</span></li>
            <li><i class="icTn"></i><span>Trải nghiệm sản phẩm tại nhà</span></li>
            <li><i class="icLd"></i><span>Lỗi đổi tại nhà nhanh chóng</span></li>
            <li><i class="icHt"></i><span>Hỗ trợ suốt thời gian sử dụng. Hotline: <a href="tel:18001763">0963600036</a></span></li>
        </ul>
    </div>
    <!-- footer -->
    <footer id="footer">
        <div id="footer-t">
            <div class="container">
                <div class="row">
                    <div id="logo-f" class="col-md-3 col-sm-12 col-xs-12 text-center">
                        <a href="#"><img src="#"></a>
                    </div>
                    <div id="about" class="col-md-3 col-sm-12 col-xs-12">
                        <h3>About us</h3>
                        <p class="text-justify">ok</p>
                    </div>
                    <div id="hotline" class="col-md-3 col-sm-12 col-xs-12">
                        <h3>Hotline</h3>
                        <p>Phone Sale: (+84) 096 36 000 36</p>
                        <p>Email: xhoangluong@gmail.com</p>
                    </div>
                    <div id="contact" class="col-md-3 col-sm-12 col-xs-12">
                        <h3>Contact Us</h3>
                        <p>Hueic</p>
                    </div>
                </div>
            </div>
            <div id="footer-b">
                <div class="container">
                    <div class="row">
                        <div id="footer-b-l" class="col-md-6 col-sm-12 col-xs-12 text-center">
                            <p>Hueic</p>
                        </div>
                        <div id="footer-b-r" class="col-md-6 col-sm-12 col-xs-12 text-center">
                            <p>© 2021. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
                <div id="scroll">
                    <a href="#"><img src="{{ asset('frontend/img/home/scroll.png')}}"></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- endfooter -->
</body>

</html>