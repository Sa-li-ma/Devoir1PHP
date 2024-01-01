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
    width: 1000px;
}
header{
    border-bottom: 1px solid brown;
}
header li {
    
    display: inline-block;
    vertical-align: top;
    position: relative;
    background-color: rgb(234, 205, 205);
    
    
}
 header li a{
    display: block;
    padding: 15px;
    border: 2px black;
    height: 2px;

    

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
    font-size: 28px;
    font-family: 'Times New Roman', Times, serif;
    color:rgb(51, 2, 2);
    width: 90%;
    height: 285px;
    display: center;
    margin-left: 60px;
    text-align: center;
    text-emphasis:rgb(120, 2, 2);

}
section.corps:hover{
    border: 3px rgb(51, 2, 2);}
.type{
    text-align : left;
}
.typee{
    text-align : left;
    background-color: rgb(246, 238, 238);
}
textarea{
    width: 400px;
    height : 200px;
    font-family: 'Times New Roman', Times, serif;
    font-size: 20px;
    background-color: rgb(246, 238, 238);
    
}
button{
    width: 150px;
    height: 100px;
    font-size: 40px;
    font-family: 'Times New Roman', Times, serif;
    
}



    </style>
</head>
<body>
   
    <section class="corps">
       <h1>Vente d'immobiliers</h1>
        <p>Nous allons publier votre offre, Veuilez nous renseigner sur votre bien</p>
        <form action="">
           <fieldset class="type">
                <legend>TYPE</legend>
                <input type="radio" name ="imp">
                <label for="maison">Maison</label> <br>
                <input type="radio" name ="imp">
                <label for="app">Appartement</label> <br>
                <input type="radio" name ="imp">
                <label for="villa">Villa</label> <br>
           </fieldset> 
           <fieldset>
                <legend>OBLIGATOIRE</legend>
                <label for="quoi">Decrivez votre bien</label><br>
                <textarea id="quoi"  autofocus="autofocus"></textarea><br>
                <label for="add">Adresse du bien:</label>
                <input type="text">
                <fieldset class="typee">
                    <legend>Vos contacts</legend>
                    <label for="mail">E-mail:</label>
                    <input type="email" id="mail" name="mail"><br><br>
                    <label for="prenom">Prenom:</label>
                    <input type="text" id="prenom" name="prenom" autocomplete="on" ><br>
                    <label for="nom">Nom:</label>
                    <input type="text" id="nom" name="nom"><br>
                    <label for="nom">Numéro:</label>
                    <input type="number">
                </fieldset>
           </fieldset>
           <button type="submit">Publier</button>
            
        </form>
    </section>

</body>
</html>
