App.controller('NewsController', ["$scope", "$http", function($scope, $http) {

  $scope.news = JSON.parse(data);

  $scope.save = function() {
      console.log("F");
      return false;
    let form = new FormData();
    form.append('title', $scope.news.title);
    form.append('description', $scope.news.description);
    form.append('image', $("input[name='image']")[0].files[0]);
    $http.post('/admin/news', form, {
      transformRequest: angular.identity,
      headers: { 'Content-Type': undefined },
    }).then(function(response) {
      $scope.programs.push(response.data)
    }).catch(function(error) {
      throw Error(error)
    });
  }

  $scope.remove = function(index) {
    let data = $scope.news[index]
    $http.delete('/admin/news/' + data.id)
    $scope.news.splice(index, 1);
  }
}]);
