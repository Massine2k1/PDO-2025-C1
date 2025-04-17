<?php
# public/index.php

/*
 * Contrôleur frontal
 */

# chargement des constantes de connexion en mode prod
require_once "../config.php";
# chargement du modèle (fonctions)
require_once "../model/MessagesModel.php";

# connexion à PDO


# ici notre code de traitement de la page

// si on a envoyé le formulaire avec les bons champs


    // on va tenter l'insertion, car on a protégé addMessage()






// on veut récupérer tous les messages de la table `messages`
//$messages = getAllMessagesOrderByDateDesc($db);

/*
 * Bonus mise en place de la pagination
 */

// on vérifie sur quelle page on est (et que c'est un string qui contient que des numériques sans "." ni "-" => ctype_digit)


# on compte le nombre total de messages


# on récupère la pagination


# pour obtenir le $offset pour les messages


# on veut récupérer les messages de la page courante


# chargement de la vue
require_once "../view/homepage.view.php";

# bonne pratique
# fermeture de connexion
$db = null;