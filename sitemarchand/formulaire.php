<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        fieldset{
            display:block;
            float:left;
            left:250px;
            width:500px;
            background-color:gray;
        }
    label{
        display:block;
        float: left;
        left:10px;
        width:200px;
        font-size:15px;
    }



    </style>
</head>
<body>
    <form method="post" action="traitement.php">
        <fieldset><legend><h1>Inscription</h1></legend>
        <label>Matricule</label><input type="text" name="mat" required><br>
        <label>Nom</label><input type="text" name="nm" required><br>
        <label>Prenom</label><input type="text" name="pnm" required><br>
        <input type="submit" name="bouton" value="valider">
    
    
    
    
    </fieldset>
    </form>
</body>
</html>