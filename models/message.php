<?php

class msgs
{
    private $content;
    private $date;

    private $custid;


    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content 
     * @return self
     */
    public function setContent($content): self
    {
        $this->content = $content;
        $this->setDate(date("h:i:sa"));
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date 
     * @return self
     */
    private function setDate($date): self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustid()
    {
        return $this->custid;
    }

    /**
     * @param mixed $cust_id 
     * @return self
     */
    public function setCustid($cust_id): self
    {
        $this->custid = $cust_id;
        return $this;
    }
}
?>