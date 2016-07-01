var siteurl = 'https://tugadizayn.com/';
function support_detail(id) {
    var data = [];
    data.push({name:'id', value: id});
    $.ajax({
        method: 'post',
        dataType: 'json',
        data: data,
        url: '/Ajax/get-support-detail',
        success: function(result) {
            if (result.status === true) {
                $('#Support-Read-Modal').modal('show');
                $('#Support-Read-Modal #append-title').text("");
                $('#Support-Read-Modal #append-name').text("");
                $('#Support-Read-Modal #append-message').text("");
                $('#Support-Read-Modal #append-title').append((result.information.type == 1 ? "Şikayet" : (result.information.type == 2 ? "Öneri" : "Talep") ) + ' | ' + result.information.added_time);
                $('#Support-Read-Modal #append-name').append(result.information.name + ' ' + result.information.surname);
                $('#Support-Read-Modal #append-message').append(result.information.message);
            } else {
                iziToast.warning({
                    title: 'Uyarı',
                    message: result.error
                });
            }
        },
        error: function() {
            iziToast.error({
                title: 'Hata',
                message: 'Bağlantı Hatası Lütfen Tekrar Deneyin'
            });
        }
    });
}

function currencyFormatDE(num) {
    return (num.toFixed(2).replace('.', ',').replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.'));
}

$(document).ready(function() {
    $('.profile-link').click(function(){
        $('#Login-Modal').modal('show');
        $('#Password-Reset-Modal').modal('hide');
    });
    $('#Password-Reset-Modal-Open').click(function(){
        $('#Password-Reset-Modal').modal('show');
        $('#Login-Modal').modal('hide');
    });
    iziToast.settings({
        timeout: 3000,
        resetOnHover: true,
        transitionIn: 'flipInX',
        transitionOut: 'flipOutX',
        position: 'topRight',
    });
    $('.home-slider-desktop.owl-carousel').owlCarousel({
        loop: true,
        nav: false,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:false,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1024: {
                items: 1
            }
        }
    });
    $('.home-slider-mobile.owl-carousel').owlCarousel({
        loop: true,
        nav: false,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:false,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1024: {
                items: 1
            }
        }
    });
    $('.home-products-desktop.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        nav: true,
        navText: ["<img src='" + siteurl + "assets/Front/images/concept-left-icon.PNG'>", "<img src='" + siteurl + "assets/Front/images/concept-right-icon.PNG'>"],
        responsive: {
            0: {
                items: 1,
                nav: false,
                loop: false
            },
            768: {
                items: 2,
                nav: true,
                loop: false
            },
            991: {
                items: 3,
                nav: true,
                loop: false
            }
        }
    });
    $('.home-reference-desktop.owl-carousel').owlCarousel({
        loop: true,
        margin: 20,
        responsiveClass: true,
        nav: true,
        dots: false,
        navText: ["<img src='" + siteurl + "assets/Front/images/refrence-left-icon.png'>", "<img src='" + siteurl + "assets/Front/images/refrence-right-icon.png'>"],
        responsive: {
            0: {
                items: 2,
                nav: false,
                dots: false,
                loop: false
            },
            768: {
                items: 4,
                nav: true,
                loop: false
            },
            1024: {
                items: 6,
                nav: true,
                loop: false
            }
        }
    });
    $('.product-detail-slider.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        nav: true,
        navText: ["<img src='" + siteurl + "assets/Front/images/concept-left-icon.PNG'>", "<img src='" + siteurl + "assets/Front/images/concept-right-icon.PNG'>"],
        responsive: {
            0: {
                items: 1,
                nav: false,
                loop: false
            },
            768: {
                items: 1,
                nav: true,
                loop: false
            },
            991: {
                items: 1,
                nav: true,
                loop: false
            }
        }
    });



    $('header .header-container .header-menubar .header-account-content .header-mobile-menu .hamburger-menu').click(function() {
        $(this).toggleClass("active");
        $("header .header-container .header-menubar .header-menu-content").toggleClass("active");
        $(".overlay-dark").toggleClass("Show");
       
    });

    $('section.bottom-bar .bottom-menubar-container .menubar-nav .menubar-list .menubar-link.menu').click(function() {        
       $('header .header-container .header-menubar .header-account-content .header-mobile-menu .hamburger-menu').trigger("click");
    });


    $("header .header-container .header-menubar .header-account-content .header-search .search-input").click(function(event) {
        $("header .header-container .header-menubar .header-account-content .header-search").addClass("Active");
    });

    $(document).click(function(e) {
        var inverse = $("header .header-container .header-menubar .header-account-content .header-search");
        if (!inverse.is(e.target) && inverse.has(e.target).length === 0) {
            inverse.removeClass('Active');
        }
    });

    $("header .header-container .header-menubar .header-account-content .header-nav .nav-list .card-link,section.bottom-bar .bottom-menubar-container .menubar-nav .menubar-list .menubar-link.card").click(function() {
        $("header .header-container .header-nav .nav-list.card-js").addClass("Active");
        $("body .overlay-dark").addClass("Show");
    });

    $("body .overlay-dark").click(function(){
        $(this).removeClass("Show");
        $("header .header-container .header-nav .nav-list.card-js").removeClass("Active");
        $("header .header-container .header-menubar .header-account-content .header-mobile-menu .hamburger-menu").removeClass("active");
        $("header .header-container .header-menubar .header-menu-content").removeClass("active");
    });

    $("header .header-container .right-siderbar .siderbar-container .siderbar-header .close-js").click(function() {
        $("header .header-container .header-nav .nav-list.card-js").removeClass("Active");
         $("body .overlay-dark").removeClass("Show");
    });

    $('#product-list-js').click(function(event) {
        event.preventDefault();
        $('#products .item-col').removeClass('product-grid-item');
        $('#products .item-col').addClass('product-list-item');
    });
    $('#product-grid-js').click(function(event) {
        event.preventDefault();
        $('#products .item-col').removeClass('product-list-item');
        $('#products .item-col').addClass('product-grid-item');
    });
    $("form#register-form").submit(function(event) {
        event.preventDefault();
        var data = $(this).serializeArray();
        $.ajax({
            method: 'post',
            dataType: 'json',
            data: data,
            url: '/Ajax/register-user',
            success: function(result) {
                if (result.status === true) {
                    iziToast.success({
                        title: 'Başarılı',
                        message: 'Hesabınız başarıyla oluşturuldu ve giriş yapıldı yönlendiriliyorsunuz.'
                    });
                    setTimeout(function() {
                        window.location.href = result.redirect_url;
                    }, 3000);
                } else {
                    iziToast.warning({
                        title: 'Uyarı',
                        message: result.error
                    });
                }
            },
            error: function() {
                iziToast.error({
                    title: 'Hata',
                    message: 'Bağlantı Hatası Lütfen Tekrar Deneyin'
                });
            }
        });
    });
    $("form#login-form").submit(function(event) {
        event.preventDefault();
        var data = $(this).serializeArray();
        $.ajax({
            method: 'post',
            dataType: 'json',
            data: data,
            url: '/Ajax/login-user',
            success: function(result) {
                if (result.status === true) {
                    iziToast.success({
                        title: 'Başarılı',
                        message: 'Giriş yapıldı yönlendiriliyorsunuz.'
                    });
                    setTimeout(function() {
                        window.location.href = result.redirect_url;
                    }, 3000);
                } else {
                    iziToast.warning({
                        title: 'Uyarı',
                        message: result.error
                    });
                }
            },
            error: function() {
                iziToast.error({
                    title: 'Hata',
                    message: 'Bağlantı Hatası Lütfen Tekrar Deneyin'
                });
            }
        });
    });
    $("form#password-reset-form").submit(function(event) {
        event.preventDefault();
        var data = $(this).serializeArray();
        $.ajax({
            method: 'post',
            dataType: 'json',
            data: data,
            url: '/Ajax/password-reset',
            success: function(result) {
                if (result.status === true) {
                    $('#Password-Reset-Modal').modal('hide');
                    iziToast.success({
                        title: 'Başarılı',
                        message: 'Şifre sıfırlama talebiniz, kayıtlı e-posta adresinize gönderildi'
                    });
                } else {
                    iziToast.warning({
                        title: 'Uyarı',
                        message: result.error
                    });
                }
            },
            error: function() {
                iziToast.error({
                    title: 'Hata',
                    message: 'Bağlantı Hatası Lütfen Tekrar Deneyin'
                });
            }
        });
    });
    $("form#user-information-update").submit(function(event) {
        event.preventDefault();
        var data = $(this).serializeArray();
        $.ajax({
            method: 'post',
            dataType: 'json',
            data: data,
            url: '/Ajax/update-information',
            success: function(result) {
                if (result.status === true) {
                    iziToast.success({
                        title: 'Başarılı',
                        message: 'Bilgileriniz Başarıyla Güncellendi'
                    });
                    setTimeout(function() {
                        window.location.href = result.redirect_url;
                    }, 3000);
                } else {
                    iziToast.warning({
                        title: 'Uyarı',
                        message: result.error
                    });
                }
            },
            error: function() {
                iziToast.error({
                    title: 'Hata',
                    message: 'Bağlantı Hatası Lütfen Tekrar Deneyin'
                });
            }
        });
    });
    $("form#password-update-information").submit(function(event) {
        event.preventDefault();
        var data = $(this).serializeArray();
        $.ajax({
            method: 'post',
            dataType: 'json',
            data: data,
            url: '/Ajax/update-password-information',
            success: function(result) {
                if (result.status === true) {
                    iziToast.success({
                        title: 'Başarılı',
                        message: 'Şifreniz Başarıyla Değiştirildi'
                    });
                } else {
                    iziToast.warning({
                        title: 'Uyarı',
                        message: result.error
                    });
                }
            },
            error: function() {
                iziToast.error({
                    title: 'Hata',
                    message: 'Bağlantı Hatası Lütfen Tekrar Deneyin'
                });
            }
        });
    });
    $("#city").change(function() {
        var data = [];
        data.push({
            name: 'city_id',
            value: $("#city").val()
        });
        $("#town").text("");
        if ($("#city").val().length > 0) {
            $.ajax({
                method: 'post',
                dataType: 'json',
                data: data,
                url: '/Ajax/get-counties',
                success: function(result) {
                    if (result.status === true) {
                        var option = "";
                        $.each(result.counties, function(index, val) {
                            option += '<option value="' + val.TownID + '">' + val.TownName + '</option>';
                        });
                        $("#town").append(option);
                    } else {
                        toastr.warning(result.error);
                    }
                },
                error: function() {
                    toastr.error("Bağlantı Hatası, Lütfen Geliştiricinize Ulaşın");
                }
            });
        } else {
            $("#town").append('<option value="">Lütfen Önce Şehir Seçin</option>');
        }
    });
    $("form#password-update-form").submit(function(event) {
        event.preventDefault();
        var data = $(this).serializeArray();
        $.ajax({
            method: 'post',
            dataType: 'json',
            data: data,
            url: '/Ajax/password-update',
            success: function(result) {
                if (result.status === true) {
                    iziToast.success({
                        title: 'Başarılı',
                        message: 'Şifreniz Güncellendi Anasayfadan Giriş Yapabilirsiniz, Yönlendiriliyorsunuz'
                    });
                    setTimeout(function() {
                        window.location.href = result.redirect_url;
                    }, 3000);
                } else {
                    iziToast.warning({
                        title: 'Uyarı',
                        message: result.error
                    });
                }
            },
            error: function() {
                iziToast.error({
                    title: 'Hata',
                    message: 'Bağlantı Hatası Lütfen Tekrar Deneyin'
                });
            }
        });
    });
    $("form#support-request-form").submit(function(event){
        event.preventDefault();
        var data = $(this).serializeArray();
        $.ajax({
            method: 'post',
            dataType: 'json',
            data: data,
            url: '/Ajax/support-request-add',
            success: function(result) {
                if (result.status === true) {
                    $('#Support-Add-Modal').modal('hide');
                    iziToast.success({
                        title: 'Başarılı',
                        message: 'Destek Talebiniz Başarıyla Oluşturuldu, En Kısa Sürede Size Ulaşacağız'
                    });
                    var append_data = "";
                    append_data += '<div class="our-tr">';
                    append_data += '<div class="our-td date"><span> ' + result.information.added_time + ' </span></div>';
                    append_data += '<div class="our-td product"><span> ' + (result.information.type == 1 ? "Şikayet" : (result.information.type == 2 ? "Öneri" : "Talep") ) + ' </span></div>';
                    append_data += '<div class="our-td date"><span> ' + result.information.message + ' </span></div>';
                    append_data += '<div class="our-td date"><span> ' + (result.information.status == 0 ? "İletildi" : (result.information.status == 1 ? "İncelemede" : "Çözümlendi") ) + ' </span></div>';
                    append_data += '<div class="our-td unit"><a href="javascript:void(0);" onclick="support_detail(' + result.information.id + ')">İncele</a></div>';
                    append_data += '</div>';
                    $('#support-append').append(append_data);
                } else {
                    iziToast.warning({
                        title: 'Uyarı',
                        message: result.error
                    });
                }
            },
            error: function() {
                iziToast.error({
                    title: 'Hata',
                    message: 'Bağlantı Hatası Lütfen Tekrar Deneyin'
                });
            }
        });
    });
});

    function addToCart(id,name,price,image) {
        var data = {id:id,name:name,price:price,image:image};
        
        $.ajax({
            method: 'post',
            dataType: 'json',
            data: data,
            url: '/Ajax/addToCart',
            success: function(result) {
                if (result.status === true) {
                    var cartData = '';
                    $.each(result.data,function(key,val) {
                        cartData += 
                        '<div class="card-list">\
                            <div class="card-img">\
                                <img src="'+siteurl+val.image+'">\
                            </div>\
                            <div class="card-info">\
                                <div class="product-name">'+val.name+'</div>\
                                <div class="product-unit">'+val.qty+' Adet</div>\
                                <div class="product-price">\
                                    <div class="product-new-price">'+val.price+' TL</div>\
                                </div>\
                                <a class="product-delete" onclick="removeCart(\''+val.rowid+'\')"><span class="icon-ifa fa fa-trash"></span></a>\
                            </div>\
                        </div>';
                    });

                    $('.siderbar-body').html(cartData);
                    $('.icon-card-price').html('Ara Toplam : '+result.total.price+' TL');
                    $('.bag-number').text(result.total.count);
                    $('.icon-card-number').text(result.total.count);
                    $('.card-link').trigger('click');
                } else {                    
                    iziToast.warning({
                        title: 'Uyarı',
                        message: result.error
                    });
                }
            },
            error: function() {
                iziToast.error({
                    title: 'Hata',
                    message: 'Bağlantı Hatası Lütfen Tekrar Deneyin'
                });
            }
        });
    }

    function removeCart(rowid) {
        $.ajax({
            method: 'post',
            dataType: 'json',
            url: '/Ajax/removeToCart/'+rowid,
            success: function(result) {
                if (result.status === true) {
                    var cartData = '';
                    $.each(result.data,function(key,val) {
                        cartData += 
                        '<div class="card-list">\
                            <div class="card-img">\
                                <img src="'+siteurl+val.image+'">\
                            </div>\
                            <div class="card-info">\
                                <div class="product-name">'+val.name+'</div>\
                                <div class="product-unit">'+val.qty+' Adet</div>\
                                <div class="product-price">\
                                    <div class="product-new-price">'+val.price+' TL</div>\
                                </div>\
                                <a class="product-delete" onclick="removeCart(\''+val.rowid+'\')"><span class="icon-ifa fa fa-trash"></span></a>\
                            </div>\
                        </div>';
                    });
                    if (window.location.pathname == '/sepet') {
                        location.reload();
                    }else{
                        $('.siderbar-body').html(cartData);
                        $('.icon-card-price').html('Ara Toplam : '+result.total.price+' TL');
                        $('.bag-number').text(result.total.count);
                        $('.icon-card-number').text(result.total.count);
                        $('.card-link').trigger('click');   
                    }
                } else {
                    iziToast.warning({
                        title: 'Uyarı',
                        message: result.error
                    });
                }
            },
            error: function() {
                iziToast.error({
                    title: 'Hata',
                    message: 'Bağlantı Hatası Lütfen Tekrar Deneyin'
                });
            }
        });
    }

