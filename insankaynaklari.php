<?php
include("header.php");

echo '
        <section class="text-center text-sm-left section-50 section-sm-top-100 section-sm-bottom-100 novi-background bg-cover">
            <div class="shell">
                <div class="range range-xs-center range-fix">

  
                    
                    <div class="cell-md-12">
                        <h4 class="font-default text-center">İş Başvuru Formu</h4>';



                                                if($_POST[ADSOYAD]){
$_POST[TARIH] = date("Y-m-d");
$_POST[SAAT] = date("h:i:s");

     $mailicerikk = '
Ad Soyad  : '.$_POST[ADSOYAD].' <br>
TC Kimlik No  : '.$_POST[TCKIMLIK].' <br>
Eğitim Durumu : '.$_POST[EGITIMDURUM].' <br>
Telefon  : '.$_POST[TELEFON].' <br>
E-Posta  : '.$_POST[EPOSTA].' <br>
Adres  : '.$_POST[ADRES].' <br>
Çalışmak İstediği Şube  : '.$_POST[SUBE].' <br>
Pozisyon  : '.$_POST[POZISYON].' <br>
Ücret Beklentisi  : '.$_POST[UCRET].' <br>
Beceriler  : '.$_POST[BECERILER].' <br>
Hobiler : '.$_POST[HOBILER].' <br>
İş Geçmişi : '.$_POST[ISGECMIS].' <br>
Referanslar : '.$_POST[REFERANS].' <br>
Başvuru Zamanı : '.$_POST[TARIH].' '.$_POST[SAAT].'<br>';
EmailGonder("hikahraman@gmail.com","İş Başvurusu",$mailicerikk);
/*
VeriGir("P_MOD_FAB_IK",$_POST);
EmailGonder("hikahraman@gmail.com","İş Başvurusu","iş Başvurusu Geldi yonetim panelinizden görebilirsiniz");*/

echo ' <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Basvurunuz Alındı</h4>
  <hr>
  <p class="mb-0">Başvurunuz için teşekkür ederiz. Sizi aramızda görmekten mutluluk duyarız. Yetkililer tarafından sizinle irtibata geçilecektir. </p>
</div>';
                        	}


                        	echo '

                                                <form  method="post" action="http://italianafabbrica.com/insankaynaklari">
                            <div class="form-inline-flex">
                                <div class="form-group">
                                		<label class="form-label form-label-outside" for="contact-name-2" style="color:#c73136;"><b>Adınız Soyadınız</b></label> 
                                		<input class="form-control" id="contact-name-2" type="text" placeholder="Adınız Soyadınız" name="ADSOYAD" Required >
                                </div>
                                <div class="form-group">
                                		<label class="form-label form-label-outside" for="contact-username" style="color:#c73136;"><b>TC Kimlik No</b></label> 
                                		<input class="form-control" id="contact-username" type="text" placeholder="TC Kimlik No" name="TCKIMLIK" Required>
                                </div>
                            </div>
                            <div class="form-inline-flex">
                                <div class="form-group">
                                		<label class="form-label form-label-outside" for="contact-name-2" style="color:#c73136;"><b>Eğitim Durumunuz</b></label> 
                                		<select class="form-control" id="contact-name-2" type="text" name="EGITIMDURUM" Required >
                                			<option value=""></option>
                                			<option>İlk Okul</option>
                                			<option>Orta Okul</option>
                                			<option>Lise</option>
                                			<option>Ön Lisans</option>
                                			<option>Lisans</option>
                                		</select>
                                </div>

                            </div>

                            <div class="form-inline-flex">
                                <div class="form-group">
                                		<label class="form-label form-label-outside" for="contact-username" style="color:#c73136;"><b>E-Posta</b></label> 
                                		<input class="form-control" id="contact-username" type="text" placeholder="E-posta" name="EPOSTA" Required>
                                </div>
                                <div class="form-group">
                                		<label class="form-label form-label-outside" for="contact-username" style="color:#c73136;"><b>Telefon</b></label> 
                                		<input class="form-control" id="contact-username" type="text" placeholder="Telefon" name="TELEFON" Required>
                                </div>
                            </div>
                            <div class="form-group offset-top-15"><label class="form-label form-label-outside" for="message" style="color:#c73136;"><b>Adresiniz</b></label> <textarea class="form-control" id="message" placeholder="" name="ADRES" ></textarea></div>
                            <div class="form-inline-flex">
                                <div class="form-group">
                                		<label class="form-label form-label-outside" for="contact-name-2" style="color:#c73136;"><b>Çalışmak İstediğiniz Şube</b></label> 
                                		<select class="form-control" id="contact-name-2" type="text" name="SUBE" Required >
                                			<option value=""></option>
                                			<option>Doğu Gazi</option>
                                			<option>Mimar Sinan</option>
                                			<option>Nazilli</option>
                                			<option>Denizli / Çınar</option>
                                		</select>
                                </div>
                                <div class="form-group">
                                		<label class="form-label form-label-outside" for="contact-name-2" style="color:#c73136;"><b> Pozisyon</b></label> 
                                		<select class="form-control" id="contact-name-2" type="text" name="POZISYON" Required >
                                			<option value=""></option>
                                			<option>Kasa</option>
                                			<option>Mutfak</option>
                                			<option>Garson </option>
                                		</select>
                                </div>
                                <div class="form-group">
                                		<label class="form-label form-label-outside" for="contact-username" style="color:#c73136;"><b>Ücret Beklentiniz</b></label> 
                                		<input class="form-control" id="contact-username" type="text" placeholder="TL" name="UCRET" Required>
                                </div>
                            </div>

                            <div class="form-group offset-top-15"><label class="form-label form-label-outside" for="message" style="color:#c73136;"><b>Becerileriniz</b></label> <textarea class="form-control" id="message" placeholder="" name="BECERILER" ></textarea></div>

                            <div class="form-group offset-top-15"><label class="form-label form-label-outside" for="message" style="color:#c73136;"><b>Hobileriniz</b></label> <textarea class="form-control" id="message" placeholder="" name="HOBILER" ></textarea></div>
                            <div class="form-group offset-top-15"><label class="form-label form-label-outside" for="message" style="color:#c73136;"><b>İş Geçmişiniz</b></label> <textarea class="form-control" id="message" placeholder="" name="ISGECMIS" ></textarea></div>
                            <div class="form-group offset-top-15"><label class="form-label form-label-outside" for="message" style="color:#c73136;"><b>varsa Referanslarınız</b></label> <textarea class="form-control" id="message" placeholder="" name="REFERANS" ></textarea></div>

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