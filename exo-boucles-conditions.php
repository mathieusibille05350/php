<!doctype html>
<html lang="fr">
<head>
		<meta charset="UTF-8">
		<title>Exo boucles & conditions</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/knacss.css" media="all">
		<link rel="stylesheet" href="css/styles.css" media="all">
</head>
<body>
<?php 

// $nb_de_bouteilles = parseInt(window.prompt("Combien de bouteilles avez-vous à boire ?"));
$nb_de_bouteilles =10;
echo "<h1>" . $nb_de_bouteilles . " bouteilles de biére</h1>";

for ($i = $nb_de_bouteilles ; $i > 0 ; $i--) {

  if ($i != 1) $bouteille = '<span style="color:red;">bottles</span>';
  else $bouteille = '<span style="color:blue;">bottle</span>';

 echo "<p><strong>" . $i . "</strong> " . $bouteille . " of beer on the wall, <strong>" . $i . "</strong> " . $bouteille . " of beer.<br />";
  echo "Take one down, pass it around, ";
  if ($i > 1) {
    if ( ($i-1) == 1 ) $bouteille = '<span style="color:blue;">bottle</span>';
	echo "<strong>" . ($i-1) . "</strong> " . $bouteille . " of beer on the wall.</p>";
  } else {
    echo "<strong>no more bottles of beer on the wall.</strong></p>";
  }
}

echo "<p>No more bottles of beer on the wall, no more bottles of beer.<br />Go to the store and buy some more, " . $nb_de_bouteilles . " bottles of beer on the wall.</p>";
   ?>
</body>
</html>