$(document).on('change','#city',function() {
    var city = $(this).val();
    $.ajax({
        method: 'post',
        dataType: 'json',
        url: '/Ajax/getTown/'+city,
        success: function(result) {
            if (result.status === true) {
                var cartData = '';
                $.each(result.data,function(key,val) {
                    cartData += '<option value="'+val.id+'">'+val.name+'</option>';
                });
                    
                $('#town').html(cartData);
                city = $('#city > option').first().remove();
            
            } else {
                iziToast.warning({
                    title: 'Uyarı',
                    message: result.error
                });
            }
        },
        error: function() {
            iziToast.error({
                title: 'Hata',
                message: 'Bağlantı Hatası Lütfen Tekrar Deneyin'
            });
        }
    });
});

function addAddressForOrder() {
    var data = {};
    data.name = $('#name').val();
    data.last_name = $('#last_name').val();
    data.gsm = $('#gsm').val();
    data.email = $('#email').val();
    data.city = $('#city').val();
    data.town = $('#town').val();
    data.postCode = $('#postCode').val();
    data.address = $('#address').val();

    $.ajax({
        method: 'post',
        dataType: 'json',
        data:data,
        url: '/Ajax/addOrder',
        success: function(result) {
            if (result.status === true) {
                window.location.href = siteurl+'sepet/odeme';
            }else{
                console.log(result.error)
                $('.allContents').html(result.error);
            }
        },
        error: function() {
            iziToast.error({
                title: 'Hata',
                message: 'Bağlantı Hatası Lütfen Tekrar Deneyin'
            });
        }
    });
}

