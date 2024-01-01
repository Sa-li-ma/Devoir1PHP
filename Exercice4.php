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
    height: 330px;
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
    <h1>Exercice 4 :</h1>
    <p>Dans cet exercice nous calculons le PPCM de deux entiers</p>
<form action="" method ="post">
    <label for="a">Entrez le premier entier :</label>
    <input type="number" name = "a" min ="1" autofocus="autofocus" > <br>
    <label for="b">Entrez le deuxième entier :</label>
    <input type="number" name = "b" mon ="1" autofocus="autofocus"> <br>
    <button type = "submit">Calculer</button> <br>


    <?php 
        if(isset($_POST["a"]) && isset($_POST["b"])){
            $a =  $_POST["a"];
            $b = $_POST["b"];
            $min = $_POST["b"];
            $max = $_POST["a"];
            while ($a < 0 || $b < 0){
                echo "Merci de donner uniquement des entiers positifs";
                break;
            }
            if($min > $a){
                $min = $a;
                $max = $b;
            }
            function pgcd($max,$min){
                $r = 1;
                while ($r != 0){
                    $r = $max % $min;
                    $max = $min;
                    $min = $r;
                }
                return $max;
            }
            $ppcm = ($a * $b) / pgcd($a,$b);
            if(isset($ppcm)){
                echo "Le PPCM de $a et $b est $ppcm";
            }
        }
        else
            echo "Merci de renseigner les deux champs";
       
    ?>
</form>
       
    </section>

</body>
</html>
   