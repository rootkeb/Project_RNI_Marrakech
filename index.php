<?php


include_once './racine.php';
include_once RACINE_PATH.'/service/MembreService.php';


extract($_POST);

if (isset($nom)){


    $ss = new MembreService();

    $ss->create(new Membre(1,$nom,$prenom,"dg","dbd",$email,"db",$mdp,"db"));
    header('Location: index.php');
}
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content=""/>
<!-- Document Title -->
<title>Soccer HTML5 Template</title>
<!-- StyleSheets -->
<link rel="stylesheet" href="assets/visitor/css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="assets/visitor/css/main.css">	
<link rel="stylesheet" href="assets/visitor/css/icomoon.css">
<link rel="stylesheet" href="assets/visitor/css/animate.css">
<link rel="stylesheet" href="assets/visitor/css/transition.css">
<link rel="stylesheet" href="assets/visitor/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/visitor/style.css">
<link rel="stylesheet" href="assets/visitor/css/color.css">
<link rel="stylesheet" href="assets/visitor/css/responsive.css">
<!-- FontsOnline -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800|Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- JavaScripts -->
<script src="assets/visitor/js/vendor/modernizr.js"></script>
<link rel="icon" href="http://fototeg.ru/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://fototeg.ru/favicon.ico" type="image/x-icon" />
</head>
<body>

