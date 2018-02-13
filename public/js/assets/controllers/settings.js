App.controller('SettingsController', ["$scope", "$http", function($scope, $http) {
  $scope.edit = {
    username: true,
    password: true,
  }

  $scope.user = JSON.parse(user);
  $scope.user.password = "1234567890";

  $scope.save = function() {
    $scope.edit.username = true;
    $scope.edit.password = true;
    let data = {
      email: $scope.user.email,
      password: $scope.user.password,
    }

    $http.post('/admin/settings', data, function(response) {
      console.log(response)
    }).catch(function(error) {
      console.error(error);
    });
  }
}]);
