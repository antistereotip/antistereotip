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


?>
<!DOCTYPE html>
<!--[if IE 7]>
<html id="ie7" lang="sr-RS" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" lang="sr-RS" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html lang="sr-RS" prefix="og: http://ogp.me/ns#">
<!--<![endif]-->

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124884024-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-124884024-1');
</script>

  <title>Oprema za Igraonice Aska, najbolji smo u svom poslu, posedujemo sve vrste atesta za igraonice.</title>
	<meta charset='UTF-8'>
        <!-- <meta name="robots" content="all"> -->
	<meta name="robots" content="index, follow">
	<meta name="description" content="Oprema za igraonice. Veliki asortiman i ponuda opreme za dečije igraonice, kako za iznajmljivanje tako i za komplet ugradnju u vaš objekat. "> 
	<meta name="author" content="hightech">
	<meta name="keywords" content="oprema za igraonice, opremanje igraonica, izrada igraonica, trampoline park, laser maze, lasertag arena, decije igraonice, igraonice, penjalice, 
	lavirinti, tobogani, escape room, jumping arena, avantura park,  opremanje igraonica, oprema za decije igraonice, opremanje decijih igraonica, izrada decijih igraonica," />
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />	
	<link rel="alternate" type="application/rss+xml" title="http://www.igraoniceaska.co.rs RSS" href="http://antistereotip.net/sitemap.xml" />

	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0" />
	<link rel="canonical" href="http://www.igraoniceaska.co.rs/" />

        <meta property="og:locale" content="sr_RS" />
      	<meta property="og:type" content="website" />	
	<meta property="og:title" content="Oprema za igraonice ASKA" />
	<meta property="og:description" content="Oprema za igraonice, kako za iznajmljivanje tako i za komplet ugradnju u vaše objekte." />
	<meta property="og:url" content="http://igraoniceaska.co.rs/" />
	<meta property="og:site_name" content="Aska dečije igraonice" />
	<meta property="og:image" content="https://igraoniceaska.co.rs/data/pics/png/aska.logo.png" />

	<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript" src="http://s.sharethis.com/loader.js"></script>
	
	<link rel='stylesheet' href='css/wuzzle.buttons.css'>
	<link rel='stylesheet' href='css/wuzzle.3d.css'>


	<script type="text/javascript" src="js/min.js"></script>

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600|Open+Sans+Condensed:700,300,300italic|Satisfy|Yanone+Kaffeesatz:400,200,300|Oswald|Lobster+Two:400,400italic|PT+Sans+Narrow|Magra:400,700' rel='stylesheet' type='text/css'>
 

</head>
<body>

  <div class="controls"> <h1><img class="h3" src="./data/pics/png/aska.logo.png" width="72" height="72" alt="oprema za igraonice"></h1>
    <p style="font-size: 2em;"><b><code> 
    <a href="https://opremanje-decijih-igraonica.com/laser-maze/" style="font-size: 1,2em">LASER MAZE</a> -- 
    <a href="https://opremanje-decijih-igraonica.com/trampoline-park/" style="font-size: 1,2em">TRAMPOLINE PARK</a> --
    <a href="https://opremanje-decijih-igraonica.com/tematske-igraonice/">TEMATSKE IGRAONICE</a> -- 
    <a href="https://igraoniceaska.co.rs/virtuelna-tura.html">VIRTUELNA TURA</a><br /> -- 
    <a href="https://opremanje-decijih-igraonica.com/avantura-parkovi/">AVANTURA PARKOVI</a> -- 
    <a href="https://opremanje-decijih-igraonica.com/lasertag/">LASER TAG</a> --
    <a href="https://opremanje-decijih-igraonica.com/izrada-igraonica/">IZRADA IGRAONICA</a> -- <br /> -- Mobilni: +381 64 39 39 674 -- e mail: 
    <a href="mailto:aska.szr@gmail.com" target="_top">aska.szr@gmail.com</a> </code></b><br />
    <a href="https://www.instagram.com/igraoniceaska/"><img src="instagram.jpg" alt="Instagram" width="50" height="50"></a>
    <a href="https://www.facebook.com/OpremaZaDecijeIgraonice"><img src="facebook.png" alt="Facebook" width="50" height="50"></a>
    <a href="https://opremazaigraonice.rs/mapa.html"  target="_blank"><img src="mapa-icon.png" alt="mapa" width="50" height="50"></a>
