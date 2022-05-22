<?php

session_start();


if (isset($_SESSION['calc_result'])) {
    echo "Результат вычислений: {$_SESSION['calc_result']}\n<hr>";

    unset($_SESSION['calc_result']);
}
else if (isset($_SESSION['errors'])) {
    foreach ($_SESSION['errors'] as $error) {
        echo "<span style='color: red;'>$error</span>\n<hr>";
    }

    unset($_SESSION['errors']);
}


$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$act = $_POST['act'];
$send = $_POST['send'];
$result = 0;
$errors = [];

if (isset($send)) {
    if (mb_strlen($n1) == 0 || mb_strlen($n2) == 0) {
        $errors[] = "Вы не ввели какое-то из двух чисел";
    }

    $n1 = intval($n1);
    $n2 = intval($n2);
}

switch($act) {
    case 'plus': {
        $result = $n1 + $n2;
        break;
    }
    case 'minus': {
        $result = $n1 - $n2;
        break;
    }
    case 'multiple': {
        $result = $n1 * $n2;
        break;
    }
    case 'divide': {
        if ($n2 == 0) {
            $errors[] = "Второе число при делении не может быть нулём";
            break;
        }

        $result = $n1 / $n2;
        break;
    }
}

if ($act) {
    if (empty($errors)) {
        $_SESSION['calc_result'] = $result;
    }
    else {
        $_SESSION['errors'] = $errors;
    }

    header("Location: /");
}