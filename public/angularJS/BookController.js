app.controller('BookController', function BookController($scope, $http) {

  // Récupère la liste des books en Json et l'envoie dans la blade via la scope
  $http.get('book-listJson').then(function(response){
    $scope.listBook = response.data;
  });


});
