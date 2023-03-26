<?php
//require_once() idem
include("connexion.php");
$req="select * from article where reference='GIB78' ";
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
        <caption><h3>Fiche de l'article GIB78</h3></caption>
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
    <th>Famille</th>
    <td><?php echo $recup['familleID'];?></td>
</tr>
    </table>
</body>
</html>