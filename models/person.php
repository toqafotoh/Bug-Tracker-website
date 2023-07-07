<?php
class person
{
    public $name;
    public $id;
    public $email;
    public $password;
    public $roleid;
    public $phone;
    public $age;
    public $gender;
    /**
     * @param mixed $name 
     * @return self
     */

    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }
    public function getname()
    {
        return $this->name;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id 
     * @return self
     */
    public function setId($id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email 
     * @return self
     */
    public function setEmail($email): self
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password 
     * @return self
     */
    public function setPassword($password): self
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRoleid()
    {
        return $this->roleid;
    }

    /**
     * @param mixed $roleid 
     * @return self
     */
    public function setRoleid($roleid): self
    {
        $this->roleid = $roleid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender 
     * @return self
     */
    public function setGender($gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age 
     * @return self
     */
    public function setAge($age): self
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone 
     * @return self
     */
    public function setPhone($phone): self
    {
        $this->phone = $phone;
        return $this;
    }
}
?>