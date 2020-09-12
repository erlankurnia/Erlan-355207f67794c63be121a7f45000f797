<?php

class Config 
{
  private $dbHost = 'localhost';
  private $dbUser = 'root';
  private $dbPass = '';
  private $dbName = 'test_mkm_erlankurnia';
  private $connection;

  public function __construct()
  {
    // Membuat koneksi ke database
    $this->connection = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass);
    if(!$this->connection)
    {
      die('Gagal melakukan koneksi: ' . mysqli_error($this->connection));
    }
    // Membuat Database jika belum ada
    $query = "CREATE DATABASE IF NOT EXISTS $this->dbName";
    $createDB = mysqli_query($this->connection, $query);
    if(!$createDB)
    {
      echo '<br>';
      die('Pembuatan database, gagal: ' . mysqli_error($this->connection));
    }
    mysqli_select_db($this->connection, $this->dbName);

    // Membuat table user jika tidak ada
    $query = "CREATE TABLE IF NOT EXISTS users(
            id INT(6) NOT NULL, 
            username VARCHAR(16) NOT NULL,
            password VARCHAR(32),
            PRIMARY KEY (id))";
    $createTable = mysqli_query($this->connection, $query);
    if(!$createTable)
    {
      echo '<br>';
      die('Pembuatan table, gagal: ' . mysqli_error($this->connection));
    }
    
    mysqli_close($this->connection);
  }
  
  public function Login($username, $password) : bool
  {
    $query = "SELECT * FROM users WHERE username=`$username` AND password=`$password`";
    return mysqli_query($this->connection, $query);
  } 

}

?>