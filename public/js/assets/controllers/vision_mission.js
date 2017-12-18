App.controller('VisionMission', ["$scope", "$http", "$sce", "$timeout", function($scope, $http, $sce, $timeout) {

  $scope.vision = {}
  $scope.mission = {}

  angular.element(document).ready(function() {
    $("#vision_editor").trumbowyg();
    $("#mission_editor").trumbowyg();
  })

  function init() {
    $http.get('/admin/citizen_charter/vm/vision').then(function(response) {
      let data = response.data;
      data.content = $sce.trustAsHtml(data.content)
      $scope.vision = data
      $("#vision_editor").trumbowyg('html', data.content);
    });

    $http.get('/admin/citizen_charter/vm/mission').then(function(response) {
      let data = response.data;
      data.content = $sce.trustAsHtml(data.content)
      $scope.mission = data
      $("#mission_editor").trumbowyg('html', data.content);
    });
  }

  $scope.save_vision = function() {
    let data = angular.copy($scope.vision);
    data.content = $("#vision_editor").val();
    data.name = "Vision"
    $http.post('/admin/citizen_charter/vm', data)
    $scope.edit_mode = false;

    $timeout(function() {
      $scope.vision.content = $sce.trustAsHtml(data.content);
    }, 500);
  }

  $scope.save_mission = function() {
    let data = angular.copy($scope.mission);
    data.content = $("#mission_editor").val();
    data.name = "Mission"
    $http.post('/admin/citizen_charter/vm', data)
    $scope.medit_mode = false;

    $timeout(function() {
      $scope.mission.content = $sce.trustAsHtml(data.content);
    }, 500);
  }

  init();
}]);
