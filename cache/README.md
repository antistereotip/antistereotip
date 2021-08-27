## Simple Cache System

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
