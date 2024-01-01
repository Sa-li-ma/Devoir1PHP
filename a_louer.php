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
    font-size: 32px;
    font-family: 'Times New Roman', Times, serif;
    color:rgb(51, 2, 2);
    width: 90%;
    height: 300px;
    display: center;
    margin-left: 60px;
    text-align: center;
    text-emphasis:rgb(120, 2, 2);

}
.corpss{
    height: 500px;
    background-color: rgb(246, 238, 238);
}
section.corps:hover{
    border: 3px rgb(51, 2, 2);}
.blanc{
    background-color: white;
}
.tab{
    background-color: rgb(246, 238, 238);
}
    </style>
</head>
<body>
   
    <section class="corpss">
       <h1>Location d'immobiliers</h1>
       <fieldset class = "blanc">
            <legend>Appartements</legend>
           <table border ="1" class = "tab">
                <thead>
                    <td>
                        Quartier
                    </td>
                    <td>
                        Salon
                    </td>
                    <td>
                    <abbr title="Nombre">N</abbr> chambres
                    </td>
                    <td>
                        Nombre de <abbr title="Salle De Bain">SDB</abbr>
                    </td>
                    <td>
                        Cuisine

                    </td>
                    <td>
                        Prix en fcfa
                    </td>
                    <td>
                        Contacts
                    </td>
                </thead>
                <tr>
                    <td>
                        Mermoz
                    </td>
                    <td>
                        15 m²
                    </td>
                    <td>
                        2
                    </td>
                    <td>
                        1
                    </td>
                    <td>
                        6 m²

                    </td>
                    <td>
                        45000000
                    </td>
                    <td>
                        +221775223652
                    </td>
                    
                </tr>

                <tr>
                    <td>
                        Liberté 6
                    </td>
                    <td>
                        25 m²
                    </td>
                    <td>
                        4
                    </td>
                    <td>
                        2
                    </td>
                    <td>
                        9 m²

                    </td>
                    <td>
                        55000000
                    </td>
                    <td>
                        +2216825458
                    </td>
                    
                </tr>

                <tr>
                    <td>
                        Ouakam
                    </td>
                    <td>
                        15 m²
                    </td>
                    <td>
                        3
                    </td>
                    <td>
                        2
                    </td>
                    <td>
                        8 m²

                    </td>
                    <td>
                        40000000
                    </td>
                    <td>
                        +2217854852
                    </td>
                    
                </tr>

                <tr>
                    <td>
                        Relais2
                    </td>
                    <td>
                        15 m²
                    </td>
                    <td>
                        3
                    </td>
                    <td>
                        2
                    </td>
                    <td>
                        6 m²

                    </td>
                    <td>
                        45000000
                    </td>
                    <td>
                        +221770205244
                    </td>
                    
                </tr>
           </table>
           
            <?php 
                
            ?>
        </fieldset>

    </section>

</body>
</html>
