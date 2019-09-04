
<section class="payment-area">
	<div class="page-banner" style="background-image:url('https://fakeimg.pl/1920x250/'); ">
		<h2>ÖDEME ONAYI</h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="contract-area">
					<p><b>Ön Bilgilendirme Formu</b></p>
					<p>
						1.KONU<br>
						İşbu Satış Sözleşmesi Ön Bilgi Formu’nun konusu, SATICI’nın, ALICI’ ya satışını yaptığı,
						aşağıda nitelikleri ve fiyatı belirtilen hizmetin satışı ve ifası ile ilgili olarak 6502 sayılı
						Tüketicilerin Korunması Hakkındaki Kanun - Mesafeli Sözleşmeler Yönetmeliği
						(RG:27.11.2014/29188) hükümleri gereğince tarafların hak ve yükümlülüklerini
						kapsamaktadır. İş bu ön bilgilendirme formunu kabul etmekle ALICI, sözleşme konusu
						siparişi onayladığı takdirde sipariş konusu bedeli ve varsa ek ücretleri ödeme yükümlülüğü
						altına gireceğini ve bu konuda bilgilendirildiğini peşinen kabul eder.<br>
						2. SATICI BİLGİLERİ<br>
						Ünvanı: Aliağa Belediyesi Jeotermal A.Ş..<br>
						Adresi: Kültür Mah. Lozan Cad. No:58/3 Aliağa- İzmir<br>
						Telefon: 0232 616 39 80<br>
						İnternet Sitesi : www.aliagabelediyejeotermal.com<br>
						E-Posta: bilgi@aliagabelediyejeotermal.com<br>
						Müşteri Hizmetleri Telefon: 0232 616 39 80<br>
						Mersis Numarası: 00555 000 00 000035<br>
						3. ALICI BİLGİLERİ<br>
						Adı/soyadı/Ünvanı: <?=$this->session->userdata('user')->name.' '.$this->session->userdata('user')->surname?><br>
						Alıcı Mail Adresi: <?=$this->session->userdata('user')->email?><br>
						Adresi: <?=$this->session->userdata('user')->address?><br>
						Telefon: <?=$this->session->userdata('user')->phone?><br>
						Tarih: <?=date('Y-m-d H:i')?><br>
						4 - SÖZLEŞME KONUSU HİZMET BİLGİLERİ:<br>
						Hizmetin türü, hizmetten yararlanacak olan kişiye ilişkin bilgiler, satış bedeli, ödeme şekli,
						Hizmetin kullanım süresi ve fatura adresi aşağıda belirtildiği gibidir:<br>
						Ürün / Hizmetin Adı: <?=$courseDetail->name?><br>
						Kullanım Süresi: <?=$courseDetail->time?> (Sözleşme tarihinden itibaren)<br>
						Satış Bedeli: 	<?=$courseDetail->price?>  TL  (KDV dâhil toplam Türk Lirası)<br>
						Ödeme Şekli: Kredi Kartı ile İşlem<br>
						•Sipariş özeti sayfasında sipariş toplamının kaç taksitle ödeneceği bilgisi bulunmaktadır.<br>
						•Bankanız kampanyalar düzenleyerek sizin seçtiğiniz taksit adedinin daha üstünde bir taksit adedi uygulayabilir, taksit öteleme gibi hizmetler sunulabilir. Bu tür kampanyalar bankanızın inisiyatifindedir ve şirketimizin bilgisi dâhilinde olması durumunda sayfalarımızda kampanyalar hakkında bilgi verilmektedir.<br>
						•Kredi kartınızın hesap kesim tarihinden itibaren sipariş toplamı taksit adedine bölünerek kredi kartı özetinize bankanız tarafından yansıtılacaktır. Banka taksit tutarlarını küsurat farklarını dikkate alarak aylara eşit olarak dağıtmayabilir. Detaylı ödeme planınızın oluşturulması bankanız inisiyatifindedir.<br>
						5. GENEL HÜKÜMLER:<br>
						5.1 – SATICI kendisine yüklenilen edimleri mücbir haller dışında yerine getirmeyi kabul ve
						taahhüt eder.<br>
						5.2 – Söz konusu hizmet ALICI’dan başka bir kişi tarafından kullanılması durumunda söz
						konusu kişinin ifayı kabul etmemesinden SATICI sorumlu değildir.<br>
						5.3. – SATICI, tarafların iradesi dışında gelişen, önceden öngörülemeyen veya bildirilmeyen,
						borcu yerine getirmesini engelleyici ve/veya geciktirici hallerin oluşması, alıcıdan
						kaynaklanan sağlık sebepleri gibi mücbir sebepler nedeni ile sözleşme konusu hizmeti ifa
						edemez ise, sözleşmeyi tek taraflı feshetme hakkına sahiptir. Bu halde ALICI tarafından
						ödenen bedel ifası gerçekleştirilen hizmetin bedeli dikkate alınarak kıstelyevm usulü
						hesaplanmak suretiyle SATICI tarafından iade edilecektir.<br>
						5.4 –ALICI iş bu sözleşmenin akdedilmesi ile birlikte verilecek hizmetin niteliğine göre düzen
						ve disiplin ile kişisel sağlık ve güvenliğinin korunması için SATICI tarafından belirlenecek
						kurallara uymayı kabul ve taahhüt eder. Aksi halde SATICI’nın fesih hakkı saklıdır.<br>
						5.5 – ALICI sağlık sebepleri, yerleşim yeri değişikliği gibi sadece mücbir sebeplerin varlığı
						halinde sözleşmeyi fesh etme hakkına sahiptir. Bu halde 5.3’üncü maddesinde belirtilen şekilde
						bedel iadesi talep edebilir.<br>
						5.6 – Sözleşmeye konu hizmetin ifası için bedelin tercih edilen ödeme şekli ile ödenmiş olması
						şarttır. Herhangi bir nedenle hizmet bedeli ödenmez veya banka kayıtlarında iptal edilir ise
						SATICI hizmetin ifa yükümlüğünden kurtulmuş olur.<br>
						5.7 – Hizmetin ifasından sonra ALICI’ya ait kredi kartının ALICI’nın kusurundan
						kaynaklanmayan bir şekilde yetkisiz kişilerce haksız ve hukuka aykırı olarak kullanılması
						nedeni ile banka veya finans kuruluşunun hizmet bedelini SATICIYA ödememesi halinde
						ALICI doğan zararlardan sorumludur.<br>
						CAYMA HAKKI:<br>
						1- ALICI, on dört gün içinde herhangi bir gerekçe göstermeksizin ve cezai şart ödemeksizin
						sözleşmeden cayma hakkına sahiptir.<br>
						
						2 - Cayma hakkı süresi, hizmet ifasına ilişkin sözleşmelerde sözleşmenin kurulduğu günden
						başlar.<br>
						3- ALICI Cayma bildirimi madde 2 ‘de belirtilen açık adres, faks numarası veya elektronik
						posta adresine yapmalıdır.<br>
						4 - Cayma hakkı süresi sona ermeden önce, ALICI’nın onayı ile hizmetin ifasına başlanılması
						halinde ALICI cayma hakkını kullanamaz.<br>
						YETKİLİ MAHKEME:<br>
						İşbu sözleşmenin uygulanmasında Ticaret Bakanlığınca ilan edilen değere kadar SATICI veya
						ALICI’nın yerleşim yerinin bulunduğu veya hizmetin ifa edildiği yerdeki Tüketici Hakem
						Heyetleri ile Tüketici Mahkemeleri yetkilidir.<br>
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="contract-area">
					<p><b>Mesafeli Satış Sözleşmesi</b></p>
					<p>
						Mesafeli Satış Sözleşmesi
						MADDE 1 – TARAFLAR:<br>
						SATICI:<br>
						Ünvanı: Aliağa Belediyesi Jeotermal A.Ş.<br>
						Adresi: Kültür Mah. Lozan Cad. No:58/3 Aliağa- İzmir<br>
						Telefon: 0232 616 39 80<br>
						İnternet Sitesi : www.aliagabelediyejeotermal.com<br>
						E-Posta: bilgi@aliagabelediyejeotermal.com<br>
						Müşteri Hizmetleri Telefon: 0232 616 39 80<br>
						Mersis Numarası: 00555 000 00 000035<br>
						1.1 ALICI:<br>
						ALICI Adı/soyadı/Ünvanı: <?=$this->session->userdata('user')->name.' '.$this->session->userdata('user')->surname?><br>
						Alıcı Mail Adresi: <?=$this->session->userdata('user')->email?><br>
						Adresi:<?=$this->session->userdata('user')->address?><br>
						Telefon: <?=$this->session->userdata('user')->phone?><br>
						MADDE 2 – KONU:<br>
						İşbu sözleşmenin konusu, SATICI’nın, ALICI’ya satışını yaptığı, aşağıda nitelikleri ve satış fiyatı belirtilen hizmetin satışı ve ifası ile ilgili olarak 6502 sayılı Tüketicinin Korunması Hakkındaki Kanun hükümleri gereğince tarafların hak ve yükümlülüklerinin kapsamaktadır.<br>
						MADDE 3- SÖZLEŞME KONUSU ÜRÜN, ÖDEME VE TESLİMATA İLİŞKİN BİLGİLER<br>
						3.1- Sözleşme konusu mal veya hizmetin adı, adeti, KDV dâhil satış fiyatı, ödeme şekli ve temel nitelikleri
						Hizmetin türü, hizmetten yararlanacak olan kişiye ilişkin bilgiler, satış bedeli, ödeme şekli,
						Hizmetin kullanım süresi ve fatura adresi aşağıda belirtildiği gibidir:<br>
						Ürün / Hizmetin Adı:<br>
						Kullanım Süresi: <?=$courseDetail->time?> (Sözleşme tarihinden itibaren)<br>
						Satış Bedeli: 	<?=$courseDetail->price?> TL  (KDV dâhil toplam Türk Lirası)<br>
						Ödeme Şekli: Kredi Kartı ile İşlem<br>
						•Sipariş özeti sayfasında sipariş toplamının kaç taksitle ödeneceği bilgisi bulunmaktadır.<br>
						•Bankanız kampanyalar düzenleyerek sizin seçtiğiniz taksit adedinin daha üstünde bir taksit adedi uygulayabilir, taksit öteleme gibi hizmetler sunulabilir. Bu tür kampanyalar bankanızın inisiyatifindedir ve şirketimizin bilgisi dâhilinde olması durumunda sayfalarımızda kampanyalar hakkında bilgi verilmektedir.<br>
						•Kredi kartınızın hesap kesim tarihinden itibaren sipariş toplamı taksit adedine bölünerek kredi kartı özetinize bankanız tarafından yansıtılacaktır. Banka taksit tutarlarını küsurat farklarını dikkate alarak aylara eşit olarak dağıtmayabilir. Detaylı ödeme planınızın oluşturulması bankanız inisiyatifindedir.<br>
						3.2- ALICI'nın cayma hakkını kullandığı durumlarda ya da siparişe konu olan ürünün çeşitli sebeplerle tedarik edilememesi veya hakem heyeti kararları ile ALICI 'ya bedel iadesine karar verilen durumlarda, ödeme seçeneklerine ilişkin iade prosedürü aşağıda belirtilmiştir:<br>
						a) Kredi Kartı ile Ödeme Seçeneklerinde İade Prosedürü<br>
						Alışveriş kredi kartı ile ve taksitli olarak yapılmışsa, ALICI’NIN ürünü kaç taksit ile aldıysa Banka ALICININ 'ye geri ödemesini taksitle yapmaktadır. SATICI bankaya ürün bedelinin tamamını tek seferde ödedikten sonra, Banka poslarından yapılan taksitli harcamaların ALICI’nın kredi kartına iadesi durumunda, konuya müdahil tarafların mağdur duruma düşmemesi için talep edilen iade tutarları, yine taksitli olarak hamil taraf hesaplarına Banka tarafından aktarılır. ALICI’nın satış iptaline kadar ödemiş olduğu taksit tutarları, eğer iade tarihi ile kartın hesap kesim tarihleri çakışmazsa her ay karta 1 (bir) iade yansıyacak ve ALICI iade öncesinde ödemiş olduğu taksitleri satışın taksitleri bittikten sonra, iade öncesinde ödemiş olduğu taksitleri sayısı kadar ay daha alacak ve mevcut borçlarından düşmüş olacaktır.<br>
						Kart ile alınmış mal ve hizmetin iadesi durumunda SATICI, Banka ile yapmış olduğu sözleşme gereği ALICI'ya nakit para ile ödeme yapamaz. SATICI, bir iade işlemi söz konusu olduğunda ilgili yazılım aracılığı ile iadesini yapacak olup, SATICI ilgili tutarı Banka'ya nakden veya mahsuben ödemekle yükümlü olduğundan yukarıda anlatmış olduğumuz prosedür gereğince ALICI’ya nakit olarak ödeme yapılamamaktadır. Kredi kartına iade, SATICI'nın Banka'ya bedeli tek seferde ödemesinden sonra, Banka tarafından yukarıdaki prosedür gereğince yapılacaktır.
						ALICI, bu prosedürü okuduğunu ve kabul ettiğini kabul ve taahhüt eder.<br>
						MADDE 4. GENEL HÜKÜMLER:<br>
						4.1 – SATICI kendisine yüklenilen edimleri mücbir haller dışında yerine getirmeyi kabul ve taahhüt eder.<br>
						4.2 – Söz konusu hizmet ALICI’dan başka bir kişi tarafından kullanılması durumunda söz
						konusu kişinin ifayı kabul etmemesinden SATICI sorumlu değildir.<br>
						4.3. – SATICI, tarafların iradesi dışında gelişen, önceden öngörülemeyen veya bildirilmeyen,
						borcu yerine getirmesini engelleyici ve/veya geciktirici hallerin oluşması, alıcıdan
						kaynaklanan sağlık sebepleri gibi mücbir sebepler nedeni ile sözleşme konusu hizmeti ifa
						edemez ise, sözleşmeyi tek taraflı feshetme hakkına sahiptir. Bu halde ALICI tarafından
						ödenen bedel ifası gerçekleştirilen hizmetin bedeli dikkate alınarak kıstelyevm usulü
						hesaplanmak suretiyle SATICI tarafından iade edilecektir.<br>
						4.4 –ALICI iş bu sözleşmenin akdedilmesi ile birlikte verilecek hizmetin niteliğine göre düzen
						ve disiplin ile kişisel sağlık ve güvenliğinin korunması için SATICI tarafından belirlenecek
						kurallara uymayı kabul ve taahhüt eder. Aksi halde SATICI’nın fesih hakkı saklıdır.<br>
						4.5 – ALICI sağlık sebepleri, yerleşim yeri değişikliği gibi sadece mücbir sebeplerin varlığı
						halinde sözleşmeyi fesh etme hakkına sahiptir. Bu halde 4.3’üncü maddesinde belirtilen şekilde
						bedel iadesi talep edebilir.<br>
						4.6 – Sözleşmeye konu hizmetin ifası için bedelin tercih edilen ödeme şekli ile ödenmiş olması
						şarttır. Herhangi bir nedenle hizmet bedeli ödenmez veya banka kayıtlarında iptal edilir ise
						SATICI hizmetin ifa yükümlüğünden kurtulmuş olur.<br>
						4.7 – Hizmetin ifasından sonra ALICI’ya ait kredi kartının ALICI’nın kusurundan
						kaynaklanmayan bir şekilde yetkisiz kişilerce haksız ve hukuka aykırı oalrak kullanılması
						nedeni ile banka veya finans kuruluşunun hizmet bedelini SATICIYA ödememesi halinde
						ALICI doğan zararlardan sorumludur.<br>
						MADDE 5 -CAYMA HAKKI:<br>
						5.1- ALICI, on dört gün içinde herhangi bir gerekçe göstermeksizin ve cezai şart ödemeksizin
						sözleşmeden cayma hakkına sahiptir.<br>
						
						5.2 - Cayma hakkı süresi, hizmet ifasına ilişkin sözleşmelerde sözleşmenin kurulduğu günden
						başlar.<br>
						5.3- ALICI Cayma bildirimi madde 2 ‘de belirtilen açık adres, faks numarası veya elektronik
						posta adresine yapmalıdır.<br>
						5.4 - Cayma hakkı süresi sona ermeden önce, ALICI’nın onayı ile hizmetin ifasına başlanılması
						halinde ALICI cayma hakkını kullanamaz.<br>
						MADDE 6 -YETKİLİ MAHKEME:<br>
						İşbu sözleşmenin uygulanmasında Ticaret Bakanlığınca ilan edilen değere kadar SATICI veya
						ALICI’nın yerleşim yerinin bulunduğu veya hizmetin ifa edildiği yerdeki Tüketici Hakem
						Heyetleri ile Tüketici Mahkemeleri yetkilidir.
						SATICI: Aliağa Belediyesi Jeotermal A.Ş.<br>
						ALICI: <?=$this->session->userdata('user')->name.' '.$this->session->userdata('user')->surname?><br>
						TARİH: <?=date('Y-m-d H:i')?><br>
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-list">
					<div class="item">
						<h4><?=$courseDetail->name?></h4>
						<img src="<?=site_url($courseDetail->image)?>">
						<p class="teacher"><i class="fas fa-chalkboard-teacher"></i> Nilüfer Mümtaz Hancı</p>
						<p class="cost"><?=$courseDetail->price?> ₺</p>
					</div>
					<div class="get-payment">
						<input type="checkbox" id="onay" name="onay" value="1"> Sözleşmeleri ve Tüm Bilgileri Okudum, Anladım ve Kabul Ediyorum<br>
						<button type="button" onclick="doPayment()">Ödemeyi Tamamla</button>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="contract-area" style="margin-top: -70px;">
					Kullanıcı Bilgileri<br><br>
					Ad Soyad : <?=$this->session->userdata('user')->name.' '.$this->session->userdata('user')->surname?><br>
					Email  : <?=$this->session->userdata('user')->email?><br>
					Telefon : <?=$this->session->userdata('user')->phone?><br>
					Adres : <?=$this->session->userdata('user')->address?><br>
					Tarih : <?=date('Y-m-d H:i')?><br>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	function doPayment() {
		if ($("#onay").prop("checked")) {
			window.location = '<?=site_url()?>Cart/payment/';
		}else{
			Swal.fire({type: 'adnger', title: 'Sözleşmeyi Onaylayınız', html: 'Sözleşmeyi kabul etmeden ödeme aşamasına geçemezsiniz'});
		}
	}
</script>