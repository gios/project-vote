<?php

namespace App\Registration;

/**
 * Register.
 */
class Register
{

    public static function checkMySQLConnection($host = 'localhost', $name = 'root', $password)
    {
        $conn = mysql_connect($host, $name, $password);
        if (!$conn) {
            die('Could not connect: '.mysql_error());
        }
        echo 'Connected successfully';
        mysql_close($conn);
    }
}
?>

<form method="POST">
Логин <input name="login" type="text"><br>
Пароль <input name="password" type="password"><br>
<input name="submit" type="submit" value="Зарегистрироваться">
</form>
