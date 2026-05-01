<?php
#---pozivanje klase---#
$eng = new ng1np();

#---varijable---#
$eng->charset = 'UTF-8';
$eng->keywords = '0000, 0110, 1001, 1111';
$eng->author = 'admin';
$eng->description = 'This is default page - All about universe and galaxy';
$eng->title = 'Default page - ng1np';

$eng->content = array( 
	array(
	"proces1" => "REVERSIBILAN",
	"proces2" => "AUTOMATIZOVAN",
	"proces3" => "REVERSIBILAN",
	"proces4" => "REVERSIBILAN"
	),
	array(
	"proces1" => "NEREVERSIBILAN",
    "proces2" => "NEREVERSIBILAN",
    "proces3" => "REVERSIBILAN",
    "proces4" => "NEREVERSIBILAN"
	),
	array(
	"proces1" => "REVERSIBILAN",
    "proces2" => "NEREVERSIBILAN",
    "proces3" => "REVERSIBILAN",
    "proces4" => "NEREVERSIBILAN"
	),
	array(
	"proces1" => "NEREVERSIBILAN",
    "proces2" => "NEREVERSIBILAN",
    "proces3" => "NEREVERSIBILAN",
    "proces4" => "REVERSIBILAN"
	)
);

$eng->sidebar = array( 
        array(
        "server1" => "NEAKTIVAN",
        "server2" => "SLEEP-MODE",
        "server3" => "neaktivan"
        ),
        array(
        "server1" => "NEAKTIVAN",
        "server2" => "AKTIVAN",
        "server3" => "god"
        ),
        array(
        "server1" => "AKTIVAN",
        "server2" => "SLEEP-MODE",
        "server3" => "aktivan"
        ),
        array(
        "server1" => "AKTIVAN",
        "server2" => "SLEEP-MODE",
        "server3" => "aktivan"
        )
);




#---metoda render---#
echo $eng->render('up/default.tpl');

