$(document).ready(function() {

    // Menu Navbar
    $(".navbar-burger").click(function() {
        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");
  
    });

    // Carousel
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: "auto",
        spaceBetween: 16,
    });

    // Form
    $('.button-next').click(function(){
        $(this).parent().parent().removeClass('active');
        $(this).parent().parent().next().addClass('active');
        $('.step-2').css('opacity','1');
    });
    
    $('.button-prev').click(function(){
        $(this).parent().parent().removeClass('active');
        $(this).parent().parent().prev().addClass('active');
        $('.step-2').css('opacity','.1');
    });

});