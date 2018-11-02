angular.module('earthquake').controller('QuakeListCtrl', ['$scope', '$rootScope', function($scope, $rootScope){
   $scope.loadData = function(type, title){
        $rootScope.$emit("loadData", { type, title });
   }

   $scope.times = [
        { "duration": "Past Hour",    "frequency": 5,  "title": "hour"},
        { "duration": "Past Day",     "frequency": 5,  "title": "day"},
        { "duration": "Past 7 Days",  "frequency": 5,  "title": "week"},
        { "duration": "Past 30 Days", "frequency": 15, "title": "month"}       
   ];

   $scope.list = [
       { "description": "Significant Earthquakes", "type": "significant" }, 
       { "description": "M4.5+ Earthquakes",       "type": "4.5" },
       { "description": "M2.5+ Earthquakes",       "type": "2.5" },
       { "description": "M1.0+ Earthquakes",       "type": "1.0" },
       { "description": "All Earthquakes",         "type": "all" }
   ]
   
}]);

