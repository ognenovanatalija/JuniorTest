<?php
//declare(strict_types=1);

require_once "model_pojo/Book.php";//pojo
class BookDAO extends Book


{
    private $table_name = "book";
    private $database=null;

    /**
     * Default constructor
     */
    public function __construct($DB)
    {
          //Dependency
          $this->database = $DB;
    }


    public function insertBook()
    {
        $weight=parent::getWeight();
    
        $columnName="weight";
        $columnValue="'$weight'";

        $this->database->insertRow($this->table_name,$columnName,$columnValue);//lib/database.php
    }

    

    public function deleteBook()
    {
        $pk_name = "book_id";
        $pk_value = parent::getBook_id();
        //$pk_value = "'$val'";

        $this->database->deleteRow($this->table_name,$pk_name,$pk_value);
    }

  
    public function updateBook()
    {
        $weight=parent::getWeight();
    
        $columns="weight='$weight'";

        $pk_name="book_id";
        $pk_value = parent::getBook_id();

       $this->database->updateRow($this->table_name,$columns,$pk_name,$pk_value);
    }



    public function selectBook()
    {
         // TODO implement here
         return $this->database->selectRow();
    }

}
