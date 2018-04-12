<?php 
//connection
$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');

//get message
$query=$bdd->prepare("SELECT * FROM message ");
$query->execute();

//fetch
while($fetch=$query->fetch(PDO::FETCH_ASSOC))
{
	$nom=$fetch['nom'];
	$message=$fetch['message'];

	echo "<li class='cm'><b>".ucwords($nom)."</b> - ".$message."</li>";
}
?>