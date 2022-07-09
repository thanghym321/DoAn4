@extends('_layout_anhthawngs')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<style>
  .hero__categories{
    border: 1px solid #ebeaea;
  }
  .hero__categories__all {
    background: #7fad39;
    position: relative;
    padding: 10px 25px 10px 40px;
    cursor: pointer;
  }

  .hero__categories__all i {
    font-size: 16px;
    color: #ffffff;
    margin-right: 10px;
  }

  .hero__categories__all span {
    font-size: 18px;
    font-weight: 700;
    color: #ffffff;
  }

  .hero__categories ul {
    border: 1px solid #ebebeb;
    padding-left: 40px;
    padding-top: 10px;
    padding-bottom: 12px;
    padding-right: 20px;
    border:none;
  }

  .hero__categories ul li {
    list-style: none;
  }

  .hero__categories ul li a {
    font-size: 16px;
    color: #1c1c1c;
    line-height: 25px;
    display: block;
  }
  .hero__item {
	height: 431px;
	display: flex;
	align-items: center;
	padding-left: 75px;
}

  @media only screen and (max-width: 767px) {
	.hero__categories {
		margin-bottom: 30px;
	}
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
	.hero__categories {
		margin-bottom: 30px;
	}
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
	.hero__categories__all {
		padding: 10px 25px 10px 20px;
	}
	.hero__categories ul {
		padding-left: 20px;
	}
}


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
<div class="container">
  <div class="row">
    <div class="col-lg-3">
      <div class="hero__categories">
        <div class="hero__categories__all">
            <i class="fa fa-bars"></i>
            <span>Loại sản phẩm</span>
        </div>
        <ul ng-repeat="lsp in loaisanpham" style="margin:0;">
            <li><a href="/shop/id?=@{{lsp.id}}">@{{lsp.tenloai}}</a></li>
        </ul>
      </div>
    </div>
    <div class="col-lg-9">
      <div id="carouselExampleIndicators" class="carousel slide col-lg-12" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item" ng-class="{active:!$index}" ng-repeat="ss in slideshow |  limitTo :6 :0">
            <img class="d-block w-100" src="/img/slideshow/@{{ss.image}}" alt=""  height="400px">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="col-lg-12" style="margin-top:14px;">
        <div class="row">
          <div class="col-lg-6 qcat" ng-repeat="ss in slideshow | orderBy: '-id' | limitTo :2 :0">
            <img src="/img/slideshow/@{{ss.image}}" alt="" height="100%" width="100%;">
          </div>
        </div>
      </div>
  </div>
</div>

<!-- Categories Section Begin -->
<section class="categories" style="margin-top: 60px">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3" ng-repeat="lsp in loaisanpham">
                        <div class="categories__item">
                            <a href="/shop/id?=@{{lsp.id}}"><img src="/img/loaisp/@{{lsp.image}}" alt=""></a>
                        </div>
                        <h6><a href="/shop/id?=@{{lsp.id}}" class="at">@{{lsp.tenloai}}</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

<section class="ftco-section" style="margin-top: -40px">
  <div class="container">
    <div class="row justify-content-center mb-3 pb-3">
      <div class="col-md-12 heading-section text-center ftco-animate">
        <h2 class="mb-4">Sản phẩm</h2>
        
      </div>
    </div>   		
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3" dir-paginate="sp in sanpham | itemsPerPage: pageSize" current-page="currentPage">
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
</section>

<hr>

<script src="/js/anhthawngs/index.js"></script>
<script src="https://rawgit.com/michaelbromley/angularUtils-pagination/master/dirPagination.js"></script>
 
@stop