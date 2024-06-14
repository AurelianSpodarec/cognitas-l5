
window.onload = function () {
    var siteNav = document.querySelector(".header");
    var siteHeader = document.querySelector('.header'),
        siteHeaderHeight = siteHeader.offsetHeight,
        prevScroll = 0;

    function stickyNav(e) {
        if (siteNav.classList.contains("is-active")) return;

        if (window.scrollY >= siteHeaderHeight) {
            siteHeader.classList.add('is-sticky');
        } else {
            siteHeader.classList.remove('is-sticky');
        }
    }

    function showNav(e) {

        if (siteNav.classList.contains("is-active")) return;

        var currentScroll = window.pageYOffset;

        if (currentScroll < prevScroll) {
            siteHeader.classList.add('sticky-show');
        } else {
            siteHeader.classList.remove('sticky-show');
        }

        prevScroll = currentScroll;
    }

    window.addEventListener('scroll', showNav);
    window.addEventListener('scroll', stickyNav);








    // var parallax = document.getElementsByClassName('js-parallax')[0];
    // var xScrollPosition;
    // var yScrollPosition;

    // function setTranslate(xPos, yPos, el) {
    //     el.style.transform = "translate3d(" + xPos + ", " + yPos + "px, 0)";
    // }

    // function scrollLoop() {
    //     console.log("scrool loop")
    //     xScrollPosition = window.scrollX;
    //     yScrollPosition = window.scrollY;

    //     setTranslate(0, yScrollPosition * -0.2, parallax);

    // }
    // window.addEventListener("scroll", scrollLoop, false);



    var parallax = document.getElementsByClassName('js-parallax');
    var xScrollPosition;
    var yScrollPosition;

    function setTranslate(xPos, yPos, el) {
        el.style.transform = "translate3d(" + xPos + ", " + yPos + "px, 0)";
    }


    function scrollLoop() {
        xScrollPosition = window.scrollX;
        yScrollPosition = window.scrollY;
        document.querySelectorAll('.js-parallax').forEach(function (parallax) {
            return setTranslate(0, scrollY * parallax.dataset.parallaxSpeed, parallax);
        });

    }
    window.addEventListener("scroll", scrollLoop, false);






    // Menu Dropdown desktop, create for mobile as well
    // TODO: Install BABEL for ES6 Support

    // console.log("swerwerwerwr", headerNavigation);



    var headerNavigation = document.querySelectorAll('.header-menu__li-has-dropdown');
    headerNavigation.forEach(function (item) {
        // console.log(item, "item");
        item.addEventListener("mouseover", function () {
            item.childNodes[2].classList.add("is-block")

            // if (document.documentElement.clientWidth < 900) {
            setTimeout(function () {
                item.childNodes[2].classList.add('is-opacity');
            }, 10);
            // }
            // make it display block, then opacity 0, then opacity 1 with
            // transform: translateX(-20px);

        });

        item.addEventListener("mouseleave", function () {
            item.childNodes[2].classList.remove("is-block", "is-opacity");
        });
    });

    // console.log("SDSDSD", jQuery('.js-hook_home-slider'));
    // document.querySelector('.js-hook_home-slider').slick({
    //     dots: true,
    //     infinite: true,
    //     speed: 300,
    //     slidesToShow: 1,
    //     centerMode: true,
    //     variableWidth: true
    // });

    // jQuery('a[href="#search"]').on('click', function (event) {
    //     jQuery('#search').addClass('open');
    //     jQuery('#search > form > input[type="search"]').focus();
    // });

    // jQuery('#search, #search button.close').on('click keyup', function (event) {
    //     if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
    //         jQuery(this).removeClass('open');
    //     }
    // });

    // MAIN NAVIGATION MENU TOGGLE
    var headerMenu = document.querySelector(".mobile-menu");
    var siteHamburger = document.querySelector(".header__hamburger");
    var html = document.querySelector('html');
    var mobileMenuCloseButton = document.querySelector('.mobile-menu__close');

    console.log("M", headerMenu)

    function toggleMainMenu() {
        html.classList.toggle("html-overflow-modal");
        headerMenu.classList.toggle("is-active");
        siteHamburger.classList.toggle("is-active");

    }

    function closeMobileMenu() {
        headerMenu.classList.remove("is-active");
        html.classList.remove("html-overflow-modal");
    }

    mobileMenuCloseButton.addEventListener('click', closeMobileMenu, false);
    siteHamburger.addEventListener('click', toggleMainMenu, false);



    // Member TEam PAge
    // <div class="member">
    //     <h1>Name</h1>
    //     <p>CEO</p>
    // </div>

    // When click, create modal.
    // Populate the fields with the member attributes fields




    // members.forEach(function (el) {

    function createMemberModal(picture, name, position, linkedin, description, targetBlank) {

        !linkedin ?
            jQuery('body').append('<div class="member-modal"> <div class="member-modal__box"> <div class="member-modal__close-button"><i class="fa fa-times" aria-hidden="true"></i></div> <div class="member-modal__avatar-wrap"> <img class="member-modal__avatar-img" src=' + picture + '> </div> <div class="member-modal__content"> <header class="member-modal__header"> <img class="member-modal__avatar-img--mobile" src=" ' + picture + '"> <div class="member-modal__header-info"> <div> <h3 class="member-modal__name">' + name + '</h3> <p class="member-modal__position">' + position + '</p> </div>   </div> </header> <section class="member-modal__section"> <div class="member-modal__section-outer"> <p>' + description + '</p> </div> </section> </div> </div> </div>')

            :
            jQuery('body').append('<div class="member-modal"> <div class="member-modal__box"> <div class="member-modal__close-button"><i class="fa fa-times" aria-hidden="true"></i></div> <div class="member-modal__avatar-wrap"> <img class="member-modal__avatar-img" src=' + picture + '> </div> <div class="member-modal__content"> <header class="member-modal__header"> <img class="member-modal__avatar-img--mobile" src=" ' + picture + '"> <div class="member-modal__header-info"> <div> <h3 class="member-modal__name">' + name + '</h3> <p class="member-modal__position">' + position + '</p> </div> <a target=' + targetBlank + ' href=' + linkedin + ' class="member-modal__icons"><i class="fab fa-linkedin icon-linkedin"></i></a> </div> </header> <section class="member-modal__section"> <div class="member-modal__section-outer"> <p>' + description + '</p> </div> </section> </div> </div> </div>')




        var closeMemberModal = document.querySelector('.member-modal');
        var memberModalBox = document.querySelector('.member-modal__box')
        var memberModalCloseButton = document.querySelector('.member-modal__close-button');

        memberModalBox.addEventListener('click', function (event) {
            event.stopPropagation();
            console.log('modal click')
        })

        memberModalCloseButton.addEventListener('click', function (event) {
            closeMemberModal.remove();
        })

    }


    var members = document.getElementsByClassName('js-hook__member');
    function getMembersData() {

        for (var i = 0; i < members.length; i++) {

            members[i].addEventListener('click', function (el) {
                var linkedin;


                var targetBlank = this.querySelector('[data-member-target]') && this.querySelector('[data-member-target]').dataset.memberTarget;

                var picture = this.querySelector('[data-member-picture]').dataset.memberPicture;
                var name = this.querySelector('[data-member-name]').dataset.memberName;
                var position = this.querySelector('[data-member-position]').dataset.memberPosition;

                console.log("SSSDSSSS", targetBlank)

                if (this.querySelector('[data-member-linkedin]')) {
                    linkedin = this.querySelector('[data-member-linkedin]').dataset.memberLinkedin;
                }
                var description = this.querySelector('[data-member-description]').dataset.memberDescription;

                createMemberModal(picture, name, position, linkedin, description, targetBlank);
            });

        }
    }

    getMembersData();




    jQuery('.header-menu__link:not(:only-child)').click(function (e) {
        jQuery(this).siblings('.header-menu__dropdown-list').toggle();
        // Close one dropdown when selecting another
        jQuery('.header-menu__dropdown-list').not(jQuery(this).siblings()).hide();
        e.stopPropagation();
    });
    // Clicking away from dropdown will remove the dropdown class
    jQuery('html').click(function () {
        jQuery('.header-menu__dropdown-list').hide();
    });



    // TODO: Re-add animation
    if (document.querySelector('#particles-js')) {
        particlesJS("particles-js", {
            "particles": {
                "number": {
                    "value": 180,
                    "density": {
                        "enable": true,
                        "value_area": 700
                    }
                },
                "color": {
                    "value": ["#aa73ff", "#f8c210", "#83d238", "#33b1f8"]
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 15
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1.5,
                        "opacity_min": 0.15,
                        "sync": false
                    }
                },
                "size": {
                    "value": 2.5,
                    "random": false,
                    "anim": {
                        "enable": true,
                        "speed": 2,
                        "size_min": 0.15,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 110,
                    "color": "#33b1f8",
                    "opacity": 0.5,
                    "width": 2
                },
                "move": {
                    "enable": true,
                    "speed": 1.6,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": false,
                        "mode": "repulse"
                    },
                    "onclick": {
                        "enable": false,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 400,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        });

    }


    jQuery('.js-hook_slider-case-studies').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        arrows: false,
        responsive: [
            {
                breakpoint: 1220,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }

        ]
    });

    jQuery('.js-hook_home-slider').slick({
        dots: true,
        arrows: false,
        autoplay: false,
        infinite: true,
        slidesToScroll: 1,
        speed: 500,
        slidesToShow: 2,


        infinite: true,
        centerMode: true,
        variableWidth: true,


        responsive: [
            {
                breakpoint: 1220,
                settings: {
                    dots: true,
                    arrows: false,

                    infinite: true,
                    slidesToScroll: 1,
                    speed: 500,
                    slidesToShow: 2,

                    autoplay: false,
                    infinite: true,
                    centerMode: true,
                    variableWidth: true,
                }
            },
            {
                breakpoint: 580,
                settings: {
                    dots: true,
                    arrows: false,

                    infinite: true,
                    slidesToScroll: 1,
                    speed: 500,
                    slidesToShow: 2,

                    autoplay: false,
                    infinite: true,
                    centerMode: true,
                    variableWidth: true,
                }
            },
            {
                breakpoint: 580,
                settings: {
                    dots: true,
                    arrows: false,

                    infinite: true,
                    slidesToScroll: 1,
                    speed: 500,
                    slidesToShow: 2,

                    autoplay: false,
                    infinite: true,
                    centerMode: true,
                    variableWidth: true,
                }
            }

        ]
    });



    // jQuery('.js-hook_home-slider-client-logos').slick({
    //     dots: false,
    //     arrows: false,
    //     autoplay: true,
    //     autoplaySpeed: 0,
    //     speed: 2000,
    //     slidesToShow: 10,
    //     centerMode: true,
    //     cssEase: 'linear',
    //     pauseOnHover: false,
    //     infinite: true,
    //     slidesToScroll: 5,
    //     centerMode: true,
    //     variableWidth: true
    // });

    new WOW().init();






}


