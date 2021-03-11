$(document).ready(function() {
    $('.mobilemenu button').click(function() {
        $('.nav-menu').addClass('open');
        $('pusher').addClass('shift');
        $('body').addClass('bodyoverflow');
    });
    $('.closebtn').click(function() {
        $('.nav-menu').removeClass('open');
        $('pusher').removeClass('shift');
        $('body').removeClass('bodyoverflow');
    });

    var swiper = new Swiper('.swiper-container.meetplutosilder', {
        slidesPerView: 6,
        spaceBetween: 20,
        // init: false,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            1024: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
            991: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 10,
            }
        }
    });

    var swiper = new Swiper('.swiper-container.meetplutosilder.benefitslider', {
        slidesPerView: 4,
        spaceBetween: 0,
        // init: false,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            1024: {
                slidesPerView: 4,
                spaceBetween: 0,
            },
            991: {
                slidesPerView: 3,
                spaceBetween: 0,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 0,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            550: {
                slidesPerView: 1,
                spaceBetween: 0,
            }
        }
    });

    var swiper = new Swiper('.swiper-container.testimonialswiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        // init: false,

    });

    var swiper = new Swiper('.swiper-container.meetplutosilder.cardfield', {
        slidesPerView: 5,
        spaceBetween: 20,
        // init: false,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            1024: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
            991: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 10,
            }
        }
    });
});
