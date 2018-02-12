App.controller('ProgramsController', ["$scope", "$http", function($scope, $http) {

  $scope.programs = JSON.parse(programs);

  $scope.save = function() {
    let form = new FormData();
    form.append('title', $scope.program.title);
    form.append('description', $scope.program.description);
    form.append('image', $("input[name='image']")[0].files[0]);
    $http.post('/admin/programs', form, {
      transformRequest: angular.identity,
      headers: { 'Content-Type': undefined },
    }).then(function(response) {
      $scope.programs.push(response.data)
    }).catch(function(error) {
      throw Error(error)
    });
  }

  $scope.remove = function(index) {
    let program = $scope.programs[index]
    $http.delete('/admin/programs/' + program.id)
    $scope.programs.splice(index, 1);
  }
}]);