</p>
    <div><button onclick="toggleShape()" class="button h3">Promeni oblik</button></div>
    <div><input type="checkbox" id="backfaces" onclick="toggleBackfaces()" checked><label for="backfaces" style="
    font-size: 1.4em;
">Transparentnost</label></div>
 
  </div>

  <div id="container">
    <div id="stage">
      <a href="http://www.igraoniceaska.co.rs/"><div id="shape" class="cube backfaces">

        <div class="plane one"><a href="#"><img src="./data/pics/png/1.png" width="100%" height="100%" alt="Oprema za igraonice"></a></div>
        
<div class="plane two"><a href="http://opremanje-decijih-igraonica.com/oprema-za-igraonice/"><img src="./data/pics/png/2.png" width="100%" height="100%" alt="Igraonice"></a></div>
        
<div class="plane three"><a href="http://www.igraoniceaska.co.rs/Reference/"><img src="./data/pics/png/3.png" width="100%" height="100%" alt="Oprema za igraonice"></a></div>
        
<div class="plane four"><a href="#"><img src="./data/pics/png/4.png" width="100%" height="100%" alt="Atesti"></a></div>
       
<div class="plane five"><a href="http://www.igraoniceaska.co.rs/Avantura-parkovi/"><img src="./data/pics/png/5.png" width="100%" height="100%" alt="Avantura park"></a></div>
        
<div class="plane six"><a href="http://opremanje-decijih-igraonica.com/trambolina-parkovi/"><img src="./data/pics/png/6.png" width="100%" height="100%" alt="Trambolina parkovi"></a></div>
        
<div class="plane seven"><a href="https://opremanje-decijih-igraonica.com/3d-igraonice/"><img src="./data/pics/png/7.png" width="100%" height="100%" alt="3D elementi i graficki oblici"></a></div>
        
<div class="plane eight"><a href="#"><img src="./data/pics/png/8.png" alt="Oslikavanje zidova"></div>

<div class="plane nine"><a href="#"><img src="./data/pics/png/9.png" width="100%" height="100%" alt="Zidovi za penjanje"></a></div>
        
<div class="plane ten"><a href="http://www.igraoniceaska.co.rs/"><img src="./data/pics/png/10.png" width="100%" height="100%" alt="Igraonice"></a></div>
        
<div class="plane eleven"><a href="#"><img src="./data/pics/png/11.png" width="100%" height="100%" alt="Zidovi za penjanje"></a></div>
        
<div class="plane twelve"><a href="http://opremanje-decijih-igraonica.com/"><img src="./data/pics/png/aska.logo.png" width="100%" height="100%" alt="Aska Logotip"></a></div>


        
      </div>
    </div></a>
    
    
    
  </div>
  
  <div>
      
      <h1 style="font-size: 1.7em; color: orange; padding-left: 5%;">Oprema za igraonice</h1>
      <p style="font-size: 1.5em; color: orangered; padding: 5%; padding-top: 1%; padding-bottom:1%;">je izradjena sa 
      ljubavlju i maštom. Dečija igraonica je poseban svet za najmlađe  u kome pored mašte, naši stručnjaci posebnu 
      pažnju posvećuju zaštiti i kvalitetu igre.</p>
      
      
      <h1 style="font-size: 1.7em; color: orange; padding-left: 5%;">Dečije igraonice Aska</h1>
      <p style="font-size: 1.7em; color: orangered; padding: 5%; padding-top: 1%; padding-bottom:1%;">Dođite i uverite 
      se zašto spadamo u sam vrh kada su u pitanju opremanje unutrašnjih i spoljašnjih dečijih igrališta. 
      Preko 300 objekata u Srbiji i regionu.U našu delatnost, između ostalog, spadaju : tržni centri, rođendaonice, 
      škole, vrtići, parkovi, sportski tereni, te razni elementi i sprave u rehabilitacione svrhe. Tobogane radimo i 
      po narudžbi spiralne, polukružne, ravne, duple (u paru dve staze). Na sve naše proizvode dajemo garanciju 
      godinu dana i prateću dokumentaciju koja sadrži sertifikate EN 1176. Iz tog razloga ne upotrebljavamo lošije 
      materijale kao npr shoteks, pvc ili igličasto pleten kanap. Naši kanapi kao što smo rekli su atestirani i izdržljivi. Kanap za mreže je atestiran na 
      107 kp prekidnog momenta.</p>
      
      <h2 style="font-size: 1.5em; color: orange; padding-left: 5%;">Novo - LASER MAZE - Pink Panther Training Center</h2>
    <p style="font-size: 1.5em; color: lightblue; padding: 5%;padding-top: 1%; padding-bottom:1%;">...su sobe ispresecane laserskim snopovima gde učesnici dobijaju razne zadatke kako da dodju do cilja preskakajući i provlačeći se kako ne bi dodirnuli laserski snop ili neki drugi senzor. Sobe su opremljene svetlosnim i zvučnim efektima, ogledalima, panelima sa slikama, raznim senzorima, displejima i monitorima za praćenje igre.</p>
  
    
    
    
    
  
  
  </div>
  
  
  <div style="padding-left:5%;padding-right:5%;">
  <p style="margin-top: 7%; color: white; font-size:1.2em;"><b>Tag Cloud / Oblak oznaka</b></p>

