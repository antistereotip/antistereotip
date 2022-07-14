## Engine UP - Ng1np.
#### Razvojni operativni sistem je Debian (GNU/Linux), dok je za sada programski jezik PHP.
<img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" />

- https://usk.rs/ng1np/

> Nisam na ovaj svet dospeo da bih bio poražen. Neuspeh ne protiče mojim venama. Ja nisam ovca što čeka da je njen pastir podstakne. Ja sam lav koji odbija da zbori, hodi i spava sa ovcama. Istrajaću sve dok ne uspem.

<p>
<img src="https://github.com/antistereotip/ng1np/blob/main/logotip.png" width="150" />  
</p>

> Jednom, Kad dođeš, Ispričaću ti priču o čekanju, Nadanju, 
I verovanju, Pogrešnim putevima i lutanju, O ne odustajanju, 
O snovima, I sanjarenjima, Ispričaću ti priču o čoveku, 
Koji je mogao drugačije, Ali nije hteo, Jednom, Kad dođeš, 
I čujes, Verujem osmehnućeš se, Baš tom čoveku ...
B.I.

## Hijacking

### Osnovna Upotreba:

<pre>
cd /var/www/html/
sudo git clone https://github.com/antistereotip/ng1np
sudo chown -R www-data:www-data /var/www/html/ng1np/
</pre>

- U browseru kucati sledeću adresu: http://localhost/ng1np/


#### Github Zaobilazno Rešenje (Please don't do this)

- Ukoliko radite u Web GUI okruženju ova prečica može da štedi vreme ukoliko prepoznajete obrazac. Ovaj princip se ne preporučuje. Ovo je samo podsetnik komandi kao "hardcode". Ovaj metod se preporučuje izuzetno lenjim ljudima od trenutka kada je Github uneo access token umesto lozinke :)

<pre>
cd /home/user/Public/github/
sudo rm -rf ng1np/
git clone https://github.com/antistereotip/ng1np
sudo rm -rf /var/www/html/ng1np/
sudo cp -pr /home/user/Public/github/ng1np/ /var/www/html/
sudo chown -R www-data:www-data /var/www/html/
</pre>


### Engine UP Logika:

- set (Setuj)
- lib (Biblioteku)
- up (Na Web)

##### KISS - Keep It Simple Stupid (Zadrži glupavu jednostavnost)

### Engine UP Hack Matrix Modularni Softver. Jednostavan PHP Engine.

