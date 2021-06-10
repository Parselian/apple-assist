'use-strict'

$(window).on('load', function() {

    $('.common__info-slider').slick({
        arrows: false,
        dots: false,
        fade: true
    })


    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 50) {
            $('header').addClass('header_scrolled')
        } else {
            $('header').removeClass('header_scrolled')
        }
    })

    $(document).on('click', function(e) {
        let target = $(e.target);

        if (e.target.closest('.common__block')) {
            const curBtn = $(e.target).closest('.common__block');

            $('.common__block').removeClass('common__block_active');
            curBtn.addClass('common__block_active');
            $('.common__info-slider').slick('slickGoTo', curBtn.data('problem-btn') - 1)
        }

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
            case e.target.closest('.common__block'):
                console.log(5)
                break;
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