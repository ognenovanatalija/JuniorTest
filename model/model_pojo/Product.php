<?php
//declare(strict_types=1);


class Product
{
    private  $sku;
    private  $name;
    private  $price;
    private  $size;
    private  $weight;
    private  $height;
    private  $width;
    private  $length;

    /**
     * @return
     */
    public function getSku(){
        // TODO implement here
        return $this->sku;
    }

    /**
     * @param null $sku
     */
    public function setSku($sku){
        // TODO implement here
        $this->sku=$sku;
    }

    /**
     * @return
     */
    public function getName(){
        // TODO implement here
        return $this->name;
    }

    /**
     * @param null $name
     */
    public function setName($name){
        // TODO implement here
        $this->name=$name;
    }

    /**
     * @return
     */
    public function getPrice(){
        // TODO implement here
        return $this->price;
    }

    /**
     * @param null $price
     */
    public function setPrice($price){
        // TODO implement here
        $this->price=$price;
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

    /**
     * @return
     */
    public function getWeight(){
        // TODO implement here
        return $this->weight;
    }

    /**
     * @param null $weight
     */
    public function setWeight($weight){
        // TODO implement here
        $this->weight=$weight;
    }

    /**
     * @return
     */
    public function getHeight(){
        // TODO implement here
        return $this->height;
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
    public function getLength(){
        // TODO implement here
        return $this->length;
    }

    /**
     * @param null $length
     */
    public function setLength($length){
        // TODO implement here
        $this->length=$length;
    }

}
