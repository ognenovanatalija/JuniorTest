<?php
//declare(strict_types=1);


class Furniture
{
    private  $furniture_id;
    private  $height;
    private  $width;
    private  $lenght;

   
    /**
     * @return
     */
    public function getFurniture_id(){
        // TODO implement here
        return $this->furniture_id;
    }

    /**
     * @param null $furniture_id
     */
    public function setFurniture_id($furniture_id){
        // TODO implement here
        $this->furniture_id=$furniture_id;
    }

   
    /**
     * @return
     */
    public function getHeight(){
        // TODO implement here
        return $this->dvd_id;
    }

    /**
     * @param null $height
     */
    public function setHeight($height){
        // TODO implement here
        $this->height=$height;
    }

    /**
     * @return
     */
    public function getWidth(){
        // TODO implement here
        return $this->width;
    }

    /**
     * @param null $width
     */
    public function setWidth($width){
        // TODO implement here
        $this->width=$width;
    }

    /**
     * @return
     */
    public function getLenght(){
        // TODO implement here
        return $this->lenght;
    }

    /**
     * @param null $lenght
     */
    public function setLenght($lenght){
        // TODO implement here
        $this->lenght=$lenght;
    }

}
