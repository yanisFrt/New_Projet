<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>TaxiXpress</title>

        <link rel="stylesheet" href="../css/styleform.css">

    </head>
    <body>
        <nav>
            <ul>

                <?php 
                    if (isset($_SESSION['email'])) 
                    { 
                   echo "<li> <a href="../PHP/logout.php">Déconnexion</a></li>"
                    } 
                ?>



            </ul>

        </nav>
        <section id="appoinement">
            <div class="container">
                <div class="formulaire">
                    <h3>Réserver votre Taxi</h3>
                    <form action="#" method="post">
                        <input placeholder="Adresse départ" name="adresse" type="texte" required="" class="nom-famille">
                        <input placeholder="Adresse d'arrivée " name="adresse" type="txte" required="" class="email">
                        <input name ="date"type="date" required="" class="date">
                        <input placeholder="Entrer l'horaire souhaité" name="time" type="time" required="" class="horraire">
                        <button class="submit-btn">Soumettre</button>
                    </form>
                </div>
                <div class="formulaire-image">
                    <img src="../images/im4.jpg" alt="" >
                </div>
            </div>
        </section>
    </body>
    </html>
