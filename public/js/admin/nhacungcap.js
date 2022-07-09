var app = angular.module('myapp',['angularUtils.directives.dirPagination']);
                app.controller('mycontroller',function($scope,$http)
                {
                $scope.q="";
                var api = 'http://127.0.0.1:8000/api/nhacungcaps/';
                var loadData = function(){
                    $http({
                        method:'GET',
                        url:api
                    }).then(function(res){
                        $scope.nhacungcap = res.data;
                        console.log(res.data);
                    });
                }
                loadData();

                $scope.currentPage = 1;
                $scope.pageChangeHandler = function(num) {
                        $scope.currentPage = num;
                    };
                $scope.pageSize = 10;
                
                $scope.showModal = function(id) {
                    $scope.id = id;
                    if (id == 0) {
                        $scope.modaltitle = "Thêm nhà cung cấp mới";
                        if ($scope.ncc) {
                            delete $scope.ncc;
                        }
                    } else {
                        $scope.modaltitle = "Sửa thông tin nhà cung cấp";
                        $http({
                            method: "GET",
                            url: api + id
                        }).then(function(res) {
                            $scope.ncc = res.data;
                        });
                    }
                    $('#modelId').modal('show');
                }

                $scope.saveData = function() {
                    var m = $scope.id == 0 ? "POST" : "PUT";
                    var url = $scope.id == 0 ? api : api + $scope.id;
                    $http({
                        method: m,
                        url: url,
                        data: $scope.ncc,
                        'content-Type': 'application/json'

                    }).then(function(res) {
                        $scope.ncc == res.data;
                    });
                    $('#modelId').modal('hide');
                    window.location.reload();
                }


                $scope.deleteClick = function(id) {
                    var hoi = confirm('Bạn có muốn xóa nhân viên này không?');
                    if (hoi) {
                        $http({
                            method: "DELETE",
                            url: api + id
                        }).then(function(res) {
                            $scope.message = res.data;
                            $scope.reloadData();
                        });
                    }
                    window.location.reload();
                }

});