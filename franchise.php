<?php
include("header.php");

echo '  
        <section class="text-center text-sm-left section-50 section-sm-top-100 section-sm-bottom-100 novi-background bg-cover">
            <div class="shell">
                <div class="range range-xs-center range-fix">
                                    <div class="cell-md-4 offset-top-50 offset-md-top-0 text-left">
                        <aside class="inset-lg-left-70">
                            <div class="range range-50" align="center">
                               <h4 class="font-default">Franchise Başvuru</h4>
            <p>Kaliteli hizmet anlayışımızı ve özgün fabbrica lezzetlerini herkese ulaşabilir kılmak adına, tüm şehirlerin Italyan\'ı olmak için geliyoruz.</p>
            <p>Lezzet dolu dünyamızı genişletmek ve bu keyifli süreci beraber yaşayıp, geliştirmek adına sizleri de ailemizin arasında görmek için sabırsızlanıyoruz.</p>
  <div align="center"><img src="images/56382-200.png" width="25"> <b style="color:#c4161c;font-size:18px">0532 240 55 00</b>  </div>

                            </div>
                        </aside>
                    </div>
                    <div class="cell-md-8">
                        <h4 class="font-default text-center">Franchise Başvuru Formu</h4>';


                        if($_POST[ADSOYAD]){

                        	$_POST[TARIH] = date("Y-m-d");
$_POST[SAAT] = date("h:i:s");
     $mailicerikk = '
Ad Soyad  : '.$_POST[ADSOYAD].' <br>
Telefon  : '.$_POST[TELEFON].' <br>
E-Posta  : '.$_POST[EPOSTA].' <br>
Doğum Tarihi  : '.$_POST[DOGUM].' <br>
Mevcut İşi  : '.$_POST[ISINIZ].' <br>
Yaşadığınız İl  : '.$_POST[IL].' <br>
Ticari ya da Sektörel Bilgi  : '.$_POST[BILGI].' <br>
Daha önceki Franchise  : '.$_POST[FIRMA].' <br>
Yer Varmı  : '.$_POST[YER].' <br>
Bütçe  : '.$_POST[BUTCE].' <br>
Başlama Tarihi  : '.$_POST[BASLAMATARIH].' <br>
Nerden Duyuldu  : '.$_POST[NEREDEN].' <br>
Diger Notlar : '.$_POST[NOTLAR].'<br>
Başvuru Zamanı : '.$_POST[TARIH].' '.$_POST[SAAT].'<br>';
EmailGonder("hikahraman@gmail.com","Franchise Başvurusu",$mailicerikk);
//VeriGir("P_MOD_FAB_FRANC",$_POST);
//EmailGonder("hikahraman@gmail.com","Franchise Başvurusu","Franchise Başvurusu Geldi yonetim panelinizden görebilirsiniz");
echo ' <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Talebiniz Alındı</h4>
  <hr>
  <p class="mb-0">Başvurunuz için teşekkür ederiz. Yetkililer tarafından sizinle irtibata geçilecektir. </p>
</div>';
                        	}

                        	echo '

                        <form  method="post" action="https://italianafabbrica.com/franchise">
                            <div class="form-inline-flex">
                                <div class="form-group">
                                		<label class="form-label form-label-outside" for="contact-name-2" style="color:#c4161c;"><b>Adınız Soyadınız</b></label> 
                                		<input class="form-control" id="contact-name-2" type="text" placeholder="Adınız Soyadınız" name="ADSOYAD" Required >
                                </div>
                                <div class="form-group">
                                		<label class="form-label form-label-outside" for="contact-username" style="color:#c4161c;"><b>Telefon</b></label> 
                                		<input class="form-control" id="contact-username" type="text" placeholder="Telefon" name="TELEFON" Required>
                                </div>
                            </div>

                            <div class="form-inline-flex">
                                <div class="form-group">
                                		<label class="form-label form-label-outside" for="contact-username" style="color:#c4161c;"><b>E-Posta</b></label> 
                                		<input class="form-control" id="contact-username" type="text" placeholder="E-posta" name="EPOSTA" Required>
                                </div>
                                <div class="form-group">
                                		<label class="form-label form-label-outside" for="contact-username" style="color:#c4161c;"><b>Doğum Tarihiniz</b></label> 
                                		<input class="form-control" id="contact-username" type="date" placeholder="E-posta" name="DOGUM" Required>
                                </div>
                            </div>

                            <div class="form-inline-flex">
                                <div class="form-group">
                                		<label class="form-label form-label-outside" for="contact-username" style="color:#c4161c;"><b>Mevcut İşiniz</b></label> 
                                		<input class="form-control" id="contact-username" type="text" placeholder="Mevcut İşiniz" name="ISINIZ" Required>
                                </div>
                                <div class="form-group">
                                		<label class="form-label form-label-outside" for="contact-username" style="color:#c4161c;"><b>Yaşadığınız İl</b></label> 
                                		<input class="form-control" id="contact-username" type="text" placeholder="Yaşadığınız İl" name="IL" Required>
                                </div>
                            </div>

                            <div class="form-inline-flex">
                                <div class="form-group">
                                		<label class="form-label form-label-outside" for="contact-username" style="color:#c4161c;"><b>Tercih Ettiğiniz Lokasyon</b></label> 
                                		<input class="form-control" id="contact-username" type="text" placeholder="Tercih Ettiğiniz Lokasyon" name="LOKASYON" Required>
                                </div>
                            </div>

                            <div class="form-group offset-top-15"><label class="form-label form-label-outside" for="message" style="color:#c4161c;"><b>Ticari ya da Sektörel geçmişiniz hakkında bilgi verir misiniz?</b></label>
							<textarea class="form-control" id="message" placeholder="" name="BILGI" ></textarea></div>
                            <div class="form-inline-flex">
                                <div class="form-group">
                                		<label class="form-label form-label-outside" for="contact-username" style="color:#c4161c;"><b>Daha önce Franchise sahibi oldunuz mu? Evet ise Hangi Firma? *</b></label> 
                                		<input class="form-control" id="contact-username" type="text" placeholder="" name="FIRMA" Required>
                                </div>
                            </div>
							
                            <div class="form-inline-flex">
                                <div class="form-group">
                                		<label class="form-label form-label-outside" for="contact-username" style="color:#c4161c;"><b>İşletmeniz için yer buldunuz mu? </b></label> 
                                		<select class="form-control" type="checkbox"  name="YER" >
											<option>Hayır</option>
											<option>Evet</option>
											
									</select>	
                                </div>
                            </div>
							
                            <div class="form-inline-flex">
                                <div class="form-group">
                                		<label class="form-label form-label-outside" for="contact-username" style="color:#c4161c;"><b>Yatırım bütçe aralığınız ne kadardır?</b></label> 
                                		<input class="form-control" id="contact-username" type="text" placeholder="Bütceniz" name="BUTCE" Required>
                                </div>
                            </div>
							
	                            <div class="form-inline-flex">
                                <div class="form-group">
                                		<label class="form-label form-label-outside" for="contact-username" style="color:#c4161c;"><b>İşe Başlamak İstediğiniz Tarih *</b></label> 
                                		<input class="form-control" id="contact-username" type="date"  name="BASLAMATARIH" Required>
                                </div>
                            </div>						

	                            <div class="form-inline-flex">
                                <div class="form-group">
                                		<label class="form-label form-label-outside" for="contact-username" style="color:#c4161c;"><b>Bizi Nereden Duydunuz *</b></label> 
                                		<select class="form-control" type="checkbox"  name="NEREDEN" >
											<option>İnternet</option>
											<option>Sosyal Medya </option>
											<option>Radyo / TV </option>
											<option>İnternet</option>
											<option>Fuar</option>
											<option>Diğer</option>
											
									</select>										 									
                                </div>
                            </div>	
                            <div class="form-group offset-top-15"><label class="form-label form-label-outside" for="message" style="color:#c4161c;"><b>Diğer Notlarınız</b></label>
							<textarea class="form-control" id="message" placeholder="" name="NOTLAR" ></textarea></div>
							
                            <div class="offset-top-15">
                                <div class="form-inline-flex">
                                    <div class="form-group"><button class="btn btn-primary-lighter btn-fullwidth" type="submit">Başvuruyu Tamamla</button></div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
       ';
       include("footer.php");
?>