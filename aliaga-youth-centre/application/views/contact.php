<section class="contact">
	<div class="page-banner" style="background-image:url('https://fakeimg.pl/1920x250/'); ">
		<h2>İLETİŞİM</h2>
	</div>
	<div class="contact-area">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="item">
						<div class="title">
							<h2>Bize Ulaşın</h2>
						</div>

						<form method="post" action="#">
							<div class="item">
								<input type="text" name="name_lastname" placeholder="İsim Soyisim" id="name_lastname">
								<input type="text" name="email" id="email" placeholder="E-Posta">
							</div>
							<div class="item">
								<input type="text" name="title" id="title" placeholder="Konu">
							</div>
							<div class="item">
								<textarea placeholder="Mesajınız" id="message"></textarea>
							</div>
							<input type="hidden" id="contactToken" name="contactToken">
							<input type="hidden" id="secret_key" value="<?=$this->encryption->encrypt('contact_send_success_form_password')?>"/>
							<div class="item">
								<button id="sendContact" type="button">Gönder</button>
							</div>
						</form>
					</div>
				</div>

				<div class="col-md-4">
					<div class="title">
						<h2>Buradayız !</h2>
					</div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3109.640433170153!2d26.965206815613968!3d38.79487656058536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ba3177521490a3%3A0xa04641ff974194fe!2zQUzEsEHEnkEgR0VOw4dMxLBLIE1FUktFWsSw!5e0!3m2!1str!2str!4v1567617560901!5m2!1str!2str" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</div>
			</div>
		</div>
	</div>
	<!--<div class="contact-info">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="item">
						İ
						Telefon Numarası
					</div>
				</div>

				<div class="col-md-4">
					<div class="item">
						İ
						Adres
					</div>
				</div>

				<div class="col-md-4">
					<div class="item">
						İ
						E-Posta
					</div>
				</div>
			</div>
		</div>
	</div>-->
</section>
