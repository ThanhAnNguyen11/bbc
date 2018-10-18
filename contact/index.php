<?php
include($_SERVER["DOCUMENT_ROOT"] . "/bbc/app_config.php");
include(APP_PATH."libs/head.php"); 
?>
</head>

<body id="contact">
<!--===================================================-->
<div id="wrapper">
<!--===================================================-->
<!--Header-->
<?php include(APP_PATH."libs/header.php"); ?>
<!--/Header-->

<!--Main-->
<div class="headSub">
    <img src="<?php echo APP_URL; ?>img/contact/main.jpg" class="pc" alt="">
    <img src="<?php echo APP_URL; ?>img/contact/main@sp.jpg" class="sp" alt="">
    <h2><span>L</span>IÊN HỆ</h2>
</div>
<div class="bgContent">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?php echo APP_URL; ?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
            <li>Liên hệ</li>
        </ul>
        <section class="contactContent flexBox flexBox--between flexBox--wrap">
            <div class="leftContact">
                <h3 class="h3_contact">Đừng ngại ngần gì<br>
                <span>Hãy liên hệ với chúng tôi</span></h3>
                <p class="txtContact">
                Công ty TNHH Sản xuất và Thương mại Gạch B.B.C chuyên sản xuất và kinh doanh vật liệu xây dựng không nung với sản phẩm cốt lõi là Gạch Không Nung xi măng cốt liệu. Thông tin liên hệ dưới đây :
                </p>
                <table class="contactInfo">
                    <tr>
                        <th><span><i class="fa fa-map-marker" aria-hidden="true"></i></span></th>
                        <td>122 Đường D2, Phường 25,Quận Bình Thạnh, Tp. Hồ Chí Minh</td>
                    </tr>
                    <tr>
                        <th><span><i class="fa fa-phone" aria-hidden="true"></i></span></th>
                        <td>090-640-4448<br>090-640-4448</td>
                    </tr>
                    <tr>
                        <th><span><i class="fa fa-envelope" aria-hidden="true"></i></span></th>
                        <td>gachbbc@gmail.com</td>
                    </tr>
                </table>
            </div>
            <div class="rightContact">
                <div id="map"></div>
            </div>
        </section>
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
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBV7fW4OF5FqFFlLakpTOvf1Kuq_qHXcqY"></script> <script type="text/javascript">// When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 17,
					scrollwheel: false,
					scaleControl: false,
					draggable: true,
					clickableIcons: false,
                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(10.804830, 106.715970),

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                   styles: [{"featureType":"all","elementType":"all","stylers":[{"saturation":-120},{"gamma":0.8}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body data-rsssl=1>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(10.804830, 106.715970),
                    map: map,
					icon: new google.maps.MarkerImage('http://localhost:8080/bbc/bbc/common/img/icon/pin.png',null,null, null,new google.maps.Size(60, 60))
                });
            }</script>
</body>
</html>	