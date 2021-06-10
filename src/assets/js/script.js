'use-strict'

$(window).on('load', function() {

    $('.common__info-slider').slick({
        arrows: false,
        dots: false,
        fade: true
    })

    $('.reviews__slider').slick({
        arrows: true,
        dots: false,
        fade: true,
        adaptiveHeight: true,
        prevArrow: `
            <svg class="reviews__slider-arrow reviews__slider-arrow_prev">
                <use xlink:href="./assets/stack/sprite.svg#slider-arrow"></use>
            </svg>
        `,
        nextArrow: `
            <svg class="reviews__slider-arrow reviews__slider-arrow_next">
                <use xlink:href="./assets/stack/sprite.svg#slider-arrow"></use>
            </svg>
        `
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