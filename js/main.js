console.log("functions.js");

jQuery(document).ready(function($) {
    console.log("document ready");
    // $() will work as an alias for jQuery() inside of this function
    $('.menu-toggle-cont').click(function(){
        $siteMenu = $('#site-header-menu');
        if($siteMenu.css('display') == 'none'){
            $siteMenu.slideDown(700);
        }        
        else{
             $siteMenu.slideUp(700);
        }
    });


    function scrollToContentStart(){
        console.log("scrollToContentStart");
        var aTag = $('#content-start');
        $('html,body').animate({scrollTop: aTag.offset().top + 200},'slow', function(){console.log("complete")});
    }
    if(window.outerWidth > 1024 && $('.home').length < 1){
        scrollToContentStart();
    }
});
