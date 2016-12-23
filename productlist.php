 <?php
 session_start();
 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="assets/front/js/html5-fix.js"></script>
<!--
thẻ đường dẫn tuyệt đối
<base href="http://Kiddytoys.vn/" />
 -->
<link rel="icon" href="assets/front/img/icon.png" type="image/x-icon" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thiên Đường Đồ Chơi Trẻ Em</title>
<meta name="description" content="Kiddytoys là trang thương mại điện tử chuyên bán các mặt hàng đồ chơi trẻ em, đa mẫu mã, chủng loại." />
<meta name="keywords" content="" />
<meta name="Title" content="Thiên Đường Đồ Chơi Trẻ Em" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:url" content="http://Kiddytoys.vn/" />
<meta property="og:title" content="Thiên Đường Đồ Chơi Trẻ Em" />
<meta property="og:description" content="Kiddytoys là trang thương mại điện tử chuyên bán các mặt hàng đồ chơi trẻ em, đa mẫu mã, chủng loại." />
<meta itemprop="priceCurrency" content="VNĐ" />
<meta content="index, follow" name="robots">
<!--CSS -->
<link href="assets/front/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/front/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
<link href="assets/front/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="assets/front/js/slick/slick.css" rel="stylesheet" type="text/css" />
<link href="assets/front/js/slick/slick-theme.css" rel="stylesheet" type="text/css" />
<link href="assets/front/css/social-icons.css" rel="stylesheet" type="text/css" />
<link href="assets/front/css/fakeLoader.css" rel="stylesheet" type="text/css" />
<link href="assets/front/css/layout-home.css" rel="stylesheet" type="text/css" />
<link href="assets/front/css/responsive.css" rel="stylesheet" type="text/css" />
<script language="javascript">
    var site_url = 'http://Kiddytoys.vn/';
</script>
<script type="text/javascript" src="assets/front/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="assets/front/js/fakeLoader.min.js"></script>
<script type="text/javascript" src="assets/front/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/front/js/jquery.sticky.js"></script>
<script type="text/javascript" src="assets/front/js/function.js"></script>
<script type="text/javascript" src="assets/front/js/slick/slick.min.js"></script>
<script type="text/javascript" src="assets/front/js/app.js"></script>
</head>

<body lang="vi" class="home">
<div id="fakeLoader"></div>
<div class="flbackdrop"></div>
    <header id="header" class="clearfix">
        <div class="clearfix link-notify">
            <div class="container">
                <div class="row">
                    <ul class="col-xs-12">
                        <li>
                            <i class="glyphicon glyphicon-phone"></i>
                            Dịch vụ khách hàng: <b>(+84) 969 53 57 56</b>
                        </li>
                        <li class="hidden-xs">
                            <i class="glyphicon glyphicon-bed"></i>
                            <a target="_blank" href="mua-sam-online/giao-hang-va-nhan-hang/">Giao Hàng Nhanh</a>
                        </li>
                            <!-- -->
                        <li class="hidden-xs">
                            <i class="glyphicon glyphicon-refresh"></i>
                                <a target="_blank" href="khach-hang/cam-ket-hai-long/">Cam Kết Hài Lòng</a>
                        </li>
                            <!-- -->
                    </ul>
                    
                        <!-- -->
            
                </div>
            </div>
        </div>
            <!-- -->