- Jednostavan Engine napisan za početak u PHP-u. Veoma prost za korišćenje i vrlo proširiv sa podacima i slobodom da se stilizuje po potrebi. Stilovi se nalaze u **inc/header.php** a tu se i nalazi jednostavna funkcija za random prikazivanje slika na stranicama. Glavna logika engine-a je **rad sa nizovima**. Nizovi su multidimenzioni i sadrže podatke potrebne za web stranice. Nizovi mogu biti proširivi, a templejti se mogu proširiti dokle god ide dubina nizova. Korišćenjem smart .tpl logike dobija se čista forma pokretača iz nizova.
- Funkcije i klase se nalaze u **set/** folderu.


### Kako to radi ?

- **index.php** stranica poziva klasu iz foldera **set/** pod nazivom **class.php**. Ta klasa je zadužena za renderovanje stranice. Folder **lib/** ima stranice sa sintaksom **stranica.php** i unutra su nizovi koji su zapravo varijable. Zatim poslednji u logici je folder **up/** a u njemu se nalaze stranice sa sintaksom **stranica.tpl** i to su zapravo okviri u kojima se kroz petlje prikazuju nizovi iz foldera **lib/**. Nazive Engine UP je radi logike SETUJ **(set)** BIBLIOTEKU **(lib)** na WEB **(up)**. Ovo je zapravo jednostavan pattern ili matrica koja ima svoju logiku. Ako želite nove stranice, potrebno je u **index.php** u niz **$pages** dodati imena stranice, zatim dodati u **lib/** stranicu sa ekstenzijom **.php** i u **up/** folder dodati stranicu sa istim imenom ekstenzije **.tpl**. 
- Engine je jednostavan i postoji razumna logika i u osnovnoj verziji nema bazu podataka, već je sve u nizovima u folderu **lib/**. Folder **up/** je nešto poput view u mvc patternu, dok je **lib/** nešto kao model a **set/** je nešto poput controllera. Ovo nije mvc pattern već custom logika koju je moguće nadograditi bazom podataka ali pretpostavka da za srednje sajtove nizovi najbrže hendluju podatke i nije potrebna relaciona baza podataka. Ukoliko želite feature koj radi sa bazom podataka, taj osnovni modul se nalazi u **database** folderu. Jednostavan login/registration sistem je u folderu **database/loginordie**
- Razvoj **engine up-a** ide u potpuno autonomnom smeru i može raditi kao matrica pisana u bilo kom jeziku. 
- **set/** -> **lib/** -> **up/** je modularna matrica.
- Moduli će biti svedeni na minimum kodnog prostora, ostaće više prostora za developere koji žele da ga prošire.
- Matrica koja je prisutna u ovom kodu je multidimenzioni niz sa podacima gde je moguće proširiti niz još dublje.

### Budućnost engine-a

- Model razvoja bi trebao da ide u smeru distribuiranog modela (UGC sa potpunim integritetom i autoritetom), kao C na slici ispod:
<p>
<img src="https://github.com/antistereotip/ng1np/blob/main/models.png" width="500" />  
</p>
- Budućnost Engine UP-a biće platforma u potpunom vlasništvu korisnika. Ideja je da ostane minimalnog footprint-a a da istovremeno bude i kompleksan i modularan. 
- Svaki modul koj korisnik bude dodavao postojaće u repozitorijumu i povlačiće se na željeno mesto **clone** komandom.
- Modul može biti od svega nekoliko bajtova do [n] bajtova (Limit će zavisiti od performansi samog engine-a).
- Moguće je da ukoliko korisnik generiše konstantno novi sadržaj, da neke od vrednosti budu upravo bajtovi isčitani iz tog sadržaja, te će **korisnički ID** prilikom svake izmene (gore dole minimum 1 bajt), imati zapravo različit token i biće uvek korak ispred potencijalnog napada na njegov nalog.
- Jednostavno objašnjenje, korisnik je jedna matrica, definisana po želji, tačnije po sadržaju. I svaki korisnik bi trebao imati različitu matricu, jer ukoliko engine prepozna kopiju, on briše bez ikakvog upozorenja sadržaj nastao nakon već postojećeg. Jedino upozorenje će dobiti korisnik koji kopira sadržaj da će biti sankcionisan ukoliko mu to pređe u praksu.
- Korisnik će imati opciju da šifruje svoj sadržaj i da bude vidljiv samo onome ko ima ključ. Korisnički ključ se generiše na principu slučajnog uzorka u heksadecimalnom zapisu.
- Dashboard ili korisnički panel će imati sve neophodne opcije za potpunu privatnost i integritet. Biće uključena opcija trajnog brisanja gde ne ostaje ni senka od samog sadržaja. Takođe biće dostupna i cloud backup opcija koja bi trebala da prenosi podatke sigurnim tunelom.


### Matrice

- Dvodimenzionalni niz se u praktičnom programiranju naziva i matrica. Niz može biti jednodimenzionalan (jednostavno niz), dvodimenzionalan (matrica - zbog analogije sa istoimenim matematičkim pojmom), i višedimenzionalan (kocka, četvorodimenzionalna kocka itd.).
- Ako imamo matricu M dimenzija 2 x 8, njeni indexi su organizovani kao u tabeli navedenoj ispod:
<pre>
M(1,1), M(1,2), M(1,3), M(1,4), M(1,5), M(1,6), M(1,7), M(1,8)
M(2,1), M(2,2), M(2,3), M(2,4), M(2,5), M(2,6), M(2,7), M(2,8)
</pre>
- Matrice s istim brojem redova i kolona nazivaju se kvadratne. Kvadratna matrica ima glavnu i sporednu dijagonalu. Primer kvadratne matrice na primeru ispod:
<pre>
M(1,1), M(1,2), M(1,3), M(1,4)
M(2,1), M(2,2), M(2,3), M(2,4)
M(3,1), M(3,2), M(3,3), M(3,4)
M(4,1), M(4,2), M(4,3), M(4,4)
</pre>
- Šta kaže matematika ? Horizontalne linije u matrici se nazivaju vrstama, a vertikalne kolonama matrice. Matrica sa m vrsta i n kolona se naziva m-sa-n matricom (kaže se i zapisuje da je formata m×n) a m i n su dimenzije matrice.
- Imamo dve matrice, vektor vrste, na primer: M = [1, 2, 3] - matrica 1 x 3, zatim R = [0, 2, 4] - matrica 1 x 3. Želimo da ih saberemo. Primer kako sabiramo matrice je ispod:
<pre>
[1, 2, 3] + [0, 2, 4] = [ 1 + 0, 2 + 2, 3 + 4] = [1, 4, 7]
</pre>
- Da bi ste razumeli matrice i njihovu upotrebu u računarstvu, moraćete dublje u zečiju rupu. Down The Rabbit Hole.

### Podrška

- Engine UP je softver otvorenog koda i korisnik ga sam setuje, što znači da je i slobodan i besplatan.
- Ukoliko stvar prepuštate našoj podršci, naplaćuje se satnica podrške ili dogovor u okviru nekog perioda.

### TODO:

- Napisati paralelno kod engine up-a u **LISP**-u.
- Napisati kod u **Pyhton**-u.
- Napisati kod u **ANSI C**-u.

