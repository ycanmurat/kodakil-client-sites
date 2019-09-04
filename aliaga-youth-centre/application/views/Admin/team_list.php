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
                              <th>Eğitmen Fotoğrafı</th>
                              <th>İsim</th>
                              <th>Durum</th>
                              <th style="text-align:right;">İşlem</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?if($teams==0){?><tr><td><font color="red">Şuanda Yüklü Bir Eğitmen Yok</font></td></tr><?}else{
                           foreach ($teams as $key => $info){
                              if ($info->status == 1){
                                 $newInfo = 0;
                              }elseif($info->status == 0){
                                 $newInfo = 1;
                              }?>
                           <tr>
                              <td><?=$info->id?></td>
                              <td>
                                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m_modal_<?=$info->id?>">
                                    Fotoğrafı Gör
                                 </button>
                              </td>
                              <div class="modal fade" id="m_modal_<?=$info->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">
                                             <?=$info->title?>
                                          </h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">
                                                &times;
                                             </span>
                                          </button>
                                       </div>
                                       <div class="modal-body">
                                          <center><img src="<?=site_url($info->image)?>" style="max-width:100%;"></center>
                                       </div>
                                       <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                             Geri Çık
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <td><?=$info->title?></td>
                              <td>
                                 <span class="m-switch m-switch--outline m-switch--icon m-switch--primary">
                                 <label>
                                 <input type="checkbox" <?=$info->status==1?'checked="checked"':''?> onclick="window.location='<?=admin_url('Team/teamStatusUpdate/'.$info->id.'/'.$newInfo)?>'">
                                 <span></span>
                                 </label>
                                 </span>
                              </td>
                              <td style="text-align:right;">
                                 <div class="dropdown d-inline">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    İşlem Seçin
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                       <a class="dropdown-item" onclick="deleteConfirm('<?=admin_url('Team/deleteTeam/'.$info->id)?>')">Sil</a>
                                       <a class="dropdown-item" href="<?=admin_url('Team/editTeam/'.$info->id)?>">Düzenle</a>
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