<?php
include("connexion.php");
$req="select * from article";
$resultat=mysql_query($req);

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
    <table bgcolor="blue" border="1">
        <caption>Liste des articles</caption>
        <tr>
            <th>REFERENCE</th>
            <th>PRIX</th>
            <th>DESCRIPTION</th>
            <th>FAMILLE</th>
            </tr>
        
        <?php
    while ($recup=mysql_fetch_array($resultat)) { ?>
        <tr>
            <td><?php echo $recup['reference'];?> </td>
            <td><?php echo $recup['prix'];?> </td>
            <td><?php echo $recup['description'];?> </td>
            <td><?php echo $recup['familleID'];?> </td>
            </tr>
    
    <?php } ?>
    </table>
    
</body>
</html>