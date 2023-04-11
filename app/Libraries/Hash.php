<?php

namespace App\Libraries;

class Hash
{
  //encrypt user password
  public function encrypt($password){
      return password_hash($password, PASSWORD_BCRYPT);
  }
}