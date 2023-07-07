<?php
require_once 'db_controller (1).php';

class ticket {
    public  $db ;
    public $Bug_ID;

    public function set_Bid($Bug_ID)    
 {   $this->Bug_ID='';
     $this-> db = new db_controller;


     if(isset($_POST['Bug_ID'])){

        if(!empty($_POST['Bug_ID'])){
        $this->Bug_ID=$_POST['Bug_ID'];
    }
}
     if($this->db->open_connection())
     {
         $query = "insert into project values ( $Bug_ID->Bug_ID )";
         return $this->db->insert($query);
     }
    else
    {
      echo "Error in Database connection";
      return false ;
    }
 
 }


 public function get_Bid(){
    $this->db = new db_controller;
if($this->db->open_connection()){
    $query = "select Bug_ID";
    $result=$this->db->select($query);
    return $result;
}
 
 
  }


   }


?>
