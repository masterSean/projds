App.controller('OrganizationFunctions', ["$scope", "$http", function($scope, $http) {

  const url = "/admin/organization_functions";
  
  angular.element(document).ready(function() {
    $("#orgfeditor").trumbowyg();
    $http.get(url + '/all').then(function(response) {
      $scope.organizations = response.data
    })
  })

  $scope.create = function() {
    let data = {
      name: $scope.org.name,
      objective: $("#orgfeditor").trumbowyg('html'),
    }

    $http.post(url, data).then(function(response) {
      $scope.organizations.push(response.data);
    })

    $scope.org = {}
    $("#orgfeditor").trumbowyg('html', '')
    $scope.editor = false;
  }

  $scope.remove = function(index) {
    let remove = confirm('Are you sure you want to remove this Organization from list?');
    if (remove) {
      let org = $scope.organizations[index]
      $http.delete(url + '/' + org.id)
      $scope.organizations.splice(index, 1);
    }
  }
}]);
