<div class="clearfix"></div>
<section class="page-header-container"> 
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h3>Hesabım</h3>    
                </div>            
            </div>
        </div>
    </div>
</section>
<section class="account">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tabbable tabs-left">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab-1" data-toggle="tab">Üyelik Bilgilerim</a>
                        </li>
                        <li >
                            <a href="#tab-2" data-toggle="tab">Siparişlerim</a>
                        </li>
                        <li>
                            <a href="#tab-3" data-toggle="tab">Destek Taleplerim</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('cikis-yap'); ?>">Çıkış Yap</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-1">
                            <div class="form-content">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col-md-12">                                                
                                                <div class="form-container">
                                                    <div class="form-title">
                                                        <h4>Üyelik Bilgilerim</h4>   
                                                    </div>                                                     
                                                </div> 
                                            </div>
                                        </div>
                                        <form class="row" id="user-information-update" method="post" action="<?php echo current_url(); ?>">
                                            <div class="col-md-6">
                                                <div class="form-container">
                                                    <label class="form-label">Ad*</label>
                                                    <input type="text" class="form-input" name="name" value="<?php echo isset($user->name) ? $user->name : ''; ?>" autocomplete="off"> 
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-container">
                                                    <label class="form-label">Soyad*</label>
                                                    <input type="text" class="form-input" name="surname" value="<?php echo isset($user->surname) ? $user->surname : ''; ?>" autocomplete="off"> 
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-container">
                                                    <label class="form-label">E-Posta*</label>
                                                    <input type="text" class="form-input" name="email" value="<?php echo isset($user->email) ? $user->email : ''; ?>" autocomplete="off"> 
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-container">
                                                    <label class="form-label">Telefon*</label>
                                                    <input type="text" class="form-input" name="phone" value="<?php echo isset($user->phone) ? $user->phone : ''; ?>" autocomplete="off"> 
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-container">
                                                    <label class="form-label">T.C Kimlik No*</label>
                                                    <input type="tel" class="form-input" name="identity_number" value="<?php echo isset($user->identity_number) ? $user->identity_number : ''; ?>" autocomplete="off"> 
                                                </div>
                                            </div>
                                            <div class="col-md-12"> 
                                                <div class="form-container">
                                                    <label class="form-label">Doğum Tarihi</label>                                                                                        
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-container">                                                            
                                                                <select name="day" class="form-select" autocomplete="off">
                                                                    <?php for ($loop = 1; $loop <= 31; $loop++) { ?>
                                                                        <option value="<?php echo $loop; ?>" <?php echo isset($user->birth_date) && explode("-", $user->birth_date)[0] == $loop ? 'selected' : ''; ?>><?php echo $loop; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-container">
                                                                <select name="month" class="form-select" autocomplete="off">
                                                                    <?php for ($loop = 1; $loop <= 12; $loop++) { ?>
                                                                        <option value="<?php echo $loop; ?>" <?php echo isset($user->birth_date) && explode("-", $user->birth_date)[1] == $loop ? 'selected' : ''; ?>><?php echo $loop; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-container">
                                                                <select name="year" class="form-select" autocomplete="off">
                                                                    <?php for ($loop = 1940; $loop <= date('Y') - 18; $loop++) { ?>
                                                                        <option value="<?php echo $loop; ?>" <?php echo isset($user->birth_date) && explode("-", $user->birth_date)[2] == $loop ? 'selected' : ''; ?>><?php echo $loop; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>       
                                            </div>
                                            <div class="col-md-12"> 
                                                <div class="form-container">
                                                    <label class="form-label">Şehir/İlçe</label>                                                                                        
                                                    <div class="row">
                                                        <?php /*<div class="col-md-4">
                                                            <div class="form-container">                                                            
                                                                <select name="" id="" class="form-select" autocomplete="off">
                                                                    <option value="0" >Ülke</option>
                                                                    <option value="1" selected="">Türkiye</option>
                                                                </select>
                                                            </div>
                                                        </div>*/ ?>
                                                        <div class="col-md-6">
                                                            <div class="form-container">
                                                                <select name="city_id" id="city" class="form-select" autocomplete="off">
                                                                    <?php foreach ($cities as $key => $val) { ?>
                                                                        <option value="<?php echo $val->CityID; ?>" <?php echo isset($user->city_id) && $user->city_id == $val->CityID ? 'selected' : ''; ?>><?php echo $val->CityName; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-container">
                                                                <select name="counties_id" id="town" class="form-select" autocomplete="off">
                                                                    <?php if (isset($counties)) { ?>
                                                                        <?php foreach ($counties as $key => $val) { ?>
                                                                            <option value="<?php echo $val->TownID; ?>" <?php echo isset($user->counties_id) && $user->counties_id == $val->TownID ? 'selected' : ''; ?> ><?php echo $val->TownName; ?></option>
                                                                        <?php } ?>
                                                                    <?php } else { ?>
                                                                        <option value="">Öncelikle Şehir Seçimi Yapın</option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>       
                                            </div>
                                            <div class="col-md-12"> 
                                                <div class="form-container">
                                                    <label class="form-label">Cinsiyet</label>                                                                                        
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-container">                                                            
                                                                <input type="radio" id="Erkek" name="gender" value="Erkek" class="form-radio" <?php echo isset($user->gender) && $user->gender == 'Erkek' ? 'checked' : ''; ?>>
                                                                <label for="Erkek" class="radio-label">Erkek</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-container">                                                            
                                                                <input type="radio" id="Kadın" name="gender" value="Kadın" class="form-radio" <?php echo isset($user->gender) && $user->gender == 'Kadın' ? 'checked' : ''; ?>>
                                                                <label for="Kadın" class="radio-label">Kadın</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>       
                                            </div>
                                            <div class="col-md-12"> 
                                                <div class="form-container right">
                                                    <button type="submit" class="form-link">Güncelle</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div> 
                                    <div class="col-md-5">
                                        <div class="row">
                                            <div class="col-md-12">                                                
                                                <div class="form-container">
                                                    <div class="form-title">
                                                        <h4>Şifre Güncelle</h4>   
                                                    </div>                                                     
                                                </div> 
                                            </div>
                                        </div>
                                        <form class="row" method="post" action="<?php current_url(); ?>" id="password-update-information">
                                            <div class="col-md-12">
                                                <div class="form-container">
                                                    <label class="form-label">Mevcut Şifre*</label>
                                                    <input type="password" class="form-input" name="old_password" autocomplete="off"> 
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-container">
                                                    <label class="form-label">Yeni Şifre*</label>
                                                    <input type="password" class="form-input" name="new_password" autocomplete="off"> 
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-container">
                                                    <label class="form-label">Yeni Şifre*(Tekrar)</label>
                                                    <input type="password" class="form-input" name="new_password_repeat" autocomplete="off"> 
                                                </div>
                                            </div>
                                            <div class="col-md-12"> 
                                                <div class="form-container right">
                                                    <button type="submit" class="form-link">Güncelle</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>                   
                        </div>
                        <div class="tab-pane" id="tab-2">
                            <div class="row">
                                <div class="col-md-12">                                                
                                    <div class="form-container">
                                        <div class="form-title">
                                            <h4>Sipariş Detay</h4>   
                                        </div>                                                     
                                    </div> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">  
                                    <div class="our-table">
                                        <div class="our-thead">
                                            <div class="our-tr">
                                                <div class="our-th product">Sipariş Tarihi</div>
                                                <div class="our-th product">Sipariş No</div>
                                                <div class="our-th date">Özet</div>
                                                <div class="our-th unit">Alıcı </div>
                                                <div class="our-th unit">Toplam</div>
                                                <div class="our-th status">İşlem</div>
                                            </div>
                                        </div>
                                        <div class="our-tbody">
                                            <?php foreach ($orders as $key => $val) { ?>
                                                <div class="our-tr">
                                                    <div class="our-td date">
                                                        <span><?php echo $val['added_time']; ?></span>
                                                    </div>
                                                    <div class="our-td product">
                                                        <span><?php echo $val['id']; ?></span>                                                 
                                                    </div>
                                                    <div class="our-td date">
                                                        <span><?php echo count($val['line']); ?> Çeşit Ürün</span>
                                                    </div>
                                                    <div class="our-td date">
                                                        <span><?php echo $val['name'] . ' ' . $val['last_name']; ?></span>
                                                    </div>
                                                    <div class="our-td date">
                                                        <span><?php echo $val['sub']; ?> TL</span>
                                                    </div>
                                                    <div class="our-td status" style="cursor: pointer;">
                                                        <a data-toggle="modal" data-target="#Order-Detail-Modal-<?php echo $val['id']; ?>">Sipariş Detayı</a>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-3">
                            <div class="row">
                                <div class="col-md-12">                                                
                                    <div class="form-container">
                                        <div class="form-title">
                                            <h4>Destek Taleplerim</h4>   
                                        </div>                                                     
                                    </div> 
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-12">  
                                    <div class="our-table">
                                        <div class="our-thead">
                                            <div class="our-tr">
                                                <div class="our-th product">Tarih</div>
                                                <div class="our-th product">Konusu</div>
                                                <div class="our-th date">İçeriği</div>
                                                <div class="our-th unit">Durumu</div>
                                                <div class="our-th status">Seçim </div>
                                            </div>
                                        </div>
                                        <div class="our-tbody" id="support-append">
                                            <?php foreach ($requests as $key => $val) { ?>
                                                <div class="our-tr">
                                                    <div class="our-td date">
                                                        <span><?php echo $val->added_time; ?></span>
                                                    </div>
                                                    <div class="our-td product">
                                                        <span><?php echo $val->type == 1 ? "Şikayet" : ($val->type == 2 ? "Öneri" : "Talep"); ?></span>                                                 
                                                    </div>
                                                    <div class="our-td date">
                                                        <span><?php echo $val->message; ?></span>
                                                    </div>
                                                    <div class="our-td date">
                                                        <span><?php echo $val->status == 0 ? "İletildi" : ($val->status == 1 ? "İncelemede" : "Çözümlendi"); ?></span>
                                                    </div>
                                                     <div class="our-td unit">
                                                        <a href="javascript:void(0);" onclick="support_detail(<?php echo $val->id; ?>)">İncele</a>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="col-md-12" style="margin-top: 30px;"> 
                                    <div class="form-container right">
                                        <a class="form-link" data-toggle="modal" data-target="#Support-Add-Modal">Destek Oluştur</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php foreach ($orders as $key => $val) { ?>
<div id="Order-Detail-Modal-<?php echo $val['id']; ?>" class="order-detail-modal modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal"><span class="icon-ifa fa fa-times"></span></button>
                <h4 class="modal-title">Sipariş Detay</h4>
                <div class="order-info top">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="order-area">
                                <div class="tiitle">Sipariş Durumu</div>
                                <div class="sub-tiitle"><?=order_status($val['status'])?></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="order-area">
                                <div class="tiitle">Sipariş Kodu</div>
                                <div class="sub-tiitle"><?php echo $val['id']; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order-info center">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="order-area">
                                <div class="tiitle">Teslimat Bilgileri</div>
                                <div class="sub-tiitle">
                                    <?php echo $val['address'] . ' - ' . $val['CityName'] . ' - ' . $val['TownName']; ?> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="order-area">
                                <div class="tiitle">Sipariş Verildiği Tarih</div>
                                <div class="sub-tiitle"><?php echo $val['added_time']; ?></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="order-area total">
                                <div class="tiitle">Ödeme</div>
                                 <div class="sub-tiitle">
                                    <div class="sub-caption">
                                        <span> <strong>Toplam</strong></span>
                                        <span><strong><?php echo $val['sub']; ?> TL</strong></span>
                                    </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order-info bottom">
                    <div class="our-table">
                        <div class="our-thead">
                            <div class="our-tr">
                                <div class="our-th">#</div>
                                <div class="our-th">Ürün</div>
                                <div class="our-th">Durum</div>
                                <div class="our-th">Adet</div>
                                <div class="our-th ">Toplam</div>
                            </div>
                        </div>
                        <div class="our-tbody">
                            <?php foreach ($val['line'] as $key => $value) { ?>
                            <div class="our-tr">
                                <div class="our-td">
                                    <div class="td-image">
                                        <img src="<?php echo site_url($value['image']); ?>">
                                    </div>   
                                </div>
                                <div class="our-td">
                                    <span><?php echo $value['product_name']; ?></span> 
                                    <span>#<?php echo $value['p_id']; ?></span>                                                 
                                </div>
                                <div class="our-td">
                                    <span><?php echo $val['status'] == 1 ? 'Oluşturuldu' : ($val['status'] == 2 ? 'İptal Edildi' : 'Kargoya Verildi') ; ?></span>                                                 
                                </div>
                                <div class="our-td">
                                    <span><?php echo $value['qty'] . ' Ürün'; ?></span>
                                </div>
                                <div class="our-td">
                                    <span><?php echo $value['total']; ?> TL</span>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<div id="Support-Read-Modal" class="support-read-modal modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-body">
                 <button type="button" class="close" data-dismiss="modal"><span class="icon-ifa fa fa-times"></span></button>
                <h4 class="modal-title" id="append-title"></h4>
                <div class="support-read-card">
                    <h4 id="append-name"></h4>
                    <p id="append-message"></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="Support-Add-Modal" class="support-read-modal modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal"><span class="icon-ifa fa fa-times"></span></button>
                <h4 class="modal-title">Destek Oluştur</h4>
                <form class="support-read-card" method="post" action="<?php echo current_url(); ?>" id="support-request-form">
                    <div class="form-container">        
                        <label class="form-label">Konu*</label>                                                    
                        <select name="type" class="form-select">
                            <option value="">Seçiniz</option>
                            <option value="1">Şikayet</option>
                            <option value="2">Öneri</option>
                            <option value="3">Talep</option>
                        </select>
                    </div>
                    <div class="form-container">
                        <label class="form-label">Mesajınız*</label>
                        <textarea type="text" class="form-input" name="message" rows="8" autocomplete="off"> </textarea>
                    </div>
                    <div class="col-md-12"> 
                        <div class="form-container">
                            <button type="submit" class="form-link">Destek Talebi Oluştur</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>