<div class="clearfix">
    <div class="container">
        <div class="row">
            
            <div class="logo col-xs-12 col-sm-3">
                <a href="index.php">
                    <img src="assets/front/img/logokid.png" alt="" title="" class="img-responsive" />
                </a>
            </div>
            <!-- -->
            <div class="col-xs-12 col-sm-9 header-group-box hidden-xs">                
                <div class="form-search hidden-xs">
                    <form action="search.php" method="get">
                        <input type="text" name="keyword" placeholder="Bạn đang cần tìm..."/>
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
            </div>                
                    <!-- -->
                <ul id="hcart-group">
                    <li > 
                        <div class="h_usercontrol">
                            <button type="button" >
                                <i class="fa fa-user icon"></i>
                                
                                <span>
                                    <b>Tài Khoản</b> 
                                </span>
                            </button>
                            <div class="control_usernav">
                                <ul class="clearfix" role="menu">
                <?php
                       
                        if (isset($_SESSION['email'])){
							if($_SESSION['email'] == 'admin@gmail.com'){
								echo "<li><a href='admin/web/index.php'>Admin</a></li>";
							}
                            echo "<li><a href='#'>Hi, ".$_SESSION['email']."</a></li>";
                            echo "<li><a href='logout.php'>Log out</a></li>";
							
                    }else{
                        echo "<li><a href='login.html'>Đăng nhập</a></li><li><a href='register.html'>Đăng kí</a></li>";
                    }
                ?>
                                    <li><a href="user.html">Tài khoản của tôi</a></li>
                                    <li><a href="user/order.html">Quản lý đơn hàng</a></li>
                                    <li><a href="user/comment.html">Đánh giá của tôi</a></li>
                                    <li><a href="kiem-tra-don-hang.html">Kiểm tra đơn hàng</a></li>
                                </ul>
                            </div>
                        </div>                
                    </li>
                    <li>
                        <div class="h_usercontrol">
						<form action="view_cart.html">
                            <button type="submit" onclick="javascript:view_cart()">
                                <i class="fa fa-shopping-cart icon"></i>
                                <span class="total-items">0</span>
                                <span>
                                    <b>Giỏ hàng</b> 
                                </span>
                            </button>
						</form>
                        </div>
                    </li>
                        <!-- -->
                </ul>                
            </div>                
        
        </div>
    
    </div>
</div>


    <!-- -->


<div class="visible-xs clearfix" id="visiable-xsnav">
    <div class="col-xs-4">
        <button type="button" data-toggle="collapse" data-target="#hnav-group-xs" aria-expanded="false" aria-controls="hnav-group-xs" ><i class="glyphicon glyphicon-list"></i></button>
    </div>
    
    <div class="col-xs-4 text-right">
        <a onclick="javascript:view_cart()" class="link"> 
         <span class="so-cart" >
                 0            </span>
            <i class="glyphicon glyphicon-shopping-cart pull-left"></i>
        </a>
    </div>
        <div class="col-xs-4 text-right">
            <a href="login.html" class="link">
                <span class="pull-right hidden-xs hidden-sm">
                        Đăng Nhập
                </span>
                <i class="glyphicon glyphicon-user pull-right"></i>
            </a>
        </div>
    <!--                 2 FORM TÌM KIẾM VÌ TRONG DIV hiển thị cho di động-->  
    <form action="san-pham/search.php" method="get">
        <div>
            <input type="text" name="keyword" value="<?php echo $keyword; ?>" placeholder="Bạn đang cần tìm..."/>
            <button type="submit">
                <i class="glyphicon glyphicon-search"></i>
            </button>
        </div>
    </form>

    
</div>
    <!--THANH MENU-->