<!-- Wrapper -->
<div class="wrap push">

	<!-- Header -->
	<header class="header style-3">

		<!-- Top bar -->
		<div class="topbar-and-logobar">
			<div class="container">

				<!-- Responsive Button -->
				<div class="responsive-btn pull-right">
					<a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
				</div>
				<!-- Responsive Button -->

				<!-- User Login Option -->
				<ul class="user-login-option pull-right">
					<li class="social-icon">
						<ul class="social-icons style-5">
							<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="twitter" href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
							<li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>


                        </ul>
					</li>
                    <li class="login-modal">
                        <ul class="social-icons style-5">
                            <a href="#" class="login" data-toggle="modal" data-target="#login-modal-2"><i class="fa fa-user"></i>Se Connecter</a>
                            <div class="modal fade" id="login-modal-2">
                                <div class="login-form position-center-center">
                                    <h2>Forgot password<button class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button></h2>
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="user" placeholder="domain@live.com">
                                            <i class=" fa fa-envelope"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="pass" placeholder="**********">
                                            <i class=" fa fa-lock"></i>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn full-width red-btn">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </ul>
                    </li>
					<li class="login-modal">

                        <a href="#" class="login" data-toggle="modal" data-target="#login-modal"><i class="fa fa-user-plus"></i>Inscription</a>
						<div class="modal fade" id="login-modal">
						  	<div class="login-form position-center-center">
								<h2>Login<button class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button></h2>
								<form action="index.php" method="post">
									<div class="form-group">
										<input type="text" class="form-control" name="nom" placeholder="Votre nom">
										<i class=" fa fa-user"></i>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="prenom" placeholder="Votre prénom ">
										<i class=" fa fa-user"></i>
									</div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Adresse E-mail">
                                        <i class=" fa fa-envelope"></i>
                                    </div>	<div class="form-group">
                                        <input type="text" class="form-control" name="mdp" placeholder="***********">
                                        <i class=" fa fa-lock"></i>
                                    </div>

                                    <div class="form-group">
									    <button class="btn full-width red-btn">Login</button>
									</div>
								</form>


							</div>
						</div>

					</li>
					
				</ul>
				<!-- User Login Option -->
				
			</div>	
		</div>
		<!-- Top bar -->

		<!-- Nav -->
		<div class="nav-holder">
			<div class="container">
				<div class="maga-drop-wrap">

					<!-- Logo -->
					<div class="logo">
						<a href="home-1.html"><img src="assets/visitor/images/logo-4.png" alt=""></a>
					</div>
					<!-- Logo -->

					

					<!-- Nav List -->
					<ul class="nav-list pull-right">
						<li>
                                                    <a href="index.php">Accueille</a>
					    	<ul>
							    
						  	</ul>
						</li>
                                                <li><a href="apropos.php">A propos</a></li>
						
						<li class="mega-dropdown">
					    	<a href="#">Actualités</a>
					    	<ul>
							    <li class="row">
							    	<div class="col-lg-3 col-md-3 col-sm-3">
							    		<div class="blog-categories">
							    		<h2>Nos actualités: </h2>
								    		
							    		</div>
							    	</div>
							    	<div class="col-lg-9 col-md-9 col-sm-9">
							    		<div id="mega-blog-slider" class="mega-blog-slider">

							    			<!-- Post Img -->
											<div class="item">

												<!-- Post Img -->
												<div class="large-post-img">
													<img src="assets/visitor/images/blog-grid-view/img-2-1.jpg" alt="">
												</div>
												<!-- Post Img -->

												<!-- Post Detail -->
												<div class="large-post-detail style-3 p-0">
													<span class="red-color">act1</span>
													<h2>description</h2>
												</div>
												<!-- Post Detail -->

											</div>
											<!-- Post Img -->

											<!-- Post Img -->
											<div class="item">

												<!-- Post Img -->
												<div class="large-post-img">
													<img src="assets/visitor/images/blog-grid-view/img-2-2.jpg" alt="">
												</div>
												<!-- Post Img -->

												<!-- Post Detail -->
												<div class="large-post-detail style-3 p-0">
													<span class="red-color">act1</span>
													<h2>description</h2>
												</div>
												<!-- Post Detail -->

											</div>
											<!-- Post Img -->

											<!-- Post Img -->
											<div class="item">

												<!-- Post Img -->
												<div class="large-post-img">
													<img src="assets/visitor/images/blog-grid-view/img-2-3.jpg" alt="">
												</div>
												<!-- Post Img -->

												<!-- Post Detail -->
												<div class="large-post-detail style-3 p-0">
													<span class="red-color">act1</span>
													<h2>description</h2>
												</div>
												<!-- Post Detail -->

											</div>
											<!-- Post Img -->

											<!-- Post Img -->
											<div class="item">

												<!-- Post Img -->
												<div class="large-post-img">
													<img src="assets/visitor/images/blog-grid-view/img-2-4.jpg" alt="">
												</div>
												<!-- Post Img -->

												<!-- Post Detail -->
												<div class="large-post-detail style-3 p-0">
													<span class="red-color">act1</span>
													<h2>description</h2>
												</div>
												<!-- Post Detail -->

											</div>
											<!-- Post Img -->

											<!-- Post Img -->
											<div class="item">

												<!-- Post Img -->
												<div class="large-post-img">
													<img src="assets/visitor/images/blog-grid-view/img-2-1.jpg" alt="">
												</div>
												<!-- Post Img -->

												<!-- Post Detail -->
												<div class="large-post-detail style-3 p-0">
													<span class="red-color">act1</span>
													<h2>description</h2>
												</div>
												<!-- Post Detail -->

											</div>
											<!-- Post Img -->

											<!-- Post Img -->
											<div class="item">

												<!-- Post Img -->
												<div class="large-post-img">
													<img src="assets/visitor/images/blog-grid-view/img-2-2.jpg" alt="">
												</div>
												<!-- Post Img -->

												<!-- Post Detail -->
												<div class="large-post-detail style-3 p-0">
													<span class="red-color">act1</span>
													<h2>description</h2>
												</div>
												<!-- Post Detail -->

											</div>
											<!-- Post Img -->

							    		</div>
							    	</div>
							    </li>
						  	</ul>
						</li>
						
						<li>
					    	<a href="#">Faire un don</a>
					    	<ul>
					    		<li><a href="shop.html">shop</a></li>
							    <li><a href="shop-detail.html">shop detail</a></li>
							    <li><a href="cart.html">cart</a></li>
						  	</ul>
						</li>
						<li>
                                                    <a href="galerie.php">Galerie</a>
					    	
						</li>                                                                     
						<li><a href="contact.html">contact</a></li>                                                                  
					</ul>
					<!-- Nav List -->

				</div>
			</div>
		</div>
		<!-- Nav -->

	</header>
	<!-- Header -->

	<!-- Slider Holder -->
	<div class="slider-holder">

		<!-- Banner slider -->
		<ul id="main-slides" class="main-slides">

			<!-- Itme -->
			<li>
			    <div id="animated-slider" class="carousel slide carousel-fade">

			        <!-- Wrapper for slides -->
			        <div class="carousel-inner" role="listbox">

			            <!-- Item -->
			            <div class="item active">
			            	<img src="assets/visitor/images/banner-slider/KACM.jpg" alt="">
				               <div class="position-center-x full-width">
								<div class="container">
									<div class="banner-caption style-1 p-white h-white pull-right">
										<h1 class="animated fadeInUp delay-1s">Faire connaitre<br>l'association<br>et ses activités</h1>
										
										
									</div>
								</div>
							</div>
			            </div> 
			            <!-- Item -->

			            <!-- Item -->
			            <div class="item">
			            	<img src="assets/visitor/images/banner-slider/KACM.jpg" alt="">
				               <div class="position-center-x full-width">
								<div class="container">
									<div class="banner-caption style-2 p-white h-white pull-left">
										<h1 class="animated fadeInUp delay-1s">Offrir le meilleur  <br>acceuil possible<br> 
										
										
									</div>
								</div>
							</div>
			            </div> 
			            <!-- Item -->

			            	
			            
			        </div>
			        <!-- Wrapper for slides -->

			        <!-- Nan Control -->
			        <!-- <a class="slider-nav next" href="#animated-slider" data-slide="prev"><i class="fa fa-long-arrow-right"></i></a>
			        <a class="slider-nav prev" href="#animated-slider" data-slide="next"><i class="fa fa-long-arrow-left"></i></a> -->
			        <!-- Nan Control -->

			        <!-- Indicators -->
			        <ul class="carousel-indicators">
			            <li data-target="#animated-slider" data-slide-to="0" class="active"></li>
			            <li data-target="#animated-slider" data-slide-to="1"></li>
			            
			        </ul>
			        <!-- Indicators -->

			    </div>
			</li>
			<!-- Itme -->

			<!-- Itme -->
			<li>
				<img src="assets/visitor/images/banner-bgs/img-03.jpg" alt="">
				<div class="video-banner-caption position-center-center p-white h-white">
					<h1>Continuous effort  not strength or<br> intelligence  is the key to unlocking our potential</h1>
					<p>Hart's short pass wasn't controlled by Fernando, and the Swedish striker's tackle<br> resulted in the ball rolling into the net. While the bulk</p>
					<ul class="btn-list">
						<li><a class="btn lg red-btn" href="http://www.youtube.com/watch?v=cH6kxtzovew" data-rel="prettyPhoto[video]">watch video<i class="fa fa-play-circle"></i></a></li>
						<li><a class="btn lg red-btn" href="#">MOre videos<i class="fa fa-angle-right"></i></a></li>
					</ul>
				</div>
			</li>
			<!-- Itme -->

			<!-- Itme -->
			<li>
				<img src="assets/visitor/images/banner-bgs/img-01.jpg" alt="">
			</li>
			<!-- Itme -->

			<!-- Itme -->
			<li>
				<img src="assets/visitor/images/banner-bgs/img-02.jpg" alt="">
				<div class="position-center-center">
					<div class="container theme-padding">
						<div class="pager-heading match-detail h-white">
							<span class="pull-left win-tag"><img src="assets/visitor/images/result-team-logo/img-01.png" alt=""></span>
							<div class="vs-match-heading position-center-center">
								<strong class="vs-match-result">3<span>Vs</span>1</strong>
								<span class="end-time"><i class="fa fa-clock-o"></i>13:57 min (IST)</span>
							</div>
							<span class="pull-right loss-tag"><img src="assets/visitor/images/result-team-logo/img-02.png" alt=""></span>
						</div>
					</div>
				</div>
			</li>
			<!-- Itme -->

		</ul>
		<!-- Banner slider -->

		
	</div>
	<!-- Slider Holder -->

	<!-- Main Content -->
	<main class="main-content">
		
		<!-- Match Detail -->
		<section class="bg-fixed">
			<div class="container">
