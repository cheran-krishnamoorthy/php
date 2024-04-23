<?php
// $a=10;
// $b=20;
// function add($a,$b){
//     return $a+$b;
// }

// echo(add($a,$b));

$x=array(1,2,3,4,9,5,10,6);
function arr($x){
    rsort($x);
    for($i=0;$i<count($x);$i++){
        echo($x[$i]."\n");
    }
}
arr($x);
?>