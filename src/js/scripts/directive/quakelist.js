angular.module('earthquake').directive("quakeListDirective", function()
{
   return {
       restrict: "E",
       transclude: true,
       templateUrl: "html/earthquake/quakelist.html",
   } 
});
