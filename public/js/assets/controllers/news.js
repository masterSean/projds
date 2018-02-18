App.controller('NewsController', ["$scope", "$http", function($scope, $http) {

  $scope.news = JSON.parse(data);

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
