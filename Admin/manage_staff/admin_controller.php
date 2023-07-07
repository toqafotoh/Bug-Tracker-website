<?php
session_start();
require_once 'db_controller.php';
require_once 'staff.php';
require_once '../../models/person.php';
require_once '../../models/message.php';
if ($_SESSION["user_role"] != 'admin') {
   header("location:../../Login/login.php");
}
//echo $_SESSION["user_role"];
class admin_controller
{

   public $db;

   public function addStaff(person $staff)
   {
      $this->db = new db_controller;
      if ($this->db->open_connection()) {
         $q = "select * from account where ID = $staff->id ;";
         $result = $this->db->select($q);
         if (!$result) {
            $query = "insert into account values ( $staff->id , '$staff->email' , '$staff->password' ,$staff->age , '$staff->roleid' , '$staff->name' , '$staff->gender' , $staff->phone)";
            $query2 = "insert into staff values ( $staff->id , '$staff->name' , 0 ) ";
            $this->db->insert($query);
            $this->db->insert($query2);
            return true;
         } else {
            return false;
         }
      } else {
         echo "Error in data base connection";
         return false;
      }

   }
   public function deleteStaff($id)
   {
      $this->db = new db_controller;
      if ($this->db->open_connection()) {
         $query1 = "select * from staff where ID = $id ";
         $result = $this->db->select($query1);
         if ($result) {
            $query2 = "delete staff , account from staff inner join account on staff.ID = account.ID where staff.ID = $id ";
            return $this->db->delete($query2);
         } else {
            return false;
         }
      } else {
         echo "Error in Database Connection";
         return false;
      }
   }
   public function getAllStaff()
   {
      $this->db = new db_controller;
      if ($this->db->open_connection()) {
         $query = " select ID , Name , role , `phone number` from account where role = 'staff';";
         return $this->db->select($query);
      } else {
         echo "Error in Database Connection";
         return false;
      }
   }
   public function sendmessage(msgs $m)
   {

      $this->db = new db_controller;

      if ($this->db->open_connection()) {

         //    $cust_id = $_SESSION["user_id"];
         $f_C = $m->getContent();
         $f_d = $m->getDate();
         $cid = $m->getCustid();
         //echo $f_C . " from cont :<br>       " . $f_d . "<br>" . $cid . "<br>";
         $query = "INSERT INTO `message`( `content`, `date`, `Sign`, `Customer_ID`) VALUES ('$f_C','$f_d',2,$cid)";
         $resultq = $this->db->insert($query);
         if ($resultq != false) {
            $_SESSION["feedback"] = "sent";
            //echo"yayyyyyyy";
            // $this->db->closeconnection();
            return true;

         } else {
            //   echo "didnt work";
            $_SESSION["feedback"] = "didnt work";
            // $this->db->closeconnection();
            return false;

         }

      } else {
         echo "error connectyion ";
      }
   }
   public function get_msg()
   {
      //  echo $id;
      $this->db = new db_controller;
      if ($this->db->open_connection()) {
         $query = "SELECT  `Customer_ID`,`content` FROM `message` WHERE  `sign`=1";
         $result = $this->db->select($query);
         if (count($result) != 0) {
            return $this->db->select($query);

         } else {
            //  echo "there is no bug for you !!";
            return false;
         }
      } else {
         echo "Error in Database Connection";

         return false;
      }
   }
}
?>