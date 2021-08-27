## Simple Cache System

<img src="https://github.com/antistereotip/antistereotip/blob/master/logo.png" width="150" />


- TopCache (top-cache.php) and BottomCache 
(bottom-cache.php) are included on start 
script and on the end of the script.

Example (php): 
<pre>
include 'top-cache.php';
echo 'some content';
include 'bottom-cache.php';
</pre>


- Serve from the cache if it is younger 
than $cachetime variable.
