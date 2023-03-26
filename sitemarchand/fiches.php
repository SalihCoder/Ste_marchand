<?php
//require_once() idem
include("connexion.php");
$req="SELECT a.reference,a.prix,a.description,a.photo,f.intitule FROM article AS a,familles AS f WHERE (a.familleID=f.ID) AND a.reference='".$_GET['reference']."'";
$result=mysql_query($req);
$recup=mysql_fetch_array($result);

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
    <table border="blue" bgcolor="blue">
        <caption><h3>Fiche de l'article <?php  echo $recup['reference'];?></h3></caption>
<tr>
    <th>Reference</th>
    <td><?php echo $recup['reference'];?></td>
</tr>
<tr>
    <th>Prix</th>
    <td><?php echo $recup['prix'];?></td>
</tr>
<tr>
    <th>Description</th>
    <td><?php echo $recup['description'];?></td>
</tr>
<tr>
    <th>PHOTO</th>
    <td><img src="images/<?php echo $recup['photo'];?>" alt="photo" width="150" height="150"></td>
</tr>
<tr>
    <th>Famille</th>
    <td><?php echo $recup['intitule'];?></td>
</tr>
    </table><br>
    <input type="buton" name="retour" value="Retour"onclick="self.history.back();">
</body>
</html>