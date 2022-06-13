// $(document).ready(function() {
//     $('.dropdown-toggle').dropdownHover();
// })

// $('.navbar [data-toggle="dropdown"]').bootstrapDropdownHover({
//     // see next for specifications
//     setHideTimeout:200
// });

$(document).ready(function () {
    window.addEventListener('scroll', function () {
        let header = document.querySelector('.header-transparent');
        let windowPosition = window.scrollY > 0;
        header.classList.toggle('scrolling-header', windowPosition);
    });

});

$('#good').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

$('#g-1').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})