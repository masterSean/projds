App.controller('OrganizationStructure', ["$scope", "$http", function($scope, $http) {

  $scope.files = [];

  angular.element(document).ready(function() {
    $http.get('/admin/organization_structure/all').then(function(response) {
      $scope.files = response.data
    })
  });

  $scope.upload = function() {
    let form = new FormData();
    let image = $("#image")[0].files[0];
    form.append('image', image);
    $http.post('/admin/organization_structure', form, {
      transformRequest: angular.identity,
      headers: { 'Content-Type': undefined },
    }).then(function(response) {
      $scope.files.push(response.data);
    })
  }

  $scope.view = function(index) {
    $scope.selected = angular.copy($scope.files[index])
    $("#view").modal("show");
  }

  $scope.remove = function(index) {
    let image = angular.copy($scope.files[index])
    let confirmed = confirm('Are you sure you want to remove this image?');
    if (confirmed) {
      $http.delete('/admin/organization_structure/' + image.id)
      $scope.files.splice(index, 1)
    }
  }

  $scope.setPrimary = function(index) {
    let file = $scope.files[index];
    $scope.files = $scope.files.map(function(file) { 
      file.primary = 0;
      return file
    });

    file.primary = 1;

    $http.put('/admin/organization_structure/' + file.id)
  }
}])
