@extends('_layout_anhthawngs')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('/img/bia.png');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="/">Trang chủ</a></span> <span>Tin tức</span></p>
            <h1 class="mb-0 bread">Tin tức</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" ng-repeat="n in news">
						<div class="row">
		          <div class="col-md-12 d-flex">
		            <div class="blog-entry align-self-stretch d-md-flex">
		              <a href="" class="block-20" style="background-image: url('/img/news/@{{n.image}}');">
		              </a>
		              <div class="text d-block pl-md-4">
		              	<div class="meta mb-3">
		                  <div><a href="#">July 20, 2019</a></div>
		                  <div><a href="#">Admin</a></div>
		                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
		                </div>
		                <h3 class="heading"><a href="#">@{{n.title}}</a></h3>
		                <p>@{{n.content}}</p>
		                <p><a href="" class="btn btn-primary py-2 px-3">Xem thêm</a></p>
		              </div>
		            </div>
		          </div>
						</div>
          </div> <!-- .col-md-8 -->
          

        </div>
      </div>
    </section> <!-- .section -->
    <script src="/js/anhthawngs/blog.js"></script>
@stop