<?php
require_once 'db_controller (1).php' ;
require_once 'Bug.php';

class project_controller {
    public $P_State;
    public $P_ID;
    public $staff_p;
    public $admin_p;
    public $customer_p;
    public $bug_p;


    
    public function get_Pstate (){
        return this->P_State;
    }

}

?>