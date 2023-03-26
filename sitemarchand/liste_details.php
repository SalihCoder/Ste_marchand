<?php
include("connexion.php");
$req="select reference ,prix from article";
$result=mysql_query($req);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <Style>
        a{
            color:white;
        }
        table{text-align:center;}
    </Style>
</head>
<body>
    <table bgcolor="blue" border="1">
        <caption><h3>CREATION D'UN ENSEMBLE Liste_details:</h3></caption>
        <tr>
            <th>REFERENCE</th>
            <th>PRIX</th>
            <th>VOIR FICHE</th>
        </tr>
        <?php
        while ($recup=mysql_fetch_array($result)) { ?>
        <tr>
            <td><?php echo$recup['reference'];?></td>
            <td><?php  echo$recup['prix'];?></td>
            <td><a href="fiches.php?reference=<?php echo $recup['reference'];?>">voir</a></td>

        </tr>
            <?php } ?>
    </table>
</body>
</html>