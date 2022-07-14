<?php
require_once("db.php");
?>
<html>
<head>
<title>Antistereotip - at its best - Seatbelt Please</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body{
    color: #555;
    width:1280px;
    font-family:arial;
    letter-spacing:1px;
    line-height:20px;
    margin: 0 auto;
}
.tbl-qa{
    width: 100%;
    font-size:0.9em;
    background-color: #f5f5f5;
}
.tbl-qa th.table-header {
    padding: 5px;
    text-align: left;
    padding:10px;
}
.tbl-qa .table-row td {
    padding:10px;
    background-color: #FDFDFD;
    vertical-align:top;
}
.button_link {
    color:#FFF;
    text-decoration:none; 
    background-color:#428a8e;
    padding:10px;
}
td img {padding: 10px;}
.table-row td {text-align: justify;
            text-justify: inter-word;}
.header {
    padding-top: 30px;
    padding-bottom: 30px;
    text-align: center; 
    margin: 0 auto;
}
.footer {
    padding-top: 30px;
    padding-bottom: 30px;
    text-align: center; 
    margin: 0 auto;
}
.naslov {padding: 10px;}
.podnaslov {padding: 10px;}
.paragraf {padding: 20px;
            text-align: justify;
            text-justify: inter-word;
    
}
strong, b {color: #777;}
.marquee {padding: 10px;}
</style>
<link rel="shortcut icon" type="image/png" href="favicon/favicon-32x32.png"/>
</head>
<body>
<?php	
	$pdo_statement = $pdo_conn->prepare("SELECT * FROM posts ORDER BY id DESC");
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
	
?>
<div class="header">
    <h1 class="naslov"><img src="img/logo.jpg" width="180" height="auto"></h1>
    <h2 class="podnaslov">NAJBOLJI MEĐU NAJBOLJIMA, ZNANJE JE MOĆ...</h2>
    <h4 class="marquee"><marquee>"Nije znanje znanje znati, već je znanje znanje dati" - J.J.Zmaj</marquee></h4>
    <p class="paragraf">Cilj je sam vrh vodećih industrija <strong>(IOT, Lifestyle, IT, Zabava, Umetnost...)</strong>. Biramo <strong>kvalitet</strong> umesto kvantiteta. 
    Da biste se našli na listi nas i naših partnera, trebate imati potpuno (web) poslovanje u našim rukama. Ovo nije portfolio, već <em>nova generacija oglasne 
    table</em>. Nema paginacije, nema drugih strana, sve je one-page. Biti na našem sajtu nije samo privilegija, to je i stil života. Kako naplaćujemo oglasni prostor ? 
    <strong>Jedan piksel košta jedan RSD</strong>, dakle 1280 x 200 iznose 256000 RSD (jedan red visine 200px). Da biste radili sa nama, potrebno je potpuno poverenje 
    i saradnja na duže staze. Ne umemo brza rešenja, niti ih želimo. Osnivač Antistereotip-a je <strong>Milutin Gavrilović</strong>. Suosnivač i tehnički direktor 
    Antistereotip-a <strong>Danilo Bogdanov</strong> je nažalost tragično nastradao i preminuo. Postoji upravni odbor i par članova entuzijasta. Imamo viziju da 
    stvorimo <strong>Prvi Privatni Slobodni i Besplatni IT univerzitet u Srbiji</strong>. I da, uspećemo u tome. Nije pitanje - možemo li ? Pitanje je hoćemo li ? 
    U timu ima mesta za 1111 programera i IT entuzijasta. Postoji matrica koja oblikuje tim. To će biti tim iz snova. I da, <strong>Nikad ne odustaj</strong> 
    - RIP Danilo Bogdanov... Još nešto - <strong>Snovi nas čine živim</strong> - M.
    </p>
    <p><img src="img/m2.png" width="150"/></p>
    <p>Pozovi: <b>+381659511404</b></p>
    <p class="paragraf">Tehnički deo za sada je <b>PHP</b> programski jezik i <b>MySQL</b> baza podataka sa <b>PHP PDO</b> drajverom, dok u budućnosti planiramo <b>NoDB</b> 
    rešenje sa <b>LISP</b>-om ili <b>ANSI-C</b>-om. Trenutno je nemoguće pristupiti administratorskom panelu bez hardverskog ključa (USB). Takav pristup štiti sajt od 
    bilo kakvog napada. Biće uključen <b>ZigBEE</b> i <b>HIPERMAN</b> u mrežni deo infrastrukture čim zakupimo <b><em></em>Dedicated server</em></b>. Sajt je tek počeo tehnički da se 
    razvija, stoga, molimo vas budite strpljivi. Ovaj fantastičan projekat će ugledati svetlost dana. Poželite nam sreću. Ali i vežite pojaseve, jer polećemo.
    Srdačno. <strong>Admin</strong>.</p>
    <hr />
</div>
<table class="tbl-qa">
  
  <tbody id="table-body">
	<?php
	if(!empty($result)) { 
		foreach($result as $row) {
	?>
	  <tr class="table-row">
		<td><?php echo $row["post_title"]; ?></td>
		<td><?php echo $row["sum"]; ?></td>
		<td><?php echo $row["description"]; ?></td>
		<td><img src='<?php echo $row["img"]; ?>' width='150' height='auto'/></td>
		<td><a href='<?php echo $row["link"]; ?>'><?php echo $row["link"]; ?></a></td>
		<td><?php echo $row["post_at"]; ?></td>
		
	  </tr>
    <?php
		}
	}
	?>
  </tbody>
</table>

<div class="footer">
    <h1>2012 - 2077 Cyberpunk</h1>
    <p class="paragraf">Cena <b>animiranog logotipa</b> u futeru iznosi <strong>99 EUR plus PDV</strong>. Mesta su takođe limitirana. Sav prikupljen novac ide u izgradnju projekta. Svaki RSD ili EURO 
    će biti transparentno objavljen na sajtu i svako će moći da vidi šta se dešava sa njegovim novcem. Deo će ići za infrastrukturu a deo za stručni kadar.</p>
    <p><img src="img/gavrilovic.gif" width="400"><img src="img/ghost.gif" width="400"></p>
    <p><img src="img/aska.gif" width="400"><img src="img/lili.gif" width="400"></p>
    <p><img src="img/animatedjaca4.gif" width="400"></p>
    <p><img src="img/uspeh.gif" width="400"></p>
    
    <h4>Follow The White Rabbit</h4>
    <p><img src="img/rabbitmilutin.gif" width="220"></p>
    
<p><img src="img/gia.png" width="256"><img src="img/uskrs-logo.jpg" width="256"><img src="img/ghost3.png" width="256"><img src="img/uskrs2-logo.jpg" width="256">
</p>
    
</div>


</body>
</html>





