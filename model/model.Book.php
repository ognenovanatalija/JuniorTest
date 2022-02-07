<?php
require_once "../lib/database.php";
require_once "model_dao/BookDAO.php";
$data=json_decode(file_get_contents("php://input"));

//var_dump($data); //print array
//echo $data[0]->action;

//instance
$DB = new Database();
$objBookDAO = new BookDAO($DB);

$action=$data[0]->action;
switch($action)
{
	case "insert":
		$weight=$data[0]->weight;

		$objBookDAO->setWeight($weight);
		
		$objBookDAO->insertBook();//dao
	break;
	case "update":
		$objBookDAO->setWeight();

        $objBookDAO->updateBook();
    break;
	case "delete":
        $pk_value=$data[0]->pk_value;

		$objBookDAO->setBook_id($pk_value);

        $objBookDAO->deleteBook();
	break;
}
?>
