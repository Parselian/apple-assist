'use-strict'

$(window).on('load', function () {
    $('input[name="user_phone"]').mask('+7 (999) 999-99-99');

    $('form').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: './assets/configs/mail.php',
            method: 'POST',
            data: {
                user_phone: $(this).find('input[name="user_phone"]').val(),
                user_name: $(this).find('input[name="user_name"]').val()
            },
            success() {
                $('.popup').fadeOut(0).addClass('popup_close');
                $('.popup-thanks').fadeIn().removeClass('popup_close');
                return;
            }
        })
    })

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


    const priceListInit = () => {
        let maxPricelistHeight = null;

        const rollPricelist = () => {
            $('.prices__pricelist-scroll').css({'max-height': ``}).removeClass('prices__pricelist-scroll_unrolled')
            $('.prices__pricelist-unroll').removeClass('prices__pricelist-unroll_active')
        }
        const unrollPricelist = () => {
            $('.prices__pricelist-scroll').css({'max-height': `${maxPricelistHeight}px`}).addClass('prices__pricelist-scroll_unrolled')
            $('.prices__pricelist-unroll').addClass('prices__pricelist-unroll_active')
        }
        const expandDevices = () => {
            $('.prices__models-button').on('click', function() {
                $('.prices__model').slideDown({
                    progress() {
                        $(this).css('display', 'flex')
                    },
                    complete() {
                        $(this).css('display', 'flex')
                    }
                });
                $(this).remove();
            })
        }
        const buildDeviceBlocks = () => {
            $.ajax({
                url: './assets/configs/get_devices_data.php',
                method: 'GET',
                dataType: 'json',
                success(data) {
                    let is_hidden = 'null';

                    $('.prices__model').remove();

                    data.forEach((item, i) => {
                        is_hidden = i > 9 ? 'prices__model_hidden' : 'null';

                        $('.prices__models').append(`
                            <div class="prices__model ${is_hidden}" data-device="${item[2]}">
                                <picture>
                                    <source srcset="./assets/images/webp/${item[1]}.webp" type="image/webp">
                                    <img src="./assets/images/${item[1]}.png" alt="iPhone 11 Pro Max" class="prices__model-img">
                                </picture>
                                <div class="prices__model-name">${item[2]}</div>
                                <button class="prices__model-button">Выбрать</button>
                            </div>
                       `)
                    });

                    $('.prices__model').off('click');
                    $('.prices__model').on('click', function () {
                        getPricesData($(this).data('device'));
                    })

                    expandDevices()
                }
            })
        }
        const getPricesData = (selectedDevice) => {
            $.ajax({
                url: './assets/configs/get_prices_data.php',
                method: 'GET',
                data: {
                    'selected_device': selectedDevice
                },
                dataType: 'json',
                success(data) {
                    buildPriceListRows(data);
                }
            })
        }
        const buildPriceListRows = data => {
            $('.prices__pricelist-wrap').slideUp();

            setTimeout(() => {
                $('.prices__pricelist-row').remove();

                data.forEach((item, i) => {
                    $('.prices__pricelist-scroll table').append(`
                        <tr class="prices__pricelist-row open-popup-call-master" data-service="${item[2]}">
                            <td class="prices__pricelist-servicename">${item[2]}</td>
                            <td class="prices__pricelist-time">${item[3]}</td>
                            <td class="prices__pricelist-price">${item[4]} руб.</td>
                            <td>
                                <button class="callback-button prices__pricelist-button">Вызвать мастера</button>
                            </td>
                        </tr>
                    `);
                })
            }, 400);

            setTimeout(() => {
                $('.prices__pricelist-wrap').slideDown();
                $('.prices__pricelist-scroll').css({'max-height': ``}).removeClass('prices__pricelist-scroll_rolled')
                maxPricelistHeight = $('.prices__pricelist-scroll').height();
                $('.prices__pricelist-scroll').addClass('prices__pricelist-scroll_rolled');
                rollPricelist()
            }, 400)

            $('.prices__pricelist-unroll').unbind('click');

            $('.prices__pricelist-unroll').on('click', function() {
                if ($('.prices__pricelist-scroll').hasClass('prices__pricelist-scroll_unrolled')) {
                    rollPricelist();
                } else {
                    unrollPricelist()
                }
            })
        }
        buildDeviceBlocks()
    }
    priceListInit();


    const toggleStepsCards = (target) => {
        $('.steps__list-item').removeClass('steps__list-item_active')
        $(target).addClass('steps__list-item_active')

        $('.steps__img').fadeOut().addClass('steps__img_hidden');
        $(`.steps__img[data-step-img="${$(target).data('step')}"]`).fadeIn().removeClass('steps__img_hidden');
    };

    const smoothScroll = () => {
        $('a[href^="#"]').click(function() {
            let link = $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(link).offset().top -120
            }, 700);
            return false;
        });
    }
    smoothScroll();

    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 50) {
            $('header').addClass('header_scrolled')
        } else {
            $('header').removeClass('header_scrolled')
        }
    })

    $(document).on('click', function (e) {
        if (e.target.closest('.steps__list-item')) {
            toggleStepsCards(e.target.closest('.steps__list-item'));
        }

        if (e.target.closest('.common__block')) {
            const curBtn = $(e.target).closest('.common__block');

            $('.common__block').removeClass('common__block_active');
            curBtn.addClass('common__block_active');
            $('.common__info-slider').slick('slickGoTo', curBtn.data('problem-btn') - 1)
        }

        if (e.target.closest('.burger-menu__list-link')) {
            $('html').removeClass('freezed');
            $('.burger-btn').removeClass('burger-btn_active');
            $('.burger-menu').removeClass('burger-menu_active');
        }

        if (e.target.closest('.open-popup-call-master')) {
            $('html').toggleClass('freezed');
            $('.popups').fadeIn().removeClass('popups_hidden');
            $('.popup-call-master').fadeIn().removeClass('popup_close');
        }

        if ($(e.target).is('.popup__form-close,.popup__form-close svg,.popup__form-close use, .popups,' +
            ' .popup-thanks__button')) {
            $('html').removeClass('freezed');
            $('.popups').fadeOut().addClass('popups_hidden');
            $('.popup-call-master').fadeOut().addClass('popup_close');
        }
    })

    $('.burger-btn').on('click', function (e) {
        $('html').toggleClass('freezed');
        $('.burger-btn').toggleClass('burger-btn_active');
        $('.burger-menu').toggleClass('burger-menu_active');
    })
})