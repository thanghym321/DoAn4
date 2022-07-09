@extends('_layout_admin')
@section('content')
<p style="padding: 5px; font-size:30px;"> <i class="fa fa-table" style="margin:0 10px;"></i>  Quản lý sản phẩm</p>
<div style="display:flex; justify-content: space-between;">
    <p><button class="btn btn-success" ng-click="showModal(0)" style="width: 120px;"> Thêm</button></p>
    <div class="form-group has-search" style="display:flex; align-items:center;">
    <i class="fa fa-search" style="margin-right:10px;"></i>
        <input type="text" class="form-control" placeholder="Search" style="width:250px; border-radius: .25rem" ng-model='q'>
    </div>
        
</div>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>TT</th>
                        <th style="width=500px;">Tên sản phẩm</th>
                        <th>Tên loại sản phẩm</th>
                        <th>Nhà cung cấp</th>
                        <th>Mô tả</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Ảnh</th>
                        <th>Đơn vị tính</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr dir-paginate = "sp in sanpham |filter: q| itemsPerPage: pageSize" current-page="currentPage">
                        <td>@{{$index+1+(currentPage-1)*pageSize}}</td>
                        <td>@{{ sp.name }}</td>
                        <td ng-if="sp.id_loai_sp==lsp.id" ng-repeat="lsp in loaisanpham">@{{ lsp.tenloai }}</td>
                        <td ng-if="sp.id_ncc==ncc.id" ng-repeat="ncc in nhacungcap">@{{ ncc.ten_ncc }}</td>
                        <td>@{{ sp.mota_sp }}</td>
                        <td>@{{ sp.gia | number}}</td>
                        <td>@{{ sp.so_luong}}</td>
                        <td><img src="/img/sanpham/@{{sp.image}}" style='width:100px;height:100px' alt=""></td>
                        <td>@{{ sp.don_vi_tinh}}</td>

                        <td><button class="btn btn-info" ng-click="showModal(sp.id)"><i class="fas fa-edit"></i></button></td>
                        <td><button class="btn btn-danger" ng-click="deleteClick(sp.id)"><i class="fas fa-trash-alt"></i></button></td>
                    </tr>
                </tbody>
            </table>
            <div style="text-align: center;" class="diradmin">
                <dir-pagination-controls max-size='5' on-page-change="pageChangeHandler(newPageNumber)" id="buttonat"></dir-pagination-controls>
            </div>
        </div>
    </div>
</div>


    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document" style="max-width: 600px;">
            <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title">@{{modaltitle}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Tên sản phẩm</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="name" ng-model="sp.name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Loại sản phẩm</label>
                            <div class="col-sm-9">
                                <select class="form-control" ng-model="sp.id_loai_sp">
                                    <option ng-repeat="lsp in loaisanpham"  value="@{{lsp.id}}">@{{lsp.tenloai}}</option>
                                </select>
                            </div>                             
                          </div>
                          <div class="form-group row">
                            <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Nhà cung cấp</label>
                            <div class="col-sm-9">
                                <select class="form-control" ng-model="sp.id_ncc">
                                    <option ng-repeat="ncc in nhacungcap"  value="@{{ncc.id}}">@{{ncc.ten_ncc}}</option>
                                </select>
                            </div>                             
                          </div>

                            <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Mô tả</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" ng-model="sp.mota_sp">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Giá</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" ng-model="sp.gia">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Số lượng</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" ng-model="sp.so_luong">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Ảnh:</label>
                            <div class="col-sm-6">
                                <input type="file" class="form-control " id="file-upload" ng-model="sp.image">
                            </div>
                            </br>
                            <div style="width:100px;height:100px" id="image" class="col-sm-3">
                                <img src="/img/sanpham/@{{sp.image}}" alt="Ảnh" style="width:100%;height:100%" ng-model="sp.image">
                            </div>
                        </div>
                          <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Đơn vị tính</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" ng-model="sp.don_vi_tinh">
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary" ng-click="saveData()">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#exampleModal').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            // Use above variables to manipulate the DOM
        });
    </script>
    <script src="/js/admin/sanpham.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://rawgit.com/michaelbromley/angularUtils-pagination/master/dirPagination.js"></script>

@stop