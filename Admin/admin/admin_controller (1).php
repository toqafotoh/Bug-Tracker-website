<?php
session_start();
require_once 'db_controller (1).php';
require_once 'project_controller.php';
//echo $_SESSION["user_role"];
if ($_SESSION["user_role"] != 'admin') {
   header("location:../../../Login/login.php");
}

class admin_controller
{

   protected $db;

   public function add_project(project_controller $project)
   {
      $this->db = new db_controller;
      if ($this->db->open_connection()) {
         $check_staff = "SELECT * FROM `staff` WHERE `ID`=$project->staff_p";
         $check_cus = "SELECT * FROM `customer` WHERE `ID`=$project->customer_p";
         $check_bug = "SELECT * FROM `bug` WHERE `ID`=$project->bug_p and `customer_id`=$project->customer_p";
         if (
            count($this->db->select($check_staff)) != 0 && count($this->db->select($check_bug))
            != 0 && count($this->db->select($check_cus)) != 0
         ) {
            $query = "INSERT INTO `project` (`State`, `Staff_ID`, `Customer_ID`, `Bug_ID`) VALUES(" . $project->P_State . "," . $project->staff_p . "," . $project->customer_p . "," . $project->bug_p . ")";
            if (mysqli_query($this->db->connection, $query)) {
               $pro_id = mysqli_insert_id($this->db->connection);
               $project->P_ID = $pro_id;
               $query = "UPDATE bug SET State = 1,`Staff_ID`=" . $project->staff_p . " WHERE ID =" . $project->bug_p . ";";
               mysqli_query($this->db->connection, $query);
            } else {
               echo "Error in data base connection";
               return false;
            }
         } else {
            ?>
            <script>
               fun();
               function fun() {
                  alert("wrong entries!!");
               }
            </script>
            <?php
         }
      }
   }

   public function Search_for_Project($p_id)
   {
      $this->db = new db_controller;
      if ($this->db->open_connection()) {
         $query = "SELECT * FROM `project` WHERE ID=$p_id;";
         $res = $this->db->connection->query($query);
         //
         //if ($res->num_rows >0){
         // while ($row= $res->fetch_assoc()){
         //     foreach ($columns as $c)
         //     echo $row[$c];
         //  }
         //}
         return $res;
      } else {
         echo "Error in data base connection";
         return false;
      }
   }

   public function view_projects()
   {
      $this->db = new db_controller;
      if ($this->db->open_connection()) {
         $query = "SELECT * FROM `project` ;";
         $res = $this->db->connection->query($query);
         return $res;
      } else {
         echo "Error in data base connection";
         return false;
      }
   }

   public function deleteproject($p_id)
   {
      $this->db = new db_controller;
      if ($this->db->open_connection()) {
         $query = "delete from project where id = $p_id ";
         return $this->db->delete($query);
      } else {
         echo "Error in Database Connection";
         return false;
      }
   }

   public function set_project_state($p_id, $p_state)
   {
      $this->db = new db_controller;
      if ($this->db->open_connection()) {
         $query = "UPDATE project SET State = $p_state WHERE ID =$p_id;";
         mysqli_query($this->db->connection, $query);
         //return $this->db->insert($query);
      } else {
         echo "Error in Database Connection";
         return false;
      }
   }


   public function view_bugs()
   {
      $this->db = new db_controller;
      if ($this->db->open_connection()) {
         $query = "SELECT * FROM bug ;";
         $res = $this->db->connection->query($query);
         return $res;
      } else {
         echo "Error in data base connection";
         return false;
      }
   }
   public function view_feedback()
   {
      $this->db = new db_controller;
      if ($this->db->open_connection()) {
         $query = "SELECT * FROM feedback ;";
         $res = $this->db->connection->query($query);
         return $res;
      } else {
         echo "Error in data base connection";
         return false;
      }
   }

}

?>