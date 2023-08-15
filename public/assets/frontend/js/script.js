$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    //>=, not <=
    if (scroll >= 500) {
        //clearHeader, not clearheader - caps H
        $("header").addClass("header-fix");
    }else{
        $("header").removeClass("header-fix");
    }
});

$(document).ready(function(){
    $(".first_l").hover(function(){
        $(".first-hover img").css('opacity', '1')
    })
    $(".first_l").mouseleave(function(){
        $(".first-hover img").css('opacity', '0')
    })
})
$(document).ready(function(){
    $(".first_m").hover(function(){
        $(".second-hover img").css('opacity', '1')
    })
    $(".first_m").mouseleave(function(){
        $(".second-hover img").css('opacity', '0')
    })
})

$(document).ready(function(){
    $(".first_r").hover(function(){
        $(".third-hover img").css('opacity', '1')
    })
    $(".first_r").mouseleave(function(){
        $(".third-hover img").css('opacity', '0')
    })
})


$('.bar').click(function () {
    ($(".bar-open").slideToggle());
});

$('.close').click(function () {
    ($('.bar-open').slideToggle());
});

$('.nav_i').click(function (e) {
    e.preventDefault()
    ($('.sec_ul').slideToggle());
});
//  $('.mainShow').click(function() {
//     $('.mainContent').slideDown("fast", function() {
//         $("html,body").animate({
//             scrollTop:$("#Second").offset().top,
//         });
//     });
// });


 const select = document.querySelectorAll('.selectBtn');
const option = document.querySelectorAll('.option');
let i = 1;

select.forEach(a => {
	a.addEventListener('click', b => {
		const next = b.target.nextElementSibling;
		next.classList.toggle('toggle');
		next.style.zIndex = i++;
	})
})
option.forEach(a => {
	a.addEventListener('click', b => {
		b.target.parentElement.classList.remove('toggle');

		const parent = b.target.closest('.select').children[0];
		parent.setAttribute('data-type', b.target.getAttribute('data-type'));
		parent.innerText = b.target.innerText;
	})
})


$('.owl-traning').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 3000,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        400: {
            items: 1,
            nav: true
        },
        600: {
            items: 2,
            nav: true
        },
        900: {
            items: 3,
            nav: true,

        },
        1200: {
            items: 3,
            nav: true
        }
    }
})
$('.carousel_sirket').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 3000,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        400: {
            items: 2,
            nav: true
        },
        600: {
            items: 3,
            nav: true
        },
        900: {
            items: 5,
            nav: true,

        },
        1200: {
            items: 6,
            nav: true
        }
    }
})

$('.carousel_blog').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 3000,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,

        },

        500: {
            items: 2,

        },
        900: {
            items: 3,


        },
        1200: {
            items: 3,

        }
    }
})
$('.owl-gallery').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 3000,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,

        },

        500: {
            items: 1,

        },
        900: {
            items: 1,


        },
        1200: {
            items: 1,

        }
    }
})

$('.stat-number').each(function () {
    var size = $(this).text().split(".")[1] ? $(this).text().split(".")[1].length : 0;
    $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
    }, {
        duration: 5000,
        step: function (func) {
            $(this).text(parseFloat(func).toFixed(size));
        }
    } );
});



