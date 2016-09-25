var app = angular.module('app', []);

// configure l'affichage de nos données de la scope
app.config(function($interpolateProvider){
    $interpolateProvider.startSymbol('#{').endSymbol('}#');
});
