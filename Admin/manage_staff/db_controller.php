<?php

class db_controller
{

  public $dbHost = "localhost";
  public $dbname = "phpmyadmin";
  public $dbpassword = "";
  public $dbUser = "root";
  public $connection;
  //open_connection function should return true or false about success of connecion
  public function open_connection()
  {
    $this->connection = new mysqli($this->dbHost, $this->dbUser, $this->dbpassword, $this->dbname);
    if ($this->connection->connect_error) {
      echo " error in connect to DBbbbbbbbbb " . $this->connection->connect_error;
      return false;
    } else {
      return true;
    }
  }
  public function close_connection()
  {
    if ($this->connection) {
      $this->connection->close();
    } else
      echo "connection is not opened";
  }
  //select from DB wanted data 

  public function select($qry)
  {
    $result = $this->connection->query($qry);
    if (!$result) {
      echo "Error : " . mysqli_error($this->connection);
      return false;
    } else {
      return $result->fetch_all(MYSQLI_ASSOC);
    }

  }
  public function insert($query)
  {
    $result = $this->connection->query($query);
    if (!$result) {
      echo "Error ! " . mysqli_error($this->connection);
      return false;
    } else {
      //$this -> connection-> insert_id ;
      return true;
    }
  }

  public function delete($query)
  {
    $result = $this->connection->query($query);
    if (!$result) {
      echo "Error : " . mysqli_error($this->connection);
      return false;
    } else {
      return $result;
    }

  }

}