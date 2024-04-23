<?php
$x= readline("Enter the Age ");
if($x<=18){
    echo($x." is a Minor " );
}else if($x>=18 and $x<=60){
    echo ($x. " is a Major");
}
else{
    echo($x." is a Senior Citizen");
}
?>