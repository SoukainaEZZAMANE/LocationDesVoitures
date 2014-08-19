
           
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
            include("nav.php");
            
            ?>  
            
<div class="lateral">
<h2>Inscricption effectuée </h2>
<div id="vdo-8">

<p class="float">
<center><p>
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
                $login = $_POST['login'];
                $password = $_POST['password'];  
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $tel = $_POST['tel'];
                $email = $_POST['email'];
                $adresse = $_POST['adresse'];
                
    $req= $bdd->prepare('insert into client (id,login,password,nom,prenom,tel,email,adresse) values(default,:login,:password,:nom,:prenom,:tel,:email,:adresse)');

           $req->execute(array(
                ':login' => $login,
                ':password' => $password,  
                ':nom' => $nom,
                ':prenom' => $prenom,
                ':tel' => $tel,
                ':email' => $email,
                ':adresse' => $adresse
                
                ));
$req->closeCursor();
?>
    <p>Inscricption effectuée avec succès</p></br>
<?php
// On récupère tout le contenu de la table 
$reponse = $bdd->query('SELECT * FROM client ORDER BY `id` DESC LIMIT 1');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
 echo 'Login : '.$donnees['login'].'</br>';
 echo 'Nom :  '.$donnees['nom'].'</br>';
echo ' Prénom :   '.$donnees['prenom'].'</br>';
echo 'Mot de passe :  '.$donnees['password'].'</br>';
echo 'Tél : '.$donnees['tel'].'</br>';
echo 'Email : '.$donnees['email'].'</br>';
echo 'Adresse : '.$donnees['adresse'].'</br>';
 }?>
</p></center></div>
</div>


<?php
    include("footer.php");
    ?>
    </div>
</body>
</html> 