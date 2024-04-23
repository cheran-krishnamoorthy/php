<?php
$a=10;
$i=1;
$b=0;
$c=0;
for($i=1;$i<=$a;$i++){
    if($i%2==0){
        echo($i."\n");
        $b=$b+$i;
    }else{
        echo($i."\n");
        $c=$c+$i;
    }
    
}echo("The Total of Even Nums Are = ".$b."\n");
echo("The Total of Odd Nums Are = ".$c);
// for($i=1;$i<=$a;$i++){
//     if($i%2==1){
//         echo($i."\n");
//         $c=$c+$i;
//     }
    
// }echo("The Total of odd Nums Are = ".$c);
?>