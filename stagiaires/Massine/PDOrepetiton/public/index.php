<?php



require_once "../config.php";
require_once "../Model/Modele.php";

try {
    // nouvelle instance de PDO
    $db = new PDO(
        DB_DSN,
        DB_CONNECT_USER,
        DB_CONNECT_PWD,
        // tableau d'options
        [
            // par défaut les résultats sont en tableau associatif
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            // Afficher les exceptions
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]
    );
} catch (Exception $e) {
    // arrêt du script et affichage du code erreur, et du message
    die("Code : {$e->getCode()} <br> Message : {$e->getMessage()}");
}

$messages = getMessageDesc($db);

if(isset($_POST['name'],$_POST['email'],$_POST['text'])){
    $insert = setArticle($db,$_POST['name'],$_POST['email'],$_POST['text']);

    if($insert===true){
        header("Location: ./");
        exit();
    }else{
        $erreur = $insert;    
    }
}


require_once "../view/pagedaccueil.php";

$db=null;

?>