<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style_2.css" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> ПОЛЕ РЕГИСТРАЦИИ </h1>
    <form method="post" action="http://mvc/avtoriz/create">
    <input type = "text" name = "name"  placeholder = "create name">
    <input type = "text" name = "pass"  placeholder = "create password">
    <input type = "submit" name = "add" value = "add">
    </form>

<h2><br> ПОЛЕ АВТОРИЗАЦИИ </h2>
    <form method="post" action="http://mvc/avtoriz/auth">
    <input type = "text" name = "name"  placeholder = "enter name">
    <input type = "text" name = "pass"  placeholder = "enter password">
    <input type = "submit" name = "Login" value = "Login">
    </form>

</body>
</html>
<?php

?>