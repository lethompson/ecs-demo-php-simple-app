angular.module('earthquake', []).config(function($routeProvider){
    $routeProvider.when('/about', {
        templateUrl: 'html/earthquake/quakeinfo.html',
        controller: 'QuakeInfoCtrl'
    });
});
