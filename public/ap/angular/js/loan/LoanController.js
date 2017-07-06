


app.controller('LoanController', function($scope, $http) {

    //-----rental_running_service_bill_view
    $scope.loanPersonalView = function() {
        $http.get('/taka_bazaar/public/loan-personal-view').then(function(response) {
            $scope.loan_personal_view = response.data;
            console.log(response.data);
        });
    };
    $scope.loanPersonalView();






    //-----info_rental_show
    $scope.info_rental_show = function() {
        $http.get('/hsms/public/info-rental-show').then(function(response) {
            $scope.rental_show = response.data;
        });
    };
    $scope.info_rental_show();


});
