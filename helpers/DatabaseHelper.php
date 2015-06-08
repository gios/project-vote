<?php

namespace Helpers;

/**
 * Database Helper.
 */
class DatabaseHelper
{
    public static function checkDatabaseConnection($host = 'localhost', $name = 'root', $password)
    {
        $conn = mysql_connect($host, $name, $password);
        if (!$conn) {
            die('<strong>Could not connect</strong>: '.mysql_error());
        }
        echo <<<HTML
        <div class="alert alert-success" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        Connected successfully
        </div>
HTML;
        mysql_close($conn);
    }
}

?>
