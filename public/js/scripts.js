$(".term-description").appendTo(".woocommerce.columns-3");
$(document).ready(function () {
    $('.slider-banner').show();
    $('#shipping_date').attr('value', '');
    $("#shipping_time").attr('value', '');
    $("#billing_date").attr('value', '').trigger("change");
    $("#billing_time").attr('value', '').trigger("change");
    $.urlParam = function(name){
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if(results)
            return results[1] || 0;
    }

    if($.urlParam('get_water') === 'add') {
        //window.history.pushState(null, "", window.location.href.replace("?get_water=add", "")) ;
    }

    if($('a[data-link]')) {
        var newUrl = $('a[data-link]').data('link');
    }

    $('a[data-link]').on('click', function () {
        var newUrl = $(this).data('link');
        $(this).attr("href", newUrl);
    });

    setInterval(function(){
        $(".bottle .inner").addClass('fill-bottle');
    }, 1500);

    $("#shipping_date").attr('autocomplete', 'off');
    $("#shipping_date").attr('required', 'required');
    $("#shipping_time option").removeAttr('selected');
    $("#shipping_time").attr('required', 'required');
    $("#shipping_date").keydown(function(event) {
        return false;
    });
    

    var callback_text = $("#shipping_call_field > label").clone().children().remove().end().text();

    //console.log(callback_text);
    $('#shipping_call_1').prop('checked', false);
    $('#shipping_call_0').prop('checked', true);
    $('#billing_call_1').prop('checked', false);
    $('#billing_call_0').prop('checked', true);

    $("#shipping_phone_field").after('<p class="text-right callback-row"><label class=""><input id="callback" type="checkbox"> <span>'+callback_text+'</span></label></p>');

    $('#callback').on('click', function () {
        var checkBox = document.getElementById("callback");

        if (checkBox.checked == true){
            $('#shipping_call_0').prop('checked', false);
            $('#shipping_call_1').prop('checked', true);
            $('#billing_call_0').prop('checked', false);
            $('#billing_call_1').prop('checked', true);
        } else {
            $('#shipping_call_1').prop('checked', false);
            $('#shipping_call_0').prop('checked', true);
            $('#billing_call_1').prop('checked', false);
            $('#billing_call_0').prop('checked', true);
        }
    });

    var billing_email = $("#billing_email").val();
    $("#shipping_email").val(billing_email);
    var billing_first_name = $("#billing_first_name").val();
    $("#shipping_first_name").val(billing_first_name);
    var billing_last_name = $("#billing_last_name").val();
    $("#shipping_last_name").val(billing_last_name);

    $("#shipping_date").val('');
    $("#shipping_time").val('');

    $('.checkout.woocommerce-checkout').on('change keypress keyup blur', '#shipping_first_name, #shipping_last_name, #shipping_phone, #shipping_email, #shipping_address_1, #shipping_date, #shipping_time', function () {
        console.log('test checkout');
        $('#shipping_date').attr('value', $("#shipping_date").val());
        var shipping_first_name = $("#shipping_first_name").val();
        var shipping_last_name = $("#shipping_last_name").val();
        var shipping_phone = $("#shipping_phone").val();
        var shipping_email = $("#shipping_email").val();
        var shipping_address_1 = $("#shipping_address_1").val();
        var shipping_date = $("#shipping_date").val();
        var shipping_time = $("#shipping_time").val();

        $("#billing_first_name").val(shipping_first_name);
        $("#billing_last_name").val(shipping_last_name);
        $("#billing_phone").val(shipping_phone);
        $("#billing_email").val(shipping_email);
        $("#billing_address_1").val(shipping_address_1);
        $("#billing_date").val(shipping_date);
        $("#billing_time").val(shipping_time).trigger("change");


        var date = new Date;
        var toDay = ((date.getDate() > 9) ? date.getDate() : ('0' + date.getDate())) + '/' + ((date.getMonth() > 8) ? (date.getMonth() + 1) : ('0' + (date.getMonth() + 1))) + '/' + date.getFullYear();
        var nextDay = ((date.getDate() > 9) ? date.getDate()+1 : ('0' + date.getDate()+1)) + '/' + ((date.getMonth() > 8) ? (date.getMonth() + 1) : ('0' + (date.getMonth() + 1))) + '/' + date.getFullYear();
        var hour = date.getHours();
        var minutes = date.getMinutes();
        var dayNum = date.getDay();
        console.info(hour);
        console.info(minutes);
        console.info(dayNum);
        if(toDay == shipping_date) {
            $("#shipping_time").select2("destroy").select2();
            $("#shipping_time").val('');
            if(hour >= '0') {
               $(".woocommerce form .form-row select option[value='1']").attr('disabled', 'disabled');
            }
            if(hour >= '10') {
               $(".woocommerce form .form-row select option[value='2']").attr('disabled', 'disabled');
            }
            if(hour >= '13') {
               $(".woocommerce form .form-row select option[value='3']").attr('disabled', 'disabled');
            }
            if(hour >= '16') {
               $(".woocommerce form .form-row select option[value='4']").attr('disabled', 'disabled');
            }
            if(hour >= '17') {
               $(".woocommerce form .form-row select option[value='5']").attr('disabled', 'disabled');
            }
        } else if(nextDay == shipping_date) {
            $("#shipping_time").select2("destroy").select2();
            $("#shipping_time").val('');
            $(".woocommerce form .form-row select option").removeAttr('disabled', 'disabled');
            if (dayNum != '0') {
                if(hour >= '19') {
                    $(".woocommerce form .form-row select option[value='1']").attr('disabled', 'disabled');
                } else if (hour == '19' && minutes >= '45') {
                    $(".woocommerce form .form-row select option[value='1']").attr('disabled', 'disabled');
                }
            } else {
                if(hour >= '17') {
                    $(".woocommerce form .form-row select option[value='1']").attr('disabled', 'disabled');
                } else if (hour == '17' && minutes >= '45') {
                    $(".woocommerce form .form-row select option[value='1']").attr('disabled', 'disabled');
                }
            }
        } else {
            $("#shipping_time").val('');
            $(".woocommerce form .form-row select option").removeAttr('disabled', 'disabled');
        }


    });


    $(".your-phone input").inputmask("+38 (999) 999-9999");
    $("#shipping_phone").inputmask("+38 (999) 999-9999");

    var prodTitle = $(".product_title").text();
    $(".product-title input").val(prodTitle);

    $(".product-url input").val(window.location.href);

    document.addEventListener('wpcf7mailsent', function (event) {
        if ('854' == event.detail.contactFormId) {
            $('.form-form').hide();
            $('.form-send').show();
        }
    }, false);

    $('.count-input-block input').keydown(function(event) {
        //return false;
    });

    $('.count-input-block input').keypress(function(e) {
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            return false;
        }
    });

    function changeQuantity(thisObj, $operator) {

        var spinner = thisObj.closest('.count-input-block'),
            input = spinner.find('input[type="text"]'),
            btnUp = spinner.find('.counter-plus'),
            btnDown = spinner.find('.counter-minus'),
            min = input.attr('min'),
            max = input.attr('max');

        $(document).on('keypress', '.count-input-block input', function(e) {
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                return false;
            }
        });

        var oldValue = parseFloat(input.val());
        if ($operator == '+') {
            if (oldValue >= max) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue + 1;
            }
        }
        if ($operator == '-') {
            if (oldValue <= min) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue - 1;
            }
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
        spinner.find("input").trigger("click");


    }



    $(document).on('click', '.counter-plus', function () {
        changeQuantity($(this), '+')
    });

    $(document).on('click', '.counter-minus', function () {
        changeQuantity($(this), '-')
    });

    $('.woocommerce-cart-form').on("change keypress keyup blur", 'table', function () {
        //alert('lll');

    });

    $(document).on('click', '.scroll-link', function () {
        event.preventDefault();

        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({
            scrollTop: top
        }, 1500);
    })
    $(document).on('click', '.navigation a', function () {
        event.preventDefault();

        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({
            scrollTop: top
        }, 1500);
    })

    $('form .btn').click(function (e) {
        e.preventDefault();

        var a = $(this).closest('form');
        var x = true;

        a.find('input').removeClass('error');

        a.find('input').each(function () {
            if ($(this).attr('required') !== undefined && $(this).val() === '') {
                $(this).addClass('error');
                $(this).focus();
                x = false;
                return false;
            }
        });
        if (x) {
            a.find('input[type=text]').removeClass('error');
            a.submit();
        }
        return false;

    })

    $(document).on('click', '.btn', function () {
        var remodal = $(this).data('remodal-target'),
            dataFrom = $(this).data('from');
        if (remodal) {
            $('#' + remodal).find('input[name=from]').val(dataFrom);
        }
    })

    $('.lang span').on('click', function () {
        var lang = $(this).closest('.lang');
        lang.toggleClass('open');
        lang.find('.lang-drop').toggle();
    })

    $('.phones span').on('click', function () {
        var lang = $(this).closest('.phones');
        lang.toggleClass('open');
        lang.find('.phones-drop').toggle();
    })

    $('.slider-banner').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        lazyLoad: 'ondemand',
    })

    $('.slider-promo').slick({
        slidesToShow: 2,
        responsive: [
            {
                breakpoint: 990,
                settings: {
                    slidesToShow: 1,
                }
        },
            {
                breakpoint: 650,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    dots: true,
                }
        },
        ]
    })

    $('.main-photo').slick({
        asNavFor: '.thumb-photo',
        arrows: false,
        adaptiveHeight: true,
    })
    $('.thumb-photo').slick({
        slidesToShow: 3,
        asNavFor: '.main-photo',
        focusOnSelect: true,
        arrows: false,
    })

    $('.module-products .module-items').slick({
        slidesToShow: 3,
        dots: true,
        arrows: false,
        responsive: [
            {
                breakpoint: 750,
                settings: {
                    slidesToShow: 2,
                }
        },
            {
                breakpoint: 550,
                settings: {
                    slidesToShow: 1,
                }
        },
        ]
    })

    reviewsHeight();

    new WOW().init();

    $("document").ready(function() {
        setTimeout(function() {
            $(".count .count-plus").trigger('click');
            $(".count .count-minus").trigger('click');
        },10);
    });

    $('.count .count-plus').on('click', function () {
        var item = $(this).closest('.calc'),
            count = $(this).closest('.count'),
            countNum = parseInt(count.find('b').text());

        countNum = countNum + 1;
        count.find('b').text(countNum);
        var discount = 0;

        if (countNum >= 2) {
            discount = 15;
        }
        if (countNum >= 5) {
            discount = 18;
        }
        var price = parseInt(item.find('.price').data('price'));
        var newprice = price - discount;
        item.find('.price span').text(newprice);
        var total = (price - discount) * countNum;

        var qtyOptimal = $(".optimalC b").text();
        var qtyIon = $(".ionC b").text();
        $(".optimal").attr("href", "/cart/?add-to-cart=803&quantity="+qtyOptimal);
        $(".ion").attr("href", "/cart/?add-to-cart=809&quantity="+qtyIon);
        item.find('.total span').text(total);
    })
    $('.count .count-minus').on('click', function () {
        var item = $(this).closest('.calc'),
            count = $(this).closest('.count'),
            countNum = parseInt(count.find('b').text());
            var discount = 0;


        if (countNum > 1) {
            countNum = countNum - 1;
            count.find('b').text(countNum);

            if (countNum >= 2) {
                discount = 15;
            }
            if (countNum >= 5) {
                discount = 18;
            }
            var price = parseInt(item.find('.price').data('price'));
            var newprice = price - discount;
            item.find('.price span').text(newprice);
            var total = (price - discount) * countNum;

            var qtyOptimal = $(".optimalC b").text();
            var qtyIon = $(".ionC b").text();
            $(".optimal").attr("href", "/cart/?add-to-cart=803&quantity="+qtyOptimal);
            $(".ion").attr("href", "/cart/?add-to-cart=809&quantity="+qtyIon);
            item.find('.total span').text(total);
        }
    })


    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('#top').fadeIn();
        } else {
            $('#top').fadeOut();
        }
    });
    $('#top').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });





    $('.toggle-menu').on('click', function () {
        toggleMenu();
    })

    if ($(window).width() <= 990) {
        if ($('.filter').length > 0) {
            var filter = $('.filter').prop('outerHTML');
            $('.column-left .filter').remove();
            $('.catalog-top').append('<div class="filter-mob"></div>');
            $('.catalog-top .filter-mob').append(filter);

            $('.btn-filter').on('click', function () {
                $('.catalog-top .filter-mob').slideToggle(200);
            })
        }

    }

    $('a[href=#]').click(function (e) {
        e.preventDefault();
    });
    setTimeout(function() {
	  $('button[name=woocommerce_checkout_place_order]').addClass($('input[name=payment_method]:checked').val());
	}, 1000);

    $('body').on('change', 'input[name=payment_method]', function () {
    	var classes = '';
    	$('input[type=radio][name=payment_method]').each(function(i, obj) {
		    classes = classes + ' ' + $(obj).val();
		});
		$('button[name=woocommerce_checkout_place_order]').removeClass(classes);
		$('button[name=woocommerce_checkout_place_order]').addClass($(this).val());
	});
});