function valid_credit_card(value) {
  // accept only digits, dashes or spaces
    if (/[^0-9-\s]+/.test(value)) return false;

    // The Luhn Algorithm. It's so pretty.
    var nCheck = 0, nDigit = 0, bEven = false;
    value = value.replace(/\D/g, "");

    for (var n = value.length - 1; n >= 0; n--) {
        var cDigit = value.charAt(n),
              nDigit = parseInt(cDigit, 10);

        if (bEven) {
            if ((nDigit *= 2) > 9) nDigit -= 9;
        }

        nCheck += nDigit;
        bEven = !bEven;
    }

    return (nCheck % 10) == 0;
}

function ccNumberChange(price){
    var bin = $('#card_number').val();
    bin = bin.split('_').join('');
    bin = bin.split(' ').join('');
    var len = bin.length;
    bin = bin.substr(0, 6);
    if (bin.length==6) {
        $.ajax({
            type: "POST",
            dataType:"JSON",
            url: siteurl+'Ajax/Bin/'+bin+'/'+price,
            success: function(data) {
                options = '';
                $.each(data.result, function(key, val) {
                    if (key == 0) {
                    	console.log()
                        options += '<tr class="hireItem">\
                                        <td>\
                                            <div class="OptionRadio">\
                                                <input name="taksit_sayisi" id="Pesin" value="1" type="radio" checked="checked">\
                                                <label for="Pesin" class="radio-label">Peşin</label>\
                                            </div>\
                                        </td>\
                                        <td>'+price+' TL</td>\
                                        <td>'+price+' TL</td>\
                                    </tr>';
                    }else{
                        options += '<tr class="hireItem RemevodItemTaksit">\
                                        <td>\
                                            <div class="OptionRadio">\
                                                <input name="taksit_sayisi" id="hire-'+val.installmentNumber+'" value="'+val.installmentNumber+'" type="radio">\
                                                <label  for="hire-'+val.installmentNumber+'" class="radio-label">'+val.installmentNumber+' Taksit</label>\
                                            </div>\
                                        </td>\
                                        <td>'+val.installmentPrice+' TL</td>\
                                        <td>'+currencyFormatDE(val.totalPrice)+' TL</td>\
                                    </tr>';
                    }

                });
                $('.RemevodItemTaksit').remove();
                $('.TaksitList').html(options);

                $('.TaksitList > tr:first').attr('selected','selected');
            }
        });
    }
};



