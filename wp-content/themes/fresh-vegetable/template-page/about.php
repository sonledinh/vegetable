<?php /* Template Name: Giới thiệu */ ?>
<?php get_header(); ?> 

<main class="main-contents">
	<div class="page-content">
		<div class="bg-head">
			<div class="container">
				<h1>Về LUDALA !!!</h1>
			</div>
		</div>
		<div class="container rando__movie">
			<div class="rando__movie-body">
				<img src="http://m-test.f-demo.com/assets/images/thumb.jpg" alt="">
				<button type="button" class="btn-movie" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
					<span><img src="http://m-test.f-demo.com/assets/images/btn.svg" alt=""></span>
					Xem Video
				</button>

				<div id="staticBackdrop" class="youtube modal fade" tabindex="-1" aria-labelledby="staticBackdrop" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header--">
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<iframe class="yvideo" width="560" height="315" src="https://www.youtube.com/embed/CxrI1qZmtEg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div> 
			<div class="about-info">
				<div class="row">
					<div class="col-lg-6">
						<div class="about-item">
							<h3>Chúng Tôi Là Đại Lý Chính Thức Của Công Ty TNHH Đà Lạt Xanh VN</h3>
							<p>Ludala – món ngon Đà Lạt. Chúng tôi là nhà hàng chuyên cung cấp món ăn, sản phẩm, đặc sản Đà Lạt chất lượng cao tại TP. Vinh. 
								<br>Được cấp giấy chứng nhận đại lí và giấy chứng nhận an toàn thực phẩm của công ty TNHH Đà Lạt Xanh VN.</p>
							<p>
								<b>Địa chỉ:</b> 30 Lê Hoàn, Hưng Phúc, Thành phố Vinh, Nghệ An.
							</p>
							<p><b>Món ngon Đà Lạt: </b><a href="tel: 0357 355 288">0357 355 288</a></p>
							<p><b>Nông sản Đà Lạt: </b><a href="tel: 0968 905 775<">0968 905 775<</a>/p>
						</div>
						<div class="chungchi">
							<h3>Chúng tôi bán những đặc sản đến từ TP. Đà Lạt</h3>
							<div class="row chungchi-row">
								<div class="col-lg-6">
									<ul class="list-dot">
										<li>100% nguyên liệu tự nhiên</li>
										<li>Không chất bảo quản</li>
										<li>100% nhập từ Đà Lạt</li>
										<li>Giá phải chăng</li>
										<li>Thơm ngon - bổ dưỡng</li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="list-dot">
										<li>Nông sản rau củ</li>
										<li>Kem bơ</li>
										<li>Bánh tráng nướng</li>
										<li>Hoa quả sấy</li>
										<li>Tinh dầu thiên nhiên</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about-item">
							<img src="http://m-test.f-demo.com/assets/images/about.png" alt="">
						</div>
					</div>
				</div>

				
			</div>
		</div>
	</div>
</main>

<?php get_footer() ?>   