
var app= angular.module('nasFeApp', ['ngSanitize']);

app.controller('fe_loanController', function($scope, $http) {

    //-----loan-home-api

    $scope.calculation = function () {
        $scope.display_data;

        console.log($scope.Data);
        console.log($scope.display_data);

        $scope.i =0;
        angular.forEach($scope.display_data, function (nas) {
            $scope.display_data[$scope.i]['loan_monthly_interest'] = nas.loan_monthly_interest*$scope.Data.year;
            $scope.i++;
            console.log('hello');

            //----Start_EMI_Calculation---------------------------------------------------------------------
            $scope.p = 200000;                                      //----p means principal_amount_or_loan_amount
            $scope.d = 2;                                           //----d means duration_of_manths_or_years
            $scope.n = $scope.d/12;                                 //----n means no_of_duration_month
            $scope.i_r_n = nas.loan_interest_rate;                  //----12 means 1_year_equal_is_12_month----calculate_by_month
            $scope.r = $scope.i_r_n/100;                            //----100 means rate_of_percent


            $scope.f_f_p = $scope.p * $scope.r;                     //----$f_f_p means formula_first_part  == p*r
            $scope.f_s_p_1 = Math.pow(1+$scope.r,$scope.n);         //----$f_s_p_1 means formula_second_part_one
            $scope.f_s_p = $scope.f_s_p_1/($scope.f_s_p_1 - 1);     //----$f_s_p = formula_second_part =={(1+r)^n / [(1+r)^n - 1]}

            $scope.f_f_p_r = parseFloat(Math.round($scope.f_f_p)).toFixed(10);
            $scope.f_s_p_r = parseFloat(Math.round($scope.f_s_p)).toFixed(10);

            $scope.e_m_i = Math.round($scope.f_f_p_r * $scope.f_s_p_r, 0); //----calculate_round_figure_value
            //----End_EMI_Calculation----------------------------------------------------------------------


            //----start calculate_down_payment----------------------------------
            $scope.t_p_p_i = $scope.e_m_i * $scope.n;                                 //----t_p_p_i means total_payable_principal_interest
            $scope.t_p_p_i_r = parseFloat(Math.round($scope.t_p_p_i)).toFixed(10);       //----t_p_p_i_r means total_payable_principal_interest_roundValue
            $scope.t_i_p = $scope.t_p_p_i_r - $scope.r_d_p_r;                   //----t_i_p_ means total_interest_payable
            $scope.t_i_p_r = Math.round($scope.t_i_p);                          //----t_i_p_r means total_interest_payable_roundValue
            //----end calculate_down_payment------------------------------------

            //$scope.display_data[$scope.i]['loan_monthly_interest'] = $scope.e_m_i;
            //$scope.display_data[$scope.i]['loan_interest_payable'] = $scope.t_i_p_r;



            $scope.k = parseFloat(Math.round($scope.r)).toFixed(10);
            console.log($scope.r);
            console.log($scope.k);
            console.log(Math.pow(4, 8));
            console.log('EMI='+$scope.e_m_i);
        })

    }

    $scope.show_data = function() {
        //$scope.Data['year']=2;
        //$scope.Data['amount']=200000;
        $http.get('/taka_bazaar/public/loan-home-api').then(function(response) {
            $scope.display_data = response.data;

            //console.log($scope.display_data);

            $scope.rafi=1;
            $scope.demo = function (rafi) {
                return rafi*rafi;
            }

            angular.forEach($scope.display_data, function (nas) {
                var tk = 5;
                console.log(nas);
                //console.log(nas.id * demo(rafi));
            })

        });
    }
    $scope.show_data();











    $scope.rough = function (multiply) {
        return multiply * multiply;
    }


    
    
    
    
    
    



    //-----investment-api
    $scope.show_data = function() {
        $http.get('/taka_bazaar/public/investment-api').then(function(response) {
            $scope.investment_data = response.data;
        });
    }
    $scope.show_data();


    //-----insurance-api
    $scope.show_data = function() {
        $http.get('/taka_bazaar/public/insurance-api').then(function(response) {
            $scope.insurance_data = response.data;
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