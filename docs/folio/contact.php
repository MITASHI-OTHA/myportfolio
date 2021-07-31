<?php
if(isset($_POST["name"])){
//HEADER
$nom = $_POST["name"];
$email = $_POST["email"];
$website = $_POST["website"];
$address = $_POST["address"];
$message = $_POST["message"];
$sujet = $_POST["subject"];
$log = "yahanthony8@gmail.com";
$headers='From: "'.$nom.'" <"$email">'."\n";
$headers.='Reply-to: "$email"'."\n";
$headers.='content-type: text/html;charset="iso-8859-1"'."\n";
$headers.='content-transfert-encoding:8bit';
$objet="Contact portfolio";
$text="<html>
<body>
<h3>$nom ($website) - $sujet</h3>
<div align='center'>
$message
</div>
</body>
</html>";
mail($log,$objet,$text,$headers);
echo "ok";
//FIN
}else{
	echo "bad";
}
?>