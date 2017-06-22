<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style type="text/css">
      .navbar{
    font-size:20px;
    padding-top:2px;
    padding-bottom:2px;   
    padding-right:30px;
    padding-left:30px;  
    background-color:rgb(237,239,241);
    border:rgb(237,239,241);  
    }
  </style>
  <script>
    var app = angular.module("myApp", ["ngRoute"]);
    app.config(function($routeProvider) {
      $routeProvider
      .when("/home", {
        templateUrl : "index.php"
        })
      .when("/new", {
        templateUrl : "new.php"
        })
      .when("/logout", {
        templateUrl : "logout.php"
        })
      .when("/view", {
        templateUrl : "view.php"
        });
      });
  </script>
  <body ng-app="myApp">
    <nav class="navbar navbar-inverse navbar-fixed-top" >
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#/home">Books Hub</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#!new">Add Book</a></li>
            <li><a href="#!view">View Book</a></li>   
            <li><a href="#!logout">Log Out</a></li>
          </ul>
        </div>
      </div>
    </nav>
<div ng-view></div>
<?php include 'footer.php';?>
</body>
</html>