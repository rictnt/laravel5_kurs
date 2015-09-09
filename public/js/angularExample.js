var app = angular.module('App', [], function($interpolateProvider){
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
app.controller('AppController', function($scope, $http, $interval){
    $scope.init = function() 
    {
        $scope.pobieranieAktualnegoCzasu();
    };
    $scope.pobieranieAktualnegoCzasu = function() 
    {
        $scope.loading = true;
        $http.get('/angular/api').success(function(data){
            $scope.aktualnyCzas = data;
            $scope.loading = false;
        });
    };
    $scope.uruchomienieZegara = function() 
    {
         $interval(function() {
            $http.get('/angular/api').success(function(data){
                $scope.zegar = data;
            });
        }, 1000);
         
    };
    $scope.init();
});