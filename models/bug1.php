<?php
echo "yayyy";
require_once '../controller/DBcontroller.php';
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
    //$this->Ticket = new ticket;
    $this->db = new db;
    if ($this->db->openconnection()) {
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

} ?>