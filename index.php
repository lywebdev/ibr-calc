<?php
    include_once('calc.php');
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculation</title>

    <style>
        input, select, button {
            height: 35px;
            margin: 0;
            padding: 7px 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            outline: none;
        }
        input:focus,select:focus,button:focus {
            border-color: black;
        }

        button {
            cursor: pointer;
        }
    </style>
</head>
<body>
<div id="app">
    <form action="" method="post">
        <input type="number" placeholder="Число 1" name="n1">
        <select name="act" id="act">
            <option value="plus">+</option>
            <option value="minus">-</option>
            <option value="multiple">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" placeholder="Число 2" name="n2">
        <button type="submit" name="send">Посчитать</button>
    </form>
</div>
</body>
</html>
