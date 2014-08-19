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
    width: 80px;
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
		 	 	
			<?php include("header.php"); 
			include("nav.php");
			?>	

				<h2>Formulaire de contact</h2>
				<div id="vdo-8">
					<form action="#" method="post">
						<p><label for="inpNom">Nom:</label><input type="text" id="inpNom" /></p>
						<p><label for="inpPrenom">Prénom:</label><input type="text" id="inpPrenom" /></p>
						<p><label for="inpCivilite">Civilité:</label>
						<SELECT name="inpCivilite" id="inpCivilite" size="1">
							<OPTION>Mademoiselle
							<OPTION>Madame
							<OPTION>Monsieur
						</SELECT></p>
						<p><label for="inpVille">Ville:</label><input type="text" id="inpVille" /></p>
						<p><label for="inpEmail">Email:</label><input type="text" id="inpEmail" /></p>
						<p><label for="inpCodePostal">Code Postal:</label><input type="text" id="inpCodePostal" /></p>
						<p><label for="inpObjet">Objet:</label><input type="text" id="inpObjet" /></p>
						<p><label for="inpMessage">Message:</label><textarea ></textarea rows="20"></p></br>
						<p><button type="button">Envoyer</button></p>
					</form>
				</div>
				
				<?php
	include("footer.php");
	?>
	</div>
</body>
</html> 