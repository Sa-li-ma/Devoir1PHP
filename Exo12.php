<?php

    if(isset($_POST["nom"]) & isset($_POST["prenom"]) & isset($_POST["email"]) & isset($_POST["adresse"]) & isset($_POST["ville"]) & isset($_POST["code"])){
        $nom = $_POST["nom"] ;
        $prenom = $_POST["prenom"] ;
        $email = $_POST["email"] ;
        $adresse = $_POST["adresse"] ;
        $ville = $_POST["ville"] ;
        $code = $_POST["code"] ;
        echo "<table border ='1'>";
        echo "<tr> <td> Nom </td> <td> $nom </td> </tr>";
        echo "<tr> <td> Prenom </td> <td> $prenom </td> </tr>";
        echo "<tr> <td> E-mail</td> <td> $email </td> </tr>";
        echo "<tr> <td> Adresse </td> <td> $adresse </td> </tr>";
        echo "<tr> <td> Ville</td> <td> $ville </td> </tr>";
        echo "<tr> <td> Code postal </td> <td> $code </td> </tr>";
        echo "</table>";

    }

?>
