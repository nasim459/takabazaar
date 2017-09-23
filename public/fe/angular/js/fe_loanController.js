
var app= angular.module('nasFeApp', ['ngSanitize']);

app.controller('fe_loanController', function($scope, $http) {

    //-----loan-home-api
    $scope.show_data = function() {
        $http.get('/taka_bazaar/public/loan-home-api').then(function(response) {
            $scope.display_data = response.data;
        });
    }
    $scope.show_data();


    //-----investment-api
    $scope.show_data = function() {
        $http.get('/taka_bazaar/public/investment-api').then(function(response) {
            $scope.investment_data = response.data;
        });
    }
    $scope.show_data();


    //-----card-credit-api
    $scope.show_data = function() {
        $http.get('/taka_bazaar/public/card-credit-api').then(function(response) {
            $scope.card_data = response.data;
        });
    }
    $scope.show_data();


    //-----card-credit-api
    $scope.show_data = function() {
        $http.get('/taka_bazaar/public/card-debit-api').then(function(response) {
            $scope.card_debit_data = response.data;
        });
    }
    $scope.show_data();



});