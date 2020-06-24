<div class="userHead">
	<div class="container">
		<div class="row">
			<div class="col-lg-auto col-md-auto text-md-left">
				<a href="<?=site_url()?>" class="Link m-0"><img src="<?=site_url('assets/')?>ebasim.png" alt="ebasim.com ebasim-logo"></a>
			</div>
			<div class="col-lg-auto col-md-auto">
				<div class="TicketNav">
					<ul class="List">
						<li class="Item"><a href="<?=site_url('hesabim/siparislerim')?>" class="Link">Siparişlerim</a></li>
						<li class="Item Divider"><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
						<li class="Item"><a href="#" class="Link">Sipariş <?=$cdata->orderid?></a></li>
						<li class="Item Divider"><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
						<li class="Item"><a href="#" class="Link Active">Tasarım <?=$cdata->cid?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>


<section class="Pages--Wrapper Design-Ticket">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 push-lg-3">
			<div>
				<?php if (@$conversationsonuc[0] != "") { ?>
				<div class="alert alert-<?=$conversationsonuc[1]?> w-100"><?=$conversationsonuc[0]?></div>
				<?php } ?>
			</div>
				<div class="FinalStatus">
				<?php if ($cdata->confirm_status == 1) { ?>
					<div class="Wrapper <?=$designstatus[2]['color']?>"><?=$designstatus[2]['text']?></div>
				<?php } else { ?>
					<div class="Wrapper <?=$designstatus[$cdata->last_design]['color']?>"><?=$designstatus[$cdata->last_design]['text']?></div>
					<?php if ($cdata->last_design == 0): ?>
					<p>Tasarımınız bize ulaştı, uzman grafikerlerimiz tarafından baskıya hazırlanıp tarafınıza sunulacaktır.</p>
					<?php endif ?>
				<?php } ?>
				</div>







				<?php if ($clines != false): ?>
					<?php
					$lastcline = false;
					foreach ($clines as $key => $val): ?>
				<?php
				if ($val->file != "") {
					$lastcline = $val;
				}
				if ($val->user_id == 0) {
					$boxname = "E-Bask.com";
					$boxtitle = "Baskı Öncesi Test Ekibi";
				} else {
					$boxname = $userinfo->name;
					$boxtitle = $userinfo->email;
				}
				?>
				<div class="TicketBox">
					<div class="TicketHead">
						<div class="row">
							<div class="col-lg-6 col-sm-5">
								<div class="Sender">
									<div class="Name"><?=$boxname?></div>
									<div class="Title"><?=$boxtitle?></div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-7">
								<div class="Date">
									<span><?=dateparse($val->added_time)?> tarihinde gönderildi.</span>
								</div>
							</div>
						</div>
					</div>
					<?php if ($val->text != ""): ?>
					<div class="TicketEditor" style="word-wrap: break-word">
						<?=$val->text?>
					</div>
					<?php endif ?>
					<div class="TicketFooter">
						Dosya : 
						<?php if (isJSON($val->file)) {
							$i = 0;
							$images = json_decode($val->file);
							foreach ($images as $imageKey => $imageVal) { 
								$i++;
								?>
								<a href="<?=site_url($imageVal)?>" class="EditedLink" download>İndir Parça <?=$i?></a>
							<?php }
						}else{ ?>
						<a href="<?=site_url($val->file)?>" class="EditedLink" download><?=clearfilepath($val->file)?></a>
						<?php }
						if ($val->file != ""): ?>
							<?php if ($cdata->confirm_status == 0): ?>
							<button class="approve conversationconfirmbutton" data-toggle="modal" data-target="#approveAlert" data-href="<?=site_url('tasarim-sohbeti/onay/'.$val->conversation_id.'/'.$val->Id)?>">Onayla</button>
							<?php endif ?>
						<?php endif ?>
					</div>
				</div>
					<?php endforeach ?>
				<?php endif ?>












				
























				<?php if ($clines != false): ?>
					<?php if ($cdata->last_design == 0): ?>
						<?php if ($cdata->confirm_status == 0): ?>
						<form class="ReplyBox" method="POST" enctype="multipart/form-data">
							<div class="ReplyHead">Yeni Not Ekle</div>
							<textarea name="content" id="" cols="30" rows="10" placeholder="Notunuz"></textarea>
							<div class="File">
							  	<span id="filename">Pdf / Psd / Ai</span>
						    	<label for="file-upload">Dosya Seç<input type="file" name="file" id="file-upload"></label>
							</div>
							<div class="BtnBox">
								<button class="Btn Blue-d">Gönder</button>
							</div>
						</form>
						<?php endif ?>
					<?php endif ?>
				<?php endif ?>
			</div>
			<div class="col-lg-3 pull-lg-9">
				<div class="Left">
					<div class="Wrapper Yellow">
						<div class="T">Sipariş Bilgileri</div>
						<p><strong>#<?=$cdata->orderid?></strong></p>
						<p><?=$cdata->name?></p>
						<p><?=$cdata->gsm?></p>
						<p><?=dateparse($cdata->added_time)?></p>
						<p><?=$paymenttype[$cdata->payment_type]?></p>
					</div>

					<div class="Wrapper">
						<div class="T"><?=$cdata->product_name?></div>
						<?php if ($cdata->variants != false): ?>
						<?php foreach ($cdata->variants as $key => $val): ?>
						<p><?=$val->variant_name.": ".$val->child_name?></p>
						<?php endforeach ?>
						<?php endif ?>
					</div>
					<?php if ($clines != false): ?>
						<?php if ($cdata->confirm_status != 1): ?>
							<?php if ($lastcline != false): ?>
						<button class="Btn Green-d conversationconfirmbutton" data-toggle="modal" data-target="#approveAlert" data-href="<?=site_url('Conversation/Confirm/'.$lastcline->conversation_id.'/'.$lastcline->Id)?>">Tasarımı Onayla</button>
							<?php endif ?>
						<?php endif ?>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Modal -->
<div class="modal fade ConversationModal" id="approveAlert" tabindex="-1" role="dialog" aria-labelledby="approveAlertLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Uyarı</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="approveAlert-Text">
        	Onayladığınızda sohbet sona erecek ve son hali ile baskıya gidecektir bu işlemin geri dönüşü yoktur. Onaylıyor musunuz?
        	<span>Son kez kontrol etmenizi öneririz.</span>
        </div>
      </div>
      <div class="pb-4 text-center">
        <button type="button" class="Btn White-d ConversationNoButton" data-dismiss="modal">İptal</button>
        <button type="button" class="Btn Green-d ConversationYesButton" data-page="<?=$cdata->cid?>">Evet Onaylıyorum</button>
      </div>
    </div>
  </div>
</div>



<div class="userBottom">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="Box">
					<a href="#" class="Link">Hakkımızda</a>
					<a href="#" class="Link">İade</a>
					<a href="#" class="Link">Yardım</a>
				</div>
				<div class="Copyright">2018 ebasim.com Tüm hakları saklıdır.</div>
			</div>
		</div>
	</div>
</div>
