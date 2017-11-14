<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
</head>
    <?php
$tableau = array(5, 9, 3, 1);

// nombre d'éléments dans le tableau
$nb_elements = count($tableau);

for( $i = 0;  $i < $nb_elements  ;$i++)
{       
    $flag =false;
       
    for($j = $nb_elements -1; $j >= $i; $j--)
    {
        if($tableau[$j-1] > $tableau[$j])
        {
            $temp = $tableau[$j - 1];
            echo $temp;
            $tableau[$j - 1] = $tableau[$j];
            echo $tableau[$j - 1];
            $tableau[$j] = $temp;    
            echo $tableau[$j];
            $flag = true;
        }    
    }    
   
    if(!$flag) break;
     
}

echo '<pre>';
print_r($tableau);
echo '</pre>';

?>
<!--
<?php 
    $tableau = array(5,4,4,4,4,4,4,9,3,1,2,8,7,4,5,4,7,6);
    $a=0;
    $b=1;
     foreach($tableau as $valeur)
         echo "a=".$a."b=".$b."valeur de tab()".$valeur[$a]."valeur de tab(+1)".$valeur[$b];
       while ($valeur[$a]<$valeur[$b]){
           echo "a=".$a."b=".$b."valeur de tab()".$valeur[$a]."valeur de tab(+1)".$valeur[$b];
    if ($valeur[$a]>$valeur[$b]){
       echo "a=".$a."b=".$b."valeur de tab()".$valeur[$a]."valeur de tab(+1)".$valeur[$b];
        $valeur[$b]= $val;
        $valeur[$a]=$valeur[$b];
        $val=$valeur[$a];
        echo "<p>boucle";
        echo "a=".$a."b=".$b."valeur de tab()".$valeur[$a]."valeur de tab(+1)".$valeur[$b];
        echo "<p>";
    }
   }
    echo 'fini';
    var_dump($tableau);
    ?>-->
<body>
</body>
</html>