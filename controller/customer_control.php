<?php
require_once '../../models/feedback.php';
require_once '../../models/customer.php';
require_once '../../models/bug.php';
require_once '../../models/message.php';
require_once 'DBcontroller.php';
class customer_controller
{ //class
    protected $db;
    //open connection
    //run query
    //close connection

    public function sendfeedback(feedback $f)
    {

        $this->db = new db;

        if ($this->db->openconnection()) {
            $customer = new customer();
            $f_C = $f->getContent();
            $f_r = $f->getRate();
            $cust_id = $_SESSION["user_id"];
            //  echo $f_C . "<br>       " . $f_r . "<br>" . $cust_id . "<br>";
            $query = "INSERT INTO `feedback`(`content`, `rate`, `Customer_ID`) VALUES ('$f_C',
          '$f_r',$cust_id)";
            $resultq = $this->db->insert($query);
            if ($resultq != false) {
                $_SESSION["feedback"] = "sent";
                //echo"yayyyyyyy";
                $this->db->closeconnection();
                return true;

            } else {
                //   echo "didnt work";
                $_SESSION["feedback"] = "didnt work";
                $this->db->closeconnection();
                return false;

            }

        } else {
            echo "error connectyion ";
        }
    }
    //class close

    public function send_bug(bugs $b1)
    {

        $this->db = new db;

        if ($this->db->openconnection()) {
            $img = $b1->getImg();
            $dsc = $b1->getDesc();
            $type = $b1->getType();
            $id = $_SESSION["user_id"];
            // echo "from cus-control : " . $dsc . "<br> id is  :" . $id;

            $query = "INSERT INTO `bug`( `Description`, `image`,`type`,`customer_id`)
             VALUES ('$dsc','$img', '$type',$id);";
            $resultq = $this->db->insert($query);

            if ($resultq != false) {
                //echo "yayyyyyyyyy";


                $this->db->closeconnection();
                return true;

            } else {
                //  echo "didnt work";

                $this->db->closeconnection();
                return false;

            }


        } //connection close 
        else {
            echo "error connectyion ";
        }
    }
    public function get_Status($id)
    {
        $this->db = new db();
        if ($this->db->openconnection()) {
            $query = "SELECT `ID`, `Description`, `type`, `State` ,`image` FROM `bug` WHERE customer_id=$id";
            $result = $this->db->select($query);
            if (count($result) != 0) {
                $_SESSION["error_view"] = "";
                return $this->db->select($query);

            } else {
                //  echo "there is no bug for you !!";
                $_SESSION["error_view"] = "there is an error";

            }
        } else {
            echo "Error in Database Connection";

            return false;
        }
    }
    public function get_solution($id)
    {
        $this->db = new db();
        if ($this->db->openconnection()) {
            $query = "SELECT `ID`, `Description`, `type`, `State` ,`Solution` FROM `bug` WHERE customer_id=$id";
            $result = $this->db->select($query);
            if (count($result) != 0) {
                $_SESSION["error_view"] = "";
                return $this->db->select($query);

            } else {
                //  echo "there is no bug for you !!";
                $_SESSION["error_view"] = "there is an error";

            }
        } else {
            echo "Error in Database Connection";

            return false;
        }
    }
    public function sendmessage(msgs $m)
    {

        $this->db = new db;

        if ($this->db->openconnection()) {

            $cust_id = $_SESSION["user_id"];
            $f_C = $m->getContent();
            $f_d = $m->getDate();
            //     echo $f_C . " from cont :<br>       " . $f_d . "<br>" . $cust_id . "<br>";
            $query = "INSERT INTO `message`( `content`, `date`, `Sign`, `Customer_ID`) VALUES ('$f_C','$f_d',1,$cust_id)";
            $resultq = $this->db->insert($query);
            if ($resultq != false) {
                $_SESSION["feedback"] = "sent";
                //echo"yayyyyyyy";
                $this->db->closeconnection();
                return true;

            } else {
                //   echo "didnt work";
                $_SESSION["feedback"] = "didnt work";
                $this->db->closeconnection();
                return false;

            }

        } else {
            echo "error connectyion ";
        }
    }
    public function get_msg($id)
    {
        //  echo $id;
        $this->db = new db();
        if ($this->db->openconnection()) {
            $query = "SELECT `content` FROM `message` WHERE Customer_ID=$id and `sign`=2";
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
} //class close
?>