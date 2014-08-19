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
font: 2em "Tempus Sans ITC";
font-weight:bold;
font-size:90px;
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
    width: 170px;
    height: 23px;
    padding: 7px 0 0 15px;
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
		 	 	
			<?php
            include("header.php"); 
			include("nav1.php");
            if(isset($_SESSION['login']) and ($_SESSION['password']))
            echo 'Bienvenue '.$_SESSION['login'].' '.$_SESSION['password'];
            
			?>	
            <form action="deconnexion.php" method="post">
                     <p><button >Se déconnecter</button></p>
            </form>
<h2> Ajout de Voiture</h2>
</br>
</br>
<div id="vdo-8">
		<form method="POST" action="traitement.php" enctype="multipart/form-data">
		
				<p><label for="Marque"> Marque :</label> <input type="text" name="Marque" id="Marque" placeholder="Ex:Ford_Fiesta" ></p>
				
				
				<p><label for="Immatriculation"> Immatriculation : </label> <input type="text" name="Immatriculation" id="Immatriculation" placeholder="Ex:123654-15-86"></p>
				
				<p><label for="Version"> Version </label> <input type="text" name="Version" id="Version" ></p>
				
				<p><label for="Nbr_portes"> Nombre de portes </label> <input type="text" name="Nbr_portes" id="Nbr_portes" ></p>
				
				<p><label for="Climatisation"> Climatisation</label> <input type="text" name="Climatisation" id="Climatisation" ></p>
			
				<p><label for="nbr_passagers"> Nombre de passagers </label> <input type="text" name="nbr_passagers" id="nbr_passagers" ></p>
				
				<p><label for="Cpt_bagages"> Capacité des bagages </label> <input type="text" name="Cpt_bagages" id="Cpt_bagages" ></p>
				
                <p><label for="categorie"> Catégorie </label> 
            <SELECT name="categorie" id="categorie">
                    <OPTION value="citadine">Citadine</option>
                    <OPTION value="affaires">Affaires</option>
                    <OPTION value="confort">Confort</option>
                    <OPTION value="economique">Economique</option>
                    <OPTION value="luxe">Luxe</option>
                    <OPTION value="minibus">Minibus</option>
            </SELECT></p>
            
				<p><label for="Age_min_conducteur"> Age min Conducteur </label> <input type="text" name="Age_min_conducteur" id="Age_min_conducteur" ></p>
			</br>
				<p><label for="Air_Bag"> Air Bag </label> <input type="radio" name="Air_Bag" value="oui" id="oui" /><label for=“oui“>Disponible</label><input type="radio" name="Air_Bag" value="non" id="non" checked="checked" /> <label for="non">Non Disponible</label></p>
			</br>
				<p><input type="file" name="monfichier" id="monfichier" /></p>
			</br>
			</br>
				<p><input type="submit" value="Envoyer le fichier" /></p>

		</form>
</div>


<?php
	include("footer.php");
	?>
	</div>
</body>
</html> 	