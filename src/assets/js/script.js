'use-strict'

$(window).on('load', function() {
    $(document).on('click', function(e) {
        const target = $(e.target);

        switch(true) {
            case target.is('.burger-menu__list-link'):
                $('html').removeClass('freezed');
                $('.burger-btn').removeClass('burger-btn_active');
                $('.burger-menu').removeClass('burger-menu_active');
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