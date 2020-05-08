<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p>
	i am from a user interface bro!
	check me in the view section of the app folders
</p> 
<p>
	Les donnes sont recuperee dans le array des donnees depuis le controlleur test!
	<p>

	<?php 
	echo "Ton nom: " ;
	echo ''.$name.';';
	echo "	Ton job  " ;
	echo $job;

	?>
	<a href="<?php echo site_url('test'); ?>">accueil</a>
</p>
</body>
</html>