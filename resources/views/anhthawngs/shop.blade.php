@extends('_layout_anhthawngs')
@section('content')
<style>
    /*---------------------
  Categories
-----------------------*/

.categories__item {
	position: relative;
}

.categories__item h5 {
	position: absolute;
	left: 0;
	width: 100%;
	padding: 0 20px;
	bottom: 20px;
	text-align: center;
}

.at {
	font-size: 13px;
	color: #1c1c1c;
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 2px;
	padding: 12px 0 10px;
	display: block;
    margin-top:10px;
}

.categories__slider .col-lg-3 {
	max-width: 100%;
}

.categories__slider.owl-carousel .owl-nav button {
	font-size: 18px;
	color: #1c1c1c;
	height: 70px;
	width: 30px;
	line-height: 70px;
	text-align: center;
	border: 1px solid #ebebeb;
	position: absolute;
	left: -35px;
	top: 50%;
	-webkit-transform: translateY(-35px);
	background: #ffffff;
}

.categories__slider.owl-carousel .owl-nav button.owl-next {
	left: auto;
	right: -35px;
}

.owl-carousel .owl-item img {
    display: block;
    width: 100px;
    height: 100px;
}
</style>
<div class="hero-wrap hero-bread" style="background-image: url('/img/bia.png');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="/">Trang chủ</a></span> <span>@{{loaisanpham.tenloai}}</span></p>
            <h1 class="mb-0 bread">@{{loaisanpham.tenloai}}</h1>
          </div>
        </div>
      </div>
    </div>

    <!-- Categories Section Begin -->
    <section class="categories" style="margin-top: 60px;">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3" ng-repeat="llsp in listlsp">
                        <div class="categories__item">
                           <a href="/shop/id?=@{{llsp.id}}"><img src="/img/loaisp/@{{llsp.image}}" alt=""></a>
                        </div>
                        <h6><a href="/shop/id?=@{{llsp.id}}" class="at">@{{llsp.tenloai}}</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">

    			<div class="col-md-6 col-lg-3"  dir-paginate="sp in sanpham | loaisp:loaisanpham | itemsPerPage: pageSize" current-page="currentPage"">
    				<div class="product">
    					<a href="/chitiet/id?=@{{sp.id}}" class="img-prod"><img class="img-fluid" src="/img/sanpham/@{{sp.image}}" alt="Colorlib Template">
    						<span class="status">AT</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="/chitiet/id?=@{{sp.id}}">@{{sp.name}}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc"></span><span class="price-sale">@{{sp.gia | currency : sp.don_vi_tinh :0}}</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
                                <a href="/chitiet/id?=@{{sp.id}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                <span><i class="fas fa-search"></i></span>
                                </a>
                                <a href="" class="buy-now d-flex justify-content-center align-items-center mx-1" ng-click="addToCart(sp)">
                                <span><i class="fas fa-shopping-cart" ></i></span>
                                </a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
		  <div style="text-align: center;" class="diranhthawngs">
			<dir-pagination-controls max-size='5' on-page-change="pageChangeHandler(newPageNumber)" id="buttonat"></dir-pagination-controls>
		</div>
          </div>
        </div>
    	</div>
    </section>
<script src="/js/anhthawngs/shop.js"></script>
<script src="https://rawgit.com/michaelbromley/angularUtils-pagination/master/dirPagination.js"></script>
@stop