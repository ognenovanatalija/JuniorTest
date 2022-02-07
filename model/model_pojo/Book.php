<?php
//declare(strict_types=1);


class Book
{
    private  $book_id;
    private  $weight;

    /**
     * @return
     */
    public function getBook_id(){
        // TODO implement here
        return $this->book_id;
    }

    /**
     * @param null $book_id
     */
    public function setBook_id($book_id){
        // TODO implement here
        $this->book_id=$book_id;
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

}
