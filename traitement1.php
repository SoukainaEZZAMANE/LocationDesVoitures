<?php
            session_start();
?>
<!DOCTYPE html>
<html>
	<head> 
		<meta charset="utf-8" /> 
		<title>
		Site de location des voitures
		</title>
		<link rel="stylesheet" href="css/style.css"/>
		</head>
 
	<body > 
	
		<div id="all">
		 	 	
			<?php
            include("header.php"); 
			include("nav1.php");
            echo 'Bienvenue '.$_SESSION['user'].' '.$_SESSION['user'];
            
			?>	
            <form action="deconnexion.php" method="post">
                     <p><button >Se déconnecter</button></p>
            </form>
            <div class="lateral">
<h2>Réservation Ajoutée </h2>
<div id="vdo-8">


<p class="float">
<center><p>
	<p>Votre réservation a été ajoutée avec succès dans la base de données</p></br>
<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=location_voiture', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
$login=$_SESSION['user'];
$req= $bdd->prepare("insert into reservation (id,depart,retour,categorie,km,age,paiement) values(default,:depart,:retour,:categorie,:km,:age,:paiement)");

           $req->execute(array(
                ':depart' => $_POST['depart'],
                ':retour' => $_POST['retour'],  
                ':categorie' => $_POST['categorie'],
                ':km' => $_POST['km'],
                ':age' => $_POST['age'],
                ':paiement' => $_POST['paiement']

                
                ));
$req->closeCursor();
// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table 
$reponse = $bdd->query('SELECT * FROM reservation LIMIT 0,1');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
 echo 'depart : '.$donnees['depart'].'</br>';
 echo 'retour :  '.$donnees['retour'].'</br>';
echo ' categorie :   '.$donnees['categorie'].'</br>';
echo 'km :  '.$donnees['km'].'</br>';
echo 'age : '.$donnees['age'].'</br>';
echo 'Mode de paiement : '.$donnees['paiement'].'</br>'; 

}

$reponse->closeCursor(); // Termine le traitement de la requête

?>

</p></center></div>
</div>

<?php
	include("footer.php");
	?>
	</div>
</body>
</html> 