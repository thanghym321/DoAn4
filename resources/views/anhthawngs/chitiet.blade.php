@extends('_layout_anhthawngs')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('/img/bia.png');">
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="/" target ="_self">Trang chủ</a></span> <span class="mr-2"><a href="index.html">Sản phẩm</a></span> <span>Chi tiết sản phẩm</span></p>
        <h1 class="mb-0 bread">Chi tiết sản phẩm</h1>
        </div>
    </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 ">
                <a href="/img/sanpham/@{{sanpham.image}}" class="image-popup"><img src="/img/sanpham/@{{sanpham.image}}" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-lg-6 product-details pl-md-5">
                <h3>@{{sanpham.name}}</h3>
                <div class="rating d-flex">
                        <p class="text-left mr-4">
                            <a href="#" class="mr-2">5.0</a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                        </p>
                        <p class="text-left mr-4">
                            <a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
                        </p>
                        <p class="text-left">
                            <a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
                        </p>
                    </div>
                <p class="price"><span>@{{sanpham.gia | currency : sanpham.don_vi_tinh :0}}</span></p>
                <p>@{{sanpham.mota_sp}}</p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group d-flex">
                    <div class="select-wrap">
                </div>
                </div>
                </div>
                <div class="w-100"></div>
                
            <div class="w-100"></div>
            <div class="input-group col-md-6 d-flex mb-3 col-lg-12" ng-if="sanpham.id==c.id"  ng-repeat="c in cart">
           
                    <div ng-click="Giam(c)" class="btn btn-sm" style="border: 1px solid rgba(0, 0, 0, 0.1); border-radius:0; height:40px; width:40px; text-align: center; padding: 9px;"><i class="fas fa-minus"></i></div>               
                    <input type="text" value="@{{c.quantity}}" style="width: 70px; text-align: center; font-size: 15px; font-weight: 400; height: 40px;">
                    <div ng-click="Tang(c)" class="btn btn-sm" style="border: 1px solid rgba(0, 0, 0, 0.1); border-radius:0; height:40px; width:40px; text-align: center; padding: 9px;"><i class="fas fa-plus"></i></div>
            </div>
        </div>
        <p><a href="" class="btn btn-black py-3 px-5" ng-click="addToCart(sanpham)">Thêm vào giỏ hàng</a></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
        <div class="col-md-12 heading-section text-center">
        <span class="subheading">Sản phẩm</span>
        <h2 class="mb-4">Sản phẩm cùng loại</h2>
        </div>
    </div>   		
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3" ng-if="sanpham.id_loai_sp==sp.id_loai_sp" ng-repeat="sp in listsanpham">
                <div class="product">
                    <a href="/chitiet/id?=@{{sp.id}}" class="img-prod"><img class="img-fluid" src="/img/sanpham/@{{sp.image}}" alt="Colorlib Template">
                        <span class="status">AT</span>
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="/chitiet/id?=@{{sp.id}}">@{{sp.name}}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span class="price-sale">@{{sp.gia | currency : sp.don_vi_tinh :0}}</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                            <a href="/chitiet/id?=@{{sp.id}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                <span><i class="fas fa-search"></i></span>
                            </a>
                            <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                <span><i class="fas fa-shopping-cart" ng-click="addToCart(sp)"></i></span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="/js/anhthawngs/chitiet.js"></script>
@stop