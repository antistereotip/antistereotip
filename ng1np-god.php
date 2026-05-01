<?php
#---pozivanje klase---#
$eng = new ng1np();

#---varijable---#
$eng->charset = 'UTF-8';
$eng->keywords = '0000, 0110, 1001, 1111';
$eng->author = 'admin';
$eng->description = 'This is God mode. All about universe and galaxy';
$eng->title = 'God mode - ng1np';

$eng->content = array( 
	array(
	"proces1" => "DEDICATED",
	"proces2" => "VPS",
	"proces3" => "DEDICATED",
	"proces4" => "DEDICATED"
	),
	array(
	"proces1" => "SHARED",
    "proces2" => "DEDICATED",
    "proces3" => "VPS",
    "proces4" => "VPS"
	),
	array(
	"proces1" => "SHARED",
    "proces2" => "DEDICATED",
    "proces3" => "AUTOMATED",
    "proces4" => "VPS"
	),
	array(
	"proces1" => "VPS",
    "proces2" => "PROCEDURALAN",
    "proces3" => "VPS",
    "proces4" => "VPS"
	)
);

$eng->sidebar = array( 
        array(
        "server1" => "USER",
        "server2" => "ROOT",
        "server3" => "god"
        ),
        array(
        "server1" => "USER",
        "server2" => "ROOT",
        "server3" => "root"
        ),
        array(
        "server1" => "ROOT",
        "server2" => "USER",
        "server3" => "root"
        ),
        array(
        "server1" => "ROOT",
        "server2" => "USER",
        "server3" => "user"
        )
);




#---metoda render---#
echo $eng->render('up/god.tpl');

