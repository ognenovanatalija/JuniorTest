<?php
require_once "../lib/database.php";
require_once "model_dao/ProductDAO.php";
$data=json_decode(file_get_contents("php://input"));

//var_dump($data); //print array
//echo $data[0]->action;

//instance
$DB = new Database();
$objProductDAO = new ProductDAO($DB);

$action=$data[0]->action;
switch($action)
{
	case "insert":
		$sku=$data[0]->sku;
		$name=$data[0]->name;
        $price=$data[0]->price;
		
		$size='';
		$weight='';
        $height='';
		$width='';
        $length='';


		if(isset($data[0]->size)){$size=$data[0]->size;}
		if(isset($data[0]->weight)){$weight=$data[0]->weight;}
		if(isset($data[0]->height)){$height=$data[0]->height;}
		if(isset($data[0]->width)){$width=$data[0]->width;}
		if(isset($data[0]->length)){$length=$data[0]->length;}
		//$size=$data[0]->size;
		//$weight=$data[0]->weight;
        //$height=$data[0]->height;
		//$width=$data[0]->width;
       // $length=$data[0]->length;

		$objProductDAO->setSku($sku);
		$objProductDAO->setName($name);
        $objProductDAO->setPrice($price);
		$objProductDAO->setSize($size);
		$objProductDAO->setWeight($weight);
        $objProductDAO->setHeight($height);
		$objProductDAO->setWidth($width);
		$objProductDAO->setLength($length);

       // $objProductDAO->setDvd_id($dvd_id);
	//	$objProductDAO->setBook_id($book_id);
		//$objProductDAO->setFurniture_id($furniture_id);
		
		$objProductDAO->insertProduct();//dao
	break;
	case "update":
		$objProductDAO->setName();
        $objProductDAO->setPrice();
		$objProductDAO->setDvd_id();
		$objProductDAO->setBook_id();
		$objProductDAO->setFurniture_id();

        $objProductDAO->updateProduct();
    break;
	case "delete":
		$pk_value=$data[0]->pk_value;

		$objProductDAO->setSku($pk_value);

        $objProductDAO->deleteProduct();
	break;
}
?>
