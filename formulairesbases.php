<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Web APP</title>
<meta name="generator" content="Geany 1.31" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/site.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/jquery-ui.css" rel="stylesheet">
<script src="js/popper.js"  type="text/javascript"></script>
<script src="js/jquery-3.2.1.js"  type="text/javascript"></script>
<script src="js/jquery-ui.min.js"  type="text/javascript"></script>
<script src="js/bootstrap.min.js"  type="text/javascript"></script>
<script src="js/site.js"  type="text/javascript"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/pure/0.6.0/pure-min.css">
</head>
<body>
    <style>
        .bg {
            background-color: antiquewhite;
        }
    
    </style>
<?php
if (empty($_POST)){	
?>
<form method="post" action="formulairesbases.php">	
	<input type="hidden" value="stagiaire" id="type_utilisateur" name="type_utilisateur" >
	<fieldset>
		<legend>À propos de vous</legend>	
			<p><label for="nom">Nom :</label>
				<input type="text" name="nom" id="nom" title="Nom" required aria-required="true" />
			</p>
			<p><label for="prenom">Prénom :</label>
				<input type="text" name="prenom" id="prenom" required aria-required="true" />
			</p>
			<p><label for="age">Votre âge :</label>
				<input type="number" name="age" id="age" min="10" max="100" step="1" value="20" />
			</p>
	</fieldset>
	<fieldset>
		<legend>Vos coordonnées</legend>
			<p><label for="email">e-mail :</label>
				<input type="email" name="email" id="email" required aria-required="true">
			</p>
			<p><label for="telephone">Téléphone :</label>
				<input type="tel" name="telephone" id="telephone" required aria-required="true">
			</p>
	</fieldset>
	<fieldset>
		<legend>Vos identifiants</legend>
			<p><label for="identifiant">Identifiant (rappel, non modifiable) :</label>
				<input type="text" disabled="disabled" name="identifiant" id="identifiant" value="ID97379202">
				<!-- read only -->
			</p>
			<p><label for="mot_de_passe">Mot de passe :</label>
				<input type="password" name="mot_de_passe" id="mot_de_passe" pattern=".{6,}" autocomplete="off" required aria-required="true">
			</p>
	</fieldset>
	<fieldset>
		<legend>Vos préférences</legend>
			<p><label for="langage">Quel langage préférez-vous ?</label>
				<select id="langage" name="langage">
					<optgroup label="Langages de script côté serveur">
							<option value="php">PHP</option>
							<option value="asp">ASP</option>
					</optgroup>
					<optgroup label="Langages côté client">
							<option value="js">JavaScript</option>
							<option value="html5">HTML5</option>
							<option value="css">CSS</option>
					</optgroup> 
				</select>
			</p>
	</fieldset>
	<fieldset>
		<legend>Votre niveau</legend>
		  <div>
			<input type="radio" name="niveau" id="naze" value="naze" checked>
				<label for="naze">Je suis une grosse quiche, je ne comprends rien à l'informatique</label>
		  </div>
		  <div>
			<input type="radio" name="niveau" id="geek" value="geek">
				<label for="geek">Je suis un vrai geek, j'explique tout à ma mère</label>
		  </div>
		</fieldset>
	<fieldset>
		<legend>Lettre d'information</legend>
		<p><input type="checkbox" name="newsletter" id="newsletter" value="oui">
			<label for="newsletter">Je souhaite m'inscrire à la lettre d'information</label>
		</p>
	</fieldset>
	<fieldset>
		<legend>Un peu plus sur vous...</legend>
			<p><label for="bio">Biographie</label><br />
				<textarea name="bio" id="bio" cols="60" rows="8" minlength="10" maxlength="50" required aria-required="true"></textarea>
			</p>
			<p><label for="philosophie">Philosophie</label><br />
				<textarea name="philosophie" id="philosophie" cols="40" rows="4" placeholder="Petite aide à l'utilisateur qui disparaît quand on écrit..."></textarea>
			</p>
	</fieldset>
	<fieldset>
		<legend>Par rapport à la formation</legend>
			<p><label for="motivation">Ma motivation (gauche = aucune ; droite = pleine) : </label><br />
				<input type="range" name="motivation" id="motivation" min="0" max="100" step="10" value="0">
			</p>
			<p><label for="dispo_date">Date de disponibilité : </label>
				<input type="date" name="dispo_date" id="dispo_date">
			</p>
	</fieldset>
	<fieldset>
		<legend>Divers</legend>
			<label for="time">Votre heure préférée du repas : </label>
				<input type="time" name="time" id="time" min="11:00" max="14:00" step="900" value="12:30">
	</fieldset>
	<fieldset>
		<legend>Validation</legend>
			<p><input type="checkbox" name="accept_admission" id="accept_admission" value="oui">
					<label for="accept_admission">J'ai lu et j'accepte les conditions d'admission.</label>
			</p>
			<p><input type="submit" value="Envoyer" /></p>
	</fieldset>
</form>	

<?php
} // fin if empty post

//if (!empty($_POST))
else
{
	?>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <fieldset><legend> A propos...</legend>
     <?php  ECHO strtoupper($_POST["nom"]."<br>");
    echo ucfirst($_POST["prenom"]);?>
        </fieldset>
            </div>
            <div class="col-4">
                <fieldset><legend> Coordonnées</legend>
                <?php
   echo  '<a href="mailto:'.$_POST["email"].'" target="_parent">'.$_POST["email"].'</a><br>  ' ;
    $tel=$_POST["telephone"];
    if (substr($tel,0,1)=="0")
    {
        $tel="+33".substr($tel,1,9);
        $_POST["telephone"]=$tel;
    }
    echo '<a href="tel:'.$tel.'">'.$tel.'</a>';
    ?>
                
                
                
                
                </fieldset>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
            <fieldset><legend> Niveau</legend></fieldset>
            </div>
            <div class="col-4">
            <fieldset><legend> Un peu plus...</legend>
             <?php 
    
    function datefrancaise($dateaconvertir) {
        
    
                $datefr = explode("-",$_POST["dispo_date"]);
    
                $jour = $datefr[2];
                $mois = $datefr[1];
                $annee = $datefr[0];
                switch($mois) 
                {
                    case "01" :
                        $mois = "janvier";
                        break;
                    case "02" :
                        $mois = "Fevrier";
                        break;
                     case "03" :
                        $mois = "mars";
                        break;
                    case "04" :
                        $mois = "avril";
                        break;
                    case "05" :
                        $mois = "mai";
                        break;
                    case "06" :
                        $mois = "juin";
                        break;
                    case "07" :
                        $mois = "juillet";
                        break;
                    case "08" :
                        $mois = "aout";
                        break;
                     case "09" :
                        $mois = "septembre";
                        break;
                    case "10" :
                        $mois = "octobre";
                        break;
                    case "11" :
                        $mois = "novembre";
                        break;
                    case "12" :
                        $mois = "décembre";
                        break;
                    default :
                        $mois = "erreur";
                        break;
                }
                $datefr = $jour." ".$mois." ".$annee; 
    return($datefr);}
                echo datefrancaise($_POST);
                
                ?>  
                
                </fieldset>
            </div>  
        </div>
  
    </div>
    
    
    
    
<?php	
} // fin if !empty	
?>


<br /><br /><br /><br />

</body>
</html>