<?php
$a=readline("Male or Female ");
$b=readline("Enter the age ");
$c=readline("Enter the Level ");
        if ($a=='M'){
            if (($b>=12)&&($b<=18)){
                if (($c>=13.0)&&($c<=16.0)){
                    echo("Male , Hemoglobin Level is Normal");
                }else {
                    echo("Male , Hemoglobin Level is Abnormal");
                }
            }else if ($b>=18) {
                if (($c>=13.6)&&($c<=17.7)){
                    echo("Male , Hemoglobin Level is Normal");
                }else{
                    echo("Abnormal");
                }
            }else {
                echo("Male , Hemoglbin level is Abnormal");
            }
        }else if ($a=='F'){
            if (($b>=12)&&($b<=18)){
                if (($c>=12.0)&&($c<=16.0)){
                    echo("Female , Hemoglobin Level is Normal");
                }else {
                    echo("Female , Hemoglobin Level is Abnormal");
                }
            }else if ($b>=18) {
                if (($c>=12.1)&&($c<=15.1)){
                    echo("Female , Hemoglobin Level is Normal");
                }else{
                    echo("Abnormal");
                }
            }else {
                echo("Female , Hemoglbin level is Abnormal");
            }
        }else{
            if(($a==c)or($a==C))
            if (($b>=0.5)&&($b<=2)){
                if (($c>=10.5)&&($c<=13.5)){
                    echo("Hemolobin Level is Normal");
                }else {
                    echo("Hemolobin Level is Abnormal");
                }
            }else if (($b>=2)&&($b<=6)) {
                if (($c>=11.5)&&($c<=13.5)){
                    echo("Hemoglobin Level is Normal");
                }else{
                    echo("Hemoglobin level is Abnormal");
                }
            }else if (($b>=6)&&($b<=12)){
                if (($c>=11.5)&&($c<=15.5)){
                    echo("Hemoglobin level is Normal");
                }
            }else {
                echo("Hemoglbin level is Abnormal");
            }
        }    
    
?>