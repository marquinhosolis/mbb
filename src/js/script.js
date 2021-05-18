/**
 * forEach implementation for Objects/NodeLists/Arrays, automatic type loops and context options
 *
 * @private
 * @author Todd Motto
 * @link https://github.com/toddmotto/foreach
 * @param {Array|Object|NodeList} collection - Collection of items to iterate, could be an Array, Object or NodeList
 * @callback requestCallback      callback   - Callback function for each iteration.
 * @param {Array|Object|NodeList} scope=null - Object/NodeList/Array that forEach is iterating over, to use as the this value when executing callback.
 * @returns {}
 */
var forEach = function (t, o, r) {
    if ("[object Object]" === Object.prototype.toString.call(t))
        for (var c in t)
            Object.prototype.hasOwnProperty.call(t, c) && o.call(r, t[c], c, t);
    else for (var e = 0, l = t.length; l > e; e++) o.call(r, t[e], e, t);
};

var hamburgers = document.querySelectorAll(".hamburger");
if (hamburgers.length > 0) {
    forEach(hamburgers, function (hamburger) {
        hamburger.addEventListener(
            "click",
            function () {
                this.classList.toggle("is-active");
            },
            false
        );
    });
}

function scrollMenuFixed() {
    if ($(window).width() > 1024) {
        $(window).scroll(function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > 350) {
                $("header").addClass("header--small");
            } else {
                $("header").removeClass("header--small");
            }
        });
    }
}

function mobileMenu() {
    $(".hamburger").click(function () {
        $(".mobileMenu").toggleClass("mobileMenu--open");
        $("body").toggleClass("body--locked");
    });
}

function faqs() {
    $(".faqsUnique").click(function () {
        $(this)
            .toggleClass("faqsUnique--opened")
            .siblings(".faqsUnique")
            .removeClass("faqsUnique--opened");
    });
}

function aboutSlider() {
    if ($(window).width() >= 768) {
        $(".aboutTechnologyWrapper .slider").removeClass("flexslider");
    }
    $(".aboutTechnologyWrapper .flexslider").flexslider({
        animation: "slide",
        controlNav: false,
        slideshow: false,
    });
}

function modalVideo() {
    $(".aboutFacilityVideoBtn").click(function (e) {
        e.preventDefault();
        $(".aboutFacilityVideoModal").slideToggle();
    });

    $(".aboutFacilityVideoModalMask").click(function (e) {
        var iframe = $(this).find("iframe");
        iframe.attr("src", $(iframe).attr("src"));
        $(this).closest(".aboutFacilityVideoModal").slideToggle();
    });
}

function teamMemberSlide() {
    if ($(window).width() >= 768) {
        $(".aboutTeamWrapper .slider").removeClass("flexslider");
    }
    $(".aboutTeamWrapper .flexslider").flexslider({
        animation: "slide",
        controlNav: false,
        slideshow: false,
    });
}

$(document).ready(function () {
    mobileMenu();
    scrollMenuFixed();
    faqs();
    aboutSlider();
    modalVideo();
    teamMemberSlide();
    new WOW().init();
});
