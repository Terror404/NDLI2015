<%php
	$DBserver = '109.11.48.39';
	$userName = 'root'
	$passwd = 'rootMySQLItendstonight'
	$DB_name = 'BIND_DB'

	$connexionId = mysql_connect($DBserver,$userName,$passwd);

	if($connexionId) echo 'Connexion au serveur réussie';
	else echo 'Echec de la connexion au serveur' 

	$connexionDB = mysql_select_db($DB_name)
	if($connexionDB) echo 'Connexion à la base réussie';
	else echo 'Echec de la connexion à la base';
?>

	
