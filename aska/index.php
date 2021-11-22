<!doctype html>
<html lang="en">
<?php include './include/head.php'; ?>
<body class="bg-light">
    
<?php include './include/main-nav.php'; ?>

<?php include './include/sub-nav.php'; ?>

<!-- Glavni kontejner -->
<main class="container">

  <!-- Prvo pod zaglavlje -->
  <div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset">
    <img src="./media/aska.png" width="150" alt="Anonymous" />
    <h1>Aska Playgrounds</h1>
    <h5><blockquote><span style="color: orangered;">Making playgrounds as its best</span></blockquote></h5>
    Instagram: <a href="https://www.instagram.com/igraoniceaska/"><img src="./media/Instagram-Icon.png" width="42" height="42"></a>
	<h2>Phone: +381 64 3939674</h2>
   </div>
   
   <div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset">
  
    <h6 class="border-bottom pb-2 mb-0">Lasertag, Trampoline, Lasermaze</h6>
	<div class="wide-pictures">
	<img src="./media/aska-oprema-za-igraonice-11.png" alt="aska-oprema-za-igraonice-3" />
    <img src="./media/aska-oprema-za-igraonice-12.png" alt="aska-oprema-za-igraonice-4" />
	<img src="./media/aska-oprema-za-igraonice-13.png" alt="aska-oprema-za-igraonice-5" />
	</div>
  </div>

  
  <!-- Vesti iz data niza -->
  <div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset">
  
    <h6 class="border-bottom pb-2 mb-0">Status bar</h6>
	
	<?php include './data/index-data.php'; ?>
	<?php foreach ($content as $row) { ?>
	<div class="d-flex text-muted pt-3">
	  <img src="<?php echo $row['avatar']; ?>" width="32" height="32" class="avatar" />
	  <p class="pb-3 mb-0 small lh-sm border-bottom">
	  <strong class="d-block text-gray-dark"><?php echo '@' . $row['user']; ?></strong>
	  <?php echo $row['post']; ?>
	  </p>
	</div>		
    <?php } ?>
    
  </div>
  
  
  
  <div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset">
    <h6 class="border-bottom pb-2 mb-0">Figures</h6>
	<div class="pictures">
	<img src="./media/aska-oprema-za-igraonice-9.png" alt="aska-oprema-za-igraonice-9" />
    <img src="./media/aska-oprema-za-igraonice-4.png" alt="aska-oprema-za-igraonice-4" />
	<img src="./media/aska-oprema-za-igraonice-5.png" alt="aska-oprema-za-igraonice-5" />
	</div>
  </div>
  
  <div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset">
  
    <h6 class="border-bottom pb-2 mb-0">Playground</h6>
	<div class="pictures">
	<img src="./media/aska-oprema-za-igraonice-1.png" alt="aska-oprema-za-igraonice-1" />
	<img src="./media/aska-oprema-za-igraonice-3.png" alt="aska-oprema-za-igraonice-3" />
	<img src="./media/aska-oprema-za-igraonice-6.png" alt="aska-oprema-za-igraonice-6" />
	</div>
  </div>
  
  <div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset">
    <h6 class="border-bottom pb-2 mb-0">Cages</h6>
	<div class="pictures">
	<img src="./media/aska-oprema-za-igraonice-7.png" alt="aska-oprema-za-igraonice-7" />
    <img src="./media/aska-oprema-za-igraonice-8.png" alt="aska-oprema-za-igraonice-8" />
    <img src="./media/aska-oprema-za-igraonice-2.png" alt="aska-oprema-za-igraonice-2" />

	</div>
  </div>
  
  <!-- Fusnota -->
  <?php include './include/footer.php'; ?> 
   
</main>


<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

<script src="./assets/offcanvas.js"></script>
</body>
</html>
