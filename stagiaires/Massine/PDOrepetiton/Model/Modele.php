<?php

function getMessageDesc(PDO $data) : array
{
    $recup = $data->query("SELECT * FROM `article` ORDER BY `create_date` DESC");
    return $recup->fetchAll();
}

function setArticle(PDO $datas, string $name, string $email, string $text): bool | string

{
    $error="";
    $nameInsert = trim(htmlspecialchars(strip_tags($name),ENT_QUOTE));
    $emailInsert = filter_var($email,FILTER_VALIDATE_EMAIL);
    $textInsert = trim(htmlspecialchars(strip_tags($name),ENT_QUOTE));

    if(empty($nameInsert)) $error .= "Nom incorrecte<br>";
    if(strlen($name) > 30) $error .= "Nom trop long<br>";
    if($emailInsert===false) $error .= "Email non valide<br>";
    if(strlen($emailInsert) > 30) $error .= "Email trop long<br>";
    if(empty($textInsert)) $error .= "Texte non valide<br>";
    if(strlen($textInsert) > 200) $error .= "Texte trop long<br>";

    if(!empty($error)) return $error;

    $inject = $datas->prepare("INSERT INTO `article` (`surname`,`email`,`message`) VALUES (?,?,?);");

    $inject->execute([$name,$email,$text]);
    return true;

}