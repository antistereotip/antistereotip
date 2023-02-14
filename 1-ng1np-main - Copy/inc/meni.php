<nav class="animacija">
<li><a href="?route=default">[  Default  ]</a></li>
<li><a href="?route=second">[  Second  ]</a></li>
<li><a href="?route=third">[  Third  ]</a></li>
<li><a href="?route=fourth">[  Fourth  ]</a></li>
<li><a href="?route=fifth">[  Fifth  ]</a></li>
<li><a href="./docs/dinovzabavnik32bita.pdf">[ Dinov Zabavnik ]</a>

</nav>
<p></p>
<p>&#8594; <?php sitemapBrojacStranica(); ?></p>
<p>
<?php
$number = 20;
echo "&#8594; Fibonacci (20 terms): ";
for ($counter = 0; $counter < $number; $counter++){  
    echo Fibonacci($counter),' ';
}
?>
</p>
<p>&#8594; Reverse Fibonacci (20 terms): <?php $n = 20; reverseFibonacci($n); ?></p>




