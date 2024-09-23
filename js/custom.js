



$(document).ready(function () {
    $('.owl-carousel.first-carousel').owlCarousel({
        loop: true,
        dots: false,
        margin: 25,
        autoplay: true,
        slideTransition: 'linear',
        autoplayTimeout: 1000,
        autoplaySpeed: 4000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            575: {
                items: 1
            },
            767: {
                items: 2
            },
            991: {
                items: 3
            }
        }
    })

    // wow js link
    new WOW().init();




    // $(document).ready(function(){
    $(".owl-carousel.second-carousel").owlCarousel({
        loop: true,
        dots: false,
        margin: 25,
        rtl: true,
        autoplay: true,
        slideTransition: 'linear',
        autoplayTimeout: 1000,
        autoplaySpeed: 4000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            575: {
                items: 1
            },
            767: {
                items: 2
            },
            991: {
                items: 3
            }
        }
    });

    // });
})

// counter
let happy = setInterval(happycoustomer, 100);
let upto1 = 450;
function happycoustomer() {
    let count1 = document.getElementById("counter1");
    count1.innerHTML = ++upto1;
    if (upto1 === 689) {
        clearInterval(happy);
    }
}

let expert = setInterval(expertchefs, 100);
let upto2 = 0;
function expertchefs() {
    let count2 = document.getElementById("counter2");
    count2.innerHTML = ++upto2;
    if (upto2 === 107) {
        clearInterval(expert);
    }
}

let events = setInterval(eventscomplete, 100);
let upto3 = 0;
function eventscomplete() {
    let count3 = document.getElementById("counter3");
    count3.innerHTML = ++upto3;
    if (upto3 === 253) {
        clearInterval(events);
    }
}