
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
table a:link {
    color: #666;
    font-weight: bold;
    text-decoration:none;
}
table a:visited {
    color: #999999;
    font-weight:bold;
    text-decoration:none;
}
table a:active,
table a:hover {
    color: #bd5a35;
    text-decoration:underline;
}
table {
    font-family:Arial, Helvetica, sans-serif;
    color:#666;
    font-size:12px;
    text-shadow: 1px 1px 0px #fff;
    background:#eaebec;
    margin:20px;
    border:#ccc 1px solid;

    -moz-border-radius:3px;
    -webkit-border-radius:3px;
    border-radius:3px;

    -moz-box-shadow: 0 1px 2px #d1d1d1;
    -webkit-box-shadow: 0 1px 2px #d1d1d1;
    box-shadow: 0 1px 2px #d1d1d1;
}
table th {
    padding:21px 25px 22px 25px;
    border-top:1px solid #fafafa;
    border-bottom:1px solid #e0e0e0;

    background: #ededed;
    background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
    background: -moz-linear-gradient(top,  #ededed,  #ebebeb);
}
table th:first-child {
    text-align: left;
    padding-left:20px;
}
table tr:first-child th:first-child {
    -moz-border-radius-topleft:3px;
    -webkit-border-top-left-radius:3px;
    border-top-left-radius:3px;
}
table tr:first-child th:last-child {
    -moz-border-radius-topright:3px;
    -webkit-border-top-right-radius:3px;
    border-top-right-radius:3px;
}
table tr {
    text-align: center;
    padding-left:20px;
}
table td:first-child {
    text-align: left;
    padding-left:20px;
    border-left: 0;
}
table td {
    padding:18px;
    border-top: 1px solid #ffffff;
    border-bottom:1px solid #e0e0e0;
    border-left: 1px solid #e0e0e0;

    background: #fafafa;
    background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
    background: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);
}
table tr.even td {
    background: #f6f6f6;
    background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
    background: -moz-linear-gradient(top,  #f8f8f8,  #f6f6f6);
}
table tr:last-child td {
    border-bottom:0;
}
table tr:last-child td:first-child {
    -moz-border-radius-bottomleft:3px;
    -webkit-border-bottom-left-radius:3px;
    border-bottom-left-radius:3px;
}
table tr:last-child td:last-child {
    -moz-border-radius-bottomright:3px;
    -webkit-border-bottom-right-radius:3px;
    border-bottom-right-radius:3px;
}
table tr:hover td {
    background: #f2f2f2;
    background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
    background: -moz-linear-gradient(top,  #f2f2f2,  #f0f0f0);  
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


<table cellspacing='0'> <!-- cellspacing='0' is important, must stay -->

	<!-- Table Header -->
	<thead>
		<tr>
			<th>ID</th>
			<th>Login</th>
			<th>Prénom</th>
			<th>Nom</th>
			<th>Télephone</th>
			<th>Email</th>
			<th>Adresse</th>
		</tr>
	</thead>
	<!-- Table Header -->

	<!-- Table Body -->
	<tbody>

		<tr>
			<td>Create pretty table design</td>
			<td>100%</td>
			<td>Yes</td>
		</tr><!-- Table Row -->

		<tr class="even">
			<td>Take the dog for a walk</td>
			<td>100%</td>
			<td>Yes</td>
		</tr><!-- Darker Table Row -->

		
	</tbody>
	<!-- Table Body -->

</table>
<?php
	include("footer.php");
	?>
	</div>
</body>
</html> 