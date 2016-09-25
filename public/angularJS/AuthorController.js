app.controller('AuthorController', function AuthorController($scope, $http) {

  // Récupère la list des b
  $http.get('author-listJson').then(function(response){
    console.log(response);
    $scope.authorBook = response.data;
  });


});
