<?php
//get User name
$user=$_GET['u'];
?>
<html>
<head>
	<title>Chat</title>
	<link rel='stylesheet' type='text/css' href='css/style.css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<script src= "//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="javaScript/Chat.js"></script>
</head>
<body>
	<div class='chatContainer'>
		<div class='chatHeader'>
			<h3>Bonjour : <?php echo ucwords($user); ?></h3>
		</div>
		<div class='chatMessages'> 
			<?php 
			//connection
			$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');

			//get message
			$query=$bdd->prepare("SELECT * FROM message");
			$query->execute();

			//fetch
			while($fetch=$query->fetch(PDO::FETCH_ASSOC))
			{
				$nom=$fetch['nom'];
				$message=$fetch['message'];

				echo "<li class='cm'><b>".ucwords($nom)."</b> - ".$message."</li>";
			}
			?>
		</div>
		<div  class='chatBottom'>
			<form action='#' onSubmit='return false;' id='chatForm'>
				<input type='hidden' id='name' value='<?php echo $user; ?>'/>
				<input type='text' name='text' id='text' value='' placeholder='Ecrire message'/>
				<input type='submit' name='submit' value='Envoyer'/>
			</form>
		</div>
	</div>
</body>
</html>