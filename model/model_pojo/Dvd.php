<?php
//declare(strict_types=1);


class Dvd
{
    private  $dvd_id;
    private  $size;

 
    /**
     * @return
     */
    public function getDvd_id(){
        // TODO implement here
        return $this->dvd_id;
    }

    /**
     * @param null $dvd_id
     */
    public function setDvd_id($dvd_id)
    {
        // TODO implement here
        $this->dvd_id=$dvd_id;
    }

    /**
     * @return
     */
    public function getSize(){
        // TODO implement here
        return $this->size;
    }

    /**
     * @param null $size
     */
    public function setSize($size){
        // TODO implement here
        $this->size=$size;
    }

}