<br/>
				
                            
<div class="about-video-caption">
						<h2>A propos de l'association</h2>
						<p>Felis volutpat taciti donec sem dapibus ac semper taciti, aliquam pretium congue aliquam venenatis turpis nec, nulla pellentesque lorem volutpat sapien nullam curabitur justo vestibulum tristique convallis leo mollis venenatis vel eleifend senectus tempus eleifend urna, at consectetur bibendum eros pharetra nisi mi tristique nec porta.Senectus pellentesque euismod venenatis inceptos</p>
					</div>
                            
                <br/>            
                            
                            
                            

				<!-- Match Detail Content -->
				<div class="match-detail-content">
					<div class="row">
                                 
						<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
							<div class="row">

					
								<!-- Latest News -->
								<div class="col-xs-12">
									<div class="latest-news-holder">
										<h3><span>Actualités recentes</span></h3>

										<!-- latest-news Slider -->
										<div class="row no-gutters white-bg">

											<!-- Slider -->
											<div class="col-sm-9">
												<ul id="latest-news-slider" class="latest-news-slider">
													<li>
														<img src="assets/visitor/images/latest-news/img-01.jpg" alt="">
													    <p>description...............................................................................</p>
												    </li>
												    <li>
														<img src="assets/visitor/images/latest-news/img-02.jpg" alt="">
													    <p>description...............................................................................</p>
												    </li>
												    <li>
														<img src="assets/visitor/images/latest-news/img-03.jpg" alt="">
													    <p>description...............................................................................</p>
												    </li>
												    <li>
														<img src="assets/visitor/images/latest-news/img-04.jpg" alt="">
													    <p>description...............................................................................</p>
												    </li>
												    <li>
														<img src="assets/visitor/images/latest-news/img-01.jpg" alt="">
													    <p>description...............................................................................</p>
												    </li>
												    <li>
														<img src="assets/visitor/images/latest-news/img-02.jpg" alt="">
													    <p>description...............................................................................</p>
												    </li>
												    <li>
														<img src="assets/visitor/images/latest-news/img-03.jpg" alt="">
													    <p>description...............................................................................</p>
												    </li>
												</ul>
											</div>
											<!-- Slider -->

											<!-- Thumnail -->
											<div class="col-sm-3">
												<ul id="latest-news-thumb" class="latest-news-thumb">
													<li>
														<p>titre</p>
														<span>../../..</span>
													</li>
													<li>
														<p>titre</p>
														<span>../../..</span>
													</li>
													<li>
														<p>titre</p>
														<span>../../..</span>
													</li>
													<li>
														<p>titre</p>
														<span>../../..</span>
													</li>
													<li>
														<p>titre</p>
														<span>../../..</span>
													</li>
													<li>
														<p>titre</p>
														<span>../../..</span>
													</li>
													<li>
														<p>titre</p>
														<span>../../..</span>
													</li>
												</ul>
												<ul class="news-thumb-arrows">
													<li class="prev"><span class="fa fa-angle-up"></span></li>
													<li class="next"><span class="fa fa-angle-down"></span></li>
												</ul>
											</div>
											<!-- Thumnail -->

										</div>
										<!-- latest-news Slider -->

									</div>
								</div>
								<!-- Latest News -->
                                                                

							</div>
						</div>
                                            <br/>
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<div class="row">

								<div class="col-lg-12 col-md-12 col-sm-7 col-xs-6 r-full-width">
									<div class="aside-widget">
							<h3><span>Evénements</span></h3>
							<div class="Popular-news">
								<ul>
									<li>
                                                                            <img src="assets/visitor/images/popular-news/img-01.jpg" alt="">
										<h5><a href="#">event..................</a></h5>
										<span class="red-color"><i class="fa fa-clock-o"></i>22 Feb, 2016</span>
									</li>
									<li>
										<img src="assets/visitor/images/popular-news/img-02.jpg" alt="">
										<h5><a href="#">event..................</a></h5>
										<span class="red-color"><i class="fa fa-clock-o"></i>22 Feb, 2016</span>
									</li>
									<li>
										<img src="assets/visitor/images/popular-news/img-03.jpg" alt="">
										<h5><a href="#">event..................</a></h5>
										<span class="red-color"><i class="fa fa-clock-o"></i>22 Feb, 2016</span>
									</li>
									<li>
										<img src="assets/visitor/images/popular-news/img-04.jpg" alt="">
										<h5><a href="#">event..................</a></h5>
										<span class="red-color"><i class="fa fa-clock-o"></i>22 Feb, 2016</span>
									</li>
								</ul>
							</div>
						</div>
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
								</div>
								<!-- Last Match -->

							</div> 
						</div>
					</div>
				</div>
				<!-- Match Detail Content -->

			</div>
		</section>
		<!-- Match Detail -->

		</div>
		<!-- Facts Accounter -->