function productInstallments(NewPrice){
    $.ajax({
        type: "POST",
        dataType:"JSON",
        url: siteurl+'Ajax/xBin/'+NewPrice,
        success: function(data) {
            
            $.each(data.installmentDetails, function(x, item) {
                $('<div class="installment-list">\
                    <div class="bank-name">'+item.cardFamilyName+'</div>\
                    <table class="installment-table">\
                        <thead>\
                            <tr>\
                                <th>Taksit Sayısı</th>\
                                <th>Aylık Ödeme</th>\
                                <th>Toplam</th>\
                            </tr>\
                        </thead>\
                        <tbody class="installment-number bank-'+item.bankCode+'">\
                        </tbody>\
                    </table>\
                </div>').appendTo(".product-installment-list");

                $.each(item.installmentPrices, function(y, subitem) {
                    $('<tr class="hireItem">\
                        <td>'+subitem.installmentNumber+' Taksit</td>\
                        <td>'+subitem.installmentPrice.toFixed(3)+' TL</td>\
                        <td>'+subitem.totalPrice.toFixed(3)+' TL</td>\
                    </tr>').appendTo(".installment-number.bank-"+item.bankCode+"");
                });

            });           
        }
    });
};



function kartSiparisiTamamla() {
    var data = {};
    data.card_number    = $('#card_number').val();
    data.card_name      = $('#card_name').val();
    data.card_date      = $('#card_date').val();
    data.card_cvv       = $('#card_cvv').val();
    data.taksit_sayisi  = $('[name=taksit_sayisi]').val();
    var i  = 0;
    var d = new Date();
    var year = d.getFullYear();
    year = year.toString().substr(2,2);
    var mounth = d.getMonth() + 1;

    if (valid_credit_card(data.card_number)) {
        $('#card_number').removeClass('borderErrorRed');
    }else{
        $('#card_number').addClass('borderErrorRed');
        i++;
    }

    if (data.card_name.length < 3) {
        i++;
        $('#card_name').addClass('borderErrorRed');
    }else{
        $('#card_name').removeClass('borderErrorRed');
    }

    if (data.card_date.length == 7) {
        var date = data.card_date.split(" / ");
         if (date[0]>12) {
            i++;
            $('#card_date').addClass('borderErrorRed');
        }else{
            if (date[1]>year) {
                $('#card_date').removeClass('borderErrorRed');
            }else if (date[1]==year) {
                if (date[0]>=mounth) {
                    $('#card_date').removeClass('borderErrorRed');
                }else{
                    i++;
                    $('#card_date').addClass('borderErrorRed');
                }
            }else{
                i++;
                $('#card_date').addClass('borderErrorRed');
            }
        }
    }else{
        i++;
        $('#card_date').addClass('borderErrorRed');
    }

    if (data.card_cvv.length == 3) {
        $('#card_cvv').removeClass('borderErrorRed');
    }else{
        i++;
        $('#card_cvv').addClass('borderErrorRed');
    }

    if ($('#cart_contract').prop('checked')) {
        $('.cart-contract').removeClass('contract-error');
    }else{
        i++;
        $('.cart-contract').addClass('contract-error');
    }
    if (i === 0) {
        $('#odemeForm').submit();
    }
}