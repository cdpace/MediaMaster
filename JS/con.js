var mainModule = angular.Module('mediaMaster',[]);
mainModule.controller('mainController',function($scope){
    $scope.test = "Hello World From Angular";
});