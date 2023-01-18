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
                                <a href="index.php">
                                    <img src="img/logo.png" alt="" height="50px">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a  href="index.php">Главная</a></li>
                                        <li><a href="about.php">О зоопарке</a></li>
                                        <li><a href="#">Животные <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.php">Список</a></li>
                                                <li><a href="contact.php">Карта</a></li>
                                            </ul>
                                        </li>
                                        <?php
                                            session_start();
                                            if (empty($_SESSION['auth'])) { ?>
                                                <li><a href="autorization.php">Войти</a></li>
                                            <?php }
                                            if (!empty($_SESSION['auth'])){ ?>
                                                <li><a href="cabinet.php">Личный кабинет</a></li>
                                            <?php }
                                        ?>
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
                        <h3>История Московского зоопарка</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end -->

    <section class="sample-text-area">
		<div class="container box_1170">
			<h3 style="text-indent: 25px;" align="justify">Московский зоопарк — один из старейших зоопарков Европы. Он был открыт 31 января 1864 года по старому стилю и назывался тогда зоосадом. </h3><br>
            <h3 style="text-indent: 25px;" align="justify">Московский зоопарк был организован Императорским русским обществом акклиматизации животных и растений. Начало его существования связано с замечательными именами профессоров Московского Университета Карла Францевича Рулье, Анатолия Петровича Богданова и Сергея Алексеевича Усова. </h3><br>
            <h3 style="text-indent: 25px;" align="justify">Местность, где теперь находится Старая территория зоопарка, называлась «Пресненские пруды». Здесь протекала довольно широкая река Пресня, и было одно из любимых мест гуляний москвичей — зелёные холмы, заливные луга, цветущие сады украшали окрестности. Для создания зоосада большинством голосов членов Общества акклиматизации был выбран именно этот участок, так как он находился на доступном расстоянии для всех москвичей, в том числе и небогатых. Территория Петровской академии, например, была удобнее и больше, но ездить туда было бы далеко и дорого для большинства потенциальных посетителей. </h3><br>
            <h3 style="text-indent: 25px;" align="justify">К открытию зоосада в нем содержалось 134 экземпляра домашних животных, 153 экземпляра диких зверей и птиц и 7 экземпляров пресмыкающихся. Лучше всего была представлена российская фауна: медведи, волки, лисицы, барсуки, хорьки, куницы, зайцы, белки, ежи, олени, соколы, ястребы, филины, совы, дрофы, журавли, цапли, утки. Создатели сада хотели показать зрителям в первую очередь нашу родную природу. Были на экспозиции и экзотические животные — 2 льва, ягуар, 2 тигра, леопард, носорог, аллигатор. </h3><br>
            <h1>Истоки</h1><br>
            <h3 style="text-indent: 25px;" align="justify">Официально свою историю Московский зоопарк начинает с открытия 13 февраля 1864 года. Сегодня мы хотим рассказать о людях, стоявших у его истоков – тех, кто задумал создать первый в России зоологический парк и добился осуществления своей мечты.</h3><br>
            <h1>В годы ВОВ</h1><br>
            <h3 style="text-indent: 25px;" align="justify">65-летней годовщине Великой Победы посвящается</h3><br>
            <h3 style="text-indent: 25px;" align="justify">К началу Великой Отечественной войны в коллекцию животных Московского зоопарка входило 5710 экземпляров 425 видов млекопитающих, птиц, пресмыкающихся, земноводных и рыб. Часть наиболее ценных животных сразу же эвакуировали в Свердловский и Сталинградский зоосады и в Кавказский заповедник.</h3><br>
            <h1>Террариум</h1><br>
            <h3 style="text-indent: 25px;" align="justify">Первые рептилии были представлены в коллекции Московского зоопарка со дня его основания. Это были два вида - обыкновенный уж и тигровый питон - всего семь экземпляров, содержавшиеся в террариумах разных павильонов, в основном в "Доме птиц" и "Аквариуме". Иногда, в последующем при проведении тех или иных выставок, количество рептилий в Московском зоопарке достигало 10 видов и 50 экземпляров.</h3><br>
            <h1>Инсектарий</h1><br>
            <h3 style="text-indent: 25px;" align="justify">Коллекции животных большинства зоопарков традиционно ограничиваются лишь представителями позвоночных (тип Хордовые), тогда как наибольшее видовое богатство животных сосредоточено в нескольких типах беспозвоночных животных, которые в зоопарках обычно отсутствуют. Содержание и экспонирование беспозвоночных значительно расширяет возможности зоопарков для развития своих коллекций и проведения образовательной и природоохранной деятельности и позволяет посетителям знакомиться со всем разнообразием животного мира. Это давно поняли во многих странах, активно развивая образовательные и коммерческие экспозиции беспозвоночных, как в зоопарках, так и в самостоятельных учреждениях (инсектариях, домах бабочек и т.п.). В России одним из первых на этом пути был Московский зоопарк. В 2013 году исполнилось 135 лет со дня создания первого инсектария в Московском зоопарке.</h3><br>
            <h3 style="text-indent: 25px;" align="justify">В 1856г. по инициативе профессора Московского университета А.П. Богданова в Москве был организован Комитет по акклиматизации животных и растений, преобразованный позднее в Императорское Русское Общество Акклиматизации Животных и Растений (ИРОАЖиР). В число приоритетных задач Комитета по акклиматизации входило изучение ценных видов беспозвоночных, перспективных для акклиматизации в различных регионах России: тутового и других видов шелкопрядов, русской, кавказской и итальянской пород медоносной пчелы, медицинской пиявки и речных раков. Для их решения в 1858г. в Комитете акклиматизации было создано Отделение беспозвоночных. К.Ф. Рулье, А.П. Богданов, А.А. Тихомиров и др. российские зоологи призывали использовать уникальные возможности зоосадов для изучения перспективных видов полезных беспозвоночных животных.</h3><br>
            <h3 style="text-indent: 25px;" align="justify">13 февраля 1864г. состоялось открытие Московского зоосада, созданного ИРОАЖИР, а уже в 1868г. в Московском зоосаду впервые демонстрировались насекомые — гусеницы тутового шелкопряда и приемы их выкармливания. По инициативе профессора А.П. Богданова в 1878г. в Московском зоосаду была организована первая исследовательская лаборатория. В лаборатории был создан Отдел аквариумов и террариумов, фактически давший начало будущим отделам зоосада: террариуму, аквариуму и инсектариуму. Организацией и содержанием первых террариумов и аквариумов в лаборатории занимался ассистент Зоологического музея Московского университета, ставший позже известным российским зоологом и академиком Российской академии наук, Николай Викторович Насонов (1855-1939). В 1878-79гг. в лаборатории зоосада содержался 81 вид наземных и пресноводных беспозвоночных, в т.ч.: 34 вида насекомых, 8 видов паукообразных, 9 видов ракообразных, 15 видов моллюсков и др. Осенью 1879г. коллекция насчитывала более 300 экземпляров беспозвоночных животных. В 1878г. здесь было достигнуто, очевидно, первое разведение в лабораторных условиях бабочек-бражников — сиреневого бражника Sphinx ligustri. В специальных наблюдательных садках содержались семьи муравьев и шершней.</h3><br>
            <h3 style="text-indent: 25px;" align="justify">На Второй Акклиматизационной выставке в 1878г. посетителям Московского зоосада впервые демонстрировалась 12 видов живых беспозвоночных (водяные клопы, жуки-плавунцы и их личинки, личинки стрекоз и двукрылых, губка-бодяга, гидра, инфузории) из коллекции лаборатории. На этой выставке был устроен специальный Павильон шелководства, в котором затем регулярно устраивались выставки шелководства вплоть до 1909г., и был впервые организован отдел пчеловодства. Летом 1884г. в Московском зоосаду был открыт для публики специальный павильон пчеловодства, где помимо разных систем ульев, пчеловодного оборудования и коллекций по биологии медоносной пчелы находилось два наблюдательных улья с семьями медоносных пчел. Около павильона была устроена пасека из 6 ульев. До 1912г. в павильоне пчеловодства Московского зоосада регулярно устраивались летние выставки пчеловодства.</h3>
        </div>
	</section>

    

    <!-- footer_start  -->
    <footer class="footer" id="contacts">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="footer_title">Обратная связь</h3>
                        <form class="form-contact contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Введите ФИО'" placeholder="ФИО">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Введите email'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Введите тему'" placeholder="Тема">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Напишите сообщение'" placeholder="Сообщение"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button">Отправить</button>
                            </div>
                        </form>
                        <?php
                        
                        include "dbconnect.php";
                        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){
                            $query = "INSERT INTO `messages` (`fio`, `email`, `subject`, `message`) VALUES ('{$_POST['name']}', '{$_POST['email']}', '{$_POST['subject']}', '{$_POST['message']}')"; 
                    
                            $result = mysqli_query($conn, $query);
                        }
                        ?>
                    </div>
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
    <!-- script src="js/vendor/modernizr-3.5.0.min.js"></script -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- script src="js/popper.min.js"></script -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- script src="js/ajax-form.js"></script -->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- script src="js/imagesloaded.pkgd.min.js"></script -->
    <!-- script src="js/scrollIt.js"></script -->
    <!-- script src="js/jquery.scrollUp.min.js"></script -->
    <script src="js/wow.min.js"></script>
    <!-- script src="js/nice-select.min.js"></script -->
    <script src="js/jquery.slicknav.min.js"></script>
    <!-- script src="js/jquery.magnific-popup.min.js"></script -->
    <!-- script src="js/plugins.js"></script -->
    <!-- script src="js/gijgo.min.js"></script -->

    <!--contact js-->
    <!-- script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script -->

    <script src="js/main.js"></script>
</body>

</html>