<?php

function hash_pass($pass)
{
    $hash = password_hash($pass, PASSWORD_DEFAULT); // создает соль и кодирует пароль
    return $hash; // выводит результат функции
}

function verif_pass($pass, $hash){
    $verifypass = password_verify($pass, $hash); // пррверяет правильность ввода пароля
    return $verifypass; // выводит результат функции
    }
?>