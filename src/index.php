<!DOCTYPE html>
<html>
<title>Earthquake data</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css\w3.css">
<link rel="stylesheet" href="css\bootstrap.css">
<link rel="stylesheet" href="css\style.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">

<body>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px" ng-app="earthquake">

  <!-- Header -->
  <header class="w3-container w3-xlarge w3-padding-24">
    <a href="#" class="w3-left w3-button w3-white w3-hover-shadow"><?php echo "USGS Earthquakes"; ?></a>
  </header>

  <!-- Heading -->
  <div class="w3-container w3-padding-32" id="heading">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-12">A Fresh Look at Old Data Sheds Light on Central U.S. Quake Origins and Potential</h3>
    <p>Small variations in the density of the earth’s crust influence where earthquakes may occur in the central U.S. 
        These new findings published today in Nature Communications may allow scientists to map where future seismicity 
        in the center of the country is most likely.
    </p>
  </div>

    <p style="text-align:center;"><img class="full-width img-responsive" src="Microservices.png" alt="Microservices" width="70%" height="70%"></p>

  <div class="w3-row-padding w3-center w3-padding-64" id="earthquake" ng-controller="QuakeListCtrl">
    <h2><?php echo "Earthquakes data"; ?></h2>
    <p><?php echo "Choose a specific earthquake data to view.";?></p><br>

    <!-- Records -->
    <quake-list-directive></quake-list-directive>

  </div>

    

  <div class="w3-padding" ng-controller="QuakeInfoCtrl">
    <quake-info-directive></quake-info-directive>
  </div>

</div>
 
 
</body>
</html>

<script src="js/libraries/jquery-3.1.1.min.js"></script>
<script src="js/libraries/bootstrap.js"></script>
<script src="js/libraries/angular.min.js"></script>
<script src="js/libraries/angular-router.js"></script>
<script src="js/libraries/angular-animate.js"></script>
<script src="js/scripts/module/earthquake.js"></script>
<script src="js/scripts/controller/quakelist.js"></script>
<script src="js/scripts/directive/quakelist.js"></script>
<script src="js/scripts/directive/quakeinfo.js"></script>
<script src="js/scripts/controller/quakeinfo.js"></script>
