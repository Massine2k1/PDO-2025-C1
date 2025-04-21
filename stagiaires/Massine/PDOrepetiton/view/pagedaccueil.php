<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
       <div class="container">
            <form action="" method="POST">
                <h1>Laissez-nous un message</h1>
                <label for="name">Nom: </label>
                <input type="text" name="name" id="name" require/>
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" require/>
                <label for="text">Texte: </label>
                <textarea name="text" id="text" rows="5" required></textarea>   
                <button type="submit">Envoyer</button>
            </form>
            <div class="cont_messages">
                <?php
                if(empty($messages)):
                ?>
                    <div class="nomessages">
                        <h2>Il n'y a pas encore de message</h2>
                        <p>Veuillez revenir plus tard</p>
                    </div>
                <?php
                else:
                $nbMessage = count($messages);
                $pluriel = ($nbMessage > 1)?"s":"";
                ?>
                <h2>Il y a <?=$nbMessage?> message<?=$pluriel?></h2>
                <?php
                    foreach($messages as $messages):
                ?>
                    <div class="messages">
                        <h3>Nom: <?=$messages['surname']?></h3>
                        <p>Message: </p>
                        <p><?=$messages['message']?></p>
                        <p>Email: <?=$messages['email']?></p>
                    </div>
                <?php
                endforeach;
                    ?>
                <?php
                endif;
                ?>
            </div>
        </div>
</body>
</html>