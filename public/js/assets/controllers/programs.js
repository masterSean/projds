App.controller('ProgramsController', ["$scope", "$http", function($scope, $http) {

  $scope.programs = [];

  function init () {
    $http.get('/admin/programs/all')
    .then(function(response) {
      $scope.programs = response.data;
    }).catch(function(error) {
      console.log(error)
    })
  }

  $scope.save = function() {
    let form = new FormData();
    form.append('title', $scope.program.title);
    form.append('description', $scope.program.description);
    form.append('image', $("input[name='fimage']")[0].files[0]);
    $http.post('/admin/programs', form, {
      transformRequest: angular.identity,
      headers: { 'Content-Type': undefined },
    }).then(function(response) {
      $scope.program = {};
      $scope.programs.push(response.data)
      $("#addprogram").modal("close")
    }).catch(function(error) {
      throw Error(error)
    });
  }

  $scope.update = function() {
    let update = new FormData();
    let program = $scope.edit_program;
    update.append('title', program.title);
    update.append('description', program.description);
    update.append('image', $("input[name='efimage']")[0].files[0]);
    $http.post('/admin/programs/update/' + program.id, update, {
      transformRequest: angular.identity,
      headers: { 'Content-Type': undefined },
    }).then(function(response) {
      return console.log(response)
    }).catch(function(error) {
      throw Error(error)
    });
  }

  $scope.remove = function(index) {
    let program = $scope.programs[index]
    $http.delete('/admin/programs/' + program.id)
    $scope.programs.splice(index, 1);
  }

  $scope.edit = function(index) {
    $scope.edit_program = $scope.programs[index]
  }

  init();
}]);
