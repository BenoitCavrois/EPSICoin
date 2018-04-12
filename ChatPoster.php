<?php 
$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');

//secure the chat
if(isset($_POST['text']) && isset($_POST['name']))
{
	$text = strip_tags(stripslashes($_POST['text']));
	$name = strip_tags(stripslashes($_POST['name']));

	if(!empty($text) && !empty($name)){
		$insert = $bdd->prepare("INSERT INTO message VALUES ('','".$name."','".$text."')");
		$insert->execute();

		echo "<li class='cm'><b>".ucwords($name)."</b> - ".$text."</li>";
	}
}
?>