<?php
require_once "../lib/database.php";
require_once "model_dao/DvdDAO.php";
$data=json_decode(file_get_contents("php://input"));

//var_dump($data); //print array
//echo $data[0]->action;

//instance
$DB = new Database();
$objDvdDAO = new DvdDAO($DB);

$action=$data[0]->action;
switch($action)
{
	case "insert":
		$size=$data[0]->size;

		$objDvdDAO->setSize($size);
		
		$objDvdDAO->insertDvd();//dao
	break;
	case "update":
		$objDvdDAO->setSize();

        $objDvdDAO->updateDvd();
    break;
	case "delete":
        $pk_value=$data[0]->pk_value;

		$objDvdDAO->setDvd_id($pk_value);

        $objDvdDAO->deleteDvd();
	break;
}
?>
