<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">
                    Eğitmen Düzenle
                </h3>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">
        <!--Begin::Main Portlet-->
        <div class="row">
            <div class="col-xl-12">

                <?if($this->session->flashdata('onay')==1){?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                        <strong>Başarılı</strong>
                        Üye Başarıyla Güncellendi
                    </div>
                <?}elseif($this->session->flashdata('hata')==1){?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                    <strong>Başarısız</strong>
                    Üye Güncellenemiyor Lütfen Geliştiricinizden Yardım İsteyin
                </div>
                <?}?>
                <!--begin:: Widgets/Top Products-->
                <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height">
                    <form class="m-form m-form--fit m-form--label-align-right" action="<?=admin_url('Team/editTeam/'.$teamInfo->id)?>" method="POST">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text" style="padding-top:20px;">
                                        Eğitmen Düzenle
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="m-portlet__body">
                            <div class="m-form__section m-form__section--first">
                                <div class="form-group m-form__group">
                                    <label>
                                       İsim
                                    </label>
                                    <input type="text" class="form-control m-input" name="title" value="<?=$teamInfo->title?>">
                                </div>
                                <div class="form-group m-form__group">
                                    <label>
                                        Ünvan
                                    </label>
                                    <input type="text" class="form-control m-input" name="position" value="<?=$teamInfo->position?>">
                                </div>
                                <div class="form-group m-form__group">
                                    <label>
                                        İçerik
                                    </label>
                                    <textarea name="content" class="ckeditor" rows="10"><?=$teamInfo->content?></textarea>
                                </div>
                                <div class="col-12 m--padding-left-30 m--padding-right-30">
                                    <label>
                                    Güncellemek İçin Fotoğraf Yükleyin
                                    </label>
                                    <div class="m-dropzone dropzone m-dropzone--primary dz-clickable" action="<?=admin_url('Team/contentImageUpload')?>" id="m-dropzone-one">
                                       <div class="m-dropzone__msg dz-message needsclick">
                                          <h3 class="m-dropzone__msg-title">
                                             Fotoğraf Yükle
                                          </h3>
                                          <span class="m-dropzone__msg-desc">
                                          <i class="fa fa-picture-o"></i>
                                          </span>
                                       </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group m-form__group">
                                    <label for="exampleSelect1">
                                        Şuandaki Haber Fotoğrafı
                                    </label>
                                    <div class="m-alert m-alert--outline alert alert-info alert-dismissible fade show">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 col-sm-6 mb-3 text-center images" id="img_1">
                                                <div>
                                                    <center>
                                                        <a href="<?=site_url($teamInfo->image)?>" target="_blank">
                                                          <img src="<?=site_url($teamInfo->image)?>" class="w-100 mb-2 img-responsive" style="width:50%;">
                                                        </a>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-form__actions m-form__actions">
                                    <div class="row">
                                        <div class="col-lg-12 text-right">
                                            <button type="submit" class="btn btn-primary">
                                                Güncelle
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--end:: Widgets/Top Products-->
            </div>
        </div>
        <!--End::Main Portlet-->
    </div>
</div>
</div>
</div>
</div>