// WOW JS!!!


jQuery(document).ready(function () {
    jQuery('a[href="#search"]').on('click', function (event) {
        jQuery('#search').addClass('is-open');
        jQuery('#search > form > input[type="search"]').focus();
    });
    jQuery('#search, #search button.close').on('click keyup', function (event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            jQuery(this).removeClass('is-open');
        }
    });
});


jQuery('.search-modal__close').on('click', function (event) {
    jQuery('#search').removeClass('is-open');
})





jQuery(document).ready(function () {


    var marq = document.querySelector(".Marquee-content");


    var fps = 1000 / 30;
    var time = (new Date()).getTime();



    var margin = 0;
    var marqueeSpeed = 3;

    function animate() {
        var rate = ((new Date()).getTime() - time) / fps;
        margin += 1

        if (margin > 60000) {
            margin = 0
        } else {

            marq.style.marginLeft = "-" + (marqueeSpeed * rate + 50) + "px";
            // console.log(margin)

        }
        requestAnimationFrame(animate);

    }
    // setInterval(slideX, 16.66);

    animate()

    // console.log("SSS", margin)

});


// 100 = 2
// 1000 = 20 = 1sec


// jQuery(function () {
//     var $slider = jQuery('#continuous-slider--list');


//     var sizeImage = 200;
//     var items = $slider.children().length;
//     var itemswidth = (items * sizeImage); // 140px width for each client item 
//     $slider.css('width', itemswidth);

//     var rotating = true;
//     var sliderspeed = 0;
//     var seeitems = setInterval(rotateSlider, sliderspeed);



//     function rotateSlider() {
//         if (rotating != false) {
//             var $first = jQuery('#continuous-slider--list li:first');
//             $first.animate({ 'margin-left': '-' + sizeImage + 'px' }, 3000, "linear", function () {
//                 $first.remove().css({ 'margin-left': '0px' });
//                 jQuery('#continuous-slider--list li:last').after($first);
//             });
//         } else {
//             $first.stop();
//         }
//     }
// });




