
( function( $ ) {

    $(document).ready(function () {

        $(".scrolling").on('click', function() {
            $('html,body').animate({
                    scrollTop: $('section:nth-of-type(2)').offset().top - 70 },
                'slow');
        });

        //menu on scrolling
        var h = $('header');
        $(window).scroll(function () {
            if ( $(this).scrollTop() > 500 ) {
                    h.addClass('scroll');
            } else {
                h.removeClass('scroll');
            }
        });

        //burger
        $m = $('#nav .menu');
        $('.burger_menu').on('click', function () {
            $(this).toggleClass('active');
            $m.toggleClass('open');
            if ($m.hasClass('open')) {
                $('html').css('overflow', 'hidden');
                document.ontouchmove = function(e){ e.preventDefault(); } //disable scroll mobile
            } else {
                $('html').css('overflow', 'auto');
                document.ontouchmove = function(e){ return true; }  //enable
            }
        });

        $(".partners").owlCarousel({
            items: 1,
            nav: true,
            loop: true
        });

        $(".preview-gallery").owlCarousel({
            nav: true,
            loop: true,
            autoWidth: true,
            lazyLoad: true,
            responsive : {
                768: {
                    items: 2,
                    margin: 83
                },
                0: {
                    items: 1
                }
            }
        });

        $(".progress_gallery").owlCarousel({
            nav: true,
            lazyLoad: true,
            responsive: {
                1280: {
                    items: 4,
                    margin: 80
                },
                1024: {
                    items: 3,
                    margin: 141
                },
                768: {
                    items: 3,
                    margin: 60
                },
                0: {
                    items: 1
                }
            }
        });

        var docs = $('.documents').owlCarousel({
            nav: true,
            responsive: {
                1600: {
                    items: 5,
                    margin: 33
                },
                1280: {
                    item: 3,
                    margin: 46
                },
                1024: {
                    item: 3,
                    margin: 14
                },
                768: {
                    item: 3,
                    margin: 12
                },
                0: {
                    items: 1
                }
            }
        });

        $('.last_news, .all_actions').owlCarousel({
            nav: true,
            responsive: {
                1280 : {
                    items: 3,
                    margin: 155
                },
                1024: {
                    items: 3,
                    margin: 55
                },
                768: {
                    items: 2,
                    margin: 84
                },
                0: {
                    items: 1
                }
            }
        });

        $('.btn_filter-w').on('click', '.btn-filter', function(e) {
            var filter_data = $(this).data('filter');

            /* return if current */
            if($(this).hasClass('btn-active')) return;

            /* active current */
            $(this).addClass('btn-active').siblings().removeClass('btn-active');

            /* Filter */
            docs.owlFilter(filter_data, function(_owl) {
                $(_owl).find('.item');
            });
        });

        $('.btn_filter-w').on('click', '.btn', function() {
            var c = $(this).attr('class');
                $('.news_bl').children.each(function () {
                    $(this).hasClass(c).css('dispaly', 'none');
            });
        });

        var $seoTxt = $('.add_descr .txt');

        $('.add_descr .btn').on('click', function () {
            $('.btn_n').toggleClass('hidden');

            if ($seoTxt.hasClass('close')) {
                $seoTxt.animate({
                    'max-height': $seoTxt.get(0).scrollHeight
                    }, function () {
                        $(this).removeClass('close');
                    }
                )
            }
            else {
                $seoTxt.animate({
                    'max-height': '90'
                }, function () {
                    $(this).addClass('close');
                }
                )
            }
        });

        //mobile
        if ($(window).width() <= 414) {

            $('#about .advantages .item').on('click', function () {
                $this = $(this);
                $advWrap = $this.find('div.wrap');
                var opened = $this.hasClass("opened");
                if (opened) {
                    $advWrap.animate({'max-height': '0'}, 0, function () {
                        $this.removeClass("opened");
                    });
                }
                else {
                    $advWrap.animate({
                        'max-height': $advWrap.get(0).scrollHeight,
                    }, 0, function () {
                        $this.addClass("opened");
                    });
                }
            });

            $('#about .rewards .wrap').addClass('owl-carousel').owlCarousel({
                items: 1,
                nav: true
            });

            $('#about .list_bl')
                .addClass('owl-carousel')
                .on('initialized.owl.carousel changed.owl.carousel', function(e) {
                if (!e.namespace)  {
                    return;
                }
                var carousel = e.relatedTarget;
                $('.slider-counter').text(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
            }).owlCarousel({
                items: 1,
                nav: true
            });

            $('#single_layout-open .random .flex-sa').addClass('owl-carousel').owlCarousel({
                items: 1,
                nav: true
            });

            $('.mob_adv').owlCarousel({
                items: 2,
                nav: true,
                margin: 31,
                autoWidth: true
            });

            $('.advantages .b_bl').addClass('owl-carousel').owlCarousel({
                items: 1,
                nav: true
            });
        } else {

            if ($('#main').length) {
                $('.about .cnt').addClass('hidden').viewportChecker({
                    classToAdd: 'visible animated fadeInUpBig',
                    offset: '35%'
                });

                $('.advantages .cnt').addClass('hidden').viewportChecker({
                    classToAdd: 'visible animated bounceInLeft',
                    offset: '35%'
                });

                $('.apartments .r_bl').addClass('hidden').viewportChecker({
                    classToAdd: 'visible animated fadeInRight',
                    offset: '50%'
                });

                $('.about_developer').addClass('hidden').viewportChecker({
                    classToAdd: 'visible animated slideInUp',
                    offset: '50%'
                });

                $('.cb_bl .cnt').addClass('hidden').viewportChecker({
                    classToAdd: 'visible animated zoomInUp',
                    offset: '30%'
                });

                $('.apartments .l_bl .property').viewportChecker({
                    offset: '30%',
                    callbackFunction: function(){
                        $('#main .apartments .l_bl .property .black p span').each(function () {
                            $(this).prop('Counter',0).animate({
                                Counter: $(this).text()
                            }, {
                                duration: 4000,
                                easing: 'swing',
                                step: function (now) {
                                    $(this).text(Math.ceil(now));
                                }
                            });
                        });
                    }
                });

                $('#about .specifications').viewportChecker({
                    offset: '30%',
                    callbackFunction: function(){
                        $('#about .specifications .info .item p .count').each(function () {
                            $(this).prop('Counter',0).animate({
                                Counter: $(this).text()
                            }, {
                                duration: 4000,
                                easing: 'swing',
                                step: function (now) {
                                    $(this).text(Math.ceil(now));
                                }
                            });
                        });
                    },
                });
            }
        }

        var subject = '';

        /*$('.count').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });*/

        //popups
        $('.popup_overlay').mousedown(function(e) {
            var clicked = $(e.target);
            if (clicked.is('.popup_cb, .popup_fp, .popup_email, .popup_question, .popup_template') ||
                clicked.parents().is('.popup_cb, .popup_fp, .popup_email, .popup_question, .popup_template')) {
                return;
            } else {
                $('.popup_overlay').fadeOut();
                $('.popup_cb, .popup_email, .popup_question, .popup_fp, .popup_template').css('display', 'none');
            }
        });

        $('.close').on('click', function () {
            $('.popup_overlay').fadeOut();
            $('.popup_cb, .popup_email, .popup_question, .popup_fp').css('display', 'none');
        });

        $('.cb').on('click', function () {
            $('.popup_overlay').fadeIn().css('display','flex');
            $('.popup_cb').css('display', 'block');
            subject = $(this).data('subject') ? $(this).data('subject') : $('h1.title').html();
        });

        $('.fp').on('click', function () {
            $('.popup_overlay').fadeIn().css('display','flex');
            $('.popup_fp').css('display', 'block');
            subject = $(this).data('subject');
        });

        $('.contact_types img').on('click', function () {
           subject = $('.fp').data('subject')+' ('+$(this).data('contact-type')+')';
           $(this).addClass('active').siblings().removeClass('active');

           if ($(this).data('contact-type') == 'mail') {
               $('.popup_fp .input_bl').eq(1).show();
               $('.popup_fp .input_bl').eq(2).hide();
           } else {
               $('.popup_fp .input_bl').eq(1).hide();
               $('.popup_fp .input_bl').eq(2).show();
           }
        });

        $('.e').on('click', function () {
            $('.popup_overlay').fadeIn().css('display','flex');
            $('.popup_email').css('display', 'block');
            subject = $(this).data('subject');
        });

        $('.q').on('click', function () {
            $('.popup_overlay').fadeIn().css('display','flex');
            $('.popup_question').css('display', 'block');
            subject = $(this).data('subject');
        });

        $('.t').on('click', function (e) {
            e.preventDefault();
            $('.popup_overlay').fadeIn().css('display','flex');
            $('.popup_template').css('display', 'block');
            subject = $(this).data('subject');
        });

        $('form :submit').on('click', function () {
            $(this).closest('form').find('input:required').each(function () {
                if (!$(this).val()) $(this).addClass('incomplete');
            });
        });

        $('input:required').on('input', function () {
            $(this).removeClass('incomplete');
        });

        $('input.phone').mask("+38 (999) 999-99-99", {
            onComplete: function () {
                if ($(this).length === 13) {
                    $(this).removeClass('incomplete');
                }
            }
        });

        $('input.name').on('input', function () {
            $(this).val($(this).val().replace(/[0-9\\/^$.|?*+\-_()]/g, ""));
        });

        $('.popup form').on('submit', function (e) {

            e.preventDefault();

            $this = $(this);
            var name = $this.find('.name').val() ? $this.find('.name').val() : null;
            var phone = $this.find('.phone').val() ? $this.find('.phone').val() : null;
            var mail = $this.find('.email').val() ? $this.find('.email').val() : null;
            var question = $this.find('.question').val() ? $this.find('.question').val() : null;

            $.ajax({
                type: "POST",
                url: '/wp-admin/admin-ajax.php',
                data: {
                    action: 'do_something',
                    name: name,
                    phone: phone,
                    mail: mail,
                    question: question,
                    subject: subject,
                    url: location.href
                },
                beforeSend: function () {
                    $this.find('.btn_w_line').remove();
                },
                success: function () {
                    $('.wrap').fadeOut();
                    $('.message').delay(500).fadeIn();
                }
            });
        });

        $('.bl_3 form').on('submit', function (e) {

            e.preventDefault();

            $this = $(this);
            var name = $this.find('.name').val() ? $this.find('.name').val() : null;
            var phone = $this.find('.phone').val() ? $this.find('.phone').val() : null;
            var mail = $this.find('.email').val() ? $this.find('.email').val() : null;
            var comment = $this.find('.comment').val() ? $this.find('.comment').val() : null;

            $.ajax({
                type: "POST",
                url: '/wp-admin/admin-ajax.php',
                data: {
                    action: 'do_something_2',
                    name: name,
                    phone: phone,
                    mail: mail,
                    comment: comment,
                    subject: subject,
                    url: location.href
                },
                beforeSend: function () {
                    $this.find('.btn_w_line').remove();
                },
                success: function () {
                    $('.bl_3 form').fadeOut();
                    $('.message').delay(500).fadeIn();
                }
            });
        });

        $('.types form').on('submit', function (e) {

            e.preventDefault();

            var $this = $(this);
            var type = $this.find('input:radio:checked').val() ? $this.find('input:radio:checked').val() : null;
            var min_square = $this.find('#min_square').val() ? $this.find('#min_square').val() : null;
            var max_square = $this.find('#max_square').val() ? $this.find('#max_square').val() : null;
            var money = $this.find('#money').val() ? $this.find('#money').val() : null;
            var phone = $this.find('#num').val() ? $this.find('#num').val() : null;

            $.ajax({
                type: "POST",
                url: '/wp-admin/admin-ajax.php',
                data: {
                    action: 'flat_request',
                    type: type,
                    min_square: min_square,
                    max_square: max_square,
                    money: money,
                    phone: phone,
                    url: location.href
                },
                beforeSend: function () {
                    $this.find('.btn_w_line').remove();
                },
                success: function () {
                    $this.find('.flex').css('visibility', 'hidden');
                    $this.find('h2').html("Заявка успішно відправлена!");
                }
            });
        });
    });

    $('#preloader').addClass('active');

    $(window).load(function () {
        $('#preloader').remove();
    });

} )( jQuery );


