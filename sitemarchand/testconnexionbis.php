<?php 
// creer une liaison entre le serveur web (navigateur web) et le serveur de BD (my sql)
$con=mysql_connect("localhost","root","");
// selection de la BD
mysql_select_db("sitemarchand");
// on cree une requete sql qui permet d'afficher  la reference et le prix de ART56
$req="select reference,prix from article ";
// soumettre la requette au serveur
$result=mysql_query($req);
//on utilise une fonction sql qui permet de recuperer les infos et de les afficher sous forme de tableau

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    while ($recup=mysql_fetch_array($result)) {
        echo"la reference est ".$recup['reference']." et son prix est ".$recup['prix']."<br>";
    }
    
    ?>
</body>
</html>