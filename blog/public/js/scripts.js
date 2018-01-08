var msg = document.querySelector(".navbar-brand");
var btn = document.querySelector("#menu-toggle");
var btn2 = document.querySelector("#menu-close");

btn.addEventListener("click",function(){
    msg.style.color = "red";
});
btn2.addEventListener("click",function(){
    msg.style.color = "#fff";
});


$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 1000);
});

$('.carousel').bcSwipe({ threshold: 50 });
