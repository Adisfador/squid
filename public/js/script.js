

// screenWidth
const screenWidth = document.querySelector("body").offsetWidth
console.log(screenWidth)

if (screenWidth > 913) {
    $("#includedContent").load("/inlineContent/main");

    //   $("#includedContent").append("@include('main')");

    // switcher-module__box
    $(".switcher-module__box").on("click", function (event) {
        event.preventDefault();
        $(".switcher-module__box").toggleClass("switcher-module__box--active");

        // includedContent
        if ($(".switcher-module__box ").hasClass("switcher-module__box--active")) {
            $(function () {
                $("#includedContent").load("inlineContent/main_order", function () {

                    //slider
                    $('.main-order__top-box').slick({

                        slidesToShow: 2,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 2000,
                        arrows: false,

                    });

                    // news-column__check-box
                    $(".news-column__content").load("inlineContent/news_column1", function () {

                        loadMoreData(page,".news-column__content","http://squid/inlineContent/news_column1");
                    });

                    ///
                    $(".news-column__check-box").on("click", function (event) {
                        event.preventDefault();
                        $("#Ns").toggleClass("Ns--active");
                        $("#Mn").toggleClass("Mn--active");
                        page=1;
                        // includedContent
                        if ($("#Ns").hasClass("Ns--active")) {
                            $(".news-column__content").load("inlineContent/news_column1", function () {
                                loadMore(page,".news-column__content","http://squid/inlineContent/news_column1?page=1");
                            });
                        } else if ($("#Mn").hasClass("Mn--active")) {
                            $(".news-column__content").load("inlineContent/news_column2", function () {
                                loadMore(page,".news-column__content","http://squid/inlineContent/news_column2?page=1");
                            });
                        }

                    })



                });


            });

        } else {
            $(function () {
                $("#includedContent").load("inlineContent/main");


            });
        }


    });
} else {
    $(function () {
        $("#includedContent").load("inlineContent/main_order", function () {

            //slider
            $('.main-order__top-box').slick({

                slidesToShow: 2,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                responsive: [{
                    breakpoint: 770,
                    settings: {
                        slidesToShow: 1,
                        centerMode: true,
                        // variableWidth: true
                    }
                },
                {
                    breakpoint: 500,
                    settings: {
                        slidesToShow: 1,
                        centerMode: false,
                    }
                },



                ],
            });

            // news-column__check-box
            $(".news-column__content").load("inlineContent/news_column1", function () {

                loadMoreData(page,".news-column__content","http://squid/inlineContent/news_column1");
            });
            $(".news-column__check-box").on("click", function (event) {
                event.preventDefault();
                $("#Ns").toggleClass("Ns--active");
                $("#Mn").toggleClass("Mn--active");
                page=1;
                // includedContent
                if ($("#Ns").hasClass("Ns--active")) {
                    console.log("kok1")
                    $(".news-column__content").load("inlineContent/news_column1", function () {
                        loadMore(page,".news-column__content","http://squid/inlineContent/news_column1?page=1");
                    });
                } else if ($("#Mn").hasClass("Mn--active")) {
                    console.log("kok2")
                    $(".news-column__content").load("inlineContent/news_column2", function () {
                        loadMore(page,".news-column__content","http://squid/inlineContent/news_column2?page=1");
                    });
                }

            })



        });


    });

}

//slider
$('.main-order__top-box').slick({

    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    responsive: [{
        breakpoint: 770,
        settings: {
            slidesToShow: 1,
            centerMode: true,
            // variableWidth: true
        }
    },
    {
        breakpoint: 500,
        settings: {
            slidesToShow: 1,
            centerMode: false,
        }
    },



    ],
});


// // footer
// var contactsH = $("#footer").offset().top,
//   scrollOffset = $(window).height(),
//   footerheight = $("#footer").height();

// if (scrollOffset > contactsH + footerheight) {
//   $("#footer").toggleClass("footer-down");
// }


// getVal
function getVal(a) {
    var requestURL = `https://api.exchangerate.host/latest?base=${a}`;
    var request = new XMLHttpRequest();
    request.open('GET', requestURL);
    request.responseType = 'json';
    request.send();

    request.onload = function () {
        var response = request.response;
        if (a == "USD") {
            document.querySelector(".dollar").textContent = response.rates.RUB.toFixed(2);

        } else if (a == "EUR") {

            document.querySelector(".eur").textContent = response.rates.RUB.toFixed(2);
        }

    }



}
getVal("USD")
getVal("EUR")


// time
const date = new Date;
document.querySelector(".footer__name span").textContent = date.getFullYear();

// burger-menu
$("#burger-menu").on("click", function (event) {
    event.preventDefault();
    $(".burger-menu").toggleClass("burger-menu__active");
    $(".nav__wrapper").toggleClass("nav__wrapper--active");

});

$(".nav__bg").on("click", function (event) {
    event.preventDefault();
    $(".burger-menu").toggleClass("burger-menu__active");
    $(".nav__wrapper").toggleClass("nav__wrapper--active");

});






// popup

$("#call_back").on("click", function (event) {
    event.preventDefault();
    $('#popup').addClass("popup-open");
    $('body').addClass("body-lock");


});

$(".popup__close").on("click", function (event) {
    event.preventDefault();
    $('#popup').removeClass("popup-open");
    $('body').removeClass("body-lock");

});

$(".popup__wrapper").on("click", function (event) {
    event.preventDefault();
    $('#popup').removeClass("popup-open");

    $('body').removeClass("body-lock");
});

$(document).mouseup(function (e) {

    if (e.target.classList.contains("popup__item-wrapper") | e.target.classList.contains("popup__item")) {

        if ($(".popup__item-wrapper #e-mail")[0].value.length == 0) {
            $(".popup__item-wrapper .popup__placeholder").toggleClass("active-placeholder");
        }

    } else if ($(".popup__item-wrapper  .popup__placeholder")[0] != undefined) {
        if ($(".popup__item-wrapper #e-mail")[0].value.length == 0) {
            $(".popup__item-wrapper .popup__placeholder").removeClass("active-placeholder");
        }
    }
});

$(document).mouseup(function (e) {

    if (e.target.classList.contains("popup__textarea-wrapper") | e.target.classList.contains("popup__textarea")) {

        if ($(".popup__textarea-wrapper #What")[0].value.length == 0) {
            $(".popup__textarea-wrapper .popup__placeholder").toggleClass("active-placeholder3");
        }

    } else if ($(".popup__textarea-wrapper  .popup__placeholder")[0] != undefined) {

        if ($(".popup__textarea-wrapper #What")[0].value.length == 0) {
            $(".popup__textarea-wrapper .popup__placeholder").removeClass("active-placeholder3");
        }

    }
});

$('.popup__btn').prop('disabled', true);
$('#What').on('keyup', function () {
    if ($.trim($('#e-mail').val()).length > 0 && $.trim(($('textarea').val())).length > 0) {
        $('.popup__btn').prop('disabled', false);
        console.log("off")
    }
    else {
        $('.popup__btn').prop('disabled', true);
        console.log("on")
    }
});




















