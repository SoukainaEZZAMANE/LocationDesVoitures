<?php
session_start();
?>

<html>
<head> 
		<meta charset="utf-8" /> 
		<title>
		Site de location des voitures
		</title>
		<link rel="stylesheet" href="css/style.css"/>
	</head>
	<body> 
	<div id="all">
		 	
			<?php include("header.php"); 
			include("nav.php");
			?>
			<?php


// Je me connecte à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=location_voiture', 'root', '');
}
catch (Exception $e) // Si erreur
{
        die('Erreur : ' . $e->getMessage());
}
 if (isset($_POST['user']) and isset($_POST['pass']))
{
$login= $_POST['user'];
$password= $_POST['pass'];
//Je choisis le champ login

$reponse1= $bdd->query('SELECT login,password FROM user where login=\''.$_POST['user'].'\' ') or die(print_r($bdd-> errorInfo())); // Je choisis de la base de donné login le champ login
//$reponse1= $bdd->query("SELECT login,password FROM user where login='".$login."'' and password='".$password."';") or die(print_r($bdd-> errorInfo())); // Je choisis de la base de donné login le champ login
$reponse2 = $bdd->query("SELECT login,password FROM client where login='".$login."' and password='".$password."';") or die(print_r($bdd-> errorInfo())); // Je choisis de la base de donné login le champ password
 
 
//Je vérifie tout mes champs logins
$don1=$reponse1->fetch();
$don2 = $reponse2->fetch();


print_r($don1);

	if ($don1['login'] !="" AND $don1['password'] !="") 
    	 {
        
    	 	$_SESSION['login']=$login;
    	 	$_SESSION['password']=$password;
    	 	echo '<meta http-equiv="Refresh" content="0;URL=Ajout_voiture.php">';
    	 	
    } 

    else if ($don2['login'] !="" AND $don2['password'] !="") 
    {
    	$_SESSION['login']=$login;
    	 	$_SESSION['password']=$password;
    	 	echo '<meta http-equiv="Refresh" content="0;URL=index2.php">';
        echo"<strong style='text-shadow: 1px 1px 10px #CDBE9F, 0 0 1.3em #BEAE8C, 0 0 0.2em #b6a684;padding: 5px 10px 6px;background:    -moz-linear-gradient(#cccccc,#999999);color: white;text-align:center;font: 3em 'Tempus Sans ITC';'>Bienvenue :</strong>".$_SESSION['login'].'</br>';?>
        	<form action="deconnexion.php" method="post">
                     <p><button style="text-shadow: 1px 1px 10px #CDBE9F, 0 0 1.3em #BEAE8C, 0 0 0.2em #b6a684;padding: 5px 10px 6px;background:    -moz-linear-gradient(#cccccc,#999999);color: white;text-align:center;font: 2em 'Tempus Sans ITC';font-weight:bold;font-size:20px;display: inline-block;padding: 5px 10px 6px;cursor: pointer;">Se déconnecter</button></p>
            </form>
			<?php
    }
   
    

$reponse1->closeCursor(); // Termine le traitement de la requête
$reponse2->closeCursor(); // Termine le traitement de la requête
 }
 
?>

<?php
	include("corps.php");
	include("footer.php");
	?>
	</div>
</body>
</html> 