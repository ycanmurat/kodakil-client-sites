<div class="m-grid__item m-grid__item--fluid m-wrapper">
   <!-- BEGIN: Subheader -->
   <div class="m-subheader ">
      <div class="d-flex align-items-center">
         <div class="mr-auto">
            <h3 class="m-subheader__title ">
               Eğitmenler
            </h3>
         </div>
      </div>
   </div>
   <!-- END: Subheader -->
   <div class="m-content">
      <!--Begin::Main Portlet-->
      <div class="row">
         <div class="col-xl-12">
            <!--begin:: Widgets/Top Products-->
            <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height">
               <div class="m-section">
                  <div class="m-section__content">
                     <table class="table m-table m-table--head-bg-primary table-responsive">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Eğitmen CV</th>
                              <th>İsim Soyisim</th>
                              <th>Tüm Bilgiler</th>
                              <th style="text-align:right;">İşlem</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?if($teams==0){?><tr><td><font color="red">Şuanda Yüklü Bir Eğitmen Yok</font></td></tr><?}else{foreach ($teams as $key => $info){?>
                           <tr>
                              <td><?=$info->id?></td>
                              <td><a href="<?=site_url($info->instructor_file)?>" download>CV İndir</a></td>
                              <td><?=$info->name.' '.$info->surname?></td>
                              <td>
                                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m_modal_<?=$info->id?>">
                                    Tüm Bilgiler
                                 </button>
                              </td>
                              <div class="modal fade" id="m_modal_<?=$info->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">
                                            <?=$info->name.' '.$info->surname?>
                                          </h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">
                                                &times;
                                             </span>
                                          </button>
                                       </div>
                                       <div class="modal-body">
                                          <p><b>Ad Soyad :</b> <?=$info->name.' '.$info->surname?></p><br>
                                          <p><b>T.C. Kimlik No :</b> <?=$info->identity_number?></p><br>
                                          <p><b>E-Posta :</b> <?=$info->email?></p><br>
                                          <p><b>Telefon :</b> <?=$info->phone?></p><br>
                                          <p><b>Adres :</b> <?=$info->address?></p><br>
                                          <p><b>Doğum Tarihi :</b> <?=$info->birth_date?></p><br>
                                          <p><b>Cinsiyet :</b> <?=$info->gender?></p><br>
                                          <p><b>Uzmanlık Alanı :</b> <?=$info->profession?></p><br>
                                          <p><b>Tarih :</b> <?=$info->added_time?></p><br>
                                       </div>
                                       <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                             Geri Çık
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <td style="text-align:right;">
                                 <div class="dropdown d-inline">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    İşlem Seçin
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    	<a class="dropdown-item" href="<?=admin_url('Team/next/'.$info->id)?>">Başvuruyu Onayla</a>
                                    	<a class="dropdown-item" onclick="deleteConfirm('<?=admin_url('Team/deleteApplication/'.$info->id)?>')">Sil</a>
                                    </div>
                                 </div>
                              </td>
                           </tr>
                           <?}}?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <!--end:: Widgets/Top Products-->
         </div>
      </div>
      <!--End::Main Portlet-->
   </div>
</div>
</div>
<!-- end:: Body -->