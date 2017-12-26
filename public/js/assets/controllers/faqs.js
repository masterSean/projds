App.controller('FAQs', ["$scope", "$http", "$sce",  function($scope, $http, $sce) {

  $scope.faqs = [];
  
  angular.element(document).ready(function() {
    $("#editor").trumbowyg();

    $http.get('/admin/faqs/all').then(function(response) {
      $scope.faqs = response.data;
    })
  })

  $scope.create = function() {
    let faq = {
      answer: $("#editor").val(),
      question: $scope.faq.question,
    }

    $http.post('/admin/faqs', faq).then(function(response) {
      $scope.faqs.push(response.data)
    })

    $scope.faq = {};
    $("#editor").trumbowyg('html', '');
  }

  $scope.view = function(index) {
    $scope.selected = angular.copy($scope.faqs[index])
    $scope.selected.answer = $sce.trustAsHtml($scope.selected.answer);
    $("#view").modal("show");
  }

  $scope.remove = function(index) {
    let remove = confirm('Are you sure you want to remove this FAQ?');
    if (remove) {
      let faq = $scope.faqs[index]
      $http.delete('/admin/faqs/' + faq.id);
      $scope.faqs.splice(index, 1);
    }
  }
}]);

