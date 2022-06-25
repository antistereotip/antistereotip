<!doctype html>
<html lang="en">
<?php include './include/head-de.php'; ?>
<body class="bg-light">
    
<?php include './include/main-nav-de.php'; ?>

<?php include './include/sub-nav-de.php'; ?>

<!-- Glavni kontejner -->
<main class="container">

  <!-- Prvo pod zaglavlje -->
  <div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset animacija">
    <img src="./media/aska.png" width="150" alt="Anonymous" />
    <h1>Aska Spielplätze</h1>
    <h5><blockquote><span style="color: orangered;">    Herstellung spielplätze als seine beste</span></blockquote></h5>
	<h2><img src="./media/phone.png" width="32"> +381 64 3939674</h2>
   </div>
   
   
   <!--------- MODAL ----------->
   
   
   <!-- Button trigger modal -->
   <div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset animacija">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border: 1px solid #fff;">
        Kontakt details
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Kontakt details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>PIB: 109792022</p>
	                    <p>Mail:<br />
	                    aska [dot] szr [at] gmail [dot] com<br />
	                    igraoniceaska [at] gmail [dot] com</p>
	                    <p>Phone: +381643939674</p>
                        <p>Links:<br />
                        <a href="https://opremazaigraonice.rs" target="__blank">WWW.OpremaZaIgraonice.RS</a><br />
                        <a href="https://igraoniceaska.co.rs" target="__blank">WWW.IgraoniceAska.CO.RS</a><br />
                        <a href="https://opremanje-decijih-igraonica.com" target="__blank">WWW.Opremanje-Decijih-Igraonica.COM</a><br />
                        <a href="https://laser-pinkpanter-training-center.com" target="__blank">WWW.Laser-Pinkpanter-Training-Center.COM</a><br />
                        <a href="https://indoor-playgrounds.biz/" target="__blank">WWW.Indoor-Playgrounds.BIZ</a><br />
                        <a href="https://opremazaigraonice.rs/video.html" target="__blank">Video Materials</a><br />
                        <a href="https://igraoniceaska.github.io/">Github IO</a>
                        </p>
                        <p>
                        <a href="https://www.instagram.com/igraoniceaska/" target="__blank"><img src="./media/Instagram-Icon.png" width="42" height="42" alt="instagram"></a>
                        <a href="https://linkedin.com/in/aska-playgrounds-8b217269" target="__blank"><img src="./media/Linkedin-Icon.png" width="42" height="42" alt="Linkedin"></a>
                        <a href="https://www.facebook.com/OpremaZaDecijeIgraonice" target="__blank"><img src="./media/Facebook-Icon.png" width="42" height="42" alt="Facebook"></a>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
   </div>
   
   <!---------------------------->
   
   
   
   
   
   
   <div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset animacija">
    <a href="https://www.instagram.com/igraoniceaska/" target="__blank"><img src="./media/Instagram-Icon.png" width="42" height="42" alt="instagram"></a>
    <a href="https://linkedin.com/in/aska-playgrounds-8b217269" target="__blank"><img src="./media/Linkedin-Icon.png" width="42" height="42" alt="Linkedin"></a>
    <a href="https://www.facebook.com/OpremaZaDecijeIgraonice" target="__blank"><img src="./media/Facebook-Icon.png" width="42" height="42" alt="Facebook"></a>
    
   </div>
   
  
   <div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset animacija">
  <h4 class="border-bottom pb-2 mb-0">Ein Neu Art Von Unterhaltung</h4>
    <h6 class="border-bottom pb-2 mb-0">Lasertag, Trampolin, Lasermaze</h6>
	<div class="wide-pictures">
	<img src="./media/aska-oprema-za-igraonice-11.png" alt="aska-oprema-za-igraonice-3" />
    <img src="./media/aska-oprema-za-igraonice-12.png" alt="aska-oprema-za-igraonice-4" />
	<img src="./media/aska-oprema-za-igraonice-13.png" alt="aska-oprema-za-igraonice-5" />
	</div>
  </div>
  
  <div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset animacija">
    <h5 class="border-bottom pb-2 mb-0">Frisch Welt RSS Nachrichten</h5>
    <p>Lesen die neueste nachrichten von die welt in die feld von unterhaltung, technologie, welt geschehen und politisch fragen. 
    Bleiben informiert und folgen unsere nachrichten erste hand regelmäßig. Aufrichtig. Aska team.</p>
	<a href="./cnn-rss.php" target="__blank">CNN</a> | <a href="./bbc-rss.php" target="__blank">BBC</a> | 
	<a href="./sky-rss.php" target="__blank">SKY</a> | <a href="./balkan-rss.php" target="__blank">Balkan</a>
   </div>

  
  <!-- Vesti iz data niza -->
  <div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset animacija" itemscope itemtype="https://schema.org/Offer">
  
    <h6 class="border-bottom pb-2 mb-0">Status bar</h6>
	
	<?php include './data/index-data-de.php'; ?>
	<?php foreach ($content as $row) { ?>
	<div class="d-flex text-muted pt-3">
	  <img itemscope itemprop="image" src="<?php echo $row['avatar']; ?>" width="32" height="32" class="avatar"  alt="<?php echo $row['user'].' - '. $row['date']; ?>"/>
	  <p class="pb-3 mb-0 small lh-sm border-bottom">
	  <strong class="d-block text-gray-dark" itemtype="https://schema.org/Person" itemprop="name"><?php echo '@' . $row['user']; ?></strong>
	  <span itemprop="description"><?php echo $row['post']; ?></span><br />
	  <span>Date of status: <strong itemprop="dateCreated" ><?php echo $row['date']; ?></strong></span>
	  </p>
	</div>		
    <?php } ?>
    
  </div>
  
  
  
  <div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset animacija">
    <h6 class="border-bottom pb-2 mb-0">Zahlen</h6>
	<div class="pictures">
	<img src="./media/aska-oprema-za-igraonice-9.png" alt="aska-oprema-za-igraonice-9" />
    <img src="./media/aska-oprema-za-igraonice-4.png" alt="aska-oprema-za-igraonice-4" />
	<img src="./media/aska-oprema-za-igraonice-5.png" alt="aska-oprema-za-igraonice-5" />
	</div>
  </div>
  
  <div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset animacija">
  
    <h6 class="border-bottom pb-2 mb-0">Spielplatz</h6>
	<div class="pictures">
	<img src="./media/aska-oprema-za-igraonice-1.png" alt="aska-oprema-za-igraonice-1" />
	<img src="./media/aska-oprema-za-igraonice-3.png" alt="aska-oprema-za-igraonice-3" />
	<img src="./media/aska-oprema-za-igraonice-6.png" alt="aska-oprema-za-igraonice-6" />
	</div>
  </div>
  
  <div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset animacija">
    <h6 class="border-bottom pb-2 mb-0">Käfigen</h6>
	<div class="pictures">
	<img src="./media/aska-oprema-za-igraonice-7.png" alt="aska-oprema-za-igraonice-7" />
    <img src="./media/aska-oprema-za-igraonice-8.png" alt="aska-oprema-za-igraonice-8" />
    <img src="./media/aska-oprema-za-igraonice-2.png" alt="aska-oprema-za-igraonice-2" />

	</div>
  </div>
  
  <!-- Fusnota -->
  <?php include './include/footer-de.php'; ?> 
   
</main>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

<script src="./assets/offcanvas.js"></script>
</body>
</html>
