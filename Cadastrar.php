<?php
/**
 * Created by PhpStorm.
 * User: william
 * Date: 08/06/18
 * Time: 00:10
 */

require 'Config.php';


$nome = $_Post ['nome'];
$email = $_Post ['email'];
$site = $_Post ['site'];

$db->query("Insert Into Cliente (id, nome, email, site) VALUES (NULL ,'$nome','$email','$site')");

?>


<!doctype html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro do cliente</title>
</head>
<body>
<form action="" method="post"></form>
<label for="nome">Nome: <br/>
    <input type="text" name="nome" id="nome">
</label>
</br>
<label for="nome">E-Mail: <br/>
    <input type="text" name="email" id="email">
</label>
</br>
<label for="nome">Site: <br/>
    <input type="text" name="site" id="site">
</label>
</body>
</html>
