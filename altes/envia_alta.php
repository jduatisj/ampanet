<? ob_start(); ?>
<?php
session_start();
$correu_ampanet = "correu.ampanet@gmail.com";
$nom=$_POST['Nom'];
$cognom1=$_POST['Cognom1'];
$cognom2=$_POST['Cognom2'];
$correu=$_POST['Correu'];
if (empty($nom) || empty($cognom1) || empty($cognom2) || empty($correu))
{
	$_SESSION["Error"]=3;
	header('location: solicita_alta.php');
	die();
}

$subjecte = "AMPANET - alta usuari";

$contingut = "<h1>Alta usuari</h1>"; 
$contingut .= "<p>Nom: ". $nom."</p>";
$contingut .= "<p>Cognom1:".$cognom1."</p>";
$contingut .= "<p>Cognom2:".$cognom2."</p>";
$contingut .= "<p>Correu:".$correu."</p>";

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: Admin AMPANET \r\n";
$headers .= "Reply-To: ".$correu."\r\n";

$ret = mail($correu_ampanet,$subjecte,$contingut,$headers);
if (!$ret)
{
	print($subjecte);
	print($contingut);
	print($correu);
	print($headers);
	$_SESSION["Error"]=201;
	//header('location: solicita_alta.php');
	die();
}
$_SESSION["Error"]=0;
header('location: ../index.php');
?>
<? ob_flush(); ?>
