<?php
session_start();



$passwordLenght = isset($_GET['passwordLenght']) ? $_GET['passwordLenght'] : 0;
$alfabetoMinuscolo = range('a', 'z');
$alfabetoMaiuscolo = range('A', 'Z');
$numeri = range(0, 9);
$simboli = array('!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '+', '-', '=', '[', ']', '{', '}', ';', ':', ',');

function passwordGenerator($passwordLenght, $lettMai, $lettMin)
{
    $array = array_merge($lettMai, $lettMin);
    $password = '';
    if ($passwordLenght > 1) {
        $arrayKey = array_rand($array, $passwordLenght);
        shuffle($arrayKey);
    } elseif ($passwordLenght == 1) {
        $arrayKey = array_rand($array, $passwordLenght);
    } else {
        $arrayKey = 0;
    }

    if ($passwordLenght > 1) {

        foreach ($arrayKey as $value) {
            $password .= $array[$value];
        };
    } elseif ($passwordLenght == 1) {
        $password .= $array[$arrayKey];
    } elseif ($passwordLenght == 0) {
        $password .= 'Ti consiglio di riconsiderare la lunghezza della password. Una password sicura contiene ALMENO un carattere.';
    }

    return $password;
}
