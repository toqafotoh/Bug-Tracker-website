<?php
require_once '../../models/staff.php';
require_once '../../models/bug.php';
require_once 'DBcontroller.php';
class staff_controller
{ //class
    protected $db;
    //open connection
    //run query
    //close connection

    public function sendsolution(bugs $b2, $bid)
    {

        $this->db = new db;

        if ($this->db->openconnection()) {
            $sol = $b2->getSolution();
            $staff_id = $_SESSION["user_id"];
            //   echo $sol . "<br>       " . $cust_id . "<br>";
            $check = "SELECT * FROM `bug` where Staff_ID = $staff_id and ID = $bid ";
            $var = $this->db->select($check);
            if (count($var) != 0) {

                $query = "UPDATE `bug` SET `Solution`='$sol', `State`= 2  WHERE ID = $bid and Staff_ID=$staff_id  ";

                $resultq = $this->db->update($query);
                if ($resultq != false) {

                    //  echo "<br><br><br><br><br>yayyyyyyy";
                    $this->db->closeconnection();
                    return true;

                } else {
                    //   echo "didnt work";
                    $this->db->closeconnection();
                    return false;

                }
            } else {
                echo "this bug dosn't exsit or not assigned to you ";
                return false;
            }

        } else {
            echo "error connectyion ";
        }
    }



    public function view_ab($id)
    {
        $this->db = new db();
        if ($this->db->openconnection()) {
            $query = "SELECT `ID`, `Description`, `type`  FROM `bug` WHERE staff_id=$id and State != 2";
            return $this->db->select($query);
        } else {
            echo "Error in Database Connection";

            return false;
        }
    }



    public function view_his($id)
    {
        $this->db = new db();
        if ($this->db->openconnection()) {
            $query = "SELECT `ID`, `Description`, `type` , `Solution` FROM `bug` WHERE staff_id=$id and State = 2";

            return $this->db->select($query);
        } else {
            echo "Error in Database Connection";

            return false;
        }
    }
    public function asigntostaff($bid, $sid)
    {
        $this->db = new db();
        if ($this->db->openconnection()) {

            $l = $_SESSION["user_id"];
            // echo $l . "<br>" . $bid . "" . $sid;
            $first = "select * from `account` where `ID`=$sid and role='staff' ";
            $second = "select * from `bug` where `ID`=$bid and `Staff_ID`= $l ";
            if (count($this->db->select($first)) != 0 && count($this->db->select($second)) != 0) {
                $query = " UPDATE `bug` SET `State`=1,`Staff_ID`=$sid WHERE `ID`=$bid and `Staff_ID`= $l";
                return $this->db->update($query);
            } else {
                ?>
                <script>
                    fun();
                    function fun() {
                        alert("bug or staff is not exist or not  assigned to you !!");
                    }
                </script>
                <?php
            }
        } else {
            echo "Error in Database Connection";

            return false;
        }

    }
} //class close
?>