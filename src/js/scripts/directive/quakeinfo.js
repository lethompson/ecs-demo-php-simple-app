angular.module('earthquake').directive("quakeInfoDirective", function()
{
   return {
       restrict: "E",
       transclude: true,
       templateUrl: "html/earthquake/quakeinfo.html",
   } 
});
