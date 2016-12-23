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

                    </ul>
 
                </div>
            </div>
        </div>
           
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
    <!--THANH MENU-->
<nav class="clearfix hidden-xs" id="hnav-group">
    <div class="container">
        <ul class="clearfix">
                <li  class="">
                    <a href="index.php" class="" >TRANG CHỦ </a>
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
                        <li ><a href="search.php?keyword=">Đồ Dùng Nhà Bếp</a></li>
                        <li ><a href="search.php?keyword=">Khéo Tay Hay Làm</a></li>
                        <li ><a href="search.php?keyword=dochoitheophim ">Đồ Chơi Theo Phim</a></li>
                    </ul>         
                </li>
                    <!-- END BÉ GÁI-->

                    <!-- KHUYẾN MÃI-->
                <li  class="">
                    <a href="productlist.php" class="" >TẤT CẢ SẢN PHẨM<!-- <span>-30%</span> --></a>
                </li>
        </ul>
    </div>
</nav>
    <!-- END THANH MENU-->

                  

    </header>
        
               
    </body>
</div>
             

                <!-- BANNER QUẢNG CÁO--> <!-- tạo banner nhớ chỉnh lại 1349x485-->
    <div id="slick" class="slick home-slider clearfix hidden-xs">
    
        <div class="slider">
            <div class="slide">
                <a href="#">
                    <img src="uploads/slide/banner22.jpg" alt="Khuyến mãi" title="Khuyến mãi" />
                </a>
            </div>
            <div class="slide">
                <a href="#">
                    <img src="uploads/slide/banner33.jpg" alt="Khuyến mãi" title="Khuyến mãi" />
                </a>
            </div>
            <div class="slide">
                <a href="#">
                    <img src="uploads/slide/banner22.jpg" alt="Khuyến mãi" title="Khuyến mãi" />
                </a>
            </div>
            <div class="slide">
                <a href="#">
                    <img src="uploads/slide/banner33.jpg" alt="Bé Trai" title="Bé Trai" />
                </a>
            </div>
            <div class="slide">
                <a href="#">
                    <img src="uploads/slide/banner22.jpg" alt="Bé Gái" title="Bé Gái" />
                </a>
            </div>
        </div>
        
    </div>
                <!-- END BANNER QUẢNG CÁO-->

                <!-- Scrip lướt banner-->

    <script>
    $(function() {
        $('#slick .slider').slick({
          dots: true,
          infinite: true,
          speed: 800,
          slidesToShow: 1,
          adaptiveHeight: true,
          fade: true,
          cssEase: 'linear',
          autoplay: true,
          autoplaySpeed: 4000,
          pauseOnHover: true,
          arrows: false
      });
    });
    
    </script>
    
  

<div class="container">
    
<div class="clearfix hidden-xs">

<a name="home_scrollproduct" id="home_scrollproduct"></a>
         <div class="clearfix">
        <h1 class="clearfix title-lg border f-title">
            <span>GỢI Ý CHO BẠN</span>
        </h1>
              <!-- POKEMON -->
        <div class="clearfix row row-mar-20" id="home_productnavcnh">
        
                        
                <div class="col-sm-6 col-xs-12 col-padd-20">
                
                    <div class="clearfix" id="home-nav-group">
                    
                        <div class="clearfix" id="home-nav-product">
                            
                            <div class="col-xs-9 pimg-lg">
                                <a href="product.php?product=81">
                                <img src="uploads/products/pokemon-pikachu.jpg" alt="Pokemon - Pikachu" title="Pokemon - Pikachu" class="img-responsive img-lg" />
                                </a>
                            </div>
                            <ul class="col-xs-3  p-list">
                            
                                                                
                                    <li >
                                        <a href="product.php?product=80">
                                        <img src="uploads/products/pokemon-meohoatien.jpg" alt="Pokemon - Mèo Hỏa Tiễn " title="Pokemon - Mèo Hỏa Tiễn " class="img-responsive" />
                                        </a>
                                    </li>
                                                                
                                    <li >
                                        <a href="product.php?product=77">
                                        <img src="uploads/products/pokemon-chuotlua.jpg" alt="Pokemon - Chuột Lửa" title="Pokemon - Chuột Lửa" class="img-responsive" />
                                        </a>
                                    </li>
                                                                
                                    <li class="p-last">
                                        <a href="product.php?product=79">
                                        <img src="uploads/products/pokemon-galua.jpg" alt="Pokemon - Gà Lửa" title="Pokemon - Gà Lửa" class="img-responsive" />
                                        </a>
                                    </li>
                                                                
                            </ul>
                        
                        </div>
                        
                        <div class="clearfix nav-caption row">
                            <div class="col-md-9 col-xs-12 caption-text">
                                <h2 class="title">
                                    <a href="#">Pokemon</a>
                                </h2>
                                Thú bông Pokemon đủ mẫu mã, đa dạng cho các bé.                          
                            </div>
                                <!-- -->
                            <ul class="col-sm-3 hidden-xs hidden-sm caption-list">
                                <li>4 sản phẩm</li>
                                <li>Từ 60,000&nbsp;<u>đ</u> </li>
                                <li><a href="search.php?keyword=dochoitheophim">Xem tất cả</a></li>
                            </ul>                            
                            
                        </div>
                    
                    
                    </div>
                
                
                </div>
                 <!-- END POKEMON -->
                    
                                    
                 <!--BÚP BÊ -->  
                <div class="col-sm-6 col-xs-12 col-padd-20">
                
                    <div class="clearfix" id="home-nav-group">
                    
                        <div class="clearfix" id="home-nav-product">
                            
                            <div class="col-xs-9 pimg-lg">
                                <a href="product.php?product=37">
                                <img src="uploads/products/bupbe-elsa.jpg" alt="Búp Bê - Elsa" title="Búp Bê - Elsa" class="img-responsive img-lg" />
                                </a>
                            </div>
                            <ul class="col-xs-3  p-list">
                            
                                                                
                                    <li >
                                        <a href="product.php?product=63">
                                        <img src="uploads/products/bupbesunset.jpg" alt="Búp Bê - Sunset" title="Búp Bê - Sunset" class="img-responsive" />
                                        </a>
                                    </li>
                                                                
                                    <li >
                                        <a href="product.php?product=27">
                                        <img src="uploads/products/bupbe-nangtienca.jpg" alt="Búp Bê - Nàng Tiên Cá" title="Búp Bê - Nàng Tiên Cá" class="img-responsive" />
                                        </a>
                                    </li>
                                                                
                                    <li class="p-last">
                                        <a href="product.php?product=24">
                                        <img src="uploads/products/bupbe-nangbachtuyet.jpg" alt="Búp Bê - Nàng Bạch Tuyết" title="Búp Bê - Nàng Bạch Tuyết" class="img-responsive" />
                                        </a>
                                    </li>
                                                                
                            </ul>
                        
                        </div>
                        
                        <div class="clearfix nav-caption row">
                            <div class="col-md-9 col-xs-12 caption-text">
                                <h2 class="title">
                                    <a href="#">Búp Bê</a>
                                </h2>
                                Búp Bê đủ mẫu mã, màu sắc, thỏa sức bé yêu lựa chọn.
                            </div>
                                <!-- -->
                            <ul class="col-sm-3 hidden-xs hidden-sm caption-list">
                                <li>4 sản phẩm</li>
                                <li>Từ 30,000&nbsp;<u>đ</u> </li>
                                <li><a href="search.php?keyword=dochoitheophim">Xem tất cả</a></li>
                            </ul>                            
                            
                        </div>
                    
                    
                    </div>
                
                
                </div>
        
                    <!-- END BÚP BÊ-->
                                   
               
        </div>
    
    
    </div> 

    <h2 class="clearfix title-lg border f-title">
        <span>Tất Cả Sản Phẩm</span>
    </h2>
    <div class="row five-cols-products" id="products-group">  
             
            <?php
                    $per_page = 20;
                    $conn = mysqli_connect('localhost', 'root', '', 'kiddytoys');
                    //để viết tiếng việt.
                    mysqli_set_charset($GLOBALS['conn'],'utf8');

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
                        $page_num = ($page*$per_page) - $per_page;
                    }
                    $res=mysqli_query($conn, "SELECT productname, price,category,imglink, Idproduce  FROM product limit $page_num, $per_page");
                    while($row=mysqli_fetch_array($res)){
                        echo '<div class="item">';
                            echo '<div class="p-item" itemscope >';
                                echo '<figure class="p-img">';
                                    echo '<a href="product.php?product='.$row["Idproduce"].'" itemprop="url">';
                                        echo '<img src="'.$row["imglink"].'" alt="Xe điều khiển cyklon" title="Xe điều khiển cyklon" class="img-responsive" itemprop="image" >';
                                    echo '</a>';
                                echo '</figure>';
                        echo '<div class="clearfix p-caption">';
                            echo '<h3 title="Xe điều khiển cyklon" class="p-title">';
                                echo '<a href="#" itemprop="name">'.$row["productname"].'</a>';
                            echo '</h3>';
                            echo '<p class="p-price" itemprop="price"></u></s><span class="hidden-xs hidden-sm">&nbsp;&nbsp;</span><b itemprop="lowPrice">'.$row["price"].'&nbsp;<u>đ</u></b></p>';
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
                                ?><li><a href="index.php?page=<?php echo $b;?>"> <?php echo $b." "; ?></a><?php 
                            }
                            ?>
                        </ul>
                    </div>
        
</div>


    </div>
    <!--FOOTER-->
    <footer id="footer" class="clearfix">
        
    <center> <div class="col-lg-12" id="contact">
                    <p>Copyright &copy; Kiddytoys.vn<br/>
                    Nguyễn Trọng Ngọc - 13520551<br/>Hoàng Minh Trang - 13520908</p>
                </div></center>
 
    </footer>
 
    
</body>
</html>