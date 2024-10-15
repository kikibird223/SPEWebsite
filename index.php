<?php include("header.php"); ?>

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
                                <img src="img/00_homepage/箭頭.svg" style="width: 30px; "></span>
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
                        <h1 style="color: rgb(0, 72, 255); font-size: 40px;">01</h1>
                        <p style="color: gray; font-size: 10px;">FOR MIXERS<br>AND AGITATORS</p>
                        <h6 style="color: white; font-weight: bold;">MCG 2000</h6>
                        <ul id="p">
                            <li>HIGH RELIABILITY DUAL</li>
                            <li>CARTRIDGE SEALS</li>
                        </ul>
                        <img src="img/03_product/MGS2000.png" alt="" style="margin: 10px; width: 200px;">
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide" style="background-color: black; text-align: center;">
                    <div class="model" style="padding: 20px;">
                        <h1 style="color: rgb(0, 72, 255); font-size: 40px;">02</h1>
                        <p style="color: gray; font-size: 10px;">FOR MODERATELY  
                        <br>ABRASIVE SERVICES</p>
                        <h6 style="color: white; font-weight: bold;">CARLIFE® 99SSTM</h6>
                        <ul id="p">
                            <li>FLUSHLESS <br>
                            　SINGLE SEALL</li>
                        </ul>
                        <img src="img/03_product/CARLIFE®99SSTM.png" alt="" style="margin: 10px; width: 200px;">
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide" style="background-color: black; text-align: center;">
                    <div class="model" style="padding: 20px;">
                        <h1 style="color: rgb(0, 72, 255); font-size: 40px;">03</h1>
                        <p style="color: gray; font-size: 10px;">FOR MIXERS<br>AND AGITATORS</p>
                        <h6 style="color: white; font-weight: bold;">MCG 2000</h6>
                        <ul id="p">
                            <li>HIGH RELIABILITY DUAL</li>
                            <li>CARTRIDGE SEALS</li>
                        </ul>
                        <img src="img/03_product/MGS2000.png" alt="" style="margin: 10px; width: 200px;">
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide" style="background-color: black; text-align: center;">
                    <div class="model" style="padding: 20px;">
                        <h1 style="color: rgb(0, 72, 255); font-size: 40px;">04</h1>
                        <p style="color: gray; font-size: 10px;">FOR MODERATELY  
                        <br>ABRASIVE SERVICES</p>
                        <h6 style="color: white; font-weight: bold;">CARLIFE® 99SSTM</h6>
                        <ul id="p">
                            <li>FLUSHLESS <br>
                            　SINGLE SEALL</li>
                        </ul>
                        <img src="img/03_product/CARLIFE®99SSTM.png" alt="" style="margin: 10px; width: 200px;">
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="swiper-slide" style="background-color: black; text-align: center;">
                    <div class="model" style="padding: 20px;">
                        <h1 style="color: rgb(0, 72, 255); font-size: 40px;">05</h1>
                        <p style="color: gray; font-size: 10px;">FOR MODERATELY  
                        <br>ABRASIVE SERVICES</p>
                        <h6 style="color: white; font-weight: bold; ">CARLIFE® 99SSTM</h6>
                        <p ></p>
                        <ul id="p">
                            <li>FLUSHLESS <br>
                            　SINGLE SEALL</li>
                        </ul>
                        <img src="img/03_product/CARLIFE®99SSTM.png" alt="" style="margin: 10px; width: 200px;">
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
                <div class="model" style=" padding: 10px;">
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
                        <div style=" border-left: 2px solid rgb(255, 255, 255);">
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
</div>
<!-- footer -->
<?php include 'footer.php'; ?>