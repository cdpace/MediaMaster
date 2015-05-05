<!doctype html>
<html language="en" ng-app="mainModule">
    <head>
        <title>Media Master</title>
        <link rel="stylesheet" href="CSS/main.css" type="text/css" />
    </head>
    <body ng-clock>
       <?php
       
        echo "Hello World v2";
       
       ?> 
       <div ng-controller="mainController">
           <input type="text" name="testvalue" value="test"/>
           {{test}}
       </div>
    </body>
    <script type="text/javascript" src="JS/Vendor/angular.min.js"></script>
    <script type="text/javascript" src="JS/app.js"></script>
    <script type="text/javascript" src="JS/con.js"></script>
    <script type="text/javascript" src="JS/services.js"></script>
    <script type="text/javascript" src="JS/directives.js"></script>
</html>