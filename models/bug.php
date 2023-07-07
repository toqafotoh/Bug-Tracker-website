<?php

require_once 'person.php';
//echo "yayyyyyyyyyyyyyyyy from bug";
class bugs
{

    private $desc;
    private $img;
    private $type;
    private $state;
    private $staff_id;
    private $solution;


    /**
     * @return mixed
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param mixed $desc 
     * @return self
     */
    public function setDesc($desc): self
    {
        $this->desc = $desc;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img 
     * @return self
     */
    public function setImg($img): self
    {
        $this->img = $img;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type 
     * @return self
     */
    public function setType($type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state 
     * @return self
     */
    public function setState($state): self
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStaff_id()
    {
        return $this->staff_id;
    }

    /**
     * @param mixed $staff_id 
     * @return self
     */
    public function setStaff_id($staff_id): self
    {
        $this->staff_id = $staff_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSolution()
    {
        return $this->solution;
    }

    /**
     * @param mixed $solution 
     * @return self
     */
    public function setSolution($solution): self
    {
        $this->solution = $solution;
        return $this;
    }
}

?>