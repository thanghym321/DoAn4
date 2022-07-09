var app = angular.module('myapp',[]);
                app.controller('mycontroller',function($scope,$http)
                {
                    $scope.LoadCart = function () {
                        $scope.cart = JSON.parse(localStorage.getItem('cart'));
                    }
                    $scope.LoadCart();

                    $scope.Tang = function (sp) {
                        var index = $scope.cart.indexOf(sp);
                        if (index >= 0) {
                            $scope.cart[index].quantity += 1;
                        }
                        localStorage.setItem('cart', JSON.stringify($scope.cart));
                    }
                
                    $scope.Giam = function (sp) {
                        var index = $scope.cart.indexOf(sp);
                        if (index >= 0 && $scope.cart[index].quantity >= 2) {
                            $scope.cart[index].quantity -= 1;
                        }
                        localStorage.setItem('cart', JSON.stringify($scope.cart));
                    }
                
                    $scope.Xoa = function (sp) {
                        var index = $scope.cart.indexOf(sp);
                        $scope.cart.splice(index, 1);
                        localStorage.setItem('cart', JSON.stringify($scope.cart));
                        alert("Đã xóa sản phẩm thành công");
                    }

                    $scope.XoaCart = function () {
                        localStorage.setItem('cart', null);
                        location.reload();
                    }
                    

});