<?php
	use yii\helpers\url;
?>

<?php
use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header" id="home">
				<div class="header-top">
		  			<div class="container">
				  		<div class="row justify-content-end">
				  			<div class="col-lg-8 col-sm-4 col-8 header-top-right no-padding">
				  				<ul>
				  					<li>
				  						Mon-Fri: 8am to 2pm
				  					</li>
				  					<li>
				  						Sat-Sun: 11am to 4pm
				  					</li>
				  					<li>
				  						<a href="tel:(012) 6985 236 7512">(012) 6985 236 7512</a>
				  					</li>				  					
				  				</ul>
				  			</div>
				  		</div>			  					
		  			</div>
				</div>			  	
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="#home">Home</a></li>
				          <li><a href="<?= Url::to(['mahasiswaa089/index'])?>">DataBase</a></li>
				          <li><a href="#coffee">Coffee</a></li>
				          <li><a href="#review">Review</a></li>
				          <li><a href="#blog">Blog</a></li>
				          <li class="menu-has-children"><a href="">Pages</a>
				            <ul>
				              <li><a href="generic.html">Generic</a></li>
				              <li><a href="elements.html">Elements</a></li>
				            </ul>
				          </li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->


			<!-- start banner Area -->
			<section class="banner-area" id="home">	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-7">
							<h6 class="text-white text-uppercase">60200121089 (Kelas D)</h6>
							<h1>
								Start your day with <br>
								a black Coffee Nurafiah salsabila				
							</h1>
							<a href="#" class="primary-btn text-uppercase">Buy Now</a>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start video-sec Area -->
			<section class="video-sec-area pb-100 pt-40" id="about">
				<div class="container">
					<?= $content ?>
				</div>	
			</section>
			<!-- End video-sec Area -->
			
			<!-- Start menu Area -->
			<section class="menu-area section-gap" id="coffee">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">What kind of Coffee we serve for you</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Cappuccino</h4>
									<p class="price float-right">
										$49
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Americano</h4>
									<p class="price float-right">
										$49
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Espresso</h4>
									<p class="price float-right">
										$49
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>								
							</div>
						</div>	
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Macchiato</h4>
									<p class="price float-right">
										$49
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Mocha</h4>
									<p class="price float-right">
										$49
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Coffee Latte</h4>
									<p class="price float-right">
										$49
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Piccolo Latte</h4>
									<p class="price float-right">
										$49
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Ristretto</h4>
									<p class="price float-right">
										$49
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Affogato</h4>
									<p class="price float-right">
										$49
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>								
							</div>
						</div>															
					</div>
				</div>	
			</section>
			<!-- End menu Area -->
			
			<!-- Start gallery Area -->
			<section class="gallery-area section-gap" id="gallery">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">What kind of Coffee we serve for you</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-4">
							<a href="img/g1.jpg" class="img-pop-home">
								<img class="img-fluid" src="img/g1.jpg" alt="">
							</a>	
							<a href="img/g2.jpg" class="img-pop-home">
								<img class="img-fluid" src="img/g2.jpg" alt="">
							</a>	
						</div>
						<div class="col-lg-8">
							<a href="img/g3.jpg" class="img-pop-home">
								<img class="img-fluid" src="img/g3.jpg" alt="">
							</a>	
							<div class="row">
								<div class="col-lg-6">
									<a href="img/g4.jpg" class="img-pop-home">
										<img class="img-fluid" src="img/g4.jpg" alt="">
									</a>	
								</div>
								<div class="col-lg-6">
									<a href="img/g5.jpg" class="img-pop-home">
										<img class="img-fluid" src="img/g5.jpg" alt="">
									</a>	
								</div>
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End gallery Area -->
			
			<!-- Start review Area -->
			<section class="review-area section-gap" id="review">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">What kind of Coffee we serve for you</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-6 col-md-6 single-review">
							<img src="img/r1.png" alt="">
							<div class="title d-flex flex-row">
								<h4>lorem ipusm</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>								
								</div>
							</div>
							<p>
								Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
							</p>
						</div>	
						<div class="col-lg-6 col-md-6 single-review">
							<img src="img/r2.png" alt="">
							<div class="title d-flex flex-row">
								<h4>lorem ipusm</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>								
								</div>
							</div>
							<p>
								Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
							</p>
						</div>	
					</div>
					<div class="row counter-row">
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter">2536</h1>
							<p>Happy Client</p>
						</div>
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter">7562</h1>
							<p>Total Projects</p>
						</div>
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter">2013</h1>
							<p>Cups Coffee</p>
						</div>
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter">10536</h1>
							<p>Total Submitted</p>
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End review Area -->
			
			<!-- Start blog Area -->
			<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">What kind of Coffee we serve for you</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-6 col-md-6 single-blog">
							<img class="img-fluid" src="img/b1.jpg" alt="">
							<ul class="post-tags">
								<li><a href="#">Travel</a></li>
								<li><a href="#">Life Style</a></li>
							</ul>
							<a href="#"><h4>Portable latest Fashion for young women</h4></a>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
							</p>
							<p class="post-date">
								11st June, 2023
							</p>
						</div>
						<div class="col-lg-6 col-md-6 single-blog">
							<img class="img-fluid" src="img/b2.jpg" alt="">
							<ul class="post-tags">
								<li><a href="#">Travel</a></li>
								<li><a href="#">Life Style</a></li>
							</ul>
							<a href="#"><h4>Portable latest Fashion for young women</h4></a>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
							</p>
							<p class="post-date">
								11st June, 2023
							</p>
						</div>						
					</div>
				</div>	
			</section>
			<!-- End blog Area -->
			

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
								<p class="footer-text">
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</p>								
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info pt-20"></div>
									</form>
								</div>
							</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>nurafiahsalsabila</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->	


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
