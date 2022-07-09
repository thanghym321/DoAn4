var app = angular.module('myapp',[]);
                app.controller('mycontroller',function($scope,$http)
                {
                    var api = 'http://127.0.0.1:8000/api/khachhangs/';
                    var api1 = 'http://127.0.0.1:8000/api/hdbans/';
                    var api2 = 'http://127.0.0.1:8000/api/chitiethdbans/';
                    var loadData = function(){
                        $http({
                            method:'GET',
                            url:api
                        }).then(function(res){
                            $scope.khachhang  = res.data;
                            console.log(res.data);
                        });
                    }
                    loadData();

                    $scope.total = 0;
                    $scope.LoadCart = function () {
                        $scope.cart = JSON.parse(localStorage.getItem('cart'));
                        $scope.cart.forEach(function (item, i) {
                            $scope.total += item.quantity * item.gia;
                        });
                    }
                    $scope.LoadCart();   

                    $scope.CreateHoaDon = function () {
                        let bills_ban = {};
                        bills_ban.id_kh = $('#id_kh').val();
                        bills_ban.note = $('#note').val();
                        bills_ban.payment= $('#payment').val();
                        bills_ban.bill_detail_ban = [];
                        $scope.cart.forEach(function (item, i) {
                            bills_ban.bill_detail_ban.push({ id_sp: item.id, sl: item.quantity });
                        });
                        $http({
                            method: 'POST',
                            url: api2,
                            datatype: 'json',
                            data: JSON.stringify(bills_ban.bill_detail_ban)
                        }).then(function (response) {
                            if (response.data.ok == 1) {
                                alert('Thêm thành công');
                            }
                            else {
                                alert('Có lỗi');
                            }
                        });
                        $http({
                            method: 'POST',
                            url: api1,
                            datatype: 'json',
                            data: JSON.stringify(bills_ban)
                        }).then(function (response) {
                            if (response.data.ok == 1) {
                                alert('Thêm thành công');
                            }
                            else {
                                alert('Có lỗi');
                            }
                        });
                    };     

});