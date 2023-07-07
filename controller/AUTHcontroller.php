<?php
require_once '../models/person.php';
require_once '../controller/DBcontroller.php';
$pl = new person();
/**
 * Summary of auth
 */
class auth
{ //class
    protected $db;
    //open connection
    //run query
    //close connection
    public function login(person $p)
    {
        $this->db = new db;
        if ($this->db->openconnection()) {
            $e = $p->getEmail();
            $pass = $p->getPassword();
            $query = "select * from account where `e-mail` ='$e'and  password='$pass'";
            $resultq = $this->db->select($query);
            if (!$resultq) {
                //    echo "wrong email or password from first if";
                $this->db->closeconnection();
                return false;
            } else {
                if (count($resultq) == 0) {
                    //  echo "wrong user name and password from second if ";

                    return false;
                } else {
                    ///print_r($result);
                    session_start();
                    $_SESSION["user_id"] = $resultq[0]["ID"];
                    $_SESSION["user_role"] = $resultq[0]["role"];
                    $_SESSION["user_name"] = $resultq[0]["Name"];
                    $this->db->closeconnection();
                    //echo "<br>yayyyyyyyy!!!!!!!!! ";
                    return true;
                }

            }
        } else {
            echo "error connectyion ";
        }
    }
    public function register(person $pm)
    {

        $this->db = new db;

        if ($this->db->openconnection()) {
            $insertemail = $pm->getEmail();

            $insertpass = $pm->getPassword();

            $insertage = $pm->getAge();

            $insertname = $pm->getName();

            $insertgender = $pm->getGender();

            $insertphone = $pm->getPhone();
            $emaillog = " SELECT * FROM `account` WHERE `e-mail`='$insertemail'";
            $check = $this->db->checkemail($emaillog);
            if (count($check) == 0) {



                $query = " insert into `account`( `e-mail`, `password`, `age`, `role`, `Name`, `Gender`, `phone number`) VALUES
    
    ( '$insertemail','$insertpass','$insertage','customer', '$insertname','$insertgender', '$insertphone')";

                $result = $this->db->insert($query);

                if ($result != false) {

                    session_start();

                    $_SESSION["user_id"] = $result;

                    $_SESSION["user_role"] = $pm->getRoleid();

                    $_SESSION["user_name"] = $insertname;
                    $_SESSION["msg_error"] = "";
                    $adding_to_customer_table = "insert into `customer`(`ID`,`Name`) values ( $result,'$insertname')";
                    $adding_to_customer_table = $this->db->insert($adding_to_customer_table);
                    $this->db->closeconnection();
                    return true;

                } else {
                    $this->db->closeconnection();
                    return false;

                }

            } //checking if of email inside db close 
            else { //the email already in use 
                session_start();
                $_SESSION["emsg_error"] = "EMAIL AREADY IN USE ";
                return false;
            } //checking else of email inside db close 

        } //connection close 
        else {
            echo "error connectyion ";
        }


    } //function close 
} //class close
?>