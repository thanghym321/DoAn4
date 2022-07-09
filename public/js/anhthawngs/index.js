var app = angular.module('myapp',['angularUtils.directives.dirPagination']);
                app.controller('mycontroller',function($scope,$http,$timeout)
                {
                var api = 'http://127.0.0.1:8000/api/slideshows/';
                var api1 = 'http://127.0.0.1:8000/api/sanphams/';
                var api2 = 'http://127.0.0.1:8000/api/loaisanphams/';
                var loadData = function(){
                    $http({
                        method:'GET',
                        url:api
                    }).then(function(res){
                        $scope.slideshow  = res.data;
                        console.log(res.data);
                    });
                    $http({
                        method:'GET',
                        url:api1
                    }).then(function(res){
                        $scope.sanpham = res.data;
                        console.log(res.data);
                    });
                    $http({
                        method:'GET',
                        url:api2
                    }).then(function(res){
                        $scope.loaisanpham = res.data;
                        console.log(res.data);
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
                $scope.pageSize = 20;

                $('.hero__categories__all').on('click', function(){
                    $('.hero__categories ul').slideToggle(400);
                });
                
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