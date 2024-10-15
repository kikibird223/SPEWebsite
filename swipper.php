
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