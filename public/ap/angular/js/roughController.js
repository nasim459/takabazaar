


app.controller('roughController', function($scope, $http) {
    $scope.name_info = [
        {name: "nasim", age: 21, city: "Dhaka"},
        {name: "rafi", age: 33, city: "ssDhaka"},
        {name: "tanha", age: 23, city: "uuDhaka"}
    ];

    $scope.addEntry = function() {
        $scope.name_info.push($scope.newData);
        $scope.newData = '';
    };
});


//    $scope.name_info = [{name: "nasim", age: 21, city: "Dhaka"}];
//    
//    $scope.addEntry = function() {
//        $scope.name_info.push({name: $scope.newData});
//        $scope.newData = '';
//    };