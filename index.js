


// <!-- 初始化 Swiper -->

var swiper = new Swiper('.swiper-container', {
    loop: true,
    navigation: {
        nextEl: '#swiper-button-next',
        prevEl: '#swiper-button-prev',
    },
    slidesPerView: 1,
    spaceBetween: 10,
    breakpoints: {
        480: {
            slidesPerView: 1,
        },
        640: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
    on: {
        slideChange: function () {
            let currentSlide = this.realIndex + 1;  // Swiper starts at index 0
            let totalSlides = this.slides.length - this.loopedSlides * 2;  // Adjust for looped slides
            document.getElementById('current-slide').textContent = currentSlide;
            document.getElementById('total-slides').textContent = totalSlides;
        }
    }
});

jQuery('a[href^="#"]').on('click', function (e) {
    e.preventDefault();
    var href = $(this).attr('href');
    $('html, body').animate({
        scrollTop: $(href).offset().top
    }, 'slow');
});

//<!-- Top回首頁 -->

// 當使用者滾動超過100px時顯示按鈕
window.onscroll = function () {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("topBtn").style.display = "block";
    } else {
        document.getElementById("topBtn").style.display = "none";
    }
};

// 點擊按鈕回到頂部
document.getElementById('topBtn').addEventListener('click', function () {
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
$('#carouselExampleDark').on('slid.bs.carousel', function () {
    let _index = $('.carousel-item.active').index();
    console.log(_index);
    let h5 = $('.carousel-item').eq(_index).find('h5').text();
    let title = `${h5}`;
    $('div.model > strong p').eq(0).text(title);
    let _sn = String(_index + 1).padStart(2, "0");
    $('span.page-number').text(`${_sn}`);
    let _row = String($('.carousel-item').length).padStart(2, "0");
    $('span.page').text(`/${_row}`);
})


//<!-- Banner.json -->

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
                             <img src="img/0.0首頁/箭頭.svg"  style="width: 30px; "></span>
                        </span>
                        ${item.image ? `<img src="${item.image}" style="width: auto; max-width: 40%; position: absolute; right: 30px; bottom: 0px;" class="d-block w-100" alt="...">` : ''}
                    </div>
                `;
            carouselContent.appendChild(carouselItem);
        });
    })
    .catch(error => console.error('Error fetching JSON data:', error));

//<!-- industrail.js -->

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


//service.js

// Fetch data from industrial.json and generate slides dynamically
fetch('service.json')
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