function toggleMenu() {
    $('.toggle-menu').toggleClass('open');
    $('.mobile-menu').toggleClass('open');
    $('html').toggleClass('no-scroll');
    $('.mobile-bg').fadeToggle(200);
}

function reviewsHeight() {
    var bigbrother = -1;

    $('.list-reviews .item .text').each(function () {
        bigbrother = bigbrother > $(this).height() ? bigbrother : $(this).height();
    });

    $('.list-reviews .item .text').each(function () {
        $(this).height(bigbrother);
    });
}

$.fn.tabs = function () {
    var selector = this;
    this.each(function () {
        var obj = $(this);

        $(obj.attr('href')).hide();
        obj.click(function () {
            $(selector).removeClass('selected');

            $(this).addClass('selected');

            $($(this).attr('href')).fadeIn();
            $(selector).not(this).each(function (i, element) {
                $($(element).attr('href')).hide();
            });
            return false;

        });
    });
    $(this).show();
    $(this).first().click();
};

// woocommerce_checkout_place_order

$(window).scroll(function () {
    let element = $('.block-banner');
    offset = element.height();
    scrollTop = window.pageYOffset;
    
    if ($(window).width() < 990) {
        if ($(window).scrollTop() > offset ) {
            $('.header-mob, .block-banner').addClass( "fixed" ).animate({ 'opacity': 'show'});
            console.log('scroll');
        } if ($(window).scrollTop() == 0) {
            $('.header-mob, .block-banner').removeClass( "fixed" );
        };
    }
});
