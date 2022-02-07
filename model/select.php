<?php
require_once "../lib/database.php";
$DB = new Database();
$data=array();

//$data=json_decode(file_get_contents("php://input"));
//var_dump($data)//print array

//url ?variable = value
//model/select.php?table_name = marki
$table_name=$_GET["table_name"];

switch ($table_name) {
    case "product":
        require_once "model_dao/ProductDAO.php";
        $objProductDAO = new ProductDAO($DB);
        $results = $objProductDAO->selectProduct();
        foreach($results as $row){
            //associative "property" => "value" 
            $data[]=array("sku"=>$row["sku"],
                         "name"=>$row["name"],
                         "price"=>$row["price"],
                         "dvd_id"=>$row["dvd_id"],
                         "book_id"=>$row["book_id"],
                         "furniture_id"=>$row["furniture_id"],
                          //dvd
                         "size"=>$row["size"],
                          //book
                          "weight"=>$row["weight"],
                          //furniture
                         "height"=>$row["height"],
                         "width"=>$row["width"],
                         "length"=>$row["length"]
        );

//         $data[]=array("sku"=>$row["sku"],
//         "name"=>$row["name"],
//         "price"=>$row["price"]." $",
//         "dvd_id"=>$row["dvd_id"],
//         "book_id"=>$row["book_id"],
//         "furniture_id"=>$row["furniture_id"],
//          //dvd
//         "size"=>$row["size"]." MB",
//          //book
//          "weight"=>$row["weight"]." KG",
//          //furniture
//         "height"=>$row["height"]." CM",
//         "width"=>$row["width"],
//         "lenght"=>$row["length"],
//         "dimensions"=>$row["height"]."x".$row["width"]."x".$row["length"];
// );
        }
    break;

    case "dvd":
        require_once "model_dao/DvdDAO.php";
        $objDvdDAO = new DvdDAO($DB);
        $results = $objDvdDAO->selectDvd();
        foreach($results as $row){
            //associative "property" => "value" 
            $data[]=array("dvd_id"=>$row["dvd_id"],
                         "size"=>$row["size"]
        );
        }
    break;

    case "book":
        require_once "model_dao/BookDAO.php";
        $objBookDAO = new BookDAO($DB);
        $results = $objBookDAO->selectBook();
        foreach($results as $row){
            //associative "property" => "value" 
            $data[]=array("book_id"=>$row["book_id"],
                         "weight"=>$row["weight"]

        );
        }
    break;

    case "furniture":
        require_once "model_dao/FurnitureDAO.php";
        $objFurnitureDAO = new FurnitureDAO($DB);
        $results = $objFurnitureDAO->selectFurniture();
        foreach($results as $row){
            //associative "property" => "value" 
            $data[]=array("furniture_id"=>$row["furniture_id"],
                         "height"=>$row["height"],
                         "width"=>$row["width"],
                         "lenght"=>$row["length"]
        );
        }
    break;
}
echo json_encode($data);
?>