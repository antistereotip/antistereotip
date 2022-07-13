<?php
require_once("db.php");
?>
<html>
<head>
<title>As Its Best</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body{
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
td img {padding: 30px;}
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
    <h1>ANTISTEREOTIP</h1>
    <h2>NAJBOLJI MEĐU NAJBOLJIMA</h2>
    <p>Cilj je sam vrh vodećih industrija (IOT, Lifestyle, IT, Zabava, Umetnost...). Biramo kvalitet umesto kvantiteta. Da biste se našli na listi nas i naših partnera, 
    trebate imati potpuno web poslovanje u našim rukama. Ovo nije portfolio, već nova generacija oglasne table. Nema paginacije, 
    nema drugih strana, sve je one-page. Biti na našem sajtu nije samo privilegija, već i onaj ko ulaže svoj novac, 
    želi istaknuto mesto. Oglasni prostor nije jeftin. <strong>Jedan piksel košta jedan RSD</strong>, dakle 1280 x 200 iznose 256000 RSD (jedan red visine 200px).
    Da biste radili sa nama, potrebno je potpuno poverenje i saradnja na duže staze. Ne umemo brza rešenja, niti ih želimo. Osnivač Antistereotip-a je
    Milutin Gavrilović. Suosnivač i tehnički direktor Antistereotip-a Danilo Bogdanov je nažalost tragično nastradao i preminuo. Postoji upravni odbor 
    i par članova entuzijasta. Imamo viziju da stvorimo Prvi Privatni Slobodni i Besplatni IT univerzitet u Srbiji. I da, uspećemo u tome. Nije pitanje
    - možemo li ? Pitanje je hoćemo li ? U timu ima mesta za 1111 programera i IT entuzijasta. Postoji matrica koja oblikuje tim. To će biti tim iz snova. I da, <strong>Nikad ne odustaj</strong> - 
    RIP Danilo Bogdanov... Još nešto - <strong>Snovi nas čine živim</strong> - M.
    </p>
    <p><img src="img/m2.png" width="150"/></p>
    <p>Tehnički deo za sada je PHP programski jezik i MySQL baza podataka sa PHP PDO drajverom, dok u budućnosti planiramo NoDB rešenje sa LISP-om ili ANSI-C-om. Biće uključen
    ZigBEE i HIPERMAN u mrežni deo infrastrukture čim zakupimo Dedicated server. Sajt je tek počeo tehnički da se razvija, stoga, molimo vas budite strpljivi. 
    Ovaj fantastičan projekat će ugledati svetlost dana. Poželite nam sreću. Srdačno. <b>Admin</b>.</p>
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
    <h1>2012 - 2077</h1>
    <p>Cena animiranog logotipa u futeru iznosi 99 EUR plus PDV. Mesta su takođe limitirana. Sav prikupljen novac ide u izgradnju projekta. Svaki RSD ili EURO 
    će biti transparentno objavljen na sajtu i svako će moći da vidi šta se dešava sa njegovim novcem. Deo će ići za infrastrukturu a deo za stručni kadar.</p>
    <p><img src="img/aska.gif" width="300"></p>
    <p><img src="img/lili.gif" width="300"></p>
    <p><img src="img/animatedjaca4.gif" width="300"></p>
</div>


</body>
</html>





