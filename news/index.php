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
    <img src="./media/anonymous.png" width="150" alt="Anonymous" />
    <h1>Anonymous News</h1>
   </div>

  
  <!-- Vesti iz data niza -->
  <div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset">
  
    <h6 class="border-bottom pb-2 mb-0">Top News</h6>
	
	<?php include './data/index-data.php'; ?>
	<?php foreach ($content as $row) { ?>
	<div class="d-flex text-muted pt-3">
	  <img src="<?php echo $row['avatar']; ?>" width="32" height="32" class="avatar" />
	  <p class="pb-3 mb-0 small lh-sm border-bottom">
	  <strong class="d-block text-gray-dark"><?php echo '@' . $row['user']; ?></strong>
	  <?php echo $row['post']; ?><br /><?php echo $row['date']; ?> | <a href="<?php echo $row['link']; ?>">Read more</a>
	  </p>
	</div>		
    <?php } ?>
    
  </div>
  
  <!-- Paginacija -->
  <div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset">
    <nav aria-label="...">
		<ul class="pagination pagination-sm">
		<li class="page-item disabled">
			<a class="page-link" href="index.php" tabindex="-1">0</a>
		</li>
		<li class="page-item"><a class="page-link" href="first.php">1</a></li>
		<li class="page-item"><a class="page-link" href="second.php">2</a></li>
		</ul>
	</nav>
  </div>
  
  <!-- Fusnota -->
  <?php include './include/footer.php'; ?> 
   
</main>


<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

<script src="./assets/offcanvas.js"></script>
</body>
</html>
