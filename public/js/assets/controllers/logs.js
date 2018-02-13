App.controller('Logs', ["$scope", "$http", "$sce",  function($scope, $http, $sce) {

  $scope.logs = [];
  
  angular.element(document).ready(function() {
    $http.get('/admin/logs').then(function(response) {
        console.log(response);
    })
  })
}]);

