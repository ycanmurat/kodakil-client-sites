jQuery(function () {
    svg4everybody();
})

jQuery(document).ready(function ($) {

    //Sub Nav Opener
    $('.header-nav').mouseenter(function () {
        $('body').addClass('nav-toggle');
    }).mouseleave(function () {
        $('body').removeClass('nav-toggle');
    });

    //Search Toggle
    $('#searchToggle').on('click', function (e) {
        e.preventDefault();
        $('body').removeClass('nav-toggle');
        $('body').toggleClass('search-toggle');
    })

    $('#searchClose').on('click', function (e) {
        e.preventDefault();
        $('body').toggleClass('search-toggle');
    })

    //Login Toggle
    $('#loginToggle').on('click', function(e){
        e.preventDefault();

        $('body').removeClass('nav-toggle');
        $('body').removeClass('search-toggle');
        $('body').toggleClass('login-toggle');
    })

    $('.login-box .login-close').on('click', function(e){
        $('body').toggleClass('login-toggle');
    })
    

    //Home Newsletter PopUp
    if($(".newsletter-box").length){

        setTimeout(function(){
            $('body').removeClass('nav-toggle');
            $('body').removeClass('search-toggle');
            $('body').removeClass('login-toggle');
            $('body').toggleClass('newsletter-toggle');
        }, 1500)

        $('.newsletter-box .newsletter-close').on('click', function(e){
            $('body').toggleClass('newsletter-toggle');
        })

    }


    //PRELOADER
    $('.page-preloader').delay(500).fadeOut(function () {
        $(this).remove();
        init();
    });
    

})


function init() {
    new SmoothScroll(document, 120, 35)

    gsap.fromTo(".about-us-right .about-us-image-effect", { top: '50%', opacity: 0 }, { top: '10%', opacity: 1, duration: 2.5, ease: "power4.out", });
    gsap.fromTo(".about-us-right .about-us-bg-effect", { opacity: 0 }, { opacity: 1, duration: 2.5, ease: "power4.out", });
    gsap.fromTo(".about-us-left", { opacity: 0 }, { opacity: 1, duration: 4, ease: "power4.out", });

}

function SmoothScroll(target, speed, smooth) {
    if (target === document)
        target = (document.scrollingElement ||
            document.documentElement ||
            document.body.parentNode ||
            document.body) // cross browser support for document scrolling

    var moving = false
    var pos = target.scrollTop
    var frame = target === document.body &&
        document.documentElement ?
        document.documentElement :
        target // safari is the new IE

    target.addEventListener('mousewheel', scrolled, {
        passive: false
    })
    target.addEventListener('DOMMouseScroll', scrolled, {
        passive: false
    })

    function scrolled(e) {
        e.preventDefault(); // disable default scrolling

        var delta = normalizeWheelDelta(e)

        pos += -delta * speed
        pos = Math.max(0, Math.min(pos, target.scrollHeight - frame.clientHeight)) // limit scrolling

        if (!moving) update()
    }

    function normalizeWheelDelta(e) {
        if (e.detail) {
            if (e.wheelDelta)
                return e.wheelDelta / e.detail / 40 * (e.detail > 0 ? 1 : -1) // Opera
            else
                return -e.detail / 3 // Firefox
        } else
            return e.wheelDelta / 120 // IE,Safari,Chrome
    }

    function update() {
        moving = true

        var delta = (pos - target.scrollTop) / smooth

        target.scrollTop += delta

        if (Math.abs(delta) > 0.5)
            requestFrame(update)
        else
            moving = false
    }

    var requestFrame = function () { // requestAnimationFrame cross browser
        return (
            window.requestAnimationFrame ||
            window.webkitRequestAnimationFrame ||
            window.mozRequestAnimationFrame ||
            window.oRequestAnimationFrame ||
            window.msRequestAnimationFrame ||
            function (func) {
                window.setTimeout(func, 1000 / 50);
            }
        );
    }()
}


