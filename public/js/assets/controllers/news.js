App.controller('NewsController', ["$scope", "$http", function($scope, $http) {

  $scope.news = JSON.parse(data);
  $scope.edit_data = {};

  $scope.save = function() {
    let form = new FormData();
    form.append('title', $scope.data.title);
    form.append('description', $scope.data.description);
    form.append('image', $("input[name='image']")[0].files[0]);
    $http.post('/admin/news', form, {
      transformRequest: angular.identity,
      headers: { 'Content-Type': undefined },
    }).then(function(response) {
      $scope.news.push(response.data)
      $("#addnews").modal("hide");
      $scope.data = {};
    }).catch(function(error) {
      throw Error(error)
    });
  }

  $scope.edit = function (index, id) {
    $scope.edit_data = $scope.news[index];
    $scope.edit_id = id;
    $scope.edit_index = index;
    $("#editnews").modal("show");
  }

  $scope.update = function () {
    let form = new FormData();
    form.append('title', $scope.edit_data.title);
    form.append('description', $scope.edit_data.description);
    form.append('image', $("input[name='edit_image']")[0].files[0]);
    $http.post('/admin/news/' + $scope.edit_data.id, form, {
      transformRequest: angular.identity,
      headers: { 'Content-Type': undefined },
    }).then(function(response) {
      $scope.news[$scope.edit_data.index] = response.data;
      $("#editnews").modal("hide");
      $scope.data = {};
    }).catch(function(error) {
      throw Error(error)
    });

  }

  $scope.remove = function(index, id) {
    let data = $scope.news[index]
    $http.delete('/admin/news/' + id)
    $scope.news.splice(index, 1);
  }
}]);
