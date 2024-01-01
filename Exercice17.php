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
    font-size: 32px;
    font-family: 'Times New Roman', Times, serif;
    color:rgb(51, 2, 2);
    width: 90%;
    height: 800px;
    display: center;
    margin-left: 60px;
    text-align: center;
    text-emphasis:rgb(120, 2, 2);

}
section.corps:hover{
    border: 3px rgb(51, 2, 2);}
    table{
    margin-left: 300px;
    background-color: white;
    width: 550px;
}

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
        <table>
            <thead></thead>
            <tr>
                <td>
                    
                </td>
            </tr>
        </table>
        <h1>Exercice 17:</h1>
        <p>Nous avons une fonction qui parcourt un tableau  multidimensionnels et <br>
            qui affiche le resultat sous forme de de tableeau XHTML .
     </p>
       <?php 
       $tab = [
        "N'DIAYE" => ["Salimata","Dakar",12],
        "THIAM" => ["Amina","Bamako",20],
        "DICKO" => ["Mariam","Niono",45],
        "DIALLO" => ["Khadija","Médine",15]
         ];
            function parcours_tab($tab){
                foreach($tab as $nom => $val){ //$tab est le nom de mon tableau associatif ; $nom la clé du tableau
                   
                    echo "<table border='1'>";
                    echo " <tr><th colspan='3'>  ".$nom."</th> </tr> ";
                    echo "<tr>";
                    foreach($val as $value){// $val est le nom de mon petit tableau indicé dont la clé es nom
                        // $value ce sont les élément indicés
                        echo "<td>".$value. "</td>";
                    }
                    echo "</tr> </table> <br> ";
                }
            }
            parcours_tab($tab);

       ?>
    </section>

</body>
</html>
