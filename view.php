<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>PHP</title>
    
</head>
<body>
    
<h1>Les chaînes</h1>  

<?php
echo "<p>J'ai tout compris</p>";

echo '<p>J\'ai tout compris</p>';

echo '<p style="color:red;">J\'ai compris</p>';

echo "<p style=\"color:red;\">J'ai compris</p>";

// je peux aller à la ligne en plein milieu de ma chaîne de caractres - ceci est un commentaire
echo '<h2>Coucou</h2>
<p>j\'aime bien coucou</p>
<p>et là je met ma nouvelle ligne</p>';

?>


<h1>les types... les autres</h1>    
<?php
echo 3;
?>    
<p>elle a <?php echo 3.5;?>  ans</p>
<p>elle a <?php echo 3 + 1;?>  ans</p>

<?php 
echo (3+1)*2;
?>

<h1>Concaténation</h1> 
<?php
echo '<p>elle a ' . 3 . " ans</p>"; 
?>

<h1>Les variables</h1>
<?php
$age = 3;
echo $age;
$âge = 4;
echo $âge;

$Age = 2; 
// les variables en php sont sensibles à la casse

echo '<p>elle a '.$age.' ans</p>';
echo '<p>elle a '.$Age.' ans</p>';

?>

<h1>Les tableaux</h1>
<?php
$prenoms = ["Gérard", "Lionel", "Ana"];
echo $prenoms[1] . '<br />';

echo var_dump($prenoms);
    
?>

</body>
</html>