var app = angular.module('myapp',['angularUtils.directives.dirPagination']);
app.config(['$locationProvider', function($locationProvider){ 
    $locationProvider.html5Mode({
       enabled: true,
       requireBase: false
   });    
}]);
                app.controller('mycontroller',function($scope,$http,$location,$timeout,$window)
                {
                var id = $location.url().split('=')[1]; 
                console.log(id);

                var api = 'http://127.0.0.1:8000/api/sanphams/';
                var api1 = 'http://127.0.0.1:8000/api/loaisanphams/';
                var loadData = function(){
                    $http({
                        Method: "GET",
                        url: api,
                    }).success(function(response) {
                        console.log(response);
                        $scope.sanpham = response;
                    });
                    $http({
                        Method: "GET",
                        url: api1+id,
                    }).success(function(response) {
                        console.log(response);
                        $scope.loaisanpham = response;
                    });
                    $http({
                        Method: "GET",
                        url: api1,
                    }).success(function(response) {
                        console.log(response);
                        $scope.listlsp = response;
                        $timeout(function () {
                            $(".categories__slider").owlCarousel({
                                loop: true,
                                margin: 0,
                                items: 6,
                                dots: false,
                                nav: true,
                                navText: ["<span class='fa fa-angle-left'><span/>", "<span class='fa fa-angle-right'><span/>"],
                                animateOut: 'fadeOut',
                                animateIn: 'fadeIn',
                                smartSpeed: 1200,
                                autoHeight: false,
                                autoplay: true,
                                responsive: {
            
                                    0: {
                                        items: 1,
                                    },
            
                                    480: {
                                        items: 2,
                                    },
            
                                    768: {
                                        items: 3,
                                    },
            
                                    992: {
                                        items: 4,
                                    },
                                    958: {
                                        items: 5,
                                    },
            
                                    992: {
                                        items: 6,
                                    },
                                }
                            });
            
                        }, 0);
                    });
                }
                loadData();

                $scope.currentPage = 1;
                $scope.pageChangeHandler = function(num) {
                        $scope.currentPage = num;
                    };
                $scope.pageSize = 8;

                $scope.addToCart = function (sp) {
                    let item = {};
                    item.id = sp.id;
                    item.name = sp.name;
                    item.id_loai_sp = sp.id_loai_sp;
                    item.id_ncc = sp.id_ncc;
                    item.mota_sp = sp.mota_sp;
                    item.gia = sp.gia;
                    item.so_luong = sp.so_luong;
                    item.image = sp.image;
                    item.don_vi_tinh = sp.don_vi_tinh;
                    item.quantity = 1;
                    var list;
                    if (localStorage.getItem('cart') == null) {
                        list = [item];
                    } else {
                        list = JSON.parse(localStorage.getItem('cart')) || [];
                        let ok = true;
                        for (let x of list) {
                            if (x.id == item.id) {
                                x.quantity += 1;
                                ok = false;
                                break;
                            }
                        }
                        if (ok) {
                            list.push(item);
                        }
                    }
                    localStorage.setItem('cart', JSON.stringify(list));
                    alert("Đã thêm giở hàng thành công");
                }
});
app.filter('loaisp', function () {
    return function (items,tmp) {
        var filtered = [];
        for (var i = 0; i < items.length; i++) {
            var item = items[i];
            if (item.id_loai_sp == tmp.id) {
                filtered.push(item);
            }
        }
        return filtered;
    };
});