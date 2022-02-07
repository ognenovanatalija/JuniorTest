<?php
require_once "../lib/database.php";
require_once "model_dao/FurnitureDAO.php";
$data=json_decode(file_get_contents("php://input"));

//var_dump($data); //print array
//echo $data[0]->action;

//instance
$DB = new Database();
$objFurnitureDAO = new FurnitureDAO($DB);

$action=$data[0]->action;
switch($action)
{
	case "insert":
		$height=$data[0]->height;
        $width=$data[0]->width;
        $lenght=$data[0]->length;
	
		$objFurnitureDAO->setHeight($height);
        $objFurnitureDAO->setWidth($width);
        $objFurnitureDAO->setLength($lenght);
		
		$objFurnitureDAO->insertFurniture();//dao
	break;
	case "update":
		$objFurnitureDAO->setHeight($height);
        $objFurnitureDAO->setWidth($width);
        $objFurnitureDAO->setLength($lenght);

        $objFurnitureDAO->updateFurniture();
    break;
	case "delete":
        $pk_value=$data[0]->pk_value;

		$objFurnitureDAO->setFurniture_id($pk_value);

        $objFurnitureDAO->deleteFurniture();
	break;
}
?>
