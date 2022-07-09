<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AnhThawngs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="19x19" href="/img/logo.png">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/anhthawngs/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/anhthawngs/css/animate.css">
    
    <link rel="stylesheet" href="/anhthawngs/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/anhthawngs/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/anhthawngs/css/magnific-popup.css">

    <link rel="stylesheet" href="/anhthawngs/css/aos.css">

    <link rel="stylesheet" href="/anhthawngs/css/ionicons.min.css">

    <link rel="stylesheet" href="/anhthawngs/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/anhthawngs/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="/anhthawngs/css/flaticon.css">
    <link rel="stylesheet" href="/anhthawngs/css/icomoon.css">
    <link rel="stylesheet" href="/anhthawngs/css/style.css">
    <link href="/admin/dist/css/anhthawngs.css" rel="stylesheet">

    <script src="/js/angular.min.js"></script>

  </head>
  <body class="goto-here" ng-app="myapp" ng-controller="mycontroller">

		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">0379114366</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">thanghym321@email.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">Giao hàng trong 3-5 ngày &amp; Đổi trả miễn phí</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="/" ">AnhThawngs</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Danh mục
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav" ng-controller="mycontroller1">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="/" class="nav-link">Trang chủ</a></li>
            <li class="nav-item"><a href="/blog" class="nav-link">Tin tức</a></li>
	          <li class="nav-item"><a href="/about" class="nav-link">Vể chúng tôi</a></li>
	          <li class="nav-item"><a href="/contact" class="nav-link">Liên hệ</a></li>
	          <li class="nav-item cta cta-colored"><a href="/cart" class="nav-link"><i class="fas fa-shopping-cart"></i>[@{{soluong}}]</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

        <!-- Đây là phần nội dung -->
        @yield('content')
        @yield('acc')

		<div>
      <section class="ftco-section ftco-no-pt ftco-no-pb py-5">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Đăng ký để theo dõi bản tin</h2>
          	<span>Nhận thông tin về các cửa hàng mới nhất và các ưu đãi đặc biệt</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex" style="background-color: #f1efef;">
                <input type="text" class="form-control" placeholder="Nhập địa chỉ email của bạn"">
                <input type="submit" value="Đăng ký" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    </div>
    <footer class="ftco-footer ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">AnhThawngs</h2>
              <p>Đây là đồ án 4 của tôi</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://twitter.com/?lang=vi"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://facebook.com/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Danh mục</h2>
              <ul class="list-unstyled">
                <li><a href="/about" class="py-2 d-block">Về chúng tôi</a></li>
                <li><a href="/blog" class="py-2 d-block">Tin tức</a></li>
                <li><a href="/contact" class="py-2 d-block">Liên hệ</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Trợ giúp</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Thông tin vận chuyển</a></li>
	                <li><a href="#" class="py-2 d-block">Đổi &amp; Trả</a></li>
	                <li><a href="#" class="py-2 d-block">Điều khoản &amp; Sử dụng</a></li>
	                <li><a href="#" class="py-2 d-block">Chính sách bảo mật</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Bạn có thắc mắc?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Thị trấn Yên Mỹ - Yên Mỹ - Hưng Yên</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">0379114366</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">thanghym321@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Bản quyền &copy;<script>document.write(new Date().getFullYear());</script> Mọi quyền được bảo lưu | Template này được tạo <i class="icon-heart color-danger" aria-hidden="true"></i> bởi <a href="https://www.facebook.com/thanghym321/" target="_blank">AnhThawngs</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script>
    app.controller('mycontroller1',function($scope,$http)
    {
        $scope.soluong = 0;
        $scope.LoadCart = function () {
            $scope.cart = JSON.parse(localStorage.getItem('cart'));
            $scope.cart.forEach(function (item, i) {
            if(item.id!=""){
                $scope.soluong +=1;
            }
        });     
        }
        $scope.LoadCart();   
                
    });
  </script>
  <script src="/anhthawngs/js/jquery.min.js"></script>
  <script src="/anhthawngs/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/anhthawngs/js/popper.min.js"></script>
  <script src="/anhthawngs/js/bootstrap.min.js"></script>
  <script src="/anhthawngs/js/jquery.easing.1.3.js"></script>
  <script src="/anhthawngs/js/jquery.waypoints.min.js"></script>
  <script src="/anhthawngs/js/jquery.stellar.min.js"></script>
  <script src="/anhthawngs/js/owl.carousel.min.js"></script>
  <script src="/anhthawngs/js/jquery.magnific-popup.min.js"></script>
  <script src="/anhthawngs/js/aos.js"></script>
  <script src="/anhthawngs/js/jquery.animateNumber.min.js"></script>
  <script src="/anhthawngs/js/bootstrap-datepicker.js"></script>
  <script src="/anhthawngs/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="/anhthawngs/js/google-map.js"></script>
  <script src="/anhthawngs/js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-i18n/1.7.4/angular-locale_de-de.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
  </body>
</html>