<nav class="clearfix hidden-xs" id="hnav-group">
    <div class="container">
        <ul class="clearfix">
                <li  class="">
                    <a href="index.php" class="" >TRANG CHỦ </a>
                </li>
                    <!-- List-->
                <li  class="">
                    <a href="productlist.php" class="" >Tất Cả </a>
                </li>
                    <!-- BÉ TRAI-->
                <li  class="">
                    <a href="#" class="parent dropdown-toggle disabled" data-toggle="dropdown">ĐỒ CHƠI BÉ TRAI<i class="fa fa-caret-down"></i></a>
                    <ul class="dropdown-menu  level-1">
                        <li>
                            <a href="search.php?keyword=robot">RoBot</a>
                            <!--    <ul class="dropdown-menu sub-menu level-2">
                                    <li ><a href="betrai/robot/sieuanhhung.html">Siêu Anh Hùng</a></li>
                                    <li ><a href="betrai/robot/robotbienhinh.html">RoBot Biến Hình</a></li>
                            
                                </ul>
                            -->
                        </li>
                        <li>
                            <a href="search.php?keyword=vandong" class="parent dropdown-toggle disabled" data-toggle="dropdown">Đồ Chơi Vận Động </a>
                            <!--    <ul class="dropdown-menu sub-menu level-2">
                                    <li ><a href="betrai/dochoivandong/xedap.html">Xe Đạp</a></li>
                                    <li ><a href="betrai/dochoivandong/xetruot.html">Xe Trượt</a></li>
                                    <li ><a href="betrai/dochoivandong/xedapbabanh.html">Xe Đạp 3 Bánh</a></li>
                                </ul>
                            -->
                        </li>
                        <li ><a href="search.php?keyword=game">Game</a></li>
                        <li ><a href="search.php?keyword=dochoitritue">Đồ Chơi Trí Tuệ</a></li>
                        <li ><a href="search.php?keyword=dochoitheophim">Đồ Chơi Theo Phim</a></li>
                    </ul> 
                </li>
                    <!--END BÉ TRAI-->
                                
                    <!-- BÉ GÁI-->
                <li  class="active">
                    <a href="#" class="parent dropdown-toggle disabled" data-toggle="dropdown">ĐỒ CHƠI BÉ GÁI</a><i class="fa fa-caret-down"></i>
                    <ul class="dropdown-menu  level-1">
                        <li>
                            <a href="search.php?keyword=bupbe" class="parent dropdown-toggle disabled"data-toggle="dropdown">Búp Bê</a>
                            <!--
                            <a href="begai/bupbe.html" class="parent dropdown-toggle disabled"data-toggle="dropdown">Búp Bê<i class="fa fa-caret-right"></i></a>
                                <ul class="dropdown-menu sub-menu level-2">
                                    <li ><a href="begai/bupbe/bupbedisney.html">Búp Bê Disney</a></li>
                                    <li ><a href="begai/bupbe/bupbegiayhanquoc.html">Búp Bê Giấy Hàn Quốc</a></li>
                                </ul>
                            --> 
                        </li>
                        <li>
                            <a href="search.php?keyword=" class="parent dropdown-toggle disabled" data-toggle="dropdown">Làm Điệu Cho Bé</a>
                            <!--
                                <ul class="dropdown-menu sub-menu level-2">
                                    <li ><a href="begai/lamdieuchobe/vivatuixach.html">Ví và Túi Xách</a></li>
                                    <li ><a href="begai/lamdieuchobe/phukientoc.html">Phụ Kiện Tóc</a></li>
                                    <li ><a href="begai/lamdieuchobe/trangsuc.html">Trang Sức</a></li>
                                </ul>
                            -->
                        </li>
                        <li ><a href="search.php?keyword=%bep%">Đồ Dùng Nhà Bếp</a></li>
                        <li ><a href="search.php?keyword=dochoitheophim ">Đồ Chơi Theo Phim</a></li>
                    </ul>         
                </li>
                    <!-- END BÉ GÁI-->

                    <!-- KHUYẾN MÃI-->
                <li  class="">
                    <a href="khuyenmai.html" class="" >GIÁ TỐT<span>-30%</span></a>
                </li>
        </ul>
    </div>
</nav>
    <!-- END THANH MENU-->

                   <!-- MENU HIỂN THỊ TRÊN ĐIỆN THOẠI -->
<nav class="clearfix collapse" id="hnav-group-xs">
    <div class="container">
        <ul class="clearfix">
            <li>
                    <a href="http://Kiddytoys.vn/"><i class="glyphicon glyphicon-home"></i></a>
            </li>
            <li>
                    <a href="http://Kiddytoys.vn/"> TRANG CHỦ </a>
            </li>
            
            <li  >
                    <a href="betrai.html"> ĐỒ CHƠI BÉ TRAI </a>
            </li>
            
            <li  class="active">
                    <a href="begai.html"> ĐỒ CHƠI BÉ GÁI </a>
            </li>
            
            <li>
                    <a href="khuyenmai/.html"> GIÁ TỐT <span>-30%</span></a>
            </li>
           
            
        </ul>
    
    </div>

</nav>

    </header>
        
               
    </body>
</div>
                <!-- Sao cmt vào json dc, json ở trên hiển thị di động thì phải. Từ từ có ảnh, có banner thì sửa code thử-->
    
  

<div class="container">
    
<div class="clearfix hidden-xs">

