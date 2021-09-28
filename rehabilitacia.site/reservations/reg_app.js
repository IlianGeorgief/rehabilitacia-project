var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.showMe = false;
    $scope.hideMe = true;
    $scope.myFunc = function() {
        $scope.showMe = !$scope.showMe;
        $scope.hideMe = !$scope.hideMe;
    };
});





