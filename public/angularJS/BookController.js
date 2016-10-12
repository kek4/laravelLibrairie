app.controller('BookController', function BookController($scope, $http) {

  // Get the list of book in JSON
  $http.get('/book/book-listJson').then(function(response){
    $scope.listBook = response.data;
  });

  // Delete a book with his id
  $scope.deleteBook = function(id){

        $http.get('/book/delete/'+id).then(function(response){
         $scope.listBook = response.data;
        });
        toastr.success("", "Livre supprimé !");
  }

});
