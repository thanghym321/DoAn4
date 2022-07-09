@extends('_layout_anhthawngs')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('/img/bia.png');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="/">Trang chủ</a></span> <span>Thanh toán</span></p>
            <h1 class="mb-0 bread">Thanh toán</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
						<form action="#" class="billing-form">
							<h3 class="mb-4 billing-heading">Chi tiết thanh toán</h3>
	          	<div class="row align-items-end">
                  
                <div class="w-100"></div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Khách hàng</label>
							<select class="form-control" style="color:black !importtant; ">
								<option ng-repeat="kh in khachhang"  value="@{{kh.id}}" id="id_kh">@{{kh.ten_kh}}</option>
							</select>                          
						</div>
					</div>
		            <div class="col-md-12">
	                  <div class="form-group">
						<label for="">Ghi chú</label>
						<textarea class="form-control" name="" id="" rows="11" id="note"></textarea>
	                </div>
		            </div>
	            </div>
	          </form><!-- END -->
					</div>
					<div class="col-xl-5">
	          <div class="row mt-5 pt-3">
	          	<div class="col-md-12 d-flex mb-5">
	          		<div class="cart-detail cart-total p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Tổng số giỏ hàng</h3>
	          			<p class="d-flex" ng-repeat="c in cart track by $index">
                                    <span style="width:300px;">@{{c.name}}</span>
							        <span style="width:50px;">X@{{c.quantity}}</span>
		    						<span>@{{c.quantity * c.gia | currency : c.don_vi_tinh : 0}}</span>
		    					</p>
		    					<hr>
		    					<p class="d-flex total-price">
		    						<span>Tổng</span>
		    						<span>@{{total | currency : c.don_vi_tinh : 0}}</span>
		    					</p>
								</div>
	          	</div>
	          	<div class="col-md-12">
	          		<div class="cart-detail p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Phương thức thanh toán</h3>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2" value="off" id="payment"> Thanh toán khi nhận hàng</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2" value="on" id="payment"> Thanh toán online</label>
											</div>
										</div>
									</div>
									<p><a href="#"class="btn btn-primary py-3 px-4">Đặt hàng</a></p>
								</div>
	          	</div>
	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->
<script src="/js/anhthawngs/checkout.js"></script>
@stop
