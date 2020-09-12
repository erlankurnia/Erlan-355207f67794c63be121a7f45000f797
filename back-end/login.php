<?php

require_once 'config.php';

$config = new Config();

var_dump($_POST);

if(isset($_POST['username']))
{
  if(isset($_POST['password']))
  {
    if ($config->Login($_POST['username'], $_POST['password']))
    {
      echo 'true';
    }
    else
    {
      echo 'false';
    }
  }
  else
  {
    echo 'Password salah!';
  }
}
else
{
  echo 'Username tidak ditemukan';
}

$config->CloseConnection();

?>