<a name="home_scrollproduct" id="home_scrollproduct"></a>
    <div class="clearfix">

    <h2 class="clearfix title-lg border f-title">
        <span>Tất Cả Sản Phẩm</span>
    </h2>
    <div class="row five-cols-products" id="products-group">  
             
            <?php
					$per_page = 20;
					$conn = mysqli_connect('localhost', 'root', '', 'kiddytoys');
					//count product
					$res_cou = mysqli_query($conn,"SELECT Idproduce from product");
					$cou = mysqli_num_rows($res_cou);
					if(isset($_GET["page"]))
						$page = $_GET["page"];
					else $page = 0;
					if($page=="" || $page < "1"|| $page=="1"){
						$page_num = 0;
					}
					else if($page > ceil($cou/$per_page)){
						$page_num =  ceil($cou/$per_page);
					}
					else{
						$page_num = ($page*$per_page) -	$per_page;
					}
					$res=mysqli_query($conn, "SELECT productname, price,category,imglink, Idproduce	 FROM product limit $page_num, $per_page");
					while($row=mysqli_fetch_array($res)){
						echo '<div class="item">';
							echo '<div class="p-item" itemscope >';
								echo '<figure class="p-img">';
									echo '<a href="product.php?product='.$row["Idproduce"].'" itemprop="url">';
										echo '<img src="'.$row["imglink"].'" alt="img" title="kiddytoys" class="img-responsive" itemprop="image" >';
                                    echo '</a>';
								echo '</figure>';
                        echo '<div class="clearfix p-caption">';
                            echo '<h3 title="kiddytoys" class="p-title">';
                                echo '<a href="#" itemprop="name">'.$row["productname"].'</a>';
                            echo '</h3>';
                            echo '<p class="p-price" itemprop="price"><s itemprop="highPrice">'.($row["price"]*1.5).'&nbsp;<u>đ</u></s><span class="hidden-xs hidden-sm">&nbsp;-&nbsp;</span><b itemprop="lowPrice">'.$row["price"].'&nbsp;<u>đ</u></b></p>';
					echo '<div class="clearfix">';
					
					echo '<form action="cart_update.php" method="post"><button type="submit" class="btn btn-info" name="cart" value='.$row["Idproduce"].'>Đặt mua</button></form>';
                echo '</div></div></div></div>';
				
					}
				//count number of page
				$a = ceil($cou/$per_page); //a is number of page
				?>
		</div>
					<div class="row">
						<ul class="pagination alg-right-pad">
							<?php
								for($b = 1; $b <= $a; $b++){
								?><li><a href="productlist.php?page=<?php echo $b;?>"> <?php echo $b." "; ?></a><?php	
							}
							?>
						</ul>
					</div>
        
</div>


    </div>
    <!--FOOTER-->
    <footer id="footer" class="clearfix">
        
        <div class="testimonials">
    <div class="container">
        <h2>Ý Kiến Khách Hàng</h2>
        <div class="row testimonials-grid">
                <div class="col-sm-3 col-xs-12 item">
                    <div class="quote">
                            Hàng chất lượng, bền đẹp                
                    </div>
                <div class="user">
                    <div class="avatar">
                        <img src="uploads/testimonials/reviews_thu_ngo.jpg" />
                    </div>
                    <div class="user-info">
                        <p class="name">Thu Ngo</p>
                        <p class="title">Ho Chi Minh City, Vietnam</p>
                    </div>
                </div>
                            </div>
                                    <div class="col-sm-3 col-xs-12 item">
                                <div class="user">
                    <div class="avatar">
                        <img src="uploads/testimonials/reviews_trang.jpg" />
                    </div>
                    <div class="user-info">
                        <p class="name">Ánh Nguyễn</p>
                        <p class="title">Mẹ Bỉm Sữa</p>
                    </div>
                </div>
                <div class="quote">
                    Web chuyên nghiệp, Tư vấn nhiệt tình, giao hàng quá nhanh. Sản phẩm in đẹp, chất liệu xịn. 
Quá tuyệt !             </div>
                            </div>
                                    <div class="col-sm-3 col-xs-12 item">
                                <div class="quote">
                    Mình nhận được đơn hàng rồi nha. Dịch vụ tốt. Sản phẩm rất đẹp ak               </div>
                <div class="user">
                    <div class="avatar">
                        <img src="uploads/testimonials/Capture2.PNG" />
                    </div>
                    <div class="user-info">
                        <p class="name">Nguyễn Thanh Mai</p>
                        <p class="title">Giáo Viên Mầm Non</p>
                    </div>
                </div>
                            </div>
                                    <div class="col-sm-3 col-xs-12 item">
                                <div class="user">
                    <div class="avatar">
                        <img src="uploads/testimonials/reviews_Kiti_Luna.jpg" />
                    </div>
                    <div class="user-info">
                        <p class="name">Thùy Giang Phạm</p>
                        <p class="title">Accountant tại Nagase Co.,Ltd</p>
                    </div>
                </div>
                <div class="quote">
                    Nhân viên rất nhiệt tình, sản phẩm chất lượng. Mình đã đặt sản phẩm lần 2 . Nhân viên chăm sóc khách hàng rất nice. Mình cảm thấy vô cùng hài lòng về sản phẩm cũng như thái độ làm việc chuyên nghiệp của các bạn.             </div>
                            </div>
                                </div>
    </div>
</div>
        <!-- Ý KIẾN KHÁCH HÀNG SLICK -->
<script>
$('.testimonials-grid').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  adaptiveHeight: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        arrows: false
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>
        <!--END  Ý KIẾN KHÁCH HÀNG SLICK -->
        <div class="container">
            
<div class="clearfix footer-border">    
    
    <div class="clearfix footer-form" style="background-image:url(http://lovin.vn/uploads/slide/designer_header1.jpg)">
    
        <div class="row">
        
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form action="......" method="post" target="_blank">
                    <label>Nhận tin khuyến mãi</label>
                    <div class="clearfix">
                        <input type="text" name="EMAIL" placeholder="Email của bạn.">
                        <input type="hidden" name="checkin" value="promotion" />
                        <button type="submit" class="btn">Nhận</button>
                    </div>
                </
				>
            </div>
                <!-- -->
            
        </div>
    
    </div>    
    
</div>
    <!-- -->
    
    
<div class="clearfix hidden-xs hidden-sm">

    <div class="footer-col5">
        <h2 class="f-title">Giới Thiệu</h2>
        <ul clearfix>
        
                        
                <li><a href="http://Kiddytoys.vn/gioi-thieu/ve-Kiddy-vn.html">Về Kiddytoys.vn</a></li>
                                
                        
                <li><a href="http://Kiddytoys.vn/gioi-thieu/tuyen-dung.html">Tuyển dụng</a></li>
                
                                
                        
                <li><a href="http://Kiddytoys.vn/gioi-thieu/lien-he.html">Liên Hệ</a></li>
                
                                
                                </ul>
    </div>
        <!-- -->
    <div class="footer-col5">
        <h2 class="f-title">Mua sắm online</h2>
        <ul clearfix>
                            <li><a href="http://Kiddytoys.vn/mua-sam-online/ca-nhan-hoa-truc-tuyen.html">Cá nhân hóa trực tuyến</a></li>
                            <li><a href="http://Kiddytoys.vn/mua-sam-online/phuong-thuc-thanh-toan.html">Phương thức thanh toán</a></li>
                            <li><a href="http://Kiddytoys.vn/mua-sam-online/giao-hang-va-nhan-hang.html">Giao hàng và nhận hàng</a></li>
                            <li><a href="http://Kiddytoys.vn/mua-sam-online/dieu-khoan-su-dung.html">Điều khoản sử dụng</a></li>
                    </ul>
    </div>
        <!-- -->
    <div class="footer-col5">
        <h2 class="f-title">Tài Khoản</h2>
        <ul clearfix>
            <li><a href="http://Kiddytoys.vn/user.html">Tài khoản của tôi</a></li>
            <li><a href="http://Kiddytoys.vn/user/edit/thong-tin-ca-nhan.html">Cập nhật thông tin</a></li>
            <li><a href="http://Kiddytoys.vn/user/order.html">Quản lý đơn hàng</a></li>
            <li><a href="http://Kiddytoys.vn/user/comment.html">Đánh giá của tôi</a></li>
        </ul>
    </div>
        <!-- -->
    <div class="footer-col5">
        <h2 class="f-title">Khách hàng</h2>
        <ul clearfix>
            <li><a href="http://lovin.vn/kiem-tra-don-hang.html">Kiểm tra đơn hàng</a></li>
                            <li><a href="http://Kiddytoys.vn/khach-hang/huong-dan-dat-hang.html">Hướng dẫn đặt hàng</a></li>
                            <li><a href="http://Kiddytoys.vn/khach-hang/cam-ket-hai-long.html">Cam kết hài lòng</a></li>
                            <li><a href="http://Kiddytoys.vn/khach-hang/chinh-sach-bao-mat.html">Chính sách bảo mật</a></li>
                    </ul>
    </div>
        <!-- -->
    <div class="footer-col5 pluginfb">
        
        <div class="clearfix">
            <div class="fb-like" data-href="https://www.facebook.com/Kiddytoys.VN.VIETNAM" data-width="226" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
        </div>

            
            
            <div class="clearfix text-center fsocial-group">
                <a rel="nofollow" href="https://www.facebook.com/Kiddytoys.VN.VIETNAM" target="_blank"><i class="social social-facebook"></i></a>
                <a rel="nofollow" href="https://twitter.com/Kiddytoys" target="_blank"><i class="social social-twitter"></i></a>
                <a rel="nofollow" href="#" target="_blank"><i class="social social-youtube"></i></a>
                
                
           </div>
    


            
        </div>
    
</div>    
    
    <!-- -->        

<div class="clearfix visible-xs visible-sm" id="footer-xs-nav">
    <ul clearfix>
        <li><a href="http://Kiddytoys.vn/gioi-thieu.html">Về Kiddytoys.vn</a></li>
        <li><a href="http://Kiddytoys.vn/user.html">Tài khoản của tôi</a></li>
        <li><a href="http://Kiddytoys.vn/kiem-tra-don-hang.html">Kiểm tra đơn hàng</a></li>
        <li><a href="http://Kiddytoys.vn/mua-sam-online/giao-hang-va-nhan-hang.html">Giao Hàng & Nhận Hàng</a></li>
        <li><a href="http://Kiddytoys.vn/mua-sam-online/phuong-thuc-thanh-toan.html">Phương Thức Thanh Toán</a></li>
        <li><a href="http://Kiddytoys.vn/khach-hang/huong-dan-dat-hang.html">Hướng Dẫn Đặt Mua</a></li>
        <li><a href="http://Kiddytoys.vn/dieu-khoan-chinh-sach.html">Điều Khoản & Chính Sách</a></li>
        <li><a href="http://Kiddytoys.vn/gioi-thieu/lien-he.html">Liên Hệ</a></li>
        <li class="xs_hotline">
            <center>
                <b>Hotline:&nbsp;</b>
                <span>(+84) 096 53 57 56</span>
            </center>
        </li>
    </ul>
</div>     
<div    

<div class="address hidden-lg">
<center>
<p><span>Công Ty TNHH Thương Mại Điện Tử Kiddytoys.vn</span></p>

<p><span>Hỗ Trợ: hotro@kiddytoys.vn</p></span>

<p><span>Giấy phép&nbsp;Đăng ký Kinh doanh Số 0313491797&nbsp;cấp bởi&nbsp;Sở Kế hoạch và Đầu tư Thành phố Hồ Chí Minh</span></p>

<p><span>Văn Phòng: </span>KTX Khu B, Dĩ An, Bình Dương, Việt Nam</span></p>

<p><a href="http://online.gov.vn/HomePage/webdkbocongthuong" target="_blank" title="Đã Thông Báo Trang TMĐT"><img alt="Đã thông báo với Bộ Công Thương" src="uploads/products/da-thong-bao-bo-cong-thuong.png"></a>
</center>
</div>   
     
<div class="clearfix footer-auhor f-title visible-lg">

    <p><span style="font-size:14px;">&copy; 2016&nbsp;Bản quyền Trang Thương Mại Điện Tử&nbsp;<a href="http://Kiddytoys.vn/" target="_blank">Kiddytoys.vn</a>. </span></p>

<p>C&ocirc;ng Ty TNHH Thương Mại Điện Tử Kiddytoys</p>

<p><span style="font-size:14px;">Hỗ trợ: hotro@Kiddytoys.vn - </span>Holine: 0969 53 57 56 -&nbsp;</p>

<p>Giấy ph&eacute;p&nbsp;Đăng k&yacute; Kinh doanh Số 0313491797&nbsp;cấp bởi&nbsp;Sở Kế hoạch v&agrave; Đầu tư Th&agrave;nh phố Hồ Ch&iacute; Minh</p>

<p><span>Văn Phòng: </span>KTX Khu B, Dĩ An, Bình Dương, Việt Nam</span></p>

<p><a href="http://online.gov.vn/HomePage/da-thong-bao" target="_blank" title="Đã Thông Báo Trang TMĐT"><img alt="Đã thông báo với Bộ Công Thương" src="uploads/products/da-thong-bao-bo-cong-thuong.png" /></a></p>    
   
</div>

        </div>
    </footer>
 
    
</body>
</html>