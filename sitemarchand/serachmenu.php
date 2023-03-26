<?php
include("connexion.php");
if(isset($_GET['fam'])){
$req="select reference ,prix from article where familleID='".$_GET['fam']."'      ";}
else{
    $req="select reference ,prix from article";

}
$result=mysql_query($req);
//requette menu deroulant 
$reqm="select * from familles";
$resultm=mysql_query($reqm);

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
    <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <fieldset>
            <label>Selectionner une famille</label>
            <select name="fam">
                <?php while ($recupm=mysql_fetch_array($resultm)) {?>
                    <option <?php if(! isset ($_GET['fam'])) $_GET['fam']=1;if ($_GET['fam']==$recupm['id']) echo "selected='selected'"; ?> value="<?php echo $recupm['id'];?>">
                    <?php echo $recupm['intitule'];?></option>
                    <?php } ?>
            </select>
    <input type="submit" name="bouton" value="envoyer">
    </fieldset>
    </form>
    <table bgcolor="blue" border="1">
        <caption><h3>CREATION D'UN ENSEMBLE Liste_details:</h3></caption>
        <tr>
            <th>REFERENCE</th>
            <th>PRIX</th>
            <th>VOIR FICHE</th>
        </tr>
        <?php
        while ($recup=mysql_fetch_array($result)) {?>
        <tr>
            <td><?php echo$recup['reference'];?></td>
            <td><?php  echo$recup['prix'];?></td>
            <td><a href="fiches.php?reference=<?php echo $recup['reference'];?>">voir</a></td>

        </tr>
            <?php } ?>
    </table>
</body>
</html>