<br/>
		<!-- Gallery And Team -->
		<div class="gallery-holder">
			
			<!-- Gallery v-3 -->
			<div class="theme-padding-bottom">
				<div class="container">

					<!-- Main Heading -->
					<h3><span>Photos</span></h3>
					<!-- Main Heading -->

					<!-- Gallery Columns -->
					<div class="gallery">
						<div class="col-sm-6">
							<div class="row">
								<div class="col-sm-12 col-xs-12 r-full-width p-0">
									<figure class="gallery-figure">
										<img src="assets/visitor/images/gallery-v3/img-01.jpg" alt="">
										<figcaption class="overlay">
											<div class="position-center-center">
												<ul class="btn-list">
													<li><a href="images/gallery-v3/img-1-1.jpg" data-rel="prettyPhoto[gallery-v3]"><i class="fa fa-search"></i></a></li>
													<li><a class="fa fa-eye" href="#"></a></li>
												</ul>
											</div>
										</figcaption>
									</figure>
								</div>
								<div class="col-sm-6 col-xs-6 r-full-width p-0">
									<figure class="gallery-figure">
										<img src="assets/visitor/images/gallery-v3/img-02.jpg" alt="">
										<figcaption class="overlay">
											<div class="position-center-center">
												<ul class="btn-list">
													<li><a href="images/gallery-v3/img-1-2.jpg" data-rel="prettyPhoto[gallery-v3]"><i class="fa fa-search"></i></a></li>
													<li><a class="fa fa-eye" href="#"></a></li>
												</ul>
											</div>
										</figcaption>
									</figure>
								</div>
								<div class="col-sm-6 col-xs-6 r-full-width p-0">
									<figure class="gallery-figure">
										<img src="assets/visitor/images/gallery-v3/img-03.jpg" alt="">
										<figcaption class="overlay">
											<div class="position-center-center">
												<ul class="btn-list">
													<li><a href="images/gallery-v3/img-1-3.jpg" data-rel="prettyPhoto[gallery-v3]"><i class="fa fa-search"></i></a></li>
													<li><a class="fa fa-eye" href="#"></a></li>
												</ul>
											</div>
										</figcaption>
									</figure>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="row">
								<div class="col-sm-6 col-xs-6 r-full-width p-0">
									<figure class="gallery-figure">
										<img src="assets/visitor/images/gallery-v3/img-04.jpg" alt="">
										<figcaption class="overlay">
											<div class="position-center-center">
												<ul class="btn-list">
													<li><a href="images/gallery-v3/img-1-4.jpg" data-rel="prettyPhoto[gallery-v3]"><i class="fa fa-search"></i></a></li>
													<li><a class="fa fa-eye" href="#"></a></li>
												</ul>
											</div>
										</figcaption>
									</figure>
								</div>
								<div class="col-sm-6 col-xs-6 r-full-width p-0">
									<figure class="gallery-figure">
										<img src="assets/visitor/images/gallery-v3/img-05.jpg" alt="">
										<figcaption class="overlay">
											<div class="position-center-center">
												<ul class="btn-list">
													<li><a href="images/gallery-v3/img-1-5.jpg" data-rel="prettyPhoto[gallery-v3]"><i class="fa fa-search"></i></a></li>
													<li><a class="fa fa-eye" href="#"></a></li>
												</ul>
											</div>
										</figcaption>
									</figure>
								</div>
								<div class="col-sm-12 col-xs-12 r-full-width p-0">
									<figure class="gallery-figure">
										<img src="assets/visitor/images/gallery-v3/img-06.jpg" alt="">
										<figcaption class="overlay">
											<div class="position-center-center">
												<ul class="btn-list">
													<li><a href="images/gallery-v3/img-1-6.jpg" data-rel="prettyPhoto[gallery-v3]"><i class="fa fa-search"></i></a></li>
													<li><a class="fa fa-link" href="#"></a></li>
												</ul>
											</div>
										</figcaption>
									</figure>
								</div>
							</div>
						</div>
					</div>
					<!-- Gallery Columns -->

				</div>
			</div>
			<!-- Gallery v-3 -->

                        
                        
                        
                        
                        
                        
                        
			<!-- Separator -->
			<div class="container text-center">
				<span class="sprater"><i class="fa fa-futbol-o"></i></span>
			</div>
			<!-- Separator -->

			<!-- Team -->
			<div class="container">
				<div class="video-gallery">
					<div class="row m-0">

						<!-- Gallery Heading -->
						<div class="col-sm-12 p-0">
							<h2>Vidéos</h2>
						</div>
						<!-- Gallery Heading -->

						<!-- Video Gallery -->
						<div class="row">
							<div class="col-sm-7 col-xs-12">
								<div class="video-post video">
									<img src="assets/visitor/images/video-gallery/img-01.jpg" alt="">
									<span class="play-lable fa fa-video-camera"></span>
									<a class="position-center-center play-icon" href="http://www.youtube.com/watch?v=cH6kxtzovew" data-rel="prettyPhoto[video]" rel="prettyPhoto[video]"><i class="fa fa-video-camera"></i></a>
								</div>
							</div>
							<div class="col-sm-5 col-xs-12">
								<div class="row">
									<div class="col-sm-6 col-xs-6 r-full-width">
										<div class="video-post video theme-margin-bottom">
											<img src="assets/visitor/images/video-gallery/img-02.jpg" alt="">
											<span class="play-lable fa fa-video-camera"></span>
											<a class="position-center-center play-icon" href="http://www.youtube.com/watch?v=cH6kxtzovew" data-rel="prettyPhoto[video]" rel="prettyPhoto[video]"><i class="fa fa-video-camera"></i></a>
										</div>
									</div>
									<div class="col-sm-6 col-xs-6 r-full-width">
										<div class="video-post video theme-margin-bottom">
											<img src="assets/visitor/images/video-gallery/img-03.jpg" alt="">
											<span class="play-lable fa fa-video-camera"></span>
											<a class="position-center-center play-icon" href="http://www.youtube.com/watch?v=cH6kxtzovew" data-rel="prettyPhoto[video]" rel="prettyPhoto[video]"><i class="fa fa-video-camera"></i></a>
										</div>
									</div>
									<div class="col-sm-6 col-xs-6 r-full-width">
										<div class="video-post video">
											<img src="assets/visitor/images/video-gallery/img-04.jpg" alt="">
											<span class="play-lable fa fa-video-camera"></span>
											<a class="position-center-center play-icon" href="http://www.youtube.com/watch?v=cH6kxtzovew" data-rel="prettyPhoto[video]" rel="prettyPhoto[video]"><i class="fa fa-video-camera"></i></a>
										</div>
									</div>
									<div class="col-sm-6 col-xs-6 r-full-width">
										<div class="video-post video">
											<img src="assets/visitor/images/video-gallery/img-05.jpg" alt="">
											<span class="play-lable fa fa-video-camera"></span>
											<a class="position-center-center play-icon" href="http://www.youtube.com/watch?v=cH6kxtzovew" data-rel="prettyPhoto[video]" rel="prettyPhoto[video]"><i class="fa fa-video-camera"></i></a>
										</div>
								</div>
								</div>
							</div>
						</div>
						<!-- Video Gallery -->

					</div>
				</div>
                            
                            
                            
                            
                            
                            
                            
                            
                            
			</div>
			<!-- Team -->
                        
                        <div class="container text-center">
				<span class="sprater"><i class="fa fa-futbol-o"></i></span>
			<div></div></div>
                        
                        <div class="container">
				<div class="team-holder theme-padding-top">

					<!-- Main Heading -->
					<div class="main-heading-holder">
						<div class="main-heading">
							<h2>Nos membres</h2>
							<p>...................................................................................................................</p>
						</div>
					</div>
					<!-- Main Heading -->

					<!-- Team Row -->
					<div id="team-slider" class="team-slider slick-initialized slick-slider">

						<!-- Team Column -->
						<div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1172px; transform: translate3d(0px, 0px, 0px);" role="listbox"><div class="item slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 263px;" tabindex="-1" role="option" aria-describedby="slick-slide70">
							<div class="team-column">
								<img src="assets/visitor/images/team/img-01.jpg" alt="">
							
								<div class="team-detail">
									<h5><a href="team-detail.html" tabindex="0">Mohamed</a></h5>
									<span class="desination">IT</span>
									<div class="detail-inner">
										<ul>
											<li>......:</li>
											<li>......:</li>
											<li>......:</li>
											<li>......:</li>
										</ul>
										<ul>
                                                                                        <li>......</li>
											<li>......</li>
											<li>......</li>
											<li>
												<ul class="social-icons">
													<li><a class="facebook" href="#" tabindex="0"><i class="fa fa-facebook"></i></a></li>
													<li><a class="twitter" href="#" tabindex="0"><i class="fa fa-twitter"></i></a></li>
													<li><a class="youtube" href="#" tabindex="0"><i class="fa fa-youtube-play"></i></a></li>
												
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div><div class="item slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 263px;" tabindex="-1" role="option" aria-describedby="slick-slide71">
							
                                                    
                                                    
                                                    
                                                    <div class="team-column">
								<img src="assets/visitor/images/team/img-01.jpg" alt="">
							
								<div class="team-detail">
									<h5><a href="team-detail.html" tabindex="0">Mohamed</a></h5>
									<span class="desination">IT</span>
									<div class="detail-inner">
										<ul>
											<li>......:</li>
											<li>......:</li>
											<li>......:</li>
											<li>......:</li>
										</ul>
										<ul>
                                                                                        <li>......</li>
											<li>......</li>
											<li>......</li>
											<li>
												<ul class="social-icons">
													<li><a class="facebook" href="#" tabindex="0"><i class="fa fa-facebook"></i></a></li>
													<li><a class="twitter" href="#" tabindex="0"><i class="fa fa-twitter"></i></a></li>
													<li><a class="youtube" href="#" tabindex="0"><i class="fa fa-youtube-play"></i></a></li>
												
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div><div class="item slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 263px;" tabindex="-1" role="option" aria-describedby="slick-slide72">
							<div class="team-column">
								<img src="assets/visitor/images/team/img-01.jpg" alt="">
							
								<div class="team-detail">
									<h5><a href="team-detail.html" tabindex="0">Mohamed</a></h5>
									<span class="desination">IT</span>
									<div class="detail-inner">
										<ul>
											<li>......:</li>
											<li>......:</li>
											<li>......:</li>
											<li>......:</li>
										</ul>
										<ul>
                                                                                        <li>......</li>
											<li>......</li>
											<li>......</li>
											<li>
												<ul class="social-icons">
													<li><a class="facebook" href="#" tabindex="0"><i class="fa fa-facebook"></i></a></li>
													<li><a class="twitter" href="#" tabindex="0"><i class="fa fa-twitter"></i></a></li>
													<li><a class="youtube" href="#" tabindex="0"><i class="fa fa-youtube-play"></i></a></li>
												
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div><div class="item slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 263px;" tabindex="-1" role="option" aria-describedby="slick-slide73">
							<div class="team-column">
								<img src="assets/visitor/images/team/img-01.jpg" alt="">
							
								<div class="team-detail">
									<h5><a href="team-detail.html" tabindex="0">Mohamed</a></h5>
									<span class="desination">IT</span>
									<div class="detail-inner">
										<ul>
											<li>......:</li>
											<li>......:</li>
											<li>......:</li>
											<li>......:</li>
										</ul>
										<ul>
                                                                                        <li>......</li>
											<li>......</li>
											<li>......</li>
											<li>
												<ul class="social-icons">
													<li><a class="facebook" href="#" tabindex="0"><i class="fa fa-facebook"></i></a></li>
													<li><a class="twitter" href="#" tabindex="0"><i class="fa fa-twitter"></i></a></li>
													<li><a class="youtube" href="#" tabindex="0"><i class="fa fa-youtube-play"></i></a></li>
												
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div></div></div>
						<!-- Team Column -->

						<!-- Team Column -->
						
						<!-- Team Column -->

						<!-- Team Column -->
						
						<!-- Team Column -->

						<!-- Team Column -->
						
						<!-- Team Column -->

					</div>
					<!-- Team Row -->

				</div>
			</div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        

		</div>
		<!-- Gallery And Team -->


	</main>
	<!-- Main Content -->

	<!-- Footer -->
	<footer class="main-footer style-2">

		<!-- Footer Columns -->
		<div class="container">

			<!-- Footer columns -->
			<div class="footer-column border-0">
				<div class="row">
					
					<!-- Footer Column -->
					<div class="col-sm-4 col-xs-6 r-full-width-2 r-full-width">
						<div class="column-widget h-white">
							<div class="logo-column p-white">
								<img class="footer-logo" src="assets/visitor/images/footer-logo.png" alt="">
								<ul class="address-list style-2">
									<li><span>Address:</span>1782 Harrison Street  Sun Prairie</li>
									<li><span>Phone Number:</span>49 30 47373795</li>
									<li><span>Email Address:</span>moin@blindtextgenerator.de</li>
								</ul>
								<span class="follow-us">follow us </span>
								<ul class="social-icons">
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="youtube" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									<li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
									
									<i class="fa fa-instagram" aria-hidden="true"></i>
							</div>
						</div>
					</div>
					<!-- Footer Column -->

					<!-- Footer Column -->
					<div class="col-sm-4 col-xs-6 r-full-width-2 r-full-width">
						<div class="column-widget h-white">
							<h5>Advertisment</h5>
							<a href="#"><img src="assets/visitor/images/footer-add.jpg" alt=""></a>
						</div>
					</div>
					<!-- Footer Column -->

					<!-- Footer Column -->
					<div class="col-sm-4 col-xs-6 r-full-width-2 r-full-width">
						<div class="column-widget h-white">
							<h5>Sponcer</h5>
							<ul id="brand-icons-slider-2" class="brand-icons-slider-2">
								<li>
									<a href="#"><img src="assets/visitor/images/brand-icons/img-1-1.png" alt=""></a>
									<a href="#"><img src="assets/visitor/images/brand-icons/img-1-2.png" alt=""></a>
									<a href="#"><img src="assets/visitor/images/brand-icons/img-1-3.png" alt=""></a>
									<a href="#"><img src="assets/visitor/images/brand-icons/img-1-4.png" alt=""></a>
									<a href="#"><img src="assets/visitor/images/brand-icons/img-1-5.png" alt=""></a>
									<a href="#"><img src="assets/visitor/images/brand-icons/img-1-6.png" alt=""></a>
								</li>
								
							</ul>
						</div>
					</div>
					<!-- Footer Column -->

				</div>
			</div>
			<!-- Footer columns -->

		</div>
		<!-- Footer Columns -->

		<!-- Copy Rights -->
		<div class="copy-rights">
			<div class="container">
				<p>© Copyright by <i class="red-color">FineLayers</i> All rights reserved.</p>
				<a class="back-to-top scrollup" href="#"><i class="fa fa-angle-up"></i></a>
			</div>
		</div>
		<!-- Copy Rights -->

	</footer> 
	<!-- Footer -->

</div>
<!-- Wrapper -->



<!-- Java Script -->
<script src="assets/visitor/js/vendor/jquery.js"></script>        
<script src="assets/visitor/js/vendor/bootstrap.min.js"></script> 
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="assets/visitor/js/gmap3.min.js"></script>				
<script src="assets/visitor/js/bigslide.js"></script>		
<script src="assets/visitor/js/slick.js"></script>	
<script src="assets/visitor/js/waterwheelCarousel.js"></script>
<script src="assets/visitor/js/contact-form.js"></script>	
<script src="assets/visitor/js/countTo.js"></script>		
<script src="assets/visitor/js/datepicker.js"></script>		
<script src="assets/visitor/js/rating-star.js"></script>							
<script src="assets/visitor/js/range-slider.js"></script>				
<script src="assets/visitor/js/spinner.js"></script>			
<script src="assets/visitor/js/parallax.js"></script>			   	 
<script src="assets/visitor/js/countdown.js"></script>	
<script src="assets/visitor/js/appear.js"></script>		 		
<script src="assets/visitor/js/prettyPhoto.js"></script>			
<script src="assets/visitor/js/wow-min.js"></script>						
<script src="assets/visitor/js/main.js"></script>	
</body>
</html>