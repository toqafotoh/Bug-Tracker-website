<?php
session_start();
require_once 'person.php';
if ($_SESSION["user_role"] != 'customer') {
    header("location:../../Login/login.php");
}

class customer extends person
{
    private $customer_name;
    private $customer_id;





    /**
     * @return mixed
     */
    public function getCustomer_name()
    {
        return $this->customer_name;
    }
    public function getCustomer_id()
    {
        return $this->customer_id;
    }

    /**
     * @param mixed $customer_name 
     * @return self
     */

    /**
     * @param mixed $customer_id 
     * @return self
     */
    public function setCustomer_id($customer_id): self
    {
        $this->customer_id = $customer_id;
        return $this;
    }
    public function setCustomer_name($customer_name): self
    {
        $this->customer_name = $customer_name;
        return $this;
    }

/**
 * @return mixed
 */


/**
 * @return mixed
 */


/**
 * @return mixed
 */
}
?>