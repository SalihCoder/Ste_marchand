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
//type string
$nom="Dieylani";
$prenom="Gassama";
//gettype permet de connaitre le type d'une variable en php
// pour afficher le contenue a l'ecran echo() et print()
echo "$prenom $nom <br>";
echo gettype ( $nom);
echo $prenom." ".$nom."<br>";
$retour="<br>";  

    //type double
    $prix=100.75;
    echo $prix;
    echo gettype($prix);
    echo $retour;
    
    //type integer
    $age=22;
    echo  $age;
    echo gettype($age);
    echo $retour;
    //type boolean
    $reponse=(4==4);
    echo $reponse;
    echo gettype($reponse);
    echo $retour;
    //type tableau indice
    $tab[0]=14;
    $tab[1]=8;
    $tab[2]=13.5;
    $tab[3]=17;
    echo $tab[2];
    echo gettype($tab);
    echo $retour;
      //type tableau indice autre
      $tab[]=14;
      $tab[]=8;
      $tab[]=13.5;
      $tab[]=17;
      echo $tab[1];
      echo "<pre>";
      print_r($tab);
      echo "</pre>";
      echo gettype($tab);
      echo $retour;
      //type tableau associatif
      $note= array('jean'=> 16.5,'sali'=>18,'abdou'=>13.5);
      echo $note['jean'];
      echo gettype($note);
      echo "<pre>";
      print_r($note);

      echo "</pre>";
      //tableau a plusieurs dimension
      $ligne[0][0]=12;
      $ligne[0][1]=15;
      $ligne[0][2]=15;
      $ligne[1][0]=8;
      $ligne[1][1]=15;
      $ligne[1][2]=9;
      $ligne[2][0]=7;
      $ligne[2][1]=14;
      $ligne[2][2]=11;
      echo $ligne[2][1];
      echo gettype($ligne);
      $retour;
      echo "<pre>";
      print_r($ligne);
      echo "</pre>";
        $retour;
    

    
      
      

?>



     
</body>
</html>