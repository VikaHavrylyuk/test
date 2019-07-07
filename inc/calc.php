<?php

$operations = ['-', '+', '*', '/'];

if (isset($_POST['sub'])){

    $err = '';
    if (!is_numeric($_POST['x1']) || !is_numeric($_POST['x2'])) {
        $err .= "Введіть числа!";
    }

    if ($_POST['x2'] == 0 & $_POST['operation'] === '/') {
        $err .= "Ділення на 0!";
    }

    if (mb_strlen($_POST['x1']) > 20 || mb_strlen($_POST['x2']) > 20) {
        $err .= "Завелике число!";
    }

    if (!$err) {
        $res = 0;
        switch ($_POST['operation']) {
            case '+': $res = $_POST['x1'] + $_POST['x2']; break;
            case '-': $res = $_POST['x1'] - $_POST['x2']; break;
            case '/': $res = $_POST['x1'] / $_POST['x2']; break;
            case '*': $res = $_POST['x1'] * $_POST['x2']; break;
            default: $err = "Операції не існує!!!";
        }
    }
}


