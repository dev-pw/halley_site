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
   CONFIGURACAO NAV MENU
   =================================================*/
   $("#js-navigation-menu .menu-item-has-children > a").click(function (e) {
      $("#js-navigation-menu ul ul").slideUp(), $(this).next().is(":visible") || $(this).next().slideDown(),
         e.stopPropagation();
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


    /*=================================================
    CONFIGURAÇÃO JQUERY MASK
    =================================================*/
    var SPMaskBehavior = function (val) {
       return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
       onKeyPress: function (val, e, field, options) {
          field.mask(SPMaskBehavior.apply({}, arguments), options);
       }
    };
    $('.tel_mask').mask(SPMaskBehavior, spOptions);

    $('.cpf_mask').mask('000.000.000-00', { reverse: true });
    $(".rg_mask").mask("00.000.000-A");
    $(".cep_mask").mask("00000-000");
    $(".data_mask").mask("00/00/0000");
    $(".cartao_mask").mask("0000 0000 0000 0000");
    $(".cvv_mask").mask("000");

var body = $('body');
});
