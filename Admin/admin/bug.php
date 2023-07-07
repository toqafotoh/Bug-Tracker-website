<?php
require_once 'db_controller (1).php';
require_once 'ticket.php';
require_once 'staff (1).php';
require_once 'customer.php';


class bug
{
  protected $db;
  public $description;
  public $image;
  public $type = '';
  public $bug_state = 0;
  public $bug_solution = '';
  public $Ticket;
  public $staff;
  public $cus;

  function __construct($des, $img, customer $customer)
  {
    $this->description = $des;
    $this->image = $img;
    $this->cus = $customer;
    $this->Ticket = new ticket;
    $this->db = new db_controller;
    if ($this->db->open_connection()) {
      $query = "INSERT INTO bug (`Description`, `image`, `type`, `State`, `Solution`, `Staff_ID`, `customer_ID`) VALUES ('$des','$img','NULL','NULL','NULL','NULL',$customer->ID);";
      if (mysqli_query($this->db->connection, $query)) {
        $bug_id = mysqli_insert_id($this->db->connection);
        echo $bug_id;
        $this->Ticket->Bug_ID = $bug_id;
      } else {
        echo "Error executing query: " . mysqli_error($this->db->connection);
      }

    }
  }

  public function set_Solution($sol)
  {
    $this->bug_solution = $sol;
    //$this->staff = $staff;
    $this->db = new db_controller;
    if ($this->db->open_connection()) {
      $query = "UPDATE bug SET Solution = '$sol' WHERE ID =" . $this->Ticket->Bug_ID;
      mysqli_query($this->db->connection, $query);
    } else {
      echo "Error in Database connection";
      return false;
    }

  }

  public function set_Staff(staff $staff)
  {
    $this->staff = $staff;
    $this->db = new db_controller;
    if ($this->db->open_connection()) {
      $query = "UPDATE bug SET Staff_ID = " . $this->staff->ID . " WHERE ID = " . $this->Ticket->Bug_ID;
      mysqli_query($this->db->connection, $query);
    } else {
      echo "Error in Database connection";
      return false;
    }
  }


  public function set_State($state)
  {
    $this->bug_state = $state;
    $this->db = new db_controller;
    if ($this->db->open_connection()) {
      $query = "UPDATE bug SET State = " . $state . " WHERE ID =" . $this->Ticket->Bug_ID;
      mysqli_query($this->db->connection, $query);
    } else {
      echo "Error in Database connection";
      return false;
    }
  }

  public function set_Type($type)
  {
    $this->type = $type;
    $this->db = new db_controller;
    if ($this->db->open_connection()) {
      $query = "UPDATE bug SET type = '$type' WHERE ID =" . $this->Ticket->Bug_ID;
      mysqli_query($this->db->connection, $query);
    } else {
      echo "Error in Database connection";
      return false;
    }
  }




}

?>