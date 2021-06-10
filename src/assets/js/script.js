'use-strict'

$(window).on('load', function() {
    $(document).on('click', function(e) {
        const target = $(e.target);

        console.log(target);

        switch(true) {
            case target.is('.burger-menu__list-link'):
                $('html').removeClass('freezed');
                $('.burger-btn').removeClass('burger-btn_active');
                $('.burger-menu').removeClass('burger-menu_active');
                break;
            case target.is('.open-popup-call-master'):
                $('html').toggleClass('freezed');
                $('.popups').fadeIn().removeClass('popups_hidden');
                $('.popup-call-master').fadeIn().removeClass('popup_close');
                break;
            case target.is('.popup__form-close, svg, use, .popups'):
                $('html').removeClass('freezed');
                $('.popups').fadeOut().addClass('popups_hidden');
                $('.popup-call-master').fadeOut().addClass('popup_close');
            default:
                return;
        }
    })

    $('.burger-btn').on('click', function(e) {
        $('html').toggleClass('freezed');
        $('.burger-btn').toggleClass('burger-btn_active');
        $('.burger-menu').toggleClass('burger-menu_active');
    })
})