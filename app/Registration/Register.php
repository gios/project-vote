<?php

namespace App\Registration;

/**
 * Register.
 */
class Register
{
  public function checkLoginField($loginField) {
    if (!preg_match("/^[a-zA-Z0-9]+$/", $loginField)) {
      return $err[] = "Login must be contains english letters and numbers";
    }
  }
}
?>

<form method="post">
  <div class="form-group">
    <label for="registrationLogin">Login</label>
    <input type="text" class="form-control" id="registrationLogin" placeholder="Enter login">
  </div>
  <div class="form-group">
    <label for="registrationPassword">Password</label>
    <input type="password" class="form-control" id="registrationPassword" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default">Registration</button>
</form>
