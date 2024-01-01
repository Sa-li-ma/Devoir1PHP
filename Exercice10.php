<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Aceuil</title>
    <style>
        boby {
     background-color:rgb(233, 181, 181);
    font-family: 'Times New Roman', Times, serif;
    color: rgb(51, 2, 2);
    font-size: 16px;
    line-height: 22px;

}
a {
    text-decoration: none;
    color: rgb(154, 8, 8);
}
.menu {
    margin: 0 auto;
    width:800px;
}
header{
    border-bottom: 5px solid brown;
}
header li {
    
    display: inline-block;
    vertical-align: top;
    position: relative;
    background-color: rgb(234, 205, 205);
    font-size : 14px;
    
    
}
 header li a{
    display: block;
    padding: 8px;
    border: 2px black;
    height: 3px;
    width: 80px;
    margin-bottom : 5px;
    margin-top : 1px;
    

}
header li :hover{
    background-color:rgb(207, 193, 221);
    color: brown;
}
header li:hover .sous{
    display: block;
    position: absolute;
    padding: 15px;
    color: rgb(38, 65, 65);
}

.sous{
    display: none;
    background-color:rgb(154, 83, 83);
}
section.corps{
    margin-top: 100px;
    background-color: rgb(246, 238, 238);
    font-size: 24px;
    font-family: 'Times New Roman', Times, serif;
    color:rgb(51, 2, 2);
    width: 90%;
    height: 1140px;
    display: center;
    margin-left: 60px;
    text-align: center;
    text-emphasis:rgb(120, 2, 2);

}
section.corps:hover{
    border: 3px rgb(51, 2, 2);}

    </style>
</head>
<body>
    <header>
        <nav class="menu">
            <ul type="none">
                <li> <a href="index.php">ACCUEIL</a></li>
                <li> <a href="">EXERCICES</a>
                    <ul type="none" class="sous">
                    <?php 
                            for($i =1; $i <=18; $i++){
                                echo '<li><a href="./Exercice'.$i.'.php">Exercice '.$i.'</a></li>';
                            }
                        ?>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <section class="corps">
        <h1>Exercice 10 :</h1>
        <p>
            Ici nous parcourons les tableaux des exercices 8 et 9 <br>
            à l'aide de la boucle "foreach" <br>
        </p>
       <?php 
            $tab8 = [
                "N'DIAYE" => ["Salimata","Dakar",12],
                "THIAM" => ["Amina","Bamako",20],
                "DICKO" => ["Mariam","Niono",45],
                "DIALLO" => ["Khadija","Médine",15]
            ];
            echo "<h1> Tableau de l'exercice 8</h1> <br>";
            foreach($tab8 as $nom => $val){ //$tab8 est le nom de mon tableau associatif ; $nom la clé du tableau
                echo "$nom :<br>";

                foreach($val as $value){// $val est le nom de mon petit tableau indicé dont la clé es nom
                    echo "$value."; // $value ce sont les élément indicés
                }
                echo "<br>";
            }


            echo "<h1> Tableau de l'exercice 9</h1> <br>";
            $tab9 = [
                "N'DIAYE" => ["Salimata" => 'Salima',"Dakar" => 'DKR','12'=>12],
                "THIAM" => ["Aminata" => 'Amina',"Bamako" => 'BKO','20' => 20],
                "DICKO" => ["Mariam" => 'Mami',"Niono" => 'Nno','45' => 45],
                "DIALLO" => ["Khadija" => 'Dij',"Médine" => 'Mdn','15' => 15]
            ];
            foreach($tab9 as $key => $vl){// $tab9 c'est le nom de mon tableau associatif dont la clé est $key
                echo "$key : <br>";
                foreach( $vl as $key2 => $vl2){//$vl est le nom du petit tableau associatif dont $key2 est la clé et $vl2 la valeur des cette clé
                    echo "$key2 : $vl2 <br>";
                }
                echo "<br>";
            }
       ?>

</body>
</html>
