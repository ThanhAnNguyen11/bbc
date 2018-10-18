<?php
include($_SERVER["DOCUMENT_ROOT"] . "/bbc/bbc/app_config.php");
include(APP_PATH."libs/head.php"); 
?>
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/slick.css" media="all">
</head>

<body id="top">
<!--===================================================-->
<div id="wrapper">
<!--===================================================-->
<!--Header-->
<?php include(APP_PATH."libs/header.php"); ?>
<!--/Header-->

<!--Main-->
<div class="main">
    <div class="wrapSlide">
        <div class="inner">
            <ul id="slider">
                <li>
                    <img src="<?php echo APP_URL; ?>common/img/top/slide1.jpg" class="pc" alt="">
                    <div class="text">
                        <h3 class="largeText">
                            <span>KIẾN TẠO</span>
                            <br>
                            <span class="text-yellow">CUỘC SỐNG MỚI</span>
                        </h3>
                        <a class="linkText" href="">
                            <span class="linkText-arrow"></span>
                            <span class="linkText-text">Tìm hiểu ngay</span>
                        </a>
                    </div>
                </li>
                <li>
                    <img src="<?php echo APP_URL; ?>common/img/top/slide2.jpg" class="pc" alt="">
                    <div class="text">
                        <h3 class="largeText">
                            <span>ĐƯỢC NHIỀU</span>
                            <br>
                            <span class="text-yellow">NHÀ THẦU TIN CẬY</span>
                        </h3>
                        <a class="linkText" href="">
                            <span class="linkText-arrow"></span>
                            <span class="linkText-text">Tìm hiểu ngay</span>
                        </a>
                    </div>
                </li>
                <li>
                    <img src="<?php echo APP_URL; ?>common/img/top/slide3.jpg" class="pc" alt="">
                    <div class="text">
                        <h3 class="largeText">
                            <span>SẢN PHẨM</span>
                            <br>
                            <span class="text-yellow">CHẤT LƯỢNG CAO</span>
                        </h3>
                        <a class="linkText" href="">
                            <span class="linkText-arrow"></span>
                            <span class="linkText-text">Tìm hiểu ngay</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="products">
        <div class="container">
            <div class="products-header flexBox flexBox--center flexBox--between">
                <h2>
                    <span class="text-yellow">Giới thiệu</span>
                    <br>
                    <span class="text-large">Sản Phẩm</span>
                </h2>
                <a class="link-hover">
                    Xem thêm
                    <span class="link-hover-arrow"></span>
                </a>
            </div>
            <div class="products-list flexBox flexBox--between">
                <div class="product-box">
                    <div class="product-box--wrap">
                    <a href="">
                        <img src="<?php echo APP_URL; ?>common/img/top/product-1.png">
                        <h3>Gạch Ống 4 Lỗ</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi </p>
                    </a>
                    </div>
                </div>
                <div class="product-box">
                    <div class="product-box--wrap">
                    <a href="">
                        <img src="<?php echo APP_URL; ?>common/img/top/product-2.png">
                        <h3>Gạch Đinh</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi </p>
                    </a>
                    </div>
                </div>
                <div class="product-box">
                    <div class="product-box--wrap">
                        <a href="">
                            <img src="<?php echo APP_URL; ?>common/img/top/product-3.png">
                            <h3>Gạch Ống 8 Lỗ</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="construction">
        <div class="construction-header">
            <div class="text">
                <p class="text-yellow">GIỚI THIỆU</p>
                <h1>Công Trình Tiêu Biểu</h1>
            </div>
        </div>
        <div class="construcsion-list flexBox flexBox--between">
            <div class="construction-group">
                <div class="construction-group-child flexBox flexBox--between">
                    <a href="">
                        <img src="<?php echo APP_URL; ?>common/img/top/construction-1.jpg">
                        <div class="contents contents-s">
                            <h2>Novotel Sài gòn</h2>
                            <img class="icon" src="<?php echo APP_URL; ?>common/img/top/icon-more.png">
                        </div>
                    </a>
                    <a href="">
                        <img src="<?php echo APP_URL; ?>common/img/top/construction-2.jpg">
                        <div class="contents contents-s">
                            <h2>Novotel Sài gòn</h2>
                            <img class="icon" src="<?php echo APP_URL; ?>common/img/top/icon-more.png">
                        </div>
                    </a>
                </div>
                <div class="construction-group-child flexBox flexBox--between">
                    <a href="">
                        <img src="<?php echo APP_URL; ?>common/img/top/construction-3.jpg">
                        <div class="contents contents-s">
                            <h2>Novotel Sài gòn</h2>
                            <img class="icon" src="<?php echo APP_URL; ?>common/img/top/icon-more.png">
                        </div>
                    </a>
                    <a href="">
                        <img src="<?php echo APP_URL; ?>common/img/top/construction-4.jpg">
                        <div class="contents contents-s">
                            <h2>Novotel Sài gòn</h2>
                            <img class="icon" src="<?php echo APP_URL; ?>common/img/top/icon-more.png">
                        </div>
                    </a>
                </div>
            </div>
            <div class="construction-group">
                <a href="">
                    <img src="<?php echo APP_URL; ?>common/img/top/construction-5.jpg">
                    <div class="contents">
                        <h2>Novotel Sài gòn</h2>
                        <img class="icon" src="<?php echo APP_URL; ?>common/img/top/icon-more.png">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="introduction">
        <div class="introduction-inner container flexBox flexBox--center">
            <diV class="title">
                <p class="text-yellow">GIỚI THIỆU<p>
                <h2>
                    Công ty TNHH <br>
                    Sản Xuất Thương Mại <br>
                    Gạch B.B.C
                </h2>
                <a class="link-hover">
                    Xem thêm
                    <span class="link-hover-arrow"></span>
                </a>
            </div>
            <div class="text">
                <p>
                    Với mong muốn đáp ứng chủ trương của chính phủ về phát triển kinh tế bền vững, đặc biệt là việc sử dụng vật liệu không nung cho ngành xây dựng. Công ty TNHH SX – TM B.B.C đã và đang khẳng định vị trí cạnh tranh của mình trên thị trường và hiện đang được đánh giá là một trong những nhà cung cấp gạch không nung uy tín, chất lượng. 
                </p>
            </div>
        </div>
    </div>
    <div class="news">
        <div class="container">
            <div class="news-title">
                <p class="text-yellow">MỚI NHẤT</p>
                <h1>TIN TỨC</h1>
            </div>
            <div class="news-list flexBox flexBox--between">
                <div class="news-box">
                    <a href="">
                        <div class="thumbnail">
                            <img class="cover" src="<?php echo APP_URL; ?>common/img/top/thumbnail.jpg">
                            <img class="icon" src="<?php echo APP_URL; ?>common/img/top/icon-more.png">
                        </div>
                        <p class="date">02 / 10 / 2018</p>
                        <p class="title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,quam</p>
                    </a>
                </div>
                <div class="news-box">
                    <a href="">
                        <div class="thumbnail">
                            <img class="cover" src="<?php echo APP_URL; ?>common/img/top/thumbnail.jpg">
                            <img class="icon" src="<?php echo APP_URL; ?>common/img/top/icon-more.png">
                        </div>
                        <p class="date">02 / 10 / 2018</p>
                        <p class="title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,quam</p>
                    </a>
                </div>
                <div class="news-box">
                    <a href="">
                        <div class="thumbnail">
                            <img class="cover" src="<?php echo APP_URL; ?>common/img/top/thumbnail.jpg">
                            <img class="icon" src="<?php echo APP_URL; ?>common/img/top/icon-more.png">
                        </div>
                        <p class="date">02 / 10 / 2018</p>
                        <p class="title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,quam</p>
                    </a>
                </div>
            </div>
            <div class="news-more">
                <a class="link-hover">
                    Xem thêm
                    <span class="link-hover-arrow"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<!--/Main-->

<!--Footer-->
<?php include(APP_PATH."libs/footer.php"); ?>
<!--/Footer-->
<!--===================================================-->
</div>
<!--/wrapper-->
<!--===================================================-->
<script src="<?php echo APP_URL; ?>common/js/slick.min.js"></script>
<script>
    $(function(){
        $('#slider').slick({
            dots: true,
            infinite: true,
            arrows:true,
            speed: 1200,
            autoplay: false,
            fade: true,
            pauseOnFocus: false,
            autoplaySpeed: 2800,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
                },
                {
                breakpoint: 767,
                settings: {
                            arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    slidesToScroll: 1
                }
                }
            ]
        });
    });
</script>

</body>
</html>	