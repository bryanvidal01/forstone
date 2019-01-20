jQuery(document).ready(function(){
    toggleMenu();

    if($.cookie("validate")){
        jQuery('.cookie-message').remove();
    }
    jQuery('.validate-cookie').click(function(){
        $.cookie("validate", true);

        jQuery('.cookie-message').fadeOut();
    });
});
