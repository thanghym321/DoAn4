@extends('_layout_anhthawngs')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('/img/bia.png');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="/">Trang chủ</a></span> <span>Giỏ hàng</span></p>
            <h1 class="mb-0 bread">Giỏ hàng của tôi</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
							  	<th>Ảnh</th>
						        <th>Tên sản phẩm</th>
						        <th>Giá</th>
						        <th>Số lượng</th>
						        <th>Tổng</th>
								<th>&nbsp;</th>
						        <th>&nbsp;</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr class="text-center" ng-repeat="c in cart track by $index">

							  	<td class="image-prod"><div class="img" style="background-image:url(/img/sanpham/@{{c.image}});"></div></td>					        
						        
						        <td class="product-name">
						        	<h3>@{{c.name}}</h3>
						        </td>

						        <td class="price">@{{c.gia | currency : c.don_vi_tinh : 0}}</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
										<div ng-click="Giam(c)" class="btn btn-sm" style="border: 1px solid rgba(0, 0, 0, 0.1); border-radius:0; height:40px; width:40px; text-align: center; padding: 9px;"><i class="fas fa-minus"></i></div>               
                    					<input type="text" value="@{{c.quantity}}"  style="width: 70px; text-align: center; font-size: 15px; font-weight: 400; height: 40px;">
                    					<div ng-click="Tang(c)" class="btn btn-sm" style="border: 1px solid rgba(0, 0, 0, 0.1); border-radius:0; height:40px; width:40px; text-align: center; padding: 9px;"><i class="fas fa-plus"></i></div>
					          	</div>
					          </td>
						        
						        <td class="total">@{{c.quantity * c.gia | currency : c.don_vi_tinh : 0 }}</td>

								
								<td class="product-remove"><a href="" ><span class="ion-ios-close" ng-click="Xoa(c)"></span></a></td>
						      </tr><!-- END TR-->
						    </tbody>
						  </table>
					  </div>
					  <p><a href="/checkout" class="btn btn-primary py-3 px-4" style="float:right; margin: 20px 0">Thanh toán</a></p>
					  <p><a href="" class="btn btn-primary py-3 px-4" style="float:right; margin: 5px 20px" ng-click="XoaCart()">Xóa giỏ hàng</a></p>
					  
    			</div>
    		</div>

			</div>
		</section>
<script src="/js/anhthawngs/cart.js"></script>
@stop