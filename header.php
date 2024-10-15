<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            background-image: url("img/00_homepage/company.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100%;
            width: 100%;
        }

        .banner {
            margin-top: 60px;
            height: 100%;
            width: 100%;
            background-image: url("img/00_homepage/底圖.png");
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
        #p {
            margin: 20px;
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
            margin-top: 50px;
        }

        .model-line {
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
            background-image: url('img/08.contactus/08Contact Us.png');
            background-size: cover;
            /* 讓背景圖片等比例填滿容器 */
            background-position: right;
            /* 使圖片居中顯示 */
            background-repeat: no-repeat;
            /* 不重複背景圖片 */
            height: 400px;
            width: 100%;
        }

        .footer-01 {
            margin-top: 0px;
            background-color: black;
            height: 300px;
            width: 100%;
            margin: 0 50px;
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
                    <img src="img/00_homepage/logo.svg" height="30" class="me-2" alt="Logo" style="left: 0px;">
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
                <!-- <button class="navbar-toggler ms-5" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
            </div>
        </div>


    </header>

    