<?php
//declare(strict_types=1);

require_once "model_pojo/Product.php";//pojo
class ProductDAO extends Product


{
    private $table_name = "product";
    private $database=null;

    /**
     * Default constructor
     */
    public function __construct($DB)
    {
          //Dependency
          $this->database = $DB;
    }


    public function insertProduct()
    {
        $sku=parent::getSku();
        $name=parent::getName();
        $price=parent::getPrice();
        $size=parent::getSize();
        $weight=parent::getWeight();
        $height=parent::getHeight();
        $width=parent::getWidth();
        $length=parent::getLength();
       
       // $columnName="sku,name,price,dvd_id,book_id,furniture_id";
        $columnValue="'$sku','$name','$price','$size','$weight','$height','$width','$length'";
        $this->database->callStoredProcedureWithParams('_insertProduct',$columnValue);
       // $this->database->insertRow($this->table_name,$columnName,$columnValue);//lib/database.php
    }

    

    public function deleteProduct()
    {
        $pk_name = "sku";
        $pk_value = parent::getSku();
        //$pk_value = "'$val'";

        $this->database->deleteRow($this->table_name,$pk_name,$pk_value);
    }

  
    public function updateProduct()
    {
        $sku=parent::getSku();
        $name=parent::getName();
        $price=parent::getPrice();
        $dvd_id=parent::getDvd_id();
        $book_id=parent::getBook_id();
        $furniture_id=parent::getFurniture_id();
    
        $columns="name='$name',
                 price='$price',
                 dvd_id='$dvd_id',
                 book_id='$book_id',
                 furniture_id='$furniture_id'";

        $pk_name="sku";
        $pk_value = parent::getSku();

       $this->database->updateRow($this->table_name,$columns,$pk_name,$pk_value);
    }



    public function selectProduct()
    {
         // TODO implement here
         return $this->database->selectRow($this->table_name.
         " left JOIN book
         ON book.book_id=product.book_id
         left JOIN dvd
         on dvd.dvd_id=product.dvd_id
         left JOIN furniture
         on furniture.furniture_id=product.furniture_id");
    }

}
