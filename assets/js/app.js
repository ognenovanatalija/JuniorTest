var app = angular.module('myApp', ["ngRoute"]);
app.controller('myCtrl', function($scope,$http,$window) {
//controller
$scope.firstName="Natalija Ognenova";
$scope.error=false;
$scope.dvd_div=false;
$scope.book_div=false;
$scope.furniture_div=false;
$scope.dropdown=[{"item":"dvd"},{"item":"book"},{"item":"furniture"}];
$scope.changeSwitcher=function(){
	console.log("switcher "+$scope.switcher);
	switch($scope.switcher){
		case "dvd":
			console.log("dvd");
			$scope.book_div=false;
			$scope.furniture_div=false;
			$scope.dvd_div=true;
		break;
		case "book":
			console.log("book");
			$scope.dvd_div=false;
			$scope.furniture_div=false;
			$scope.book_div=true;
		break;
		case "furniture":
			console.log("furniture");
			$scope.dvd_div=false;
			$scope.book_div=false;
			$scope.furniture_div=true;
		break;
	}
}




function alertFun()
{
	console.log("AlertFun");
}

$scope.save=function()
{
	alertFun();
console.log("\nHello "+$scope.first_name);
	$scope.error=true;
}

//Od baza
$scope.product=[];
$http.get("model/select.php?table_name=product")
.then(function(response) {
	$scope.product = response.data;
});

$scope.dvd=[];
$http.get("model/select.php?table_name=dvd")
.then(function(response) {
	$scope.dvd = response.data;
});

$scope.book=[];
$http.get("model/select.php?table_name=book")
.then(function(response) {
	$scope.book = response.data;
});

$scope.furniture=[];
$http.get("model/select.php?table_name=furniture")
.then(function(response) {
	$scope.furniture = response.data;
});


//"addBook(books_name,pages,price,language_id,publisher_id,format_id,category_id,authors_id,stores_id,short_text,long_text,year)"
//Vo baza

function postData(fileName,objData){
	$http({
		method : "POST", 
		  url : "model/"+ fileName,
		  data:objData
	  }).then(function mySuccess(response) {
		//$scope.myWelcome = response.data;
	  }, function myError(response) {
		//$scope.myWelcome = response.statusText;
	  });
}

$scope.errorMsg=function(){
	$scope.error=true;
}
$scope.addProduct= function(sku,name,price){
	if(($scope.dvd_div && $scope.size>0) || ($scope.book_div && $scope.weight>0) || ($scope.furniture_div && $scope.height>0 && $scope.width>0 && $scope.length>0)){
		
	
	
	var objProduct=[];
	objProduct.push({
        "sku":sku,
        "name":name,
        "price":price,
		"size":$scope.size,
		"weight":$scope.weight,
		"height":$scope.height,
		"width":$scope.width,
		"length":$scope.length,
        //"dvd_id":dvd_id,
		//"book_id":book_id,
        //"furniture_id":furniture_id,

    
		"action":"insert"
	});

	console.log(objProduct);

	postData("model.Product.php",objProduct);
}
}

$scope.addDvd= function(size){
	var objDvd=[];
	objDvd.push({
        "size":size,
    
		"action":"insert"
	});

	console.log(objDvd);
	
	postData("model.Dvd.php",objDvd);
}


// $scope.CheckUncheckHeader = function () {
// 	$scope.IsAllChecked = true;
// 	for (var i = 0; i < $scope.Product.length; i++) {
// 		if (!$scope.Product[i].Selected) {
// 			$scope.IsAllChecked = false;
// 			break;
// 		}
// 	};
// };



// $scope.Delete = function () {
// 	var selected = new Array();
// 	for (var i = 0; i < $scope.Product.length; i++) {
// 		if ($scope.Product[i].Selected) {
// 			selected.push(i);
// 		}
// 	}
// 	for (var i = selected.length - 1; i >= 0; i--) {
// 		$scope.Product.splice(selected[i], 1);
// 	}
// };



});