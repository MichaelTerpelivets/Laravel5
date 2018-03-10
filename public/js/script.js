jQuery('document').ready(function($){
    //HEADER SCROLL
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 100) {
            $("#header").addClass("active");
        } else {
           $("#header").removeClass("active");
        }
    });
    
    //SCROLLANCHOR ANIMATION SCRIPT
        var $root = $('html, body');
        $('a.anchor').click(function() {
            $root.animate({
                scrollTop: $( $.attr(this, 'href') ).offset().top
            }, 800);
            return false;
        });
});