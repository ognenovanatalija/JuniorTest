app.config(function($routeProvider) {
  $routeProvider
  
  .when("/", {
    templateUrl : "view/product_list.html",
	controller:"myCtrl"
  })
  .when("/addproduct", {
    templateUrl : "view/addproduct.html",
	controller:"myCtrl"
  });

});