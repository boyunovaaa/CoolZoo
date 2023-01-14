<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>КулЗоо</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

    <script src="https://api-maps.yandex.ru/2.1/?apikey=949c419f-7cb8-41ba-9e1b-e7c3f69e0086&lang=ru_RU" type="text/javascript">
    </script>
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header_start  -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="" height="50px">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a  href="index.html">Главная</a></li>
                                        <li><a href="about.html">О зоопарке</a></li>
                                        <li><a href="#">Животные <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.php">Список</a></li>
                                                <li><a href="contact.php">Карта</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#contacts">Контакты</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- header_start  -->

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcam_text text-center">
                        <h3>Карта Московского зоопарка</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end -->

    

    <div class="col-lg-12">
    <!-- ?php
    include "dbconnect.php";
    $sql = mysqli_query($conn, 'SELECT DISTINCT Coo FROM `zoo`');

    while ($result = mysqli_fetch_array($sql)){
        $arr[] = $result["Coo"];

    }

    print_r($arr);
    ? -->
        <div id="map" class="map" style="height: 800px">
            <script type="text/javascript">
                // Функция ymaps.ready() будет вызвана, когда
                // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
                ymaps.ready(init);
                function init(){
                    // Создание карты.
                    var myMap = new ymaps.Map("map", {
                        // Координаты центра карты.
                        // Порядок по умолчанию: «широта, долгота».
                        // Чтобы не определять координаты центра карты вручную,
                        // воспользуйтесь инструментом Определение координат.
                        center: [55.76323808, 37.58051340],
                        // Уровень масштабирования. Допустимые значения:
                        // от 0 (весь мир) до 19.
                        zoom: 16
                    });
                    
                    <?php
                    $arr1 = [];
                    $arr2 = [];
                    include "dbconnect.php";
                    $sql1 = mysqli_query($conn, 'SELECT DISTINCT Coo1, Coo2 FROM `zoo3`;');
                    while ($result1 = mysqli_fetch_array($sql1)){
                        $arr1[] = (float)$result1["Coo1"];
                        $arr2[] = (float)$result1["Coo2"];
                    }
                    ?>

                    var coo1 =JSON.parse('<?=json_encode($arr1)?>');

                    var coo2 =JSON.parse('<?=json_encode($arr2)?>');

                    var coords=[], i, j;
                    for (i=0; i<42; i++){
                        coords.push(i);
                        coords[i] = [];
                    for (j=0; j<1; j++){
                        coords[i].push(coo1[i], coo2[i]);
                    }
                    }


                    var myGeoObjects = [];

                    for (var i = 0; i<coords.length; i++) {
                    myGeoObjects[i] = new ymaps.GeoObject({
                        geometry: {
                        type: "Point",
                        coordinates: coords[i]
                        }
                    });
                    }

                    var myClusterer = new ymaps.Clusterer();
                    myClusterer.add(myGeoObjects);
                    myMap.geoObjects.add(myClusterer);
                    
                }
            </script>
        </div>
    </div>
    
    <!-- footer_start  -->
    <footer class="footer" id="contacts">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Контакты
                            </h3>
                            <ul class="address_line">
                                <li>8 (977) 801-01-43</li>
                                <li><a href="#">olga.boyunova@gmail.com</a></li>
                                <li>Россия, Москва</li>
                            </ul>
                        </div>
                    </div>
                    <!-- div class="col-xl-3  col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Our Servces
                            </h3>
                            <ul class="links">
                                <li><a href="#">Pet Insurance</a></li>
                                <li><a href="#">Pet surgeries </a></li>
                                <li><a href="#">Pet Adoption</a></li>
                                <li><a href="#">Dog Insurance</a></li>
                                <li><a href="#">Dog Insurance</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3  col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Quick Link
                            </h3>
                            <ul class="links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms of Service</a></li>
                                <li><a href="#">Login info</a></li>
                                <li><a href="#">Knowledge Base</a></li>
                            </ul>
                        </div>
                    </div -->
                    <div class="col-xl-3 col-md-6 col-lg-3 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/logo.png" alt="" height="50px">
                                </a>
                            </div>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="img/telegram.png" alt="" height="20px">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/вк.png" alt="" height="20px">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/youtube.png" alt="" height="20px">
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="bordered_1px"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->


    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            disableDaysOfWeek: [0, 0],
        //     icons: {
        //      rightIcon: '<span class="fa fa-caret-down"></span>'
        //  }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
        var timepicker = $('#timepicker').timepicker({
         format: 'HH.MM'
     });
    </script>
</body>

</html>