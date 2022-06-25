<?php
#--------kompresuj_stranicu---------#
function KompresujStranu($Baferuj) {
  $Pretrazi = array(
        '/\>[^\S ]+/s',  // ocisti razmake izmedju tagova, izuzev spejsa
        '/[^\S ]+\</s',  // ocisti razmake pre tagova, izuzev spejsa
        '/(\s)+/s'       // skrati vise spojenih spejsova
    );
  $Zameni = array(
        '>',
        '<',
        '\\1'
    );
    return preg_replace($Pretrazi, $Zameni, $Baferuj);
}
#--------ukljuci nivo kompresije---------#
if (@ini_set('zlib.output_compression',TRUE) || @ini_set('zlib.output_compression_level',2)) 
			{ob_start('KompresujStranu');} else { ob_start('ob_gzhandler');}

include './include/head.php'; 
include './include/main-nav.php'; 
include './include/sub-nav.php'; 
?>

<!-- Glavni kontejner -->
<main class="container">

  <!-- Prvo pod zaglavlje -->
  <div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset animacija">
    <img src="./media/aska.png" width="150" alt="ASKA" />
    <h1 id="firma"></h1>
    <h5><blockquote><span style="color: orangered;" id="moto"></span></blockquote></h5>
	<h6><img src="./media/phone.png" width="32"><a href="tel:+381643939674">+381643939674</a></h6>
   </div>
   
    
   <!--------- MODAL ----------->

   <!-- Button trigger modal -->
   <div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset animacija">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border: 1px solid #fff;">
        Kontaktiraj nas
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Kontakt detalji</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>PIB: 109792022</p>
	                    <p>eMail adrese:<br />
	                    aska.szr@gmail.com<br />
	                    igraoniceaska@gmail.com</p>
	                    <p>Telefon: +381643939674</p>
                        <p>Linkovi:<br />
                        <a href="https://opremazaigraonice.rs" target="__blank" rel="noopener noreferrer">WWW.OpremaZaIgraonice.RS</a><br />
                        <a href="https://igraoniceaska.co.rs" target="__blank" rel="noopener noreferrer">WWW.IgraoniceAska.CO.RS</a><br />
                        <a href="https://opremanje-decijih-igraonica.com" target="__blank" rel="noopener noreferrer">WWW.Opremanje-Decijih-Igraonica.COM</a><br />
                        <a href="https://laser-pinkpanter-training-center.com" target="__blank" rel="noopener noreferrer">WWW.Laser-Pinkpanter-Training-Center.COM</a><br />
                        <a href="https://indoor-playgrounds.biz/" target="__blank" rel="noopener noreferrer">WWW.Indoor-Playgrounds.BIZ</a><br />
                        <a href="https://opremazaigraonice.rs/video.html" target="__blank" rel="noopener noreferrer">Video Materials</a><br />
                        <a href="https://igraoniceaska.github.io/" target="__blank" rel="noopener noreferrer">Github IO</a>
                        </p>
                        <p>
                        <a href="https://www.instagram.com/igraoniceaska/" target="__blank" rel="noopener noreferrer"><img src="./media/Instagram-Icon.png" width="42" height="42" alt="instagram"></a>
                        <a href="https://linkedin.com/in/aska-playgrounds-8b217269" target="__blank" rel="noopener noreferrer"><img src="./media/Linkedin-Icon.png" width="42" height="42" alt="Linkedin"></a>
                        <a href="https://www.facebook.com/OpremaZaDecijeIgraonice" target="__blank" rel="noopener noreferrer"><img src="./media/Facebook-Icon.png" width="42" height="42" alt="Facebook"></a>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
                    </div>
                </div>
            </div>
        </div>
   </div>
   <!---------------------------->
   
   
   <!-- Aktuelno-->
   <div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset animacija">
    <h3 class="border-bottom pb-2 mb-0" id="aktuelno"></h3>
    <h4 class="border-bottom pb-2 mb-0">Lasertag, Trampoline, Lasermaze</h4>
	<div class="wide-pictures">
	<img src="./media/aska-oprema-za-igraonice-11.png" alt="aska-oprema-za-igraonice-3" />
    <img src="./media/aska-oprema-za-igraonice-12.png" alt="aska-oprema-za-igraonice-4" />
	<img src="./media/aska-oprema-za-igraonice-13.png" alt="aska-oprema-za-igraonice-5" />
	</div>
  </div>
  
  
   <!-- Drustvene mreze-->
   <div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset animacija">
    <h3 class="border-bottom pb-2 mb-0">Izrada Igraonica. Poveži se sa nama</h3>   
    <a href="https://www.instagram.com/igraoniceaska/" target="__blank"><img src="./media/Instagram-Icon.png" width="42" height="42" alt="instagram"></a>
    <a href="https://linkedin.com/in/aska-playgrounds-8b217269" target="__blank"><img src="./media/Linkedin-Icon.png" width="42" height="42" alt="Linkedin"></a>
    <a href="https://www.facebook.com/OpremaZaDecijeIgraonice" target="__blank"><img src="./media/Facebook-Icon.png" width="42" height="42" alt="Facebook"></a>
   </div>
   
   
  <!-- O nama -->
  <div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset animacija" itemscope itemtype="https://schema.org/Offer">
    <h3 class="border-bottom pb-2 mb-0">Zašto Oprema za Igraonice ASKA ?</h3>
	<div class="d-flex text-muted pt-3">
	  <img itemscope itemprop="image" src="media/aska.png" width="42" height="42" class="avatar"  alt="aska"/>
	  <p class="pb-3 mb-0 small lh-sm border-bottom">Dobrodošli na naš sajt. Zaplovite sa nama u beskarajan svet mašte! Oprema za igraonice ASKA Vama na usluzi! 
	  Recite nam kakvu igraonicu želite, a mi ćemo Vaše zamisli sprovesti u delo! Bilo koja vrsta tematike da je u pitanju odgovaramo na sve izazove! Svet iz bajke, avanture parkovi, 
	  laser arene ili nesto sasvim drugačije, na Vama je da odaberete! ASKA radi isključivo sa ATESTIRANIM i proverenim materijala koji podležu svim zahtevima u pogledu bezbednosti i 
	  izdržljivosti. Ne koristimo jeftine materijale, već striktno kvalitetne i sertifikovane. Na opremu naše izrade dajemo garanciju godinu dana uz pomenuti sertifikat. Pored igraonica 
	  naše usluge smo pružali i u mnogim tržnim centrima, sportskim terenima, parkovima, predškolskim ustanovama, školama, fizikalnim ordinacijama … Višedecenijsko iskustvo u oblasti 
	  izrade igraonica i servisu i ugradnji opreme. Lista naših referenci (Ušće tržni centar, Delta city, Zemun Park, Aviv Park, Boska-Banjaluka, Beogradjanka-Beograd, Pemo Centar-Dubrovnik...) 
	  spada u sam vrh zabave.
	</div>		
  </div>
  
  
  <!-- Slike -->
  <div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset animacija">
    <h4 class="border-bottom pb-2 mb-0">Jumping arene, Lasermaze, Trampoline</h4>
	<div class="pictures">
	<img src="./media/3.png" alt="aska-media" height="300"/>
    <img src="./media/4.png" alt="aska-media" height="300"/>
	<img src="./media/7.png" alt="aska-media" height="300"/>
	</div>
  </div>
  
  
  <!-- Tekst Pucacina -->
  <div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset animacija" itemscope itemtype="https://schema.org/Offer">
    <h4 class="border-bottom pb-2 mb-0">Laser tag</h4>
	<div class="d-flex text-muted pt-3">
	  <img itemscope itemprop="image" src="media/aska.png" width="42" height="42" class="avatar"  alt="aska"/>
	  <p class="pb-3 mb-0 small lh-sm border-bottom">
	  Za sve ljubitelje pucačine Laser Tag je vrhunski izbor! Učesnici koriste laser puške, a arena je uređena kao iz prave video igrice sa lavirintima, preprekama i efektnim laserskim osvetljenjem.
	  </p>
	</div>
	<h4 class="border-bottom pb-2 mb-0">Laser maze</h4>
	<div class="d-flex text-muted pt-3">
	  <img itemscope itemprop="image" src="media/aska.png" width="42" height="42" class="avatar"  alt="aska"/>
	  <p class="pb-3 mb-0 small lh-sm border-bottom">
	  Apsolutni hit za igru i zabavu! Laser maze je takozvana "Pink Panter" soba koje sadrži laserske snopove, razne senzore, zvučne efekte, monitore i displeje. Učesnik igre rešava zadatke 
	  pokušavajući da izbegne laserske snopove provlačenjem ili preskakanjem kako bi došao do željenog cilja.
	  </p>
	</div>
	<h4 class="border-bottom pb-2 mb-0">Trampolina parkovi</h4>
	<div class="d-flex text-muted pt-3">
	  <img itemscope itemprop="image" src="media/aska.png" width="42" height="42" class="avatar"  alt="aska"/>
	  <p class="pb-3 mb-0 small lh-sm border-bottom">
	  Izrada igraonica sa trampolinama. Trampoline mogu biti raznih veličina, kose. Tramboline sa vertikalnim zidovima i senzorima za skakanje. Trampoline mogu biti Olimpik trampoline 
	  za ekstremno skakanje. U izradi trampolina parkova koriste se atestirane opruge, platna i strunjače.
	  </p>
	</div>
	<h4 class="border-bottom pb-2 mb-0">Remont igraonica</h4>
	<div class="d-flex text-muted pt-3">
	  <img itemscope itemprop="image" src="media/aska.png" width="42" height="42" class="avatar"  alt="aska"/>
	  <p class="pb-3 mb-0 small lh-sm border-bottom">
	  Pružamo visokokvalitetnu uslugu remonta igraonica kako u Srbiji tako i u zemljama u okruženju! Redizajn i remont igraonica od bilo kog proizvođača.
	  </p>
	</div>	
  </div>
  
  
  <!-- Slike -->
  <div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset animacija">
    <h4 class="border-bottom pb-2 mb-0">Zanimljiva Igrališta, Tobogani, Oslikavanje zidova</h4>
	<div class="pictures">
	<img src="./media/aska-oprema-za-igraonice-1.png" alt="aska-oprema-za-igraonice-1" />
	<img src="./media/aska-oprema-za-igraonice-3.png" alt="aska-oprema-za-igraonice-3" />
	<img src="./media/aska-oprema-za-igraonice-6.png" alt="aska-oprema-za-igraonice-6" />
	</div>
  </div>
  
  
  <!-- Tekst Trampoline -->
  <div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset animacija" itemscope itemtype="https://schema.org/Offer">
    <h4 class="border-bottom pb-2 mb-0">Izrada trampolina u svim obličima i veličinama!</h4>
	<div class="d-flex text-muted pt-3">
	  <img itemscope itemprop="image" src="media/aska.png" width="42" height="42" class="avatar"  alt="aska"/>
	  <p class="pb-3 mb-0 small lh-sm border-bottom">
        - Klasične trampoline, kose trampoline<br/>
        - Trampoline sa vertikalnim zidovima i senzorima za skakanje<br/>
        - Olimpik trampoline (ekstremno skakanje)<br/>
        - Trampolina parkovi - prvoklasan kvalitet i dug vek trajanja
	  </p>
	</div>
	<h4 class="border-bottom pb-2 mb-0">Tobogani! Izrada tobogana po narudžbini!</h4>
	<div class="d-flex text-muted pt-3">
	  <img itemscope itemprop="image" src="media/aska.png" width="42" height="42" class="avatar"  alt="aska"/>
	  <p class="pb-3 mb-0 small lh-sm border-bottom">
        - Spiralni tobogani<br/>
        - Polukružni tobogani<br/>
        - Ravni tobogani<br/>
        - Dupli tobogani (dve staze)<br/>
	  </p>
	</div>		
  </div>
  
  
  <!-- Slike -->
  <div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset animacija">
    <h4 class="border-bottom pb-2 mb-0">Kavezi, Lavirinti, Prepreke</h4>
	<div class="pictures">
	<img src="./media/aska-oprema-za-igraonice-7.png" alt="aska-oprema-za-igraonice-7" />
    <img src="./media/aska-oprema-za-igraonice-8.png" alt="aska-oprema-za-igraonice-8" />
    <img src="./media/aska-oprema-za-igraonice-2.png" alt="aska-oprema-za-igraonice-2" />
	</div>
  </div>
  
  
  <!-- Slike -->
  <div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset animacija">
    <h4 class="border-bottom pb-2 mb-0">Lista referenci</h4>
	<div>
	<img src="./media/aska-reference.png" alt="aska-reference" width="100%"/>
	</div>
  </div>
  
  <!-- Fusnota -->

  <?php include './include/footer.php'; ?> 
   
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="./assets/offcanvas.js"></script>
<script>
        let firma = "Aska Igraonice";
        document.getElementById("firma").innerHTML = firma;
        let moto = "Pravimo IGRAONICE... i to radimo NAJBOLJE :)";
        document.getElementById("moto").innerHTML = moto;
        let aktuelno = "AKTUELNO !!!";
        document.getElementById("aktuelno").innerHTML = aktuelno;
</script>

</body>
</html>

<?php 
#--------kraj kompresije---------#
if(extension_loaded('zlib')) { ob_end_flush(); } 
?>
