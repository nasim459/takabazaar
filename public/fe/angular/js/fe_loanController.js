
var app= angular.module('nasFeApp', ['ngSanitize']);

app.controller('fe_loanController', function($scope, $http) {

    //-----loan-home-api

    $scope.calculation = function () {
        $scope.display_data;

        console.log($scope.Data);
        console.log($scope.display_data);

        $scope.i =0;
        angular.forEach($scope.display_data, function (nas) {
        //     $scope.display_data[$scope.i]['loan_monthly_interest'] = nas.loan_monthly_interest*$scope.Data.year;


            //----Start_EMI_Calculation---------------------------------------------------------------------
            $scope.p = $scope.Data.amount;                                      //----p means principal_amount_or_loan_amount
            $scope.d = $scope.Data.year;                                        //----d means duration_of_manths_or_years
            $scope.i_r = nas.loan_interest_rate;                                //----i_r means interest_rate

            $scope.n = $scope.d*12;                                 //----n means no_of_duration_month
            $scope.i_r_n = $scope.i_r/12;                  //----12 means 1_year_equal_is_12_month----calculate_by_month
            $scope.r = $scope.i_r_n/100;                            //----100 means rate_of_percent


            $scope.f_f_p = $scope.p * $scope.r;                     //----$f_f_p means formula_first_part  == p*r
            $scope.f_s_p_1 = Math.pow((1+$scope.r), $scope.n);         //----$f_s_p_1 means formula_second_part_one
            $scope.f_s_p = $scope.f_s_p_1/($scope.f_s_p_1 - 1);     //----$f_s_p = formula_second_part =={(1+r)^n / [(1+r)^n - 1]}

            //$scope.f_f_p_r = parseFloat(Math.round($scope.f_f_p)).toFixed(10);
            //$scope.f_s_p_r = parseFloat(Math.round($scope.f_s_p)).toFixed(10);

            $scope.e_m_i = Math.round(($scope.f_f_p * $scope.f_s_p), 0); //----calculate_round_figure_value
            //----End_EMI_Calculation----------------------------------------------------------------------


            //----start calculate_down_payment----------------------------------
            $scope.t_p_p_i = $scope.e_m_i * $scope.n;                                 //----t_p_p_i means total_payable_principal_interest
            $scope.t_p_p_i_r = parseFloat(Math.round($scope.t_p_p_i)).toFixed(10);       //----t_p_p_i_r means total_payable_principal_interest_roundValue
            $scope.t_i_p = $scope.t_p_p_i_r - $scope.p;                   //----t_i_p_ means total_interest_payable
            $scope.t_i_p_r = Math.round($scope.t_i_p, 0);                          //----t_i_p_r means total_interest_payable_roundValue
            //----end calculate_down_payment------------------------------------

            $scope.display_data[$scope.i]['loan_monthly_interest'] = $scope.e_m_i;
            $scope.display_data[$scope.i]['loan_interest_payable'] = $scope.t_i_p_r;

            //console.log('mon_installment=' + $scope.e_m_i);
            //console.log('total_payable=' + $scope.t_i_p_r);

            $scope.i++;
        })

    }

    $scope.show_data = function() {
        $scope.Data={'year':2,'amount':200000};
        $http.get('/taka_bazaar/public/loan-home-api').then(function(response) {
            console.log($scope.Data);
            $scope.display_data = response.data;

            //console.log($scope.display_data);

            angular.forEach($scope.display_data, function (nas) {
                var tk = 5;
                console.log(nas);
                //console.log(nas.id * demo(rafi));
            })

        });
    }

    $scope.datas = [
        {name:'01 - Years', id:'1'},
        {name:'02 - Years', id:'2'},
        {name:'03 - Years', id:'3'},
        {name:'04 - Years', id:'4'},
        {name:'05 - Years', id:'5'},
        {name:'06 - Years', id:'6'},
        {name:'07 - Years', id:'7'},
        {name:'08 - Years', id:'8'}
    ];

    $scope.show_data();









    
    
    
    
    
    



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