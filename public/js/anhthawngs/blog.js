var app = angular.module('myapp',[]);
                app.controller('mycontroller', function($scope, $http,$location) {
                    var api = 'http://127.0.0.1:8000/api/newss/';
                    var loadData = function(){
                        $http({
                            Method: "GET",
                            url: api,
                        }).success(function(response) {
                            console.log(response);
                            $scope.news = response;
                        });
                    }
                    loadData();
});