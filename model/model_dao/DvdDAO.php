<?php
//declare(strict_types=1);

require_once "model_pojo/Dvd.php";//pojo
class DvdDAO extends Dvd


{
    private $table_name = "dvd";
    private $database=null;

    /**
     * Default constructor
     */
    public function __construct($DB)
    {
          //Dependency
          $this->database = $DB;
    }


    public function insertDvd()
    {
        $size=parent::getSize();
    
        $columnName="size";
        $columnValue="'$size'";

        $this->database->insertRow($this->table_name,$columnName,$columnValue);//lib/database.php
    }

    

    public function deleteDvd()
    {
        $pk_name = "dvd_id";
        $pk_value = parent::getDvd_id();
        //$pk_value = "'$val'";

        $this->database->deleteRow($this->table_name,$pk_name,$pk_value);
    }

  
    public function updateDvd()
    {
        $size=parent::getSize();
    
        $columns="size='$size'";

        $pk_name="dvd_id";
        $pk_value = parent::getDvd_id();

       $this->database->updateRow($this->table_name,$columns,$pk_name,$pk_value);
    }



    public function selectDvd()
    {
         // TODO implement here
         return $this->database->selectRow();
    }

}
