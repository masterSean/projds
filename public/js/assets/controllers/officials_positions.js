App.controller('OfficialsPositionsController', ["$scope", "$http", function($scope, $http) {

  const url = "/admin/officials_positions";

  $scope.files = [];

  angular.element(document).ready(function() {
    $http.get(url + '/all').then(function(response) {
      $scope.files = response.data;
    })
  })
  
  $scope.add = function() {
    let data = new FormData();
    let image = $("input[name='image']")[0].files[0];
    data.append('image', image);
    $http.post(url, data, {
      transformRequest: angular.identity,
      headers: { 'Content-Type' : undefined },
    }).then(function(response) {
      $scope.files.push(response.data);
    })
  }

  $scope.remove = function(index) {
    let file = angular.copy($scope.files[index])
    let confirm = comfirm('Are you sure you want to remove this file?');
    if (confirm) {
      $http.delete(url + '/' + file.id)
      $scope.files.splice(index, 1);
    }
  }

  $scope.makePrimary = function(index) {
    $scope.files = $scope.files.map(function(file, key) {
      file.primary = key == index;
      return file
    })

    $http.put(url + '/' + $scope.files[index].id)
  }

  $scope.view = function(index) {
    $scope.selected = angular.copy($scope.files[index])
    $("#positions").modal("show")
  }

}]);