<p>
<span style="color:lightblue;">Igraonice ASKA</span>,
<span style="color:#008B8B;font-size:1.2em;">Izrada igraonica</span>, 
<span style="color:#FF7F50; font-size:1.2em">Oprema za igraonice</span>, 
<span style="color: lightgreen; font-size:1.2em;">Bajkovit dizajn</span>,
<span style="color:red; font-size:1.1em">Sigurne i atestirane konstrukcije</span>,
Trampolina parkovi, 
<span style="color: yellow;">Tobogani</span>, 
<span style="color:#FF7F50; font-size:1.3em">Tende</span>, 
Najkvalitetniji materijal, 
<span style="color:red; font-size:1.1em">Sigurnosni sertifikati</span>,
<span style="color:#FF7F50; font-size:1.3em">Zabava</span>,
<span style="color:violet; font-size:1.4em;">Laser maze</span>,
<span style="color:lightgreen; font-size:1.1em;">Laser tag</span>, 
<span style="color:yellow; font-size:1.2em;">Trampolina parkovi</span>, 
<span style="color:#7FFFD4; font-size:1.2em">Tržni centri</span>, 
<span style="color:#008B8B;font-size:1.2em;">3D Elementi</span>, 
Grafika, Oblici,
<span style="color:lightgreen; font-size:1.1em;">Osvetljenje</span>, 
<span style="color: lightblue; font-size:1.1em;">Soft Play</span> ,
<span style="color:#7FFFD4;">Oslikavanje zidova</span> ,
<span style="color:#7FFFff; font-size:1.3em;">Izrada igraonica</span> ,
<span style="color:#7FFFD4; font-size: 1.2em;">Jumping arene</span> ,
<span style="color:#17FeD4; font-size:1.5em">Trampoline sistemi</span> ,
<span style="color:yellow; font-size1.3em">Trampoline sa senzorima</span> ,
<span style="color:orangered; font-size:1.2em;">Baby bazeni</span> ,
<span style="color:violet; font-size: 1.4em;">Decije Igraonice za hotele</span> ,
<span style="color:#eeeeD4; font-size:1.5em;">Vrteske za igraonice</span> ,
<span style="color:yellow; font-size:1.3em;">Bazeni sa lopticama</span> ,
<span style="color:#7FFFD4; font-size:1.3em;">Zip Line za igraonice</span> ,
<span style="color:#7FFFD4;font-size:1.6em;">Lijane na sajli</span> ,
<span style="color:lightblue;font-size:1.2em;">Avantura staze za igraonice</span> ,</p>
  </div>
  
      
      




  <div style="padding: 5%; color: yellow;">Powered by <a href="http://antistereotip.net">Antistereotip</div>



<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5443deda151ad54d"></script>






</body>
</html>
<?php 
#--------kraj kompresije---------#
if(extension_loaded('zlib')) { ob_end_flush(); } 
?>

