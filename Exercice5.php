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
    height: 350px;
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
        <h1>Exercice 5 :</h1>
        <p>Ici nous allons vous calculer le périmèttre, le diamètre et la surface <br>
            d'un cercle dont vous donnerez le rayons.
        </p>
        <form action="Exercice5.php" method="POST">
        <label for="donnee">Donnez le rayon de votre cercle:</label>
        <input type="text" name = "number" required>
        <button type="submit">Calculer</button> <br>
        <?php 
             if(isset($_POST['number'])){
                $rayon = (int)$_POST['number'];
                $diametre = $rayon * 2;
                $perimetre = $diametre * 3.14;
                $surface = 3.14 * $rayon * $rayon;
            }
        
            if(isset($diametre) && isset($perimetre) && isset($surface)){
                echo "Le diamètre est: " . $diametre . "<br>
                    Le périmètre est: " . $perimetre . "<br>
                    La surface est: " . $surface . "<br>";
            }
        
        ?>

    </form>
    </section>

</body>
</html>
