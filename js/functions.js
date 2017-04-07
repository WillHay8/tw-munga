console.log("functions.js");

jQuery( document ).ready( function( $ ) {
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
} );
