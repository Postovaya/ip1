<?php

  session_start();

if (isset($_GET['action']))
    switch ($_GET['action']) {
        case 'add':
            setcookie($_GET['name'], $_GET['value']);
            $_SESSION[$_GET['name']] = $_GET['value'];
            break;
        case 'delete':
            unset($_SESSION[$_GET['name']]);
            break;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Куки</title>
</head>
<body>
<h1>Значения в куках<h1>
    <table>
        <tr>
             <th>Имя</th>
             <th>Значение</th>
             <th>Удалить?</th>
        </tr>

    <?php foreach ($_COOKIE as $name => $value) { ?>
        <tr>
            <td><?=$name?></td>
            <td><?=$value?></td>
            <td><a>Delete</a></td>
        </tr>
    <?php } ?>
    </table>


    <form method="get">
        <label> Name <input name="name"></label><br>
        <label> Значение <input name="value"></label><br>
        <button type="submit"> Добавить</button>
        <input type="hidden" name="action" value="add">
    </form>

</body>
</html>