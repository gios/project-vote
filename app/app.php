<?php

namespace App;

require_once 'Registration/Register.php';
use App\Registration\Register;

Register::checkMySQLConnection('localhost', 'root', 'qwerty');

?>
