/*  ---------------------------------------------------
Template Name: Ashion
Description: Ashion ecommerce template
Author: Colorib
Author URI: https://colorlib.com/
Version: 1.0
Created: Colorib
---------------------------------------------------------  */

'use strict';

(function ($) {

    /*------------------
        Preloader
    --------------------*/
    $(window).on('load', function () {
        $(".loader").fadeOut();
        $("#preloder").delay(200).fadeOut("slow");

        /*------------------
            Product filter
        --------------------*/
        $('.filter__controls li').on('click', function () {
            $('.filter__controls li').removeClass('active');
            $(this).addClass('active');
        });
        if ($('.property__gallery').length > 0) {
            var containerEl = document.querySelector('.property__gallery');
            var mixer = mixitup(containerEl);
        }
    });

    /*------------------
        Background Set
    --------------------*/
    $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });

    //Search Switch
    $('.search-switch').on('click', function () {
        $('.search-model').fadeIn(400);
    });

    $('.search-close-switch').on('click', function () {
        $('.search-model').fadeOut(400, function () {
            $('#search-input').val('');
        });
    });

    //Canvas Menu
    $(".canvas__open").on('click', function () {
        $(".offcanvas-menu-wrapper").addClass("active");
        $(".offcanvas-menu-overlay").addClass("active");
    });

    $(".offcanvas-menu-overlay, .offcanvas__close").on('click', function () {
        $(".offcanvas-menu-wrapper").removeClass("active");
        $(".offcanvas-menu-overlay").removeClass("active");
    });

    /*------------------
        Navigation
    --------------------*/
    $(".header__menu").slicknav({
        prependTo: '#mobile-menu-wrap',
        allowParentLinks: true
    });

    /*------------------
        Accordin Active
    --------------------*/
    $('.collapse').on('shown.bs.collapse', function () {
        $(this).prev().addClass('active');
    });

    $('.collapse').on('hidden.bs.collapse', function () {
        $(this).prev().removeClass('active');
    });

    /*--------------------------
        Exterior/Interior/Fitur
    ----------------------------*/
    /*
        data = {
            "interior": [
                "img/product/omoda/chery_c5/interior/1.png",
                "img/product/omoda/chery_c5/interior/2.png",
                "img/product/omoda/chery_c5/interior/3.png"
            ],
            "exterior": [
                "img/product/omoda/chery_c5/exterior/1.png",
                "img/product/omoda/chery_c5/exterior/2.png",
                "img/product/omoda/chery_c5/exterior/3.png"
            ],
            "features": [
                "img/product/omoda/chery_c5/features/1.png",
                "img/product/omoda/chery_c5/features/2.png",
                "img/product/omoda/chery_c5/features/3.png"
            ]
        }
    */


    const updateDetail = (data) => {
        for (const key in data) {
            const value = data[key];
            const html = value.map((item) => {
                return `<div class="col"><a href="${item}" class="detail-product image-popup"><img class="img-fluid img-fade" src="${item}" alt="${key}"></a></div>`;
            }).join('');

            $(`div[class="row justify-content-around ${key}"]`).html(html);

            $('.detail-product.image-popup').magnificPopup({
                type: 'image'
            });

        }
    }
    // 	<div clas="col"><img src="img/trend/ht-1.jpg" alt=""></div>
    // <div clas="col"><img src="img/trend/ht-1.jpg" alt=""></div>
    // <div clas="col"><img src="img/trend/ht-1.jpg" alt=""></div>



    /*--------------------------
        Banner Slider
    ----------------------------*/
    let productCarousel = $(".banner__slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        dots: true,
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true
    });

    productCarousel.on('changed.owl.carousel', function (event) {
        const currentIndex = event.item.index;
        const currentSlide = $(event.target).find(".owl-item").eq(currentIndex).find(".banner__item");

        const detail = currentSlide.data("detail");

        updateDetail(detail);
    });

    /*--------------------------
        Product Details Slider
    ----------------------------*/
    $(".product__details__pic__slider").owlCarousel({
        loop: false,
        margin: 0,
        items: 1,
        dots: false,
        nav: true,
        navText: ["<i class='arrow_carrot-left'></i>", "<i class='arrow_carrot-right'></i>"],
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: false,
        mouseDrag: false,
        startPosition: 'URLHash'
    }).on('changed.owl.carousel', function (event) {
        var indexNum = event.item.index + 1;
        product_thumbs(indexNum);
    });

    function product_thumbs(num) {
        var thumbs = document.querySelectorAll('.product__thumb a');
        thumbs.forEach(function (e) {
            e.classList.remove("active");
            if (e.hash.split("-")[1] == num) {
                e.classList.add("active");
            }
        })
    }


    /*------------------
        Magnific
    --------------------*/
    $('.image-popup').magnificPopup({
        type: 'image'
    });


    $(".nice-scroll").niceScroll({
        cursorborder: "",
        cursorcolor: "#dddddd",
        boxzoom: false,
        cursorwidth: 5,
        background: 'rgba(0, 0, 0, 0.2)',
        cursorborderradius: 50,
        horizrailenabled: false
    });

    /*------------------
        CountDown
    --------------------*/
    // For demo preview start
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();

    if (mm == 12) {
        mm = '01';
        yyyy = yyyy + 1;
    } else {
        mm = parseInt(mm) + 1;
        mm = String(mm).padStart(2, '0');
    }
    var timerdate = mm + '/' + dd + '/' + yyyy;
    // For demo preview end


    // Uncomment below and use your date //

    /* var timerdate = "2020/12/30" */

    $("#countdown-time").countdown(timerdate, function (event) {
        $(this).html(event.strftime("<div class='countdown__item'><span>%D</span> <p>Day</p> </div>" + "<div class='countdown__item'><span>%H</span> <p>Hour</p> </div>" + "<div class='countdown__item'><span>%M</span> <p>Min</p> </div>" + "<div class='countdown__item'><span>%S</span> <p>Sec</p> </div>"));
    });

    /*-------------------
        Range Slider
    --------------------- */
    var rangeSlider = $(".price-range"),
        minamount = $("#minamount"),
        maxamount = $("#maxamount"),
        minPrice = rangeSlider.data('min'),
        maxPrice = rangeSlider.data('max');
    rangeSlider.slider({
        range: true,
        min: minPrice,
        max: maxPrice,
        values: [minPrice, maxPrice],
        slide: function (event, ui) {
            minamount.val('$' + ui.values[0]);
            maxamount.val('$' + ui.values[1]);
        }
    });
    minamount.val('$' + rangeSlider.slider("values", 0));
    maxamount.val('$' + rangeSlider.slider("values", 1));

    /*------------------
        Single Product
    --------------------*/
    $('.product__thumb .pt').on('click', function () {
        var imgurl = $(this).data('imgbigurl');
        var bigImg = $('.product__big__img').attr('src');
        if (imgurl != bigImg) {
            $('.product__big__img').attr({ src: imgurl });
        }
    });

    /*-------------------
        Quantity change
    --------------------- */
    var proQty = $('.pro-qty');
    proQty.prepend('<span class="dec qtybtn">-</span>');
    proQty.append('<span class="inc qtybtn">+</span>');
    proQty.on('click', '.qtybtn', function () {
        var $button = $(this);
        var oldValue = $button.parent().find('input').val();
        if ($button.hasClass('inc')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find('input').val(newVal);
    });

    /*-------------------
        Radio Btn
    --------------------- */
    $(".size__btn label").on('click', function () {
        $(".size__btn label").removeClass('active');
        $(this).addClass('active');
    });


    /*-------------------
        Info Produk
    --------------------- */
    $("#infoProduk").on('click', function () {
        $('#keteranganModal').modal('show');
    });


    /*-------------------
       Form Kontak
   --------------------- */
    $("#formContact").on('submit', function (e) {
        e.preventDefault();
        const data = new FormData(this);

        const respon = (pesan) => {
            alert(pesan);
        }

        grecaptcha.ready(function () {
            grecaptcha.execute('6LdQ310rAAAAAMZfKdZen8fn6RMTBuunZaI-JWn0', { action: 'submit' }).then(function (token) {
                data.append('g-recaptcha-response', token);

                const xhr = new XMLHttpRequest();
                const promise = new Promise((resolve, reject) => {
                    xhr.open('POST', 'kirim.php');
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                    xhr.onload = () => {
                        if (xhr.status >= 200 && xhr.status < 300) {
                            resolve(xhr.response);
                        } else {
                            reject(xhr.statusText);
                        }
                    };
                    xhr.onerror = () => reject(xhr.statusText);
                    // xhr.send(data)
                    xhr.send(new URLSearchParams(data).toString());
                });

                promise
                    .then(response => respon(response))
                    .catch(error => respon(error));
            });
        });
    });


    /*-------------------
        Spesifikasi
    --------------------- */
    $(".spesifikasiTrigger").on('click', function () {
        // const spec = JSON.parse($(this).data('spec'));
        const id = $(this).data('id');
        const product = products.find(product => product.id == id);

        const img = product.img;
        const name = product.name;
        const specs = product.spesifikasi;

        $("#spesifikasiModalTitle").text(name);
        $("#spesifikasiModal").modal('show');

        $("#spesifikasiModal").on('shown.bs.modal', function () {
            let body = `<div class="list-group">`;

/*
    specs = [
    'performance' => [
        'CC 1.5',
        'Premium FWD',
        'Comfort FWD',
        'Torsi Mesin 138 Nm',
        'Power Mesin 116 Ps',
    ],
    'safety' => [
        'Camera 360',
        'Airbad 6 (Premium)',
        'Airbad 4 (Comfort)',
        'Driving Assistants 9',
        'ADAS 15',
    ],
    'comfort' => [
        'Kursi 2 baris',
        'Ban 215/60 R17 (Premium)',
        'Ban 215/65 R16 (Comfort)',
        'Speaker 6 (Premium)',
        'Speaker 4 (Comfort)',
        'Sunroof (Premium)',
    ]
    ]
*/


            ['performance', 'safety', 'comfort'].forEach(spec => {
                body += `<div href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1 text-truncate" style="width:40%">${spec.toUpperCase()}</h5>
                `;

                body += '<ul class="flex-fill">';
                for (let i = 0; i < specs[spec].length; i++) {
                    body += `<li class="mb-1">${specs[spec][i]}</li>`;
                }

                body += `</ul></div></div>`;
            })

            // console.log(spec);

/*
<a href="#" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small>3 days ago</small>
    </div>
    <p class="mb-1">Some placeholder content in a paragraph.</p>
    <small>And some small print.</small>
</a>
*/

            body += `</div>`;

            $("#spesifikasiModal .modal-body").html(body);
        });
    });
})(jQuery);