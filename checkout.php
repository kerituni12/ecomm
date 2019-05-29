<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<body>
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> Yêu thích</a></li>
                            <li><a href="cart.html"><i class="fa fa-user"></i>Giỏ hàng</a></li>
                            <li><a href="checkout.html"><i class="fa fa-user"></i> Thanh toán</a></li>
                            <li><a href="#"><i class="fa fa-user"></i> Đăng nhập</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="./"><img src="imgs/logo.png"></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.html">Giỏ - <span class="cart-amunt">0</span><span <span style="color: #5a88ca; font-weight: 700;">đ</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">0</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Trang chủ</a></li>
                        <li><a href="shop.html">Các sản phẩm</a></li>
                        <li><a href="single-product.html">Chi tiết sản phẩm</a></li>
                        <li><a href="cart.html">Giỏ hàng</a></li>
                        <li class="active"><a href="checkout.html">Thanh toán</a></li>
                        <li><a href="contact.html">Liên hệ</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Giỏ hàng</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Tìm kiếm sản phẩm</h2>
                        <form action="">
                            <input type="text" placeholder="tên sản phẩm...">
                            <input type="submit" value="Tìm kiếm">
                        </form>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Danh mục sản Phẩm</h2>
                        <div class="thubmnail-recent">
                            <img src="imgs/Headphones/headphone1.jpg" class="recent-thumb" alt="">
                            <h2><a href="single-product.html?id=21">GSP500</a></h2>
                            <div class="product-sidebar-price">
                                <ins>700000đ</ins> <del>720000đ</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="imgs/Headphones/headphone2.jpg" class="recent-thumb" alt="">
                            <h2><a href="single-product.html?id=22">Uniform</a></h2>
                            <div class="product-sidebar-price">
                                <ins>600000đ</ins> <del>800000đ</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="imgs/Headphones/headphone3.jpg" class="recent-thumb" alt="">
                            <h2><a href="single-product.html?id=23">Victor</a></h2>
                            <div class="product-sidebar-price">
                                <ins>69000đ</ins> <del>79000đ</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="imgs/Headphones/headphone4.jpg" class="recent-thumb" alt="">
                            <h2><a href="single-product.html?id=24">Whiskey</a></h2>
                            <div class="product-sidebar-price">
                                <ins>99000đ</ins> <del>100000đ</del>
                            </div>                             
                        </div>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Bài đăng gần đây</h2>
                        <ul>
                            <li><a href="single-product.html?id=1">Tai nghe Alfra</a></li>
                            <li><a href="single-product.html?id=2">Tai nghe Bravo</a></li>
                            <li><a href="single-product.html?id=3">Tai nghe Charlie</a></li>
                            <li><a href="single-product.html?id=4">Tai nghe Delta</a></li>
                            <li><a href="single-product.html?id=5">Tai nghe Echo</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <div class="woocommerce-info">Phản hồi khách hàng <a class="showlogin" data-toggle="collapse" href="#login-form-wrap" aria-expanded="false" aria-controls="login-form-wrap">Nhấn để đăng nhập</a>
                            </div>

                            <form id="login-form-wrap" class="login collapse" method="post">


                                <p>Nếu bạn đã mua sắm với chúng tôi trước đây, vui lòng nhập thông tin của bạn vào các ô bên dưới. Nếu bạn là khách hàng mới, vui lòng tiếp tục với phần Thanh toán & Giao hàng.</p>

                                <p class="form-row form-row-first">
                                    <label for="username">Tên đăng nhập hoặc email<span class="required">*</span>
                                    </label>
                                    <input type="text" id="username" name="username" class="input-text">
                                </p>
                                <p class="form-row form-row-last">
                                    <label for="password">Mật khẩu <span class="required">*</span>
                                    </label>
                                    <input type="password" id="password" name="password" class="input-text">
                                </p>
                                <div class="clear"></div>


                                <p class="form-row">
                                    <input type="submit" value="Login" name="login" class="button">
                                    <label class="inline" for="rememberme"><input type="checkbox" value="forever" id="rememberme" name="rememberme"> Nhớ </label>
                                </p>
                                <p class="lost_password">
                                    <a href="#">Quên mật khẩu</a>
                                </p>

                                <div class="clear"></div>
                            </form>

                            <div class="woocommerce-info">Mã giảm giá <a class="showcoupon" data-toggle="collapse" href="#coupon-collapse-wrap" aria-expanded="false" aria-controls="coupon-collapse-wrap">Nhập mã giảm giá</a>
                            </div>

                            <form id="coupon-collapse-wrap" method="post" class="checkout_coupon collapse">

                                <p class="form-row form-row-first">
                                    <input type="text" value="" id="coupon_code" placeholder="Mã giảm giá" class="input-text" name="coupon_code">
                                </p>

                                <p class="form-row form-row-last">
                                    <input type="submit" value="Áp dụng" name="apply_coupon" class="button">
                                </p>

                                <div class="clear"></div>
                            </form>

                            <?php	        		

			            if(isset($_SESSION['user'])){	
			            $conn = $pdo->open();

						$stmt = $conn->prepare("SELECT * FROM cart LEFT JOIN products on products.id=cart.product_id WHERE user_id=:user_id");
						$stmt->execute(['user_id'=>$user['id']]);

						$total = 0;
						foreach($stmt as $row){
							$subtotal = $row['price'] * $row['quantity'];
							$total += $subtotal;
						}
						$mm=json_encode($total);
						$pdo->close();	
						$id = 'PAY-'.strtoupper(md5(time()));	             
			              
						$chuoi ='
<form  action="./sales.php" class="checkout" name="checkout">

                                <div id="customer_details" class="col2-set">
                                    <div class="col-1">
                                        <div class="woocommerce-billing-fields">
                                            <h3>Chi tiết thanh toán</h3>
                                           
                                            <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                                <label class="" for="billing_first_name">Họ <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="'.$user['firstname'].' '.$user['lastname'].'" placeholder="" id="billing_first_name" name="billing_first_name" class="input-text ">
                                            </p>

                                            <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                <label class="" for="billing_address_1">Địa chỉ <abbr title="required" class="required">*</abbr>
                                                </label>
                                                
                                                <input type="text" value="" placeholder="Số nhà" id="billing_address_1" name="billing_address_1" class="input-text ">
                                            </p>

                                            
                                            <p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
                                                <label class="" for="billing_email">Địa chỉ email <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="'.$user['email'].'" placeholder="" id="billing_email" name="billing_email" class="input-text ">
                                            </p>



                                            <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                                                <label class="" for="billing_phone">Số điện thoại <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="" id="billing_phone" name="billing_phone" class="input-text ">
                                            </p>

                                            <p id="billing_money" class="form-row form-row-first validate-required validate-email">
                                                <label class="" for="billing_money">tien <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="'.$mm.'" placeholder="" id="billing_money" name="billing_money" class="input-text ">
                                                <input type="hidden" name="pay" value="'.$id.'">
                                            </p>
											<label class="" for="billing_money">Phan hoi <abbr title="required" class="required">*</abbr>
                                                </label>
                                            <textarea name="cmt"></textarea>
                                            <div class="clear"></div>                                            

                                        </div>
                                    </div>

                                    

                                    </div>

                                </div>
                                <div id="order_review" style="position: relative;">

                                    <div id="payment">
                                       
                                        <div class="form-row place-order">

                                            <input type="submit" data-value="Place order" value="Đặt hàng" id="place_order" name="woocommerce_checkout_place_order" id="chay" class="button checkoutt alt">

                                        </div>

                                        <div class="clear"></div>

                                    </div>
                                </div>
                            </form>
';
                            echo $chuoi;
 }
			            else{
			              echo "
			                <li><a href='login.php'>Đăng nhập</a></li>
			                <li><a href='signup.php'>Đăng Ký</a></li>
			              ";
			            }
			          ?>

                        </div>                       
                    </div>                    
                </div>
            </div>
        </div>
    </div>


 <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>Shop<span>taiNghe</span></h2>
                        <p>Chuyên cung cấp các mặt hàng tai nghe chất lượng đến từ các hãng tai nghe hàng đầu thế giới</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Xem chi tiết: </h2>
                        <ul>
                            <li><a href="shop.html">Sản phẩm</a></li>
                            <li><a href="cart.html">Giỏ hàng</a></li>
                            <li><a href="#">Các sản phẩm bán chạy</a></li>
                            <li><a href="checkout.html">Thanh toán</a></li>
                            <li><a href="index.html">Trang chủ</a></li>
                        </ul>                       
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Các loại sản phẩm</h2>
                        <ul>
                            <li><a href="shop.html?category=Headphones">Headphone</a></li>
                            <li><a href="shop.html?category=Earbuds">Earbuds</a></li>   
                            <li><a href="shop.html?category=Tai nghe bluetooth">Tai nghe bluetooth</a></li>                      
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Khách hàng thân thiết</h2>
                        <p>Đăng kí thành viên và những ưu đãi hấp dẫn sẽ được gửi đến mail của bạn</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Nhập email">
                                <input type="submit" value="Đăng kí">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2019 All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>

    
    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
	<script type="text/javascript" src="js/script.slider.js"></script>
  </body>
</html>