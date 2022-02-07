<?php
//declare(strict_types=1);

require_once "model_pojo/Furniture.php";//pojo
class FurnitureDAO extends Furniture


{
    private $table_name = "furniture";
    private $database=null;

    /**
     * Default constructor
     */
    public function __construct($DB)
    {
          //Dependency
          $this->database = $DB;
    }


    public function insertFurniture()
    {
        $height=parent::getHeight();
        $width=parent::getWidth();
        $lenght=parent::getLenght();
    
        $columnName="height,width,lenght";
        $columnValue="'$height','$width','$lenght'";

        $this->database->insertRow($this->table_name,$columnName,$columnValue);//lib/database.php
    }

    

    public function deleteFurniture()
    {
        $pk_name = "furniture_id";
        $pk_value = parent::getFurniture_id();
        //$pk_value = "'$val'";

        $this->database->deleteRow($this->table_name,$pk_name,$pk_value);
    }

  
    public function updateFurniture()
    {
        $height=parent::getHeight();
        $width=parent::getWidth();
        $lenght=parent::getLenght();
    
        $columns="height='$height',
                 width='$width',
                 lenght='$lenght'";

        $pk_name="furniture_id";
        $pk_value = parent::getFurniture_id();

       $this->database->updateRow($this->table_name,$columns,$pk_name,$pk_value);
    }



    public function selectFurniture()
    {
         // TODO implement here
         return $this->database->selectRow();
    }

}
