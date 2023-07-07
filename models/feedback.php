<?php
class feedback
{
    private $id;
    private $content;
    private $rate;



    /**
     * @return mixed
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param mixed $rate 
     * @return self
     */
    public function setRate($rate): self
    {
        $this->rate = $rate;
        return $this;
    }

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
        return $this;
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
}


?>