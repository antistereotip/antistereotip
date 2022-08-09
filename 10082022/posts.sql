-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2022 at 12:42 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(8) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `sum` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `short_link` varchar(255) NOT NULL,
  `post_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `sum`, `description`, `img`, `link`, `short_link`, `post_at`) VALUES
(88, 'WS1', 'WEBSERVERI', 'Kako brzo dostaviti sadrzaj? Kako da optimizujete svoj sajt za brzo uchitavanje? Kako napraviti revoluciju opterecenja? Uchitavanje stranice je veoma vazan aspekt veb dizajna. Brzina je novi nachin veb3.0 koncepta sledece generacije. Zelimo da vam pomognemo da pronadjete najbolje reshenje za ovaj problem. Radimo na <b>UI</b> i <b>UX</b> konceptima i pokushavamo da pronadjemo najbrzi nachin za isporuku sadrzaja.', 'img/ws1.png', 'https://ws1.github.io', '', '2022-07-13'),
(90, 'ETERNETY', 'BLOCKCHAIN PLATFORMA', 'Eternity Foundacija - Platforma: Platforma Eternity nije ni u cijem vlasnishtvu. Eternity je potpuno otvorenog koda, a korisnici su jedini vlasnici. Korisnici imaju potpunu kontrolu nad svojim funkcijama, opcijama i nagradama. Eternity je blokchain platforma koju je izgradila grupa entuzijasta koji zele da pruze potpunu slobodu i privatnost krajnjem korisniku. Eternity Foundacija je drustveno odgovoran posao, pa su njegove karakteristike i opcije izgradjene na ekoloshki i ekonomski isplativim osnovama. Najbrza i najsigurnija platforma ikada vidjena je trenutno u razvoju. Najlepshe zelje !!!', 'img/eternity.png', 'https://github.com/antistereotip', '', '2022-07-13'),
(91, 'NG1NP', 'ENGINE UP', 'Jednom, Kad dodjesh, Isprichacu ti prichu o chekanju, Nadanju, I verovanju, Pogreshnim putevima i lutanju, O ne odustajanju, O snovima, I sanjarenjima, Isprichacu ti prichu o choveku, Koji je mogao drugachije, Ali nije hteo, Jednom, Kad dodjesh, I chujes, Verujem osmehnucesh se, Bash tom choveku ... B.I. Fibonacci (20 terms): 0 1 1 2 3 5 8 13 21 34 55 89 144 233 377 610 987 1597 2584 4181 Reverse Fibonacci (20 terms): 4181 2584 1597 987 610 377 233 144 89 55 34 21 13 8 5 3 2 1 1 0', 'img/ng1np.png', 'https://usk.rs/ng1np', '', '2022-07-13'),
(92, 'RUBY', 'GORAN ZARUBICA', 'Tvrdim da je ovom choveku sve moguce. U njegovom rechniku ne postoji rech <b>NE, NE ZNAM, NE MOGU, NECU</b>... Chovek koj nikad ne odustaje od svojih prijatelja, a kao shto Sindikat kaze: Kapetani iskusni na druge ce misliti, jer zivot zna da bude titanik... Goran je moj veliki prijatelj i uvek mi je pomagao oko svih projekata i zasluzio je da se nadje na ovim premium stranicama. Ukoliko Vam je potreban profesionalac u logistici, bebednosti i transportu, mozete ga kontaktirati na email: goran.zarubica@isb.rs ', 'img/uspeh.png', 'https://antistereotip.net/404.html', '', '2022-07-13'),
(93, 'JD-MSR', 'JD-MSR-TEHNIKA-DOO', 'Da li su Vam potrebne <strong>elektricharske usluge ?</strong> Dugogodishnje iskustvo i struchnost garantuju da ce te biti zadovoljni i \r\nda ce sve Vache zelje biti ispunjene. Oblasti koje pokrivamo su: <b>Solarni sistemi, Elektro instalacije, Elektro usluge za industriju, PLC programiranje, Oprema za solarne sisteme, Redovno održavanje i podrška.</b> Direktor JD-MSR kompanije je chovek sa shirokim shvatanjem, shto ljudi, tako i celog okruzenja i posla. Svaka preporuka za Dragana Jovanovica.', 'img/jdmsr.png', 'https://www.jd-msr.com', '', '2022-07-13'),
(94, 'JACA', 'UKP', 'Posetite moj sajt i instagram nalog <strong>@jasminajaca011</strong> i saznajte neshto vishe o meni. Volim da plivam i da uzivam u prirodi. <em>Upamti, u ringu nikad ne pravi buku borac, vec publika</em> :) <strong>Bog cuva one koji zastite slabe, nahrane gladne</strong> :) UKP Rules. Nikad ne odustaj od svojih snova, jer oni te upravo vode tamo gde nisi ni pomislio da se mozesh naci. Najjacha srca imaju najvishe oziljaka. Uvek sam spremna da pomognem bilo kome ko se nalazi u teshkoj situaciji, jer verujem da se dobro dobrim vraca. Vasha Jaca. NE JE NE.', 'img/jasmina.png', 'https://jasminajaca011.github.io', '', '2022-07-13'),
(95, 'MARIE WASHTAG', 'KNJIZEVNOST', '<strong>Marija Vashtag</strong> je rodjena i zivi u Novom Sadu, Srbija (u proshlosti Jugoslavija). Po struci je ekonomista, a po naklonosti ona je ceo zivot knjizevnik. Ekonomska struka nije bila ogranichenje, da svo svoje slobodno vreme posveti <b>literaturi</b> - otkrivanju i prouchavanju - a zatim pisanju. Ona se bavi savremenim zivotom, pitanjima koja se tichu svake osobe, bez obzira na to, gde zivi u svetu. Danas je Marija Vashtag pisac, autor tri romana: <strong>Kozachka kuca, Lili kroz oblake, Neochekivana zbrka</strong>.', 'img/marie.png', 'https://mariewashtag.com', '', '2022-07-13'),
(96, 'ASKA', 'IZRADA IGRAONICA', 'Dobrodoshli na nash sajt. Zaplovite sa nama u beskarajan svet mashte! <strong>Oprema za igraonice ASKA</strong> Vama na usluzi! Recite nam kakvu igraonicu zelite, a mi cemo Vashe zamisli sprovesti u delo! Bilo koja vrsta tematike da je u pitanju odgovaramo na sve izazove! Svet iz bajke, avanture parkovi, laser arene ili neshto sasvim drugachije, na Vama je da odaberete! ASKA radi iskljuchivo sa <strong>ATESTIRANIM</strong> i <strong>proverenim materijalima</strong> koji podlezu svim zahtevima u pogledu bezbednosti i izdrzljivosti. Ne koristimo jeftine materijale, vec striktno kvalitetne i sertifikovane. Kontakt telefon: +381643939674', 'img/aska.png', 'https://igraoniceaska.co.rs', '', '2022-07-13'),
(97, 'GAVRILOVIC', 'ZIVOT I STIL', 'Pravimo namestaj i sve radove sa drvetom. Od prerade do <strong>unikatnih komada</strong> tu smo da Vam izadjemo u susret. Preko 40 godina tradicije. Bavimo se zanatskom tapetarijom i akcenat nam je na <strong>stilskom namestaju</strong>, na restauraciji i komplet preradi starog namestaja. <b>Gavrilovic</b> je porodicni biznis i razvija se polako i sigurno. Kontakt telefon: +381604455083', 'img/gavrilovic.png', 'https://usk.rs/gavrilovic', '', '2022-07-13'),
(98, 'GHOST', 'DUH PROTOKOL', '<strong>RIP Danilo Bogdanov</strong>. <em>Prvi nevidljivi protokol u istoriji Interneta</em>. Duh pocinje sa radom <b><date>2025 godine 31.08 u 13:37 casova</date></b>. Ono sto bi duh trebao da uradi je da desifruje sve sto je sifrovano na citavom internetu. Ghost bi bio decrypt alat i doneo bi dobro citavom covecanstvu. <strong>FULLSTOP</strong>. Nije jos uvek tacka, sticicemo i do nje, neka ga sada samo <strong>ZAREZ</strong>.', 'img/ghost.png', 'https://github.com/antistereotip', '', '2022-07-13'),
(99, 'GIA', 'GLOBALNO INFORMATIVNA AGENCIJA', '<strong>Globalno informativna agencija</strong> je odgovor na sve vladine i nevladine agencije koje se bave prikupljanjem i obradom podataka. S tim da GIA nece zloupotrebiti nijedan podatak a i samom korisniku dodelice se <strong>SWAP ALL</strong> komanda. <strong>GIA</strong> ce biti neverovatan projekat jer iza sebe ima chvrstu logiku. Korisnik ce jedini biti vlasnik svojih podataka. Dodeljivacemo i hardverski kljuc u obliku <b>usb stika</b>, da mozete sifrovati vashe podatke.', 'img/gia.png', 'https://usk.rs/gia', '', '2022-07-13'),
(100, 'SHADOWSERVER', 'WHITEHAT FONDATION', '<strong>Shadovserver Foundacija</strong> je neprofitna bezbednosna organizacija koja altruistichki radi iza kulisa kako bi internet uchinila bezbednijim za sve. Tim Shadovserver-a predstavlja neke od najsposobnijih i najiskusnijih struchnjaka za bezbednost na svetu. Shadovserver vam omogucava pristup najpravovremenijim, kritichnim podacima o bezbednosti na Internetu. Shadovserver saradjuje sa nacionalnim vladama, mreznim provajderima, preduzecima, finansijskim i akademskim institucijama, agencijama za sprovodjenje zakona i drugima kako bi otkrio bezbednosne propuste, razotkrio zlonamerne aktivnosti i pomogao u sanaciji zrtava.', 'img/logo-shadowserver.png', 'https://www.shadowserver.org', '', '2022-07-13'),
(101, 'USKRS', 'UPRAVA SRPSKE KIBERNETIKE', 'Uprava Srpske Kibernetike (usk.rs) je projekat Antistereotipa. Ideja je da se stvore kiberneticka postrojenja i kiberneticki procesi, sto za male privatnike, tako i za velike gigante. Ovaj domen ce takodje biti namenjen hriscanskim spisima, jer sam naziv domena asocira na vaskrsenje Isusa Hrista. Uprava ce biti mesto gde ce mali robotici setati po kuci i sluzili obroke :) ', 'img/uskrs-logo.jpg', 'https://usk.rs', '', '2022-07-14'),
(105, 'DINOV ZABAVNIK', 'DNEVNICI JEDNOG DINOSAURUSA', 'Dinov zabavnik je magazin koji predstavlja informacione tehnologije i baziran je u potpunosti na otvorenom kodu. Za sada postoji samo jedan broj dnevnika na 32 strane u pdf-u (njega zovemo 32-bitni casopis). Planiramo da se izbaci i prvi 64-bitni casopis sa duplo vise sadrzaja. Trenutno je casopis stopiran jer nema ljudi u produkciji. Nadamo se da ce nastaviti sa radom cim se ponovo oformi tim entuzijasta.', 'img/dino.png', 'DinovZabavnik.pdf', '', '2022-07-14'),
(106, 'SUPERNET', 'SUPERNET ELECTRONICS', 'Projekat stopiran. Supernet je trebao biti izmedjuostalog i ISP mini provajder koji bi emitovao signal putem svetla. Ideja je i dalje tu, ali nas dvojca kao osnivaci nismo mogli da se dogovorimo oko direkcije samog projekta. Supernet logotip menja namenu i sluzice za drugi projekat (node fs).', 'img/supernet.png', 'https://antistereotip.net/404.html', '', '2022-07-14'),
(111, 'ANTISTEREOTIP', 'UDRUZENJE GRADJANA', 'Udruzenje gradjana za besplatnu informatichku edukaciju i drushtveno odgovorne projekte Antistereotip (u daljem tekstu: Udruzenje) je dobrovoljno, nevladino i neprofitabilno, nestranacko udruzenje, osnovano na neodredjeno vreme radi ostvarivanja ciljeva u oblasti besplatne informatichke edukacije socijalno ugrozene omladine i dece, sprovodjenja drushtveno odgovornih projekata, rada sa marginalizovanim grupama stanovnishtva i pomoci zavisnicima, kao i zrtvama trafiking-a.', 'img/antistereotip-logo.jpg', 'https://antistereotip.net/', '', '2022-07-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
