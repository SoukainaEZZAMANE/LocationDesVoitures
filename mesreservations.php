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
body{
    padding: 70px;
    font: 1em sans-serif;
}
h2{
    text-shadow: 1px 1px 10px #CDBE9F, 0 0 1.3em #BEAE8C, 0 0 0.2em #b6a684;
color: white;
text-align:center;
font: 5em "Tempus Sans ITC";
font-weight:bold;

}
#vdo-8{
    background: #eee;
    padding: 30px;
    margin-top: 30px;
}
#vdo-8 form{
    text-align: center;
}
#vdo-8 form p{
    height: 30px;
    margin: 5px;
}
#vdo-8 label{
    display: inline-block;
    vertical-align: top;
    text-align: left;
    width: 80px;
    height: 23px;
    padding: 7px 0 0 14px;
    color: white;
    font-weight: bold;
    text-shadow: 0px -1px 0px rgba(0,0,0,0.2);
    border-radius: 5px 0px 0px 5px;
    box-shadow: 0px 1px 1px rgba(0,0,0,1) inset;
    background: #999999;
    background: -webkit-linear-gradient(#cccccc,#999999);
    background:    -moz-linear-gradient(#cccccc,#999999);
    background:      -o-linear-gradient(#cccccc,#999999);
    background:         linear-gradient(#cccccc,#999999);
    
}
#vdo-8 input,select,textarea{
    display: inline-block;
    width: 265px;
    height: 30px;
    padding: 0 0 0 10px;
    font-size: 1.1em;
    font-weight: bold;
    border: none;
    color: white;
    text-shadow: 0px 1px 0px #000;
    background: #666;
    background: rgba(0,0,0,.6);
    border-radius: 0px 5px 5px 0px;
    box-shadow: 0px 1px 1px #000 inset;
}
#vdo-8 input:focus,textarea:focus{
    outline: none;
    box-shadow: 0px 0px 3px #000;  
    background: rgba(0,0,0,.9);
    -webkit-animation: pulse 1s infinite alternate;
       -moz-animation: pulse 1s infinite alternate;
         -o-animation: pulse 1s infinite alternate;
            animation: pulse 1s infinite alternate; 
}

@-webkit-keyframes pulse{
    from {
        box-shadow: 0 0 0px deepskyblue;
    }
    to   {
        box-shadow: 0 0 14px deepskyblue;
    }
}
@-moz-keyframes pulse{
    from {
        box-shadow: 0 0 0px deepskyblue;
    }
    to   {
        box-shadow: 0 0 14px deepskyblue;
    }
}
@-o-keyframes pulse{
    from {
        box-shadow: 0 0 0px deepskyblue;
    }
    to   {
        box-shadow: 0 0 14px deepskyblue;
    }
}
@keyframes pulse{
    from {
        box-shadow: 0 0 0px deepskyblue;
    }
    to   {
        box-shadow: 0 0 14px deepskyblue;
    }
}
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
		 	 	
			<?php include("header.php"); 
			include("nav.php");
				
            if(isset($_SESSION['login']) and ($_SESSION['password']))
            echo 'Bienvenue '.$_SESSION['login'].' '.$_SESSION['password'];
            
            ?>  
            <form action="deconnexion.php" method="post">
                     <p><button >Se déconnecter</button></p>
            </form>
<h2> Mes réservations de voitures </h2>


    <table class="table  table-hover ">
 <tr>
<th>ID</th>
<th>Départ</th>
<th>Retour</th>
<th>Catégorie</th>
<th>KM</th>
<th>Age</th>
<th>Paiement</th>
<th>Immatriculation</th>
<th>Login du client</th>
<th>Opération</th>

</tr>

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
$login=$_SESSION['login'];
$requete = $bdd->query('SELECT * FROM reservation  where loginClient="$login" ');
while ($donnees =$requete->fetch())
{
?>

<tr>
<td><?php echo $donnees['id']; ?></td>
<td><?php echo $donnees['depart']; ?></td>
<td><?php echo $donnees['retour']; ?></td>
<td><?php echo $donnees['categorie']; ?></td>
<td><?php echo $donnees['km']; ?></td>
<td><?php echo $donnees['age']; ?></td>
<td><?php echo $donnees['paiement']; ?></td>
<td><?php echo $donnees['immatriculation']; ?></td>
<td><?php echo $donnees['loginClient']; ?></td>
<td><form action="reservation.php" method="post"><input type='hidden' id='id' name='id' value=<?php echo $donnees['id'] ?> /><button class="btn btn-danger" name="supprimer" type="submit">Supprimer</button>
</form><form action="updateReservation.php" method="post"><input type='hidden' id='id' name='id' value=<?php echo $donnees['id'] ?> /><button class="btn btn-primary" name="modifier" type="submit">Modifier</button></form></td>";
</tr>

<?php
} 
?>                
                    </div>
           


    </div>
</body>
</html> 
