<?php
//require_once() idem
include("../connexion.php");
//requete MENU DEROULANT
$reqm="select * from familles ";
$resultatm=mysql_query($reqm);

//requete d insertion
if(isset($_POST['bouton'])) {
//copie la photo
if(($_FILES['photo']['error'])==0){
    copy($_FILES['photo']['tmp_name'], "../images/".$_FILES['photo']['name']);
}
if(($_FILES['photo']['error'])==0){
    $reqi="INSERT INTO article SET reference='".$_POST['ref']."',
    prix='".$_POST['prx']."',description='".$_POST['desc']."', familleID='".$_POST['fam']."',photo='".$_FILES['photo']['name']."' ";
}
else{
    $reqi="INSERT INTO article SET reference='".$_POST['ref']."',
    prix='".$_POST['prx']."',description='".$_POST['desc']."', familleID='".$_POST['fam']."' ";
}
$resultati=mysql_query($reqi);
//redirection vers la page gestion.php
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
fieldset{
    display:block;
    float:left;
    left:450px;
    width:500px;
    background-color:greenyellow;
}
label{
    display:block;
    float:left;
    left:20px;
    width:200px;
    font-size:30px
}
    </style>
</head>
<body>
    <form method="post" action="ajout.php" enctype="multipart/form-data">
        <fieldset>
            <legend> AJOUT d'un ARTICLE </legend>
            <label> reference</label><input type="text" name="ref" required><br><br>
            <label> prix</label><input type="text" name="prx" required><br><br>
            <label> description</label><input type="text" name="desc" required><br><br>
            <label> famille</label><select name="fam">
                <?php while ($recupm= mysql_fetch_array($resultatm)){ ?>
                    <option value="<?php echo $recupm['ID']; ?>">
                        <?php echo $recupm['intitule']; ?></option>
                <?php } ?>
            
            </select><br><br>
            <label>photo</label> <input type="file" name="photo"/><br><br>
            <input type="submit" name="bouton" value="envoyer"/> 
            <input type="reset" name="init" value="effacer"/>
            
        </fieldset>
</body>
</html>