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
		<style>
		button, button:visited {
    background:    -moz-linear-gradient(#cccccc,#999999);
	text-shadow: 1px 1px 10px #CDBE9F, 0 0 1.3em #BEAE8C, 0 0 0.2em #b6a684;
color: white;
text-align:center;
font: 2em "Tempus Sans ITC";
font-weight:bold;
font-size:20px;
    display: inline-block;
    padding: 5px 10px 6px;
    
    
    cursor: pointer;
}
</style>
		</head>
 
	<body > 
	
		<div id="all">
		 	 	
			<?php
            include("header.php"); 
			include("nav1.php");
            echo 'Bienvenue '.$_SESSION['login'].' '.$_SESSION['password'];
            
			?>	
            <form action="deconnexion.php" method="post">
                     <p><button >Se déconnecter</button></p>
            </form>
<div class="lateral">
<h2>Voiture Ajoutée </h2>
<div id="vdo-8">

<p class="float">
<center><p>
	<p>La voiture avec les caractéristiques suivantes a été ajoutée dans la base de données.</p></br>

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
				$immatriculation= $_POST['Immatriculation'];
                $marque= $_POST['Marque'];  
                $version= $_POST['Version'];
                $nbr_portes= $_POST['Nbr_portes'];
                $climatisation= $_POST['Climatisation'];
                $nbr_passagers= $_POST['nbr_passagers'];
                $capacite_bagage= $_POST['Cpt_bagages'];
                $age_min= $_POST['Age_min_conducteur'];
                $airbag= $_POST['Air_Bag'];
                $categorie= $_POST['categorie'];
                $monfichier = "img/".$_FILES['monfichier']['name'];
             
$req= $bdd->prepare("insert into voiture (id,immat,marque,version,nbr_porte,climatisation,nbr_passagers,cap_bagage,age_min_cond,airbag,url,categorie) values(default,:immatriculation,:marque,:version,:nbr_portes,:climatisation,:nbr_passagers,:capacite_bagage,:age_min,:airbag,:monfichier,:categorie)");

           $req->execute(array(
                ':immatriculation' => $immatriculation,
                ':marque' => $marque,  
                ':version' => $version,
                ':nbr_portes' => $nbr_portes,
                ':climatisation' => $climatisation,
                ':nbr_passagers' => $nbr_passagers,
                ':capacite_bagage' => $capacite_bagage,
                ':age_min' => $age_min,
                ':airbag' => $airbag,
                ':monfichier' => $monfichier,
                ':categorie'=>$categorie

                ));
$req->closeCursor();
// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table 
$reponse = $bdd->query('SELECT * FROM voiture ORDER BY `id` DESC LIMIT 1');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
 echo 'Marque : '.$donnees['marque'].'</br>';
 echo 'Immatriculation :  '.$donnees['immat'].'</br>';
echo ' Version :   '.$donnees['version'].'</br>';
echo 'Nombre de portes :  '.$donnees['nbr_porte'].'</br>';
echo 'Climatisation : '.$donnees['climatisation'].'</br>';
echo 'Nombre de passagers : '.$donnees['nbr_passagers'].'</br>';
echo 'Capacité des bagages : '.$donnees['cap_bagage'].'</br>';
echo 'Age min Conducteur : '.$donnees['age_min_cond'].'</br>';
echo 'Air Bag :'.$donnees['airbag'].'</br>';
echo 'Catégorie :'.$donnees['categorie'].'</br>';
echo 'le chemin de l\'image :'.$donnees['url'].'</br>'; 
$chemin= $donnees['url'];
echo "la voiture :</br></br><img src=\"$chemin\" />";    

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