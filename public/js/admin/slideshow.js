var app = angular.module('myapp',['angularUtils.directives.dirPagination']);
                app.controller('mycontroller',function($scope,$http)
                {
                $scope.q="";
                var api = 'http://127.0.0.1:8000/api/slideshows/';
                var loadData = function(){
                    $http({
                        method:'GET',
                        url:api
                    }).then(function(res){
                        $scope.slideshow = res.data;
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
                        $scope.modaltitle = "Thêm loại slideshow mới";
                        if ($scope.ss) {
                            delete $scope.ss;
                        }
                    } else {
                        $scope.modaltitle = "Sửa slideshow";
                        $http({
                            method: "GET",
                            url: api + id
                        }).then(function(res) {
                            $scope.ss = res.data;
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
                        data: $scope.ss,
                        'content-Type': 'application/json'

                    }).then(function(res) {
                        $scope.ss == res.data;
                    });
                    $('#modelId').modal('hide');
                    window.location.reload();
                }


                $scope.deleteClick = function(id) {
                    var hoi = confirm('Bạn có muốn xóa slideshow này không?');
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
                
                const fileUpload = document.querySelector("#file-upload");
                fileUpload.addEventListener("change", (e) => {
                const files = e.target.files;
                document.getElementById('image').innerHTML = `<img src="/img/slideshow/`+ files[0].name +`" alt="Ảnh" style="width:100%;height:100%">`;
                for(const file of files) {
                     const {name, type, size, lastModified } = file;
                     // Làm gì đó với các thông tin trên
                    $scope.ss.image = file.name;
                document.getElementById('image').innerHTML = `<img src="/img/slideshow/`+ file.name +`" alt="Ảnh" style="width:100%;height:100%">`;
                 };
                 });
                
                
});