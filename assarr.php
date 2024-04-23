<?php
$a=array("Name"=>"Cheran","DOB"=>"MAR 17 ,2002","Mail"=>"smartcheran@gmail.com");
$a["Name"]="Krish";
// echo($a["Name"]);
var_dump($a);

foreach($a as $a=>$b){
    echo("$a:$b"."\n");
}
