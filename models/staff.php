<?php
session_start();
require_once 'person.php';
if ($_SESSION["user_role"] != 'staff') {
    header("location:../../Login/login.php");
  echo $_SESSION["user_role"];
}
class staff extends person{
    private $staff_id;
    private $num_of_bugs;
    private $rate;
    
    public function getstaff_id()
    {
        return $this->Staff_id;
    }
    public function setstaff_id($staff_id)
    {
        $this->$staff_id = $staff_id;
        return $this;
    }


    public function getnum_of_bugs()
    {
        return $this->Staff_name;
    }
    public function setnum_of_bugs($num_of_bugs)
    {
        $this->$num_of_bugs = $num_of_bugs;
        return $this;
    }


    public function getrate()
    {
        return $this->Staff_name;
    }
    public function setrate($rate)
    {
        $this->$rate = $rate;
        return $this;
    }
}
?>