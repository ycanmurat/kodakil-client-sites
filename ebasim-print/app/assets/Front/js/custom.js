base_url = 'https://ebasim.kodakillabs.com/';
site_url = 'https://ebasim.kodakillabs.com';
changedVariantId = 0;

$(document).ready(function(){

});

function CurrencyChange(id) {
	setCookie('currency', id, 30);
	location.reload();
}

function GetCurrency() {
	return getCookie('currency');
}

function setCookie(cname, cvalue, exdays) {
	var d = new Date();
	d.setTime(d.getTime() + (exdays*24*60*60*1000));
	var expires = "expires="+ d.toUTCString();
	document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    /*
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    */
    var returnVar = Cookies.get(cname);
    if (typeof returnVar != 'undefined') {
    	return returnVar;
    }
    return "";
}

function bulletinAdd(mail) {
	$.ajax({
		type: "POST",
		url: base_url+'Services/bulletin',
		data: {mail:mail},
		success: function(data) {
			if (data == 1) {
				$('.NewsletterInput').val('');
				alert('Teşekkürler, Yeni ve Güncel Haberlerden Bilgi Alacaksınız');
			}else{
				alert('Lütfen Geçerli Bir Mail Adresi Yazın');
			}
		}
	});
}

function currencyFormatDE(num) {
	return (num.toFixed(2).replace('.', ',').replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.'));
}

var gl = {
	cities: false,
	conversationhref: "",
	products: []
};


$('body').on('click', '.noclick', function(){
	var $this = $(this);
	$this.removeClass('noclick');
	var $modal = $($this.attr('data-target'));
	if ($modal.attr('data-corp') == '1') {
		$modal.find('.KurumsalAdresCheckbox').click();
	}
	var $country = $modal.find('select[name="addressCountry"]').val();
	var $town = parseInt($modal.find('.FormTown').attr('data-town'));
	if ($country == "212") {
		var $city = $modal.find('select[name="addressCity"]').val();
		//console.log($city);
		$.getJSON(base_url+'Account/GetTown?CityID='+$city, function(data){
			var selectstart = '<select name="addressTown" required>';
			var selectend = '</select>';
			var options = "";
			$.each(data, function(key, val) {
				var selected = '';
				if (val.CountyID == $town) {
					selected = 'selected="true"';
				}
				options += '<option value="'+val.CountyID+'"'+selected+'>'+val.CountyName+'</option>';
			});
			$modal.find('.FormTown').append(selectstart+options+selectend);
		});
	}
});

$('body').on('click', '.newaddressclick', function(){
	var $this = $(this);
	$this.removeClass('newaddressclick');
	var $modal = $($this.attr('data-target'));
	var $city = 1;
	$.getJSON(base_url+'Account/GetTown?CityID='+$city, function(data){
		var selectstart = '<select name="addressTown" required>';
		var selectend = '</select>';
		var options = "";
		$.each(data, function(key, val) {
			var selected = '';
			if (key == 0) {
				selected = 'selected="true"';
			}
			options += '<option value="'+val.CountyID+'"'+selected+'>'+val.CountyName+'</option>';
		});
		$modal.find('.FormTown').append(selectstart+options+selectend);
	});
});

$('body').on('change', '.NewAdress select[name="addressCountry"]', function(){
	var $this = $(this);
	if ($(this).val() == "212") {
		var $city = $this.parents(".NewAdressBox").find('.FormCity');
		var $town = $this.parents(".NewAdressBox").find('.FormTown');
		$city.find('select').remove();
		$city.find('input').remove();
		$town.find('select').remove();
		$town.find('input').remove();
		$town.append('<select id="AccountAddressTown" name="addressTown" disabled="true" required></select>');
		if (gl.cities == false) {
			var $formid = $this.parents('form')[0].id;
			var $form = $('#'+$formid);
			OpenLoader($form);
			$.getJSON(base_url+'Account/GetCity?CountryID=212', function(data){
				var selectstart = '<select name="addressCity" required>';
				var selectend = '</select>';
				var options = "";
				$.each(data, function(key, val) {
					options += '<option value="'+val.CityID+'">'+val.CityName+'</option>';
				});
				gl.cities = selectstart+options+selectend;
				$city.append(gl.cities);
				$city.find('select').change();
			}).always(function(data){
				CloseLoader();
			});
		} else {
			$city.append(gl.cities);
			$city.find('select').change();
		}

	} else {
		var $city = $this.parents(".NewAdressBox").find('.FormCity');
		var $town = $this.parents(".NewAdressBox").find('.FormTown');
		
		$city.find('select').remove();
		$town.find('select').remove();
		$city.find('input').remove();
		$town.find('input').remove();
		$city.append('<input type="text" name="addressCity" id="AccountAddressCity" required>');
		$town.append('<input type="text" name="addressTown" id="AccountAddressTown" required>');
	}
});

$('body').on('change', '.NewAdress select[name="addressCity"]', function(){
	var $this = $(this);
	var $formid = $this.parents('form')[0].id;
	var $form = $('#'+$formid);
	OpenLoader($form);
	var $city = $this.parents(".NewAdressBox").find('.FormCity select').val();
	var $town = $this.parents(".NewAdressBox").find('.FormTown');
	$.getJSON(base_url+'Account/GetTown?CityID='+$city, function(data){
		var selectstart = '<select name="addressTown" id="AccountAddressTown" required>';
		var selectend = '</select>';
		var options = "";
		$.each(data, function(key, val) {
			options += '<option value="'+val.CountyID+'">'+val.CountyName+'</option>';
		});
		$town.find('select').remove();
		$town.append(selectstart+options+selectend);
	}).always(function(data){
		CloseLoader();
	});
});

$('body').on('click', '.UpdateAddressBtn', function(e){
	$this = $(this);
	$modal = $('#AddressEditModal'+$this.attr('data-formid'));
	$form = $('#AddressEditModal'+$this.attr('data-formid')).find('.UpdateAddressForm');
	OpenLoader($form);
	$.ajax({
		type: "POST",
		url: $form.attr('action'),
		data: $form.serialize(),
		success: function(data) {
			if (data.default == 0) {
				location.reload();
			}
			data = data[0];
			if (data.sonuc == true) {
				$modal.find('form').remove();
				$($modal).find('.modal-body').append('<p class="alert alert-success mb-0">'+data.text+'</p>');
				setTimeout(function(){ location.reload(); }, 1000);
			} else {
				var errortext = "";
				if (typeof data.text == "string") {
					errortext += '<div class="alert alert-danger">'+data.text+'</div>';
					$modal.find('.AddressErrors').html(errortext);
					//console.log($modal.find('.AddressErrors'));
				} else {
					$.each(data.text, function(index, val){
						errortext += '<div class="alert alert-danger">'+val+'</div>';
					});
					$modal.find('.AddressErrors').html(errortext);
					//console.log($modal.find('.AddressErrors'));
				}
			}

		},error:function(){
			location.reload();
		}
	}).always(function(){
		CloseLoader();
	});

	e.preventDefault();
});

$('body').on('click', '.AddAddressBtn', function(e){
	$this = $(this);
	$modal = $('#AddressEditModal'+$this.attr('data-formid'));
	$form = $('#AddressEditModal'+$this.attr('data-formid')).find('.UpdateAddressForm');
	OpenLoader($form);
	$.ajax({
		type: "POST",
		url: $form.attr('action'),
		data: $form.serialize(),
		success: function(data) {
			data = data[0];
			if (data.sonuc == true) {
				$modal.find('form').remove();
				$($modal).find('.modal-body').append('<p class="alert alert-success mb-0">'+data.text+'</p>');
				setTimeout(function(){ location.reload(); }, 1000);
			} else {
				var errortext = "";
				if (typeof data.text === "string") {
					errortext += '<div class="alert alert-danger">'+data.text+'</div>';
					$modal.find('.AddressErrors').html(errortext);
					//console.log($modal.find('.AddressErrors'));
				} else {
					$.each(data.text, function(index, val){
						errortext += '<div class="alert alert-danger">'+val+'</div>';
					});
					$modal.find('.AddressErrors').html(errortext);
					//console.log($modal.find('.AddressErrors'));
				}
			}
		}
	}).always(function(){
		CloseLoader();
	});
	e.preventDefault();
});


$('.variants').on('change',function(){
    variantChanges();
	changedVariantId = $(this).attr('variant');
	
	if($('input#kdvmanipule').prop("checked") == true){
		//console.log('murat');
		kdvharicgoster();
	}
	else if($('input#kdvmanipule').prop("checked") == false){
		//console.log('emre');
		kdvdahilgoster();
	}
});

function VariantDisabledOrEnabled() {

	$.each($('.variants'),function(key,value){
		a = $(value).find('option').length;
		if (a == 1) {
			$(value).attr('disabled','disabled');
			$(value).addClass('colorEEE');
		}else{
			$(value).removeAttr('disabled');
			$(value).removeClass('colorEEE');
		}
	});
}
var i=0;

var basePrice = 0;

function FiyatCek(product_id) {
	//Sıralı Şekilde Düzgün Çalışıyo tekrar kontrol edilecek
	i++;
	var fiyatcagirma  = 0;
	var key = [];
	$.each($('.variants'),function(value){
		key.push($(this).val());
	});
	key = JSON.stringify(key);
	OpenLoader($('#ProductLoad'));
	$.ajax({
		url: base_url+"Services/GetProductPrice/"+product_id,
		data: { key: key, changedVariantId:changedVariantId },
		method: 'post',
		success: function (data) {
			data = JSON.parse(data);
			$.each(data.variants,function(key,value){
				var subVariants = "<option value='0'>Seçiniz</option>";
				$.each(value.childs,function(key2,val){
					subVariants +='<option ';
					$.each(data.default,function (key3,val2){
						/*
    					if (val2 == val.variant_child_id) {
    						subVariants += 'selected';
    					}
    					*/
    				});
					subVariants +=' value="'+val.variant_child_id+'">'+val.name+'</option>';
				});

				$('#variant_'+value.product_variant_id).html(subVariants);
			});
    		//VariantDisabledOrEnabled();


    		if (data.price == 0 && i < 4 ) {
    			FiyatCek(product_id);
    		}else{
    			if (data.price != 0) {

                    basePrice = data.price;
                    if ($('#quantity').val() != undefined) {
                        data.price = data.price*Number($('#quantity').val());
                    }

    				$('#PriceSpan').text(data.price);
    				$('#HiddenPriceSpan').text(data.price);
    				if($('input#kdvmanipule').prop("checked") == true){
    					kdvharicgoster();
    				}
    				else if($('input#kdvmanipule').prop("checked") == false){

    					kdvdahilgoster();
    				}
    				$('input#kdvmanipule').click(function(){
    					if($(this).prop("checked") == true){
    						kdvharicgoster();
    					}
    					else if($(this).prop("checked") == false){

    						kdvdahilgoster();
    					}
    				});
    				$('.Taksit9').text((Math.round(parseFloat(data.price/9)* 100) / 100) +' x 9 Ay Taksit');
    				$('.Taksit6').text((Math.round(parseFloat(data.price/6)* 100) / 100) +' x 6 Ay Taksit');
    				$('.Taksit3').text((Math.round(parseFloat(data.price/3)* 100) / 100) +' x 3 Ay Taksit');


					//replace('.','').replace(',','.')
				}
				VariantDisabledOrEnabled();
				$.each($('.variants'),function(key,value){
					if (key>parseInt(changedVariantId)+1) {
						$(value).attr('disabled','disabled');
						$(value).addClass('colorEEE');
					}else{
						$(value).removeAttr('disabled');
						$(value).removeClass('colorEEE');
					}
				});

				i = 0;
			}

			if ($('#loaderelement').length > 0) {
				CloseLoader();
			}

		}
	});
}

function kdvharicgoster(){
    if ($('#quantity').val() != undefined) {
        kdvdahil = basePrice*Number($('#quantity').val());
    }else{
        kdvdahil = basePrice;
    }
	kdvharicfiyat = kdvdahil/1.18;
	$('span#PriceSpan').html(kdvharicfiyat.toFixed(2) + '<span class="plus">+ KDV</span>');
	$('div.kdv-change .state label').html('Kdv hariç göster');
	$('.ProductEnd  .Addition  .Total .T').html('KDV Hariç :');

}
function kdvdahilgoster(){
    if ($('#quantity').val() != undefined) {
        kdvdahilfiyat = basePrice*Number($('#quantity').val());
    }else{
        kdvdahilfiyat = basePrice;
    }
	$('span#PriceSpan').html(kdvdahilfiyat.toFixed(2));
	$('.ProductEnd  .Addition  .Total .T').html('KDV Dahil :')
	$('div.kdv-change .state label').html('Kdv dahil göster');
}


function FiyatCekFirst(product_id) {
	//Sıralı Şekilde Düzgün Çalışıyo tekrar kontrol edilecek
	i++;
	var fiyatcagirma  = 0;
	var key = [];
	$.each($('.variants'),function(value){
		key.push($(this).val());
	});
	key = JSON.stringify(key);
	$.ajax({
		url: base_url+"Services/GetProductPrice/"+product_id,
		data: { key: key, changedVariantId:changedVariantId },
		method: 'post',
		success: function (data) {
			data = JSON.parse(data);
			$.each(data.variants,function(key,value){
				var subVariants = "";
				$.each(value.childs,function(key2,val){
					subVariants +='<option ';
					subVariants +=' value="'+val.variant_child_id+'">'+val.name+'</option>';
				});

				$('#variant_'+value.product_variant_id).html(subVariants);
			});
			
			VariantDisabledOrEnabled();
			if (data.price == 0 && i < 4 ) {
				FiyatCek(product_id);
			}else{

				if (data.price != 0) {
                    
                    basePrice = data.price;
                    if ($('#quantity').val() != undefined) {
                        data.price = data.price*Number($('#quantity').val());
                    }
                    

					$('#PriceSpan').text(data.price);
					$('#HiddenPriceSpan').text(data.price);
					if($('input#kdvmanipule').prop("checked") == true){
						kdvharicgoster();
					}
					else if($('input#kdvmanipule').prop("checked") == false){

						kdvdahilgoster();
					}
					$('input#kdvmanipule').click(function(){
						if($(this).prop("checked") == true){
							kdvharicgoster()
						}
						else if($(this).prop("checked") == false){

							kdvdahilgoster()
						}
					});
					$('.Taksit9').text((Math.round(parseFloat(data.price/9)* 100) / 100) +' x 9 Ay Taksit');
					$('.Taksit6').text((Math.round(parseFloat(data.price/6)* 100) / 100) +' x 6 Ay Taksit');
					$('.Taksit3').text((Math.round(parseFloat(data.price/3)* 100) / 100) +' x 3 Ay Taksit');

					//replace('.','').replace(',','.')
				}

				i = 0;
			}

			if ($('#loaderelement').length > 0) {
				CloseLoader();
			}

		}
	});
}

function SepeteEkleTasariVar(id) {
	var variants = [];
	$.each($('.variants'),function(value){
		variants.push($(this).val());
	});
	
	var product = {product_id:id,variants:variants,design:0};

	var chartProduct = getCookie('chartProduct');

	if (chartProduct == "") {
		var products = [];
		products.push(product);
		newProduct = JSON.stringify(products);
		setCookie('chartProduct', newProduct, 15);

	}
	else{
		chartProduct = JSON.parse(chartProduct);
		chartProduct.push(product);
		newProduct = JSON.stringify(chartProduct);
		setCookie('chartProduct', newProduct, 15);
	}

	//console.log(product);

	SepetDoldur();
	$(window).scrollTop(0);
	$('.CartDropdown').addClass('ShowDropdown');
	setTimeout(function(){
		$('.CartDropdown').removeClass('ShowDropdown');
	},3000);
	$('.TopBar').scrollTop();
}

function PaeketSepeteEkle(packageId,design) {
	
	var product = {product_id:151,packageId,design:design};

	var chartProduct = getCookie('chartProduct');

	if (chartProduct == "") {
		var products = [];
		products.push(product);
		newProduct = JSON.stringify(products);
		setCookie('chartProduct', newProduct, 15);
	}
	else{
		chartProduct = JSON.parse(chartProduct);
		chartProduct.push(product);
		newProduct = JSON.stringify(chartProduct);
		setCookie('chartProduct', newProduct, 15);
	}
	SepetDoldur();
	$('.CartDropdown').addClass('ShowDropdown');
	setTimeout(function(){
		$('.CartDropdown').removeClass('ShowDropdown');
	},3000);
	$('.TopBar').scrollTop();
	$(window).scrollTop(0);
}

function SepeteEkleTasarimYok(id) {
	var variants = [];
	$.each($('.variants'),function(value){
		variants.push($(this).val());
	});
	
	var product = {product_id:id,variants:variants,design:1};

	var chartProduct = getCookie('chartProduct');

	if (chartProduct == "") {
		var products = [];
		products.push(product);
		newProduct = JSON.stringify(products);
		setCookie('chartProduct', newProduct, 15);

	}
	else{
		chartProduct = JSON.parse(chartProduct);
		chartProduct.push(product);
		newProduct = JSON.stringify(chartProduct);
		setCookie('chartProduct', newProduct, 15);
	}
	SepetDoldur();
	$(window).scrollTop(0);
	$('.CartDropdown').addClass('ShowDropdown');
	setTimeout(function(){
		$('.CartDropdown').removeClass('ShowDropdown');
	},3000);
	$('.TopBar').scrollTop();
}

function SepetDoldur(firstload = false) {
	var chartProduct = getCookie('chartProduct');
	if (chartProduct == "") {
		$('.SepetDolu').css('display','none');
		$('.SepetBos').css('display','inherit');
		$('.ChartCount').text(0);
		if (firstload == true) {
			if ($('#firstloader').length > 0) {
				$('#firstloader').remove();
				$('body')[0].style.overflow = 'auto';
			}
		}
	}
	else{
		chartProduct = JSON.parse(chartProduct);
		$.ajax({
			type: "POST",
			url: base_url+'Services/GetChartProducts',
			dataType:'json',
			success: function(data) {
				var products = '';
				totalPrice = 0;
				var currency = 0;
				if (data != []) {
					$.each(data,function(key,value){
						if (value.design == 1) {
							totalPrice += parseFloat(value.price)+parseFloat(value.creative_price);
						}else{
							totalPrice += parseFloat(value.price);
						}

						currency = value.currency;
						products += '<li class="Item">\
						<div class="Left">';
										/*
                                            <div class="Img"><img width="76" src="https://fakeimg.pl/78x78" alt=""></div>
                                            */
                                            products +=		'<div class="Img"><img width="76" src="'+base_url+'/thumb.php?src='+base_url+value.default_image+'&size=76x76&zoom=0&crop=0&trim=0" alt=""></div>\
                                            <div class="productInfo">';
                                            products += 			'<div class="ProductName">Tasarım Hizmeti : <span class="amount">';
                                            if (value.design == 1) {
                                            	products += 'Var';
                                            }else{
                                            	products += 'Yok';
                                            }
                                            products +=				'</span></div>';
                                            products += 			'<div class="ProductName">'+value.product_name+' : <span class="amount">';

                                            $.each(value.variants,function(key2,value2){
                                            	if (value2.variant_id == 2) {
                                            		products += value2.variant_child_name+' '+value2.variant_name;
                                            	}
                                            });
                                            products +=				'</span></div>';
                                            $.each(value.variants,function(key2,value2){
                                            	if (value2.variant_id != 2) {
                                            		products += '<span class="Features">'+value2.variant_name+' : '+value2.variant_child_name+'</span>';
                                            	}
                                            });
                                            products +=			'</div>\
                                            </div>\
                                            <div class="Right">\
                                            <div class="Price">';

                                            if (value.design == 1) {
                                            	products += Math.round((parseFloat(value.price)+parseFloat(value.creative_price))* 100) / 100;
                                            }else{
                                            	products += Math.round(parseFloat(value.price)* 100) / 100;
                                            }

                                            products += 		' '+value.currency+'</div>\
                                            </div>\
                                            <div class="DeleteItem" onclick="ChartProductRemove('+key+')"><i class="fa fa-times" aria-hidden="true"></i></div>\
                                            </li>';
                                        });
					$('.ChartProducts').html(products);
				}

				$('.TotalPriceCur').text(Math.round(totalPrice * 100) / 100+' '+currency);
			},
			error: function(data) {

				setCookie('chartProduct', '', 15);

				$('.SepetDolu').css('display','none');
				$('.SepetBos').css('display','inherit');
				$('.ChartCount').text(0);
				if (firstload == true) {
					if ($('#firstloader').length > 0) {
						$('#firstloader').remove();
						$('body')[0].style.overflow = 'auto';
					}
				}
			}
		});


$('.ChartCount').text(chartProduct.length);
$('.SepetBos').css('display','none');
$('.SepetDolu').css('display','inherit');
}
}
$(document).ready(function(){
	SepetDoldur(true);
});

function ChartProductRemove(index,tip = 0) {
	newProduct = "";
	var chartProduct = getCookie('chartProduct');
	chartProduct = JSON.parse(chartProduct);
	chartProduct.splice(index, 1);
	if (chartProduct.length == 0) {
		chartProduct = "";
	}else{
		newProduct = JSON.stringify(chartProduct);
	}
	setCookie('chartProduct', newProduct, 15);
	if (tip == 0 ) {
		SepetDoldur();	
	}else{
		window.location.reload();
	}
}

function ChangeCartProductDesignStatus(tur, keyid) {
	newProduct = "";
	var chartProduct = getCookie('chartProduct');
	chartProduct = JSON.parse(chartProduct);
	chartProduct[keyid].design = tur;
	setCookie('chartProduct', JSON.stringify(chartProduct), 15);
	window.location.reload();
}

function OpenLoader($elem) {
	var loaderel = '<div id="loaderelement"><img src="'+base_url+'assets/Front/images/loader.gif" /></div>';
	//console.log($(loaderel));
	$elem.append($(loaderel));
}

function CloseLoader() {
	$('#loaderelement').remove();
}

$('body').on('click', '.conversationconfirmbutton', function() {
	var $this = $(this);
	gl.conversationhref = $this.attr('data-href');
});

$('body').on('click', '.ConversationYesButton', function() {
	var $this = $(this);
	var $cid = $this.attr('data-page');
	if (gl.conversationhref == '') {
		location.reload();
	} else {
		window.location = gl.conversationhref;
	}
});

var AsilFinalPrice = parseFloat($('.FinalPrice').text().replace('.','').replace(',','.'));
function kuponEkle(kuponKey) {
	$.ajax({
		type: "POST",
		url: base_url+'Services/GetCheck/',
		dataType:'json',
		data : {key:kuponKey},
		success: function(data) {
			if (data == 0) {
				$('.NO').css('display','block');
				$('.OK').css('display','none');
				$('.discountPrice').text('0,00');
				$('.FinalPrice').text(parseFloat(AsilFinalPrice).toFixed(2));
			}else{
				if (data.max > AsilFinalPrice && data.min < AsilFinalPrice) {
					$('.NO').css('display','none');
					$('.OK').css('display','block');
					var FinalPrice = AsilFinalPrice;
					var Disconunt = 0;
					var currency = getCookie('currency');

					if (data.type == 1) {
						if (currency == 0) {
							Disconunt = parseFloat(data.value);
						}else{
							Disconunt = parseFloat(data.value)/parseFloat(data.curPrice);
						}
					}else if(data.type == 2){
						Disconunt =  (parseFloat(FinalPrice)*parseFloat(data.value)/100)/parseFloat(data.curPrice);
					}

					$('.discountPrice').text((Disconunt).toFixed(2).replace('.','|').replace(',','.').replace('|',','));
					$('.FinalPrice').text((FinalPrice-Disconunt).toFixed(2).replace('.','|').replace(',','.').replace('|',','));
				}else{
					$('.NO').css('display','block');
					$('.OK').css('display','none');
					$('.discountPrice').text('0,00');
					$('.FinalPrice').text(parseFloat(AsilFinalPrice).toFixed(2));
				}
			}
		}
	});
}

function ChartStep3() {
	var adresId 	= $('input[name="selectedAdress"]:checked').val();
	var FatıraId 	= $('input[name="selectedTexAdress"]:checked').val();
	var FaturaExist = $('#SepetFaturaSecimi').prop("checked");
	console.log(adresId);
	console.log(FatıraId);
	console.log(FaturaExist);
	if (adresId!=undefined && FatıraId!=undefined) {
		$.ajax({
			type: "POST",
			url: base_url+'Services/ConfirmAdresses/',
			dataType:'json',
			data : {adresId:adresId,FatıraId:FatıraId,FaturaExist:FaturaExist},
			success: function(data) {
				if (data == true) {
					window.location = base_url+"sepet/odeme";
				}
			}
		});
	}
}

function AccountAddressRemove ($button, $address) {
	var $this = $($button);
	alertify.confirm(site_url, 'Adresi silmek istediğinizden emin misiniz?',
		function(){
			$.ajax({
				type: "POST",
				url: base_url+'Account/DeleteAddress/',
				data : {address:$address},
				success: function(data) {
					$this.parents('.AdressBox').remove();
					alertify.success('Adres Silindi');
				}
			});
		}, function(){
			//alertify.error('İptal')
		}
		)
	.set('labels', {ok:'Evet', cancel:'İptal'})
	.set({transition:'fade'})
	.set({movable: false, moveBounded: true});
}

function AccountOfferRemove ($button, $offer) {
	var $this = $($button);
	alertify.confirm(site_url, 'Teklifi silmek istediğinizden emin misiniz?',
		function(){
			$.ajax({
				type: "POST",
				url: base_url+'Account/DeleteOffer/',
				data : {offer:$offer},
				success: function(data) {
					console.log(data);
					if (data == "true") {
						$this.parents('.OfferItem').remove();
						alertify.success('Teklif Silindi');
					} else {
						alertify.error('Teklif Silinemedi');
					}
				}
			});
		}, function(){
			//alertify.error('İptal')
		}
		)
	.set('labels', {ok:'Evet', cancel:'İptal'})
	.set({transition:'fade'})
	.set({movable: false, moveBounded: true});
}

/* FullAdsBanner */
$('.FullAdsBanner > .Close').click(function() {
	$('.FullAdsBanner').slideUp();
});

$("body").on('focus', '.searchInput', function() {
	if (gl.products.length == 0) {
		$.ajax({
			type: "POST",
			url: base_url+'Home/SearchProducts',
			data : {getdata:'e'},
			success: function(data) {
				data = JSON.parse(data);
				if (data.result == true) {

					var values = [];
					$.each(data.products, function(key, val) {
						values.push(val.productName);
					})

					gl.products = values;
					$(".searchInput").autocomplete({
						minLength: 1,
						source:[gl.products]
						/*,
						select: function( event, ui ) { 
				        window.location.href = base_url+'Product/'+slugs[0];
				    }*/
				}).on('selected.xdsoft',function(e,datum){
					window.location = base_url+'arama?search='+datum;
				});
				$('.searchInput').focus();
			}
		}
	});
	}
});