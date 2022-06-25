
<!doctype html>
<html lang="en">
<?php include './include/head.php'; ?>


<body class="bg-light">
    
<?php include './include/main-nav.php'; ?>

<?php include './include/sub-nav.php'; ?>
 
 
 

    
<!-- Glavni kontejner -->
<main class="container">
   
<div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset"> 
<h1>Aska Global News - Balkan Insight</h1>
<img src="./media/aska.png"/>
</div>

   <!--------- MODAL ----------->
   
   
   <!-- Button trigger modal -->
   <div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset animacija">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border: 1px solid #fff;">
        Contact details
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Contact details</h5>
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

<!-- balkan vesti -->
<div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset">
<?php
$rss = simplexml_load_file('https://balkaninsight.com/feed/');
echo '<h2>'. $rss->channel->title . '</h2>';	
foreach ($rss->channel->item as $item) 
{
 echo '<p class="title"><a href="'. $item->link .'">' . $item->title . "</a></p>";
 echo "<p class='desc'>" . $item->description . "</p>";
} 
?>
</div>
    






</main>
 

<footer id="footer" >
     <p>Powered by <a href="https://antistereotip.net">@hightech</a> & Protected by <a href="https://usk.rs">@uskrs</a> &#8620;</p>
    </footer>

<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

<script src="./assets/offcanvas.js"></script>
</body>
</html>