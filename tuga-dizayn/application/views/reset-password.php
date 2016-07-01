<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="tab-content">
                <div id="login" class="tab-pane fade in active">                               
                    <form class="form-content" method="post" action="<?php echo current_url(); ?>" id="password-update-form">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-container title">
                                    <label class="form-label">Alttaki Bilgileri Doldurarak Şifrenizi Sıfırlayıp Hesabınıza Giriş Yapabilirsiniz</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-container title">
                                    <label class="form-label"><?php echo $user_information->email; ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-container">
                                    <label class="form-label">Yeni Şifreniz</label>
                                    <input type="password" class="form-input" autocomplete="off" name="password" placeholder="Yeni Şifreniz"> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-container">
                                    <label class="form-label">Yeni Şifreniz (Tekrar)</label>
                                    <input type="password" class="form-input" autocomplete="off" name="password_repeat" placeholder="Yeni Şifreniz (Tekrar)"> 
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="reset_token" value="<?php echo $user_information->reset_token; ?>">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-container">
                                    <button class="form-link login-link" type="submit">Şifremi Güncelle</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>