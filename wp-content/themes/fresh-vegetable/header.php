<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fresh-vegetable
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=ABeeZee&family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">

	<!-- slick slider-->
	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/> -->

	<!-- framework -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"> -->

	<!-- css -->
	<!-- <link rel="stylesheet" href="http://m-test.f-demo.com/assets/css/style.css"> -->

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header" id="Header">
	<div class="top-header">
		<div class="container">
			<div class="row header-top-row">
				<div class="col-lg-4">
					<div class="header-top-txt">
						<a href="/">
							<span class="txt-big">
								Ludala
							</span>
							<span class="txt-small">
								Nông sản Đà Lạt tại Vinh
							</span>
						</a>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="header-top-search">
						<input type="search" placeholder="Bạn muốn tìm kiếm sản phẩm nào ?">
						<button class="btn btn-search" type="submit" value="search"><img src="http://m-test.f-demo.com/assets/images/search.svg" alt=""></button>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="header-top-sns">
						<ul>
							<li>
								<a href=""><img src="http://m-test.f-demo.com/assets/images/icon-facebook.svg" alt=""></a>
							</li>
							<li>
								<a href=""><img src="http://m-test.f-demo.com/assets/images/icon-inst.svg" alt=""></a>
							</li>
							<li class="cart">
								<a href=""><img src="http://m-test.f-demo.com/assets/images/cart.svg" alt=""></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="nav-menu">
		<div class="container">
			<ul>
				<li><h1 class="logo"><a href="/"><img src="http://m-test.f-demo.com/assets/images/logo.png" alt=""></a></h1></li>
				<li><a href="/gioi-thieu/">Thông tin về Ludala <span>Ludala About</span></a></li>
				<li class="hover-submenu">
					<a href="/san-pham/">Gian hàng 
						<span>Collection</span>
						<div class="icon-down">
							<img src="http://m-test.f-demo.com/assets/images/arrow.svg" alt="">
						</div>
					</a>
					<div class="sub-menu">
						<div class="row">
							<div class="col-lg-4">
								<div class="list-icon-product">
									<a href="/san-pham/">
										<img src="http://m-test.f-demo.com/assets/images/icon-rau.png" alt="">
										<h2>Rau - Củ - Quả</h2>
									</a>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="list-icon-product">
									<a href="/san-pham/">
										<img src="http://m-test.f-demo.com/assets/images/icon-cafe.png" alt="">
										<h2>Cafe - Đồ ăn vặt</h2>
									</a>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="list-icon-product">
									<a href="/san-pham/">
										<img src="http://m-test.f-demo.com/assets/images/icon-dacsan.png" alt="">
										<h2>Đồ đặc sản</h2>
									</a>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li><a href="/tin-tuc/">Tin tức <span>News</span> </a></li>
				<li><a href="/lien-he/">Liên hệ <span>Contact</span></a></li>
			</ul>
		</div>
	</div>	
</header>