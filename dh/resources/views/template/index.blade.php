<!DOCTYPE html>
<html>
<head>
<title>HÀ PHI HUYỀN</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="@yield('description')">
<meta name="keywords" content="@yield('tag')">
<link rel="stylesheet" type="text/css" href="{{url('template/assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('template/assets/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('template/assets/css/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('template/assets/css/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('template/assets/css/theme.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('template/assets/css/style.css')}}">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              <li><a href="{{ Route('home') }}">TRANG CHỦ</a></li>
              <li><a href="pages/page.html">Về Chúng Tôi</a></li>
              <li><a href="{{ Route('contact') }}">LIÊN HỆ</a></li>
              <li><i class="material-icons" style="font-size:24px; color:green;">call</i> 0962999128</li>
              
              @yield('log')
              
            </ul>
          </div>
          <div class="header_top_right">
            <form action="#" class="search_form">
              <input type="text" placeholder="Text to Search">
              <input type="submit" value="">
            </form>
          </div>
        </div>
        <div class="header_bottom">
          <div class="header_bottom_left"><a class="logo" href="{{ Route('home') }}"><strong>HÀ PHI HUYỀN</strong> <span>CÔNG TY TNHH-TMDV HÀ PHI HUYỀN</span></a></div>
          <div class="header_bottom_right"></div>
        </div>
      </div>
    </div>
  </header>
  <div id="navarea">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav custom_nav">
            <li class=""><a href="{{ Route('home') }}">TRANG CHỦ</a></li>
            <li class="dropdown"> <a href="#" class="" data-toggle="dropdown" role="button" aria-expanded="false">BẤT ĐỘNG SẢN</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ Route('dongbinhduong') }}">Đông Bình Dương</a></li>
                <li><a href="{{ Route('dongsaigon') }}">Đông Sài Gòn</a></li>
                
              </ul>
            </li>
            <li class="dropdown"> <a href="#" class="" data-toggle="dropdown" role="button" aria-expanded="false">VÉ MÁY BAY</a>
              <ul class="dropdown-menu" role="menu">
                 <li><a href="http://www.phongvephihuyen.com" target="_blank">Đặt Vé Máy Bay</a></li>
                <li><a href="{{ Route('vemaybay') }}">Vé Giá Rẻ</a></li>
                <li><a href="{{ Route('tintuc') }}">Tin Tức</a></li>
              </ul>
            </li>
            <li><a href="{{ Route('contact') }}">LIÊN HỆ</a></li>
            
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <section id="mainContent">
    <div class="content_top">
      <div class="row">

        <div class="col-lg-6 col-md-6 col-sm6">
          <div class="latest_slider">
            <div class="slick_slider" >
            @yield('dong_binh_duong1')
            <!--
              <div class="single_iteam"><img src="images/550x330x1.jpg" alt="">
                <h2><a class="slider_tittle" href="pages/single.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              </div>
              <div class="single_iteam"><img src="template/images/550x330x2.jpg" alt="">
                <h2><a class="slider_tittle" href="pages/single.html">bán nhà trung tâm dĩ an giá cao thương lượng liên hệ 0962999128, gặp anh hà Cty tnhh hà phi huyền</a></h2>
              </div>
              <div class="single_iteam"><img src="images/550x330x3.jpg" alt="">
                <h2><a class="slider_tittle" href="pages/single.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              </div>
              <div class="single_iteam"><img src="images/550x330x4.jpg" alt="">
                <h2><a class="slider_tittle" href="pages/single.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              </div>
            -->
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm6">
          <div class="content_top_right">
          @yield('dong_binh_duong2')
          <!--
            <ul class="featured_nav wow fadeInDown">
              <li><img src="images/300x215x1.jpg" alt="">
                <div class="title_caption"><a href="pages/single.html">Sed luctus semper odio aliquam rhoncus</a></div>
              </li>
              <li><img src="images/300x215x2.jpg" alt="">
                <div class="title_caption"><a href="pages/single.html">Sed luctus semper odio aliquam rhoncus</a></div>
              </li>
              <li><img src="images/300x215x3.jpg" alt="">
                <div class="title_caption"><a href="pages/single.html">Sed luctus semper odio aliquam rhoncus</a></div>
              </li>
              <li><img src="images/300x215x4.jpg" alt="">
                <div class="title_caption"><a href="pages/single.html">Sed luctus semper odio aliquam rhoncus</a></div>
              </li>
            </ul>
            -->
          </div>
        </div>
      </div>
    </div>
    <div class="content_middle">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="content_middle_leftbar">
          <div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a href="#" class="title_text" style="font-size: 10px;">Bất Động sản Đang Bán</a> </h2>
            @yield('dong_saigon')
            <!--
            <ul class="catg1_nav">
              <li>
                <div class="catgimg_container"> <a href="pages/single.html" class="catg1_img"><img alt="" src="images/292x150x1.jpg"></a></div>
                <h3 class="post_titile"><a href="pages/single.html">Vestibulum ut est augue, in varius</a></h3>
              </li>
              <li>
                <div class="catgimg_container"> <a href="pages/single.html" class="catg1_img"><img alt="" src="images/292x150x2.jpg"></a></div>
                <h3 class="post_titile"><a href="pages/single.html">Vestibulum ut est augue, in varius</a></h3>
              </li>
            </ul> -->
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="content_middle_middle">
          <div class="slick_slider2">
          @yield('dong_saigon1')
          <!--
            <div class="single_featured_slide"> <a href="pages/single.html"><img src="images/567x330x1.jpg" alt=""></a>
              <h2><a href="pages/single.html">Praesent vitae quam vitae arcu posuer 1</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulput...</p>
            </div>
            <div class="single_featured_slide"> <a href="pages/single.html"><img src="images/567x330x2.jpg" alt=""></a>
              <h2><a href="#">Praesent vitae quam vitae arcu posuer 2</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulput...</p>
            </div>
            <div class="single_featured_slide"> <a href="pages/single.html"><img src="images/567x330x3.jpg" alt=""></a>
              <h2><a href="#">Praesent vitae quam vitae arcu posuer 3</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulput...</p>
            </div>
            -->
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="content_middle_rightbar">
          <div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a href="#" class="title_text" style="font-size:10px;">Bất Động sản Đang Bán</a> </h2>
            @yield('dong_saigon2')
            <!--
            <ul class="catg1_nav">
              <li>
                <div class="catgimg_container"> <a href="pages/single.html" class="catg1_img"><img alt="" src="images/292x150x1.jpg"></a></div>
                <h3 class="post_titile"><a href="pages/single.html">Vestibulum ut est augue, in varius</a></h3>
              </li>
              <li>
                <div class="catgimg_container"> <a href="pages/single.html" class="catg1_img"><img alt="" src="images/292x150x2.jpg"></a></div>
                <h3 class="post_titile"><a href="pages/single.html">Vestibulum ut est augue, in varius</a></h3>
              </li>
            </ul>
            -->
          </div>
        </div>
      </div>
    </div>
    <div class="content_bottom">
      <div class="col-lg-8 col-md-8">
        <div class="content_bottom_left">
          <div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#"></a> </h2>

            @yield('ve')
            <!--
            <div class="business_category_left wow fadeInDown">
              <ul class="fashion_catgnav">
                <li>
                  <div class="catgimg2_container"> <a href="pages/single.html"><img alt="" src="images/390x240x1.jpg"></a> </div>
                  <h2 class="catg_titile"><a href="pages/single.html">Aenean mollis metus sit amet ligula adipiscing</a></h2>
                  <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                  <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla...</p>
                </li>
              </ul>
            </div>
            <div class="business_category_right wow fadeInDown">
              <ul class="small_catg">
                <li>
                  <div class="media wow fadeInDown"> <a class="media-left" href="pages/single.html"><img src="images/112x112.jpg" alt=""></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="pages/single.html">Duis condimentum nunc pretium lobortis </a></h4>
                      <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                      <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                      <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            -->
          </div>
          <div class="games_fashion_area">
            <div class="games_category">
              <div class="single_category">
                <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#"></a> </h2>
                @yield('tintuc1')
                <!--
                <ul class="fashion_catgnav wow fadeInDown">
                  <li>
                    <div class="catgimg2_container"> <a href="pages/single.html"><img alt="" src="images/390x240x1.jpg"></a> </div>
                    <h2 class="catg_titile"><a href="#">Aenean mollis metus sit amet ligula adipiscing</a></h2>
                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla...</p>
                  </li>
                </ul>
               
                <ul class="small_catg wow fadeInDown">
                  <li>
                    <div class="media"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                      </div>
                    </div>
                  </li>
                </ul>  -->
              </div>
            </div>
            <div class="fashion_category">
              <div class="single_category">
                <div class="single_category wow fadeInDown">
                  <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#"></a> </h2>

                  @yield('tintuc2')
                  <!-- <ul class="fashion_catgnav wow fadeInDown">
                    <li>
                      <div class="catgimg2_container"> <a href="#"><img alt="" src="images/390x240x1.jpg"></a> </div>
                      <h2 class="catg_titile"><a href="#">Aenean mollis metus sit amet ligula adipiscing</a></h2>
                      <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla...</p>
                    </li>
                  </ul>
                  <ul class="small_catg wow fadeInDown">
                    <li>
                      <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                          <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                          <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                        </div>
                      </div>
                    </li>
                  </ul>  -->
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="content_bottom_right">
          
          
          
          <div class="single_bottom_rightbar wow fadeInDown">
            <h2>Bạn Quan Tâm</h2>
            <ul>
              <li><a href="{{Route('dongbinhduong')}}">Bất động sản</a></li>
              <li><a href="http://www.phongvephihuyen.com" target="_blank">Vé máy bay giá rẻ</a></li>
              <li><a href="{{ Route('dongbinhduong') }}">Dự án Đông Bình Dương</a></li>
              <li><a href="{{ Route('dongsaigon') }}">Bất động sản đang bán</a></li>
              <li><a href="{{ Route('vemaybay') }}">Tin Khuyến mãi</a></li>
              <li><a href="{{ Route('tintuc') }}">Tin Tức</a></li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<footer id="footer">
  <div class="footer_top">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="single_footer_top wow fadeInLeft">
            <h2>Flicker Images</h2>
            <ul class="flicker_nav">
              <li><a href="#"><img src="images/75x75.jpg" alt=""></a></li>
              <li><a href="#"><img src="images/75x75.jpg" alt=""></a></li>
              <li><a href="#"><img src="images/75x75.jpg" alt=""></a></li>
              <li><a href="#"><img src="images/75x75.jpg" alt=""></a></li>
              <li><a href="#"><img src="images/75x75.jpg" alt=""></a></li>
              <li><a href="#"><img src="images/75x75.jpg" alt=""></a></li>
              <li><a href="#"><img src="images/75x75.jpg" alt=""></a></li>
              <li><a href="#"><img src="images/75x75.jpg" alt=""></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="single_footer_top wow fadeInDown">
            <h2>Trang Liên Kết</h2>
            <ul class="labels_nav">
              <li><a href="{{Route('dongbinhduong')}}">Bất động sản</a></li>
              <li><a href="http://www.phongvephihuyen.com" target="_blank">Vé máy bay giá rẻ</a></li>
              <li><a href="{{ Route('dongbinhduong') }}">Dự án Đông Bình Dương</a></li>
              <li><a href="{{ Route('dongsaigon') }}">Bất động sản đang bán</a></li>
              <li><a href="{{ Route('vemaybay') }}">Tin Khuyến mãi</a></li>
              <li><a href="{{ Route('tintuc') }}">Tin Tức</a></li>
              <li><a href="http://www.phongvephihuyen.com" target="_blank">Đặt Vé Máy Bay</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="single_footer_top wow fadeInRight">
            <h2>VỀ CHÚNG TÔI</h2>
            <p></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="footer_bottom_left">
            <p>Copyright &copy; 2045 <a href="index.html">HÀ PHI HUYỀN</a></p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="footer_bottom_right">
            <p>Developed BY Hà Phi Huyền</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="{{asset('template/assets/js/jquery.min.js')}}"></script> 
<script src="{{asset('template/assets/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('template/assets/js/wow.min.js')}}"></script> 
<script src="{{asset('template/assets/js/slick.min.js')}}"></script> 
<script src="{{asset('template/assets/js/custom.js')}}"></script>
</body>
</html>