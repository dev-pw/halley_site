jQuery(document).ready(function ($) {

    /*=================================================
    CONFIGURACAO HEADER STICKY
    =================================================*/
    $(window).scroll(function () {
        if ($(window).scrollTop() > 150) {
            $('.l-header-site').addClass('l-header-site__sticky');
        }
        else {
            $('.l-header-site').removeClass('l-header-site__sticky');
        }
    });

    /*=================================================
    Preload Do Site
    ===================================================*/

    if(document.readyState === 'ready' || document.readyState === 'complete') {

        $('#preload').css('opacity', '0');
        $('#preload').css('visibility', 'hidden');
        $('body').css('overflow-y', 'auto');

        setTimeout(()=>{
            $('#preload').remove();
        }, 1000);
        clearTimeout;

        } else {
        document.onreadystatechange = function () {
            if (document.readyState == "complete") {

            $('#preload').css('opacity', '0');
            $('#preload').css('visibility', 'hidden');
            $('body').css('overflow-y', 'auto');

            setTimeout(()=>{
                $('#preload').remove();
            }, 1000);
            clearTimeout;

            }
        }
    }



var body = $('body');
});
