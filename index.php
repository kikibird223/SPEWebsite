<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- bootstrap cdn css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- 引入swiper css -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js"
        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

    <style>
        /* 隱藏 Swiper 的原生按鈕 */
        /* .swiper-button-next,
        .swiper-button-prev {
            display: none;
        } */

        header {
            position: fixed;
            /* 固定位置 */
            top: 0;
            /* 距離頂部 0 */
            width: 100%;
            /* 讓導覽列寬度佔滿頁面 */
            z-index: 99;
            /* 保持導覽列在最前方 */
            background-color: rgba(0, 0, 0, 1);
            /* 導覽列背景色 */
            color: white;
            /* 文字顏色 */
        }

        html,
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            width: 100%;
            background-color: black;
        }

        .company {
            background-image: url("img/0.0homepage/company.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100%;
            width: 100%;
        }

        .banner {
            margin-top: 80px;
            height: 100%;
            width: 100%;
            background-image: url("img/0.0homepage/底圖.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        p {
            font-size: 11px;
            color: rgb(210, 210, 210);
            font-family: 微軟正黑體;
            font-weight: bold;
        }

        .p-1 {

            font-size: 14px;
            color: white;
            font-family: 微軟正黑體;
            font-weight: bold;
        }

        .p-2 {
            font-size: 9px;
            color: rgb(140, 140, 140);
            font-family: 微軟正黑體;
        }

        .model {
            
            margin: 10px;
        }


        .page-number {
            font-size: 14px;
            color: white;
            font-family: 微軟正黑體;
        }

        .page {
            font-size: 10px;
            color: rgb(162, 162, 162);
            font-family: 微軟正黑體;
        }

        h1 {
            font-size: 25px;
            color: white;
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
        }

        .contact-01 {
            margin-top: 0px;
            background-image: url('img/08.contactus/08) Contact Us.png');
            background-size: cover;
            /* 讓背景圖片等比例填滿容器 */
            background-position: right;
            /* 使圖片居中顯示 */
            background-repeat: no-repeat;
            /* 不重複背景圖片 */
            height: 300px;
            width: 100%;
        }


        #topBtn {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 5px;
            right: 5px;
            z-index: 999;
            border: none;
            outline: none;
            background-color: rgb(0, 0, 255);
            color: white;
            cursor: pointer;
            padding: 10px;
            border-radius: 1px;
            font-size: 20px;
            position: fixed;
        }
    </style>
</head>

<body id="home">
    <!-- 導覽列 -->
    <header>
        <div class="collapse " id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-sm-4 offset-md-1 py-1">
                        <p class="d-inline-flex gap-1">
                            <a class="btn btn-dark" data-bs-toggle="collapse" href="#collapse01" role="button"
                                aria-expanded="false" aria-controls="collapse01">
                                Company
                            </a>
                        </p>
                        <div class="collapse" id="collapse01">
                            <div class="card card-body">
                                <li><a href="#" class="text-black">Follow on Twitter</a></li>
                                <li><a href="#" class="text-black">Like on Facebook</a></li>
                                <li><a href="#" class="text-black">Email me</a></li>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 offset-md-1 py-1">
                        <p class="d-inline-flex gap-1">
                            <a class="btn btn-dark" data-bs-toggle="collapse" href="#collapse02" role="button"
                                aria-expanded="false" aria-controls="collapse02">
                                Industrial
                            </a>
                        </p>
                        <div class="collapse" id="collapse02">
                            <div class="card card-body">
                                <li><a href="#" class="text-black">Follow on Twitter</a></li>
                                <li><a href="#" class="text-black">Like on Facebook</a></li>
                                <li><a href="#" class="text-black">Email me</a></li>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 offset-md-1 py-1">
                        <p class="d-inline-flex gap-1">
                            <a class="btn btn-dark" data-bs-toggle="collapse" href="#collapse03" role="button"
                                aria-expanded="false" aria-controls="collapse03">
                                Product
                            </a>
                        </p>
                        <div class="collapse" id="collapse03">
                            <div class="card card-body">
                                <li><a href="#" class="text-black">Follow on Twitter</a></li>
                                <li><a href="#" class="text-black">Like on Facebook</a></li>
                                <li><a href="#" class="text-black">Email me</a></li>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 offset-md-1 py-1">
                        <p class="d-inline-flex gap-1">
                            <a class="btn btn-dark" data-bs-toggle="collapse" href="#collapse04" role="button"
                                aria-expanded="false" aria-controls="collapse04">
                                Service
                            </a>
                        </p>
                        <div class="collapse" id="collapse04">
                            <div class="card card-body">
                                <li><a href="#" class="text-black">Follow on Twitter</a></li>
                                <li><a href="#" class="text-black">Like on Facebook</a></li>
                                <li><a href="#" class="text-black">Email me</a></li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark shadow-sm">
            <div class="container">
                <a href="#home" class="navbar-brand d-flex align-items-center">
                    <img src="img/0.0homepage/logo.svg" height="30" class="me-2" alt="Logo" style="left: 0px;">
                    <p style="padding-top:17px ;"> <i><strong>Scenic Precise <br>
                                Element</strong></i></p>

                </a>

                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto d-none d-md-block">
                    <a class="fs-8 me-3 py-2 text-white text-decoration-none" href="#company">Company</a>
                    <a class="fs-8 me-3 py-2 text-white text-decoration-none" href="#Industrials">Industrial</a>
                    <a class="fs-8 me-3 py-2 text-white text-decoration-none" href="#products">Product</a>
                    <a class="fs-8 me-3 py-2 text-white text-decoration-none" href="#services">Service</a>
                    <a class="fs-8 me-3 py-2 text-white text-decoration-none" href="#catalog">Catalog</a>
                    <a class="fs-8 me-3 py-2 text-white text-decoration-none" href="#download">Download</a>

                </nav>
                <button class="navbar-toggler ms-5" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>


    </header>

    <!-- Top回首頁 -->
    <button id="topBtn" class="btn btn-primary"><i class="bi bi-arrow-up"></i></button>
    <div class="container-fluid">

        <!-- 首頁Banner -->
        <section class="banner">
            <div class="row">
                <div class="col-2 d-none d-md-block">
                    <div class="model">
                        <strong>
                            <p></p>
                            <p style="border-top: 5px solid blue ;width:5px "></p>
                        </strong>
                        <div class="model-line">
                            <div style="border-left: 2px solid rgb(162, 162, 162); height: 100px;" width="500px"></div>
                            <div style="border-left: 2px solid rgb(0, 0, 255); height: 50px;" width="500px"></div>
                        </div>
                        <span class="page-number">01</span><span class="page">/03</span>
                    </div>
                </div>

                <!-- 產品圖片 -->
                <div class="col">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner" id="carousel-content"></div>
                        <button class="carousel-control carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control carousel-control-next" type="button"
                            data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- 公司介紹 -->
        <section class="company" id="company">
            <div class="row">
                <div class="col-6" style=" margin:50px;" height="480px">
                    <div class="model">
                        <div style="border-left: 5px solid white;">
                            <p class="p" style=" margin-left:10px ;">2021 Virtual Exhibition </p>
                            <h4 style="color: white; margin-left:10px ; font-weight: bold ;">Company</h4>
                        </div>
                        <div style=" margin:10px ;">
                            <p class="p" style=" margin:10px ;">
                                <strong>Scenic Cartridge Mechanical Sellers-Saels</strong><br>
                                Founded in 1986 and headquartered in Kaohsiung City, Scenic Precise Element (SPE) is one
                                of the best known fluid sealing professionals in mechanical seal manufacturing and
                                design
                            </p>
                            <div>
                                <span style="color: rgb(207, 207, 207); font-size: 12px; ">read more
                                    <img src="img/0.0homepage/箭頭.svg" style="width: 30px; "></span>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- 工業應用 -->
        <section class="industrials" id="Industrials">
            <div class="row" style="background-color: white;">
                <div class="col-lg-10 col-sm-8" style=" margin:50px 0px 50px 50px; "
                    height="100%">
                    <div class="model">
                        <div style="border-left: 2px solid blue;">
                            <p class="p" style="color: black; margin-left:10px ;">Where we work </p>
                            <h5 style="color: black; margin-left:10px; font-weight: bold;">
                                Our Industrials
                                <i id="prevArrow" class="bi bi-arrow-left-short color-white"></i>
                                <i id="nextArrow" class="bi bi-arrow-right-short color-primary"></i>
                            </h5>


                        </div>
                        <div class="swiper-container">
                            <div class="swiper-wrapper" id="swiper-wrapper">
                                <!-- industrail.json -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <!-- 產品介紹 -->
        <section class="product" id="products">
            <div class="row" style="background-color: black;">
                <div class="col-12" style="text-align: center;">
                    <div class="model" style="padding-top: 10px;">
                        <p class="p" style="margin-left: 10px;">Products</p>
                        <h5 style="color: white; margin-left: 10px; font-weight: bold;">Top Selling Products</h5>
                        <div style="display: inline-block; margin-top: 10px;">
                            <i class="bi bi-arrow-left" style="color: white;"></i>
                            <span style="font-weight: bold; font-size: 12px; color: white;">04</span>
                            <span style="font-size: 12px; color: rgb(193, 193, 193);">/10</span>
                            <i class="bi bi-arrow-right" style="color: rgb(0, 72, 255);"></i>
                        </div>

                    </div>
                </div>
            </div>

            <!-- 產品輪播 -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide" style="background-color: black; text-align: center;">
                        <div class="model" style="padding: 20px;">
                            <h1 style="color: rgb(0, 72, 255); font-size: 40px;">03</h1>
                            <p>內文..........<br>內文..........</p>
                            <h6 style="color: white; font-weight: bold;">MCG 2000</h6>
                            <img src="img/homepage_product.png" alt="" style="margin: 10px; width: 100%;">
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide" style="background-color: black; text-align: center;">
                        <div class="model" style="border: 1px solid white; padding: 20px;">
                            <h1 style="color: rgb(0, 72, 255); font-size: 40px;">04</h1>
                            <p>內文..........<br>內文..........</p>
                            <h6 style="color: white; font-weight: bold;">MCG 2000</h6>
                            <img src="img/homepage_product.png" alt="" style="margin: 10px; width: 100%;">
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide" style="background-color: black; text-align: center;">
                        <div class="model" style="border: 1px solid white; padding: 20px;">
                            <h1 style="color: rgb(0, 72, 255); font-size: 40px;">05</h1>
                            <p>內文..........<br>內文..........</p>
                            <h6 style="color: white; font-weight: bold;">MCG 2000</h6>
                            <img src="img/homepage_product.png" alt="" style="margin: 10px; width: 100%;">
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div class="swiper-slide" style="background-color: black; text-align: center;">
                        <div class="model" style="border: 1px solid white; padding: 20px;">
                            <h1 style="color: rgb(0, 72, 255); font-size: 40px;">06</h1>
                            <p>內文..........<br>內文..........</p>
                            <h6 style="color: white; font-weight: bold;">MCG 2000</h6>
                            <img src="img/homepage_product.png" alt="" style="margin: 10px; width: 100%;">
                        </div>
                    </div>

                    <!-- Slide 5 -->
                    <div class="swiper-slide" style="background-color: black; text-align: center;">
                        <div class="model" style="border: 1px solid white; padding: 20px;">
                            <h1 style="color: rgb(0, 72, 255); font-size: 40px;">07</h1>
                            <p>內文..........<br>內文..........</p>
                            <h6 style="color: white; font-weight: bold;">MCG 2000</h6>
                            <img src="img/homepage_product.png" alt="" style="margin: 10px; width: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 服務 -->
        <section class="services" id="services">
            <div class="row" style="background-color: white;">
                <div class="col-lg-10 col-md-8 col-sm-4" style=" margin:50px 0px 50px 50px;"
                    height="100%">
                    <div class="model">
                        <div style="border-left: 2px solid blue;">
                            <p class="p" style="color: black; margin-left:10px ;">Where we work </p>
                            <h5 style="color: black; margin-left:10px ; font-weight: bold ;">Services
                                <i class="bi bi-arrow-left-short color-white"></i>
                                <i class="bi bi-arrow-right-short color-primary"></i>
                            </h5>
                        </div>
                        <div class="swiper-container">
                            <div class="swiper-wrapper" id="swiper-wrapper-service">
                                <!-- service.json -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- 最新型錄
          -->
        <section class="catalog" id="catalog">
            <div class="row" style="background-color: black;">
                <div class="col-12" style="text-align: center;">
                    <div class="model" style="border: 1px solid white; padding: 10px;">
                        <p class="p" style="margin-left: 10px;">Best Sellers-Saels</p>
                        <h5 style="color: white; margin-left: 10px; font-weight: bold;">Catalogs</h5>
                        <div style="display: inline-block; margin-top: 10px;">
                            <i class="bi bi-arrow-left" style="color: white;"></i>
                            <span style="font-weight: bold; font-size: 12px; color: white;">04</span>
                            <span style="font-size: 12px; color: rgb(193, 193, 193);">/10</span>
                            <i class="bi bi-arrow-right" style="color: rgb(0, 72, 255);"></i>
                        </div>

                    </div>
                </div>
            </div>


            <div class="swiper-container">
                <div class="swiper-wrapper" id="swiper-wrapper-resource">
                    <!-- Slides will be inserted here -->
                </div>
            </div>
        </section>


        <!-- 說明書文件 -->
        <section class="Document" id="download">
            <div class="row" style="background-color: rgba(0, 0, 255, 0.344);">
                <div class="col-lg-12 col-md-8 col-sm-4" style="margin:50px; ">
                    <div class="model" ">
                        <div style="border-left: 2px solid rgb(255, 255, 255);">
                            <p class="p" style="color: rgb(255, 255, 255); margin-left:10px;">Download for free.</p>
                            <h5 style="color: rgb(255, 255, 255); margin-left:10px; font-weight: bold;">Documents</h5>
                        </div>
                        <div class="swiper-container">
                            <div class="swiper-wrapper" id="swiper-wrapper-download">
                                <!-- Slides will be inserted here dynamically -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- 銷售地點 -->
        <section class="contact">
            <div class="container">
                <div class="row" style="background-color: white;">
                    <div class="contact-01 col-12 d-flex">
                        <div class="col-lg-6 col-sm-12"></div>
                        <div class="col-lg-6 col-sm-12 text-right">
                            <h3 style="margin: 80px 80px 0px 0px; ">
                                Sealing Solution from
                                the fluid sealing Expert.
                            </h3>
                            <p style="margin: 10px 100px 0px 0px; color: black; font-size: 16px; font-size: 10px;">
                                Contact our sealing experts today to get total solution with your sealing requirement. Whatever your application is, Scenic is here to service you to propose best advice and improvement to make your work easier and more efficient.
                            </p>
                            <p></p>
                            <a href="#" style="text-decoration: none; color: black;">
                                Full contact details
                                <img src="img/08.contactus/readmore_icon.svg" alt="Read more icon" style="margin-left: 5px;" width="10%">
                            </a>

                        </div>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-2" style="background-color: rgba(255, 50, 50, 0.5);border-bottom: 1px solid white;">
                        <p style="margin: 10px; color: black; ">03 Changshu Service Centre<br>
                            Email : wuxi.cc@scenic-seals.com</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-2" style="background-color: rgba(255, 50, 50, 0.5); border-bottom: 1px solid white;">
                        <p style="margin: 10px; color: black;">02 Kunshan Service Centre
                            <br>
                            Email : wuxi.cc@scenic-seals.com
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-2" style="background-color: rgba(255, 0, 0, 0.8);  border-bottom: 1px solid white;">
                        <p style="margin: 10px; color: black;  margin: 10px; ">
                            01 Scenic Precise Element
                        </p>
                        <p style="margin: 10px; color: black; font-size: 8px; margin: 10px; ">
                            | Scenic Service Centre | Mailiao Branch Office
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-2" style="background-color: rgba(255, 0, 0, 0.8);border-bottom: 1px solid white;">
                        <p style="color: black; margin: 10px;">Overseas : scenic@scenic-seals.com
                            <br>
                            Taiwan : service@scenic-seals.comm
                        </p>
                    </div>

                </div>

            </div>

        </section>
        <!-- footer -->
        <?php include 'footer.php'; ?>

    </div>



    <!-- bootstrap cdn js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- 初始化 Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            slidesPerView: 1,
            spaceBetween: 10,
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 4,
                },
            },
        });
    </script>
    <script>
        jQuery('a[href^="#"]').on('click', function(e) {
            e.preventDefault();
            var href = $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(href).offset().top
            }, 'slow');
        });
    </script>
    <!-- Top回首頁 -->
    <script>
        // 當使用者滾動超過100px時顯示按鈕
        window.onscroll = function() {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                document.getElementById("topBtn").style.display = "block";
            } else {
                document.getElementById("topBtn").style.display = "none";
            }
        };

        // 點擊按鈕回到頂部
        document.getElementById('topBtn').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth' // 平滑滾動
            });
        });
        //
        setTimeout(() => {
            let _index = $('.carousel-item.active').index();
            let h5 = $('.carousel-item').eq(_index).find('h5').text();
            let title = `${h5}`;
            $('div.model > strong p').eq(0).text(title);
            let _sn = String(_index + 1).padStart(2, "0");
            $('span.page-number').text(`${_sn}`);
            let _row = String($('.carousel-item').length).padStart(2, "0");
            $('span.page').text(`/${_row}`);
        }, 500);
        $('#carouselExampleDark').on('slid.bs.carousel', function() {
            let _index = $('.carousel-item.active').index();
            console.log(_index);
            // let h1 = $('.carousel-item').eq(_index).find('h1').text();
            // let title = `第${_index + 1}組${h1}`;
            let h5 = $('.carousel-item').eq(_index).find('h5').text();
            let title = `${h5}`;
            $('div.model > strong p').eq(0).text(title);
            let _sn = String(_index + 1).padStart(2, "0");
            $('span.page-number').text(`${_sn}`);
            let _row = String($('.carousel-item').length).padStart(2, "0");
            $('span.page').text(`/${_row}`);
        })
    </script>

    <!-- Banner.json -->
    <script>
        fetch('banner.json')
            .then(response => response.json())
            .then(data => {
                const carouselContent = document.getElementById('carousel-content');
                data.forEach((item, index) => {
                    const carouselItem = document.createElement('div');
                    carouselItem.className = `carousel-item ${index === 0 ? 'active' : ''}`;
                    carouselItem.innerHTML = `
                        <div class="model" style="height: 450px;">
                            <strong>
                                <b>
                                    <h1>${item.title}</h1>
                                </b>
                                <p style="border-left: 5px solid blue ; padding-left: 10px;">${item.description}</p>
                            </strong>
                            <h5 style="color: white; margin-top: 80px; font-weight: bold;">${item.model}</h5>
                            <p>${item.content}</p>
                            <span style="color: rgb(207, 207, 207); font-size: 12px;">read more
                                 <img src="img/0.0homepage/箭頭.svg"  style="width: 30px; "></span>
                            </span>
                            ${item.image ? `<img src="${item.image}" style="width: auto; max-width: 40%; position: absolute; right: 30px; bottom: 0px;" class="d-block w-100" alt="...">` : ''}
                        </div>
                    `;
                    carouselContent.appendChild(carouselItem);
                });
            })
            .catch(error => console.error('Error fetching JSON data:', error));
    </script>
    <!-- resources.json -->
    <script>
        // 使用 fetch API 載入 JSON 檔案
        fetch('resources.json')
            .then(response => response.json())
            .then(data => {
                const swiperWrapper = document.getElementById('swiper-wrapper-resource');

                // 遍歷每個資源項目，生成對應的 HTML 結構
                data.resources.forEach(resource => {
                    const slide = document.createElement('div');
                    slide.classList.add('swiper-slide');
                    slide.style.backgroundColor = 'black';
                    slide.style.textAlign = 'center';

                    slide.innerHTML = `
                    <div class="swiper-slide" style="background-color: black; text-align: center;">
                    <div class="model text-center" style="padding: 20px;">
                        <p>${resource.year}</p>
                        <h1 style="color: rgb(0, 72, 255); font-size: 40px;">
                            ${resource.day}<br>
                            ${resource.month}
                        </h1>
                        <div style="border-left: 2px solid gray; height: 50px; margin: 0 auto; width: 10%;"></div>
                        <img src="${resource.image}" alt="${resource.alt}" style="width: 100%; padding: 10px;">
                        <h6 style="color: white; font-weight: bold;">
                            ${resource.title}<br>
                            ${resource.subtitle}<br>
                            ${resource.edition}
                        </h6>
                    </div>  
                    </div>
                `;

                    swiperWrapper.appendChild(slide);
                });
            })
            .catch(error => console.error('Error loading resources:', error));
    </script>

    <!-- industrail.js -->
    <script>
        // Fetch data from industrial.json and generate slides dynamically
        fetch('industrial.json')
            .then(response => response.json())
            .then(data => {
                const wrapper = document.getElementById('swiper-wrapper');
                data.slides.forEach(slide => {
                    const slideElement = document.createElement('div');
                    slideElement.classList.add('swiper-slide', 'col-2');
                    slideElement.style.textAlign = 'center';
                    slideElement.style.height = '100%';
                    slideElement.style.width = '100%';

                    const imgElement = document.createElement('img');
                    imgElement.src = slide.image;
                    imgElement.alt = slide.alt;
                    imgElement.style.width = '150px';

                    slideElement.appendChild(imgElement);
                    wrapper.appendChild(slideElement);
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    </script>

    <!-- service.js -->
    <script>
        // Fetch data from service.json and generate slides dynamically
        fetch('service.json')
            .then(response => response.json())
            .then(data => {
                const wrapper = document.getElementById('swiper-wrapper-service');
                data.services.forEach(row => {
                    const slideElement = document.createElement('div');
                    slideElement.classList.add('swiper-slide', 'col-2');
                    slideElement.style.textAlign = 'center';
                    slideElement.style.height = '100%';
                    slideElement.style.width = '100%';

                    const imgElement = document.createElement('img');
                    imgElement.src = row.image;
                    imgElement.alt = row.alt;
                    imgElement.style.width = '150px';
                    imgElement.style.borderLeft = '2px solid white';
                    // imgElement.title = 'kiki';

                    slideElement.appendChild(imgElement);
                    wrapper.appendChild(slideElement);
                });
            })
            .catch(error => console.error('Error fetching service data:', error));
    </script>

    <script>
        // Fetch data from downloads.json and generate slides dynamically
        fetch('downloads.json')
            .then(response => response.json())
            .then(data => {
                const wrapper = document.getElementById('swiper-wrapper-download');
                data.downloads.forEach(download => {
                    const slideElement = document.createElement('div');
                    slideElement.classList.add('swiper-slide', 'col-2');
                    slideElement.style.color = 'white';
                    slideElement.style.borderLeft = '1px solid rgb(255, 255, 255)';
                    slideElement.style.textAlign = 'left';

                    // Title
                    const titleElement = document.createElement('h6');
                    titleElement.style.margin = '20px';
                    titleElement.textContent = download.title;
                    slideElement.appendChild(titleElement);

                    // Description List
                    const ulElement = document.createElement('ul');
                    download.description.forEach(desc => {
                        const liElement = document.createElement('li');
                        liElement.classList.add('p');
                        liElement.style.margin = '10px';
                        liElement.style.fontSize = '12px';
                        liElement.textContent = desc;
                        ulElement.appendChild(liElement);
                    });
                    slideElement.appendChild(ulElement);

                    // Enquiry Form Link
                    if (download.enquiry) {
                        const enquiryElement = document.createElement('p');
                        enquiryElement.style.margin = '20px';
                        enquiryElement.innerHTML = `Enquiry Form: 
                    <a href="${download.enquiry}" 
                    download="Enquiry Form" 
                    class="btn btn-outline-light small-btn" 
                    style="border: none; margin: 10px; ">
                        <i class="bi bi-filetype-pdf fa-2x"></i>
                    </a>`;
                        slideElement.appendChild(enquiryElement);
                    }

                    // Brochure Link
                    if (download.brochure) {
                        const brochureElement = document.createElement('p');
                        brochureElement.style.margin = '20px';
                        brochureElement.innerHTML = `Brochure: 
                    <a href="${download.brochure}" download="Brochure" class="btn btn-outline-light small-btn" style="border: none;">
                        <i class="bi bi-filetype-pdf fa-2x"></i>
                    </a>`;
                        slideElement.appendChild(brochureElement);
                    }

                    wrapper.appendChild(slideElement);
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    </script>

</body>

</html>