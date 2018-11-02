angular.module('earthquake').controller('QuakeInfoCtrl', ['$scope', '$http', '$rootScope', function($scope, $http, $rootScope){

	$scope.parentmethod = function(type, title) {
		$scope.url = "https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/" + type + "_" + title + ".geojson";
    
		$http.get($scope.url).then(function(response){
			$scope.data = response.data;
		});
	}

	$rootScope.$on("loadData", function(event, data) {
		$scope.parentmethod(data.type, data.title);
	});
}]);
