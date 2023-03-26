<?php
//require_once() idem
include("../connexion.php");
$req="select reference , prix from article ";
$result=mysql_query($req);
//requete de suppression
if(isset($_GET['sup'])){
    $reqs="DELETE from article where reference='".$_GET['reference']."'";
    $results=mysql_query($reqs);
    //fonction de redirection
    header("location:gestion.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
    a{
        color: green;
    }
    table{
        text-align: center ;
        width: 500px;
        height: 200px;
    }
    </style>
</head>
<body>
    <h1>MENU-PRINCIPAL</h1>
    <h3> <a href="#"> Deconnexion</a></h3>
    <h3> <a href="ajout.php"> Ajout d' un article </a></h3>
<table bgcolor="yellow" border="1">
        <caption><h3>creation d'un ensemble LISTE-DETAILS:</h3></caption>
        <tr>
            <th>REFERENCE</th>
            <th>prix</th>
            <th>voir fiche</th>
            <th>MODIF</th>
            <th>SUPP</th>
        </tr>
        <?php
    while ($recup=mysql_fetch_array($result)){ ?>
        <tr>
             <td><?php  echo $recup['reference']; ?></td>
             <td><?php  echo $recup['prix']; ?></td>
             <td><a href="../fiches.php?reference=<?php echo $recup['reference']; ?>">Voir</a></td>
             <td><a href="modif.php?reference=<?php echo $recup['reference']; ?>">modif</a></td>
             <td><a href="gestion.php?reference=<?php echo $recup['reference'];?>&sup=ok">Supp</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>