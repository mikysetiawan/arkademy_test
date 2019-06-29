<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pupuk Kaltim | e-Katalog</title>
	<link rel="icon" href="<?php echo base_url() ;?>assets/pkt/pkt_favicon.ico">
	<link href="<?php echo base_url() ;?>assets/techone/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ;?>assets/techone/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ;?>assets/techone/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
	<link href="<?php echo base_url() ;?>assets/techone/css/animate.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ;?>assets/techone/css/magnific-popup.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ;?>assets/techone/css/jquery-ui.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ;?>assets/techone/css/jquery.scrollbar.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ;?>assets/techone/css/chosen.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ;?>assets/techone/css/ovic-mobile-menu.css" rel="stylesheet">
	<link href="<?php echo base_url() ;?>assets/techone/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url() ;?>assets/techone/css/customs-css.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<style>
	.bd-example-modal-lg .modal-dialog{
		display: table;
		position: relative;
		margin: 0 auto;
		top: calc(50% - 24px);
	}

	.bd-example-modal-lg .modal-dialog .modal-content{
		background-color: transparent;
		border: none;
	}
	</style>
</head>
<body class="home home1">
	<div class="special-container">
		<!--Header-->
		<header>
			<div class="header layout1 no-prepend-box-sticky">
				<div class="topbar layout1">
					<div class="container">
						<ul class="menu-topbar">
							<li class="language menu-item-has-children">
								<?php
									  if ($this->session->userdata("role")!="4"){?>
										<a href="<?= site_url('login')?>" class="toggle-sub-menu"><span class="flag"><img src="<?php echo base_url() ;?>assets/techone/images/flag1.jpg" alt=""></span> LOGIN</a>
								<?php }else{?>
										<a href="<?= site_url('logout')?>" class="toggle-sub-menu"><span class="flag"><img src="<?php echo base_url() ;?>assets/techone/images/flag1.jpg" alt=""></span> LOGOUT</a>
								<?php }?>
								
								<ul class="list-language sub-menu">
									<!-- <li><a href="#"><span class="flag"><img src="<?php echo base_url() ;?>assets/techone/images/flag2.jpg" alt=""></span> Pembeli</a></li>
									<li><a href="#"><span class="flag"><img src="<?php echo base_url() ;?>assets/techone/images/flag3.jpg" alt=""></span> Penjual</a></li>
									<li><a href="#"><span class="flag"><img src="<?php echo base_url() ;?>assets/techone/images/flag4.jpg" alt=""></span> Admin</a></li> -->
								</ul>
							</li>
						</ul>
						<ul class="list-socials">
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
						<ul class="menu-topbar top-links">
							<li><a href="<?php echo site_url('ekat_home/vendor_reg') ;?>">Pendaftaran Vendor</a></li>
							<li><a href="#">Tutorial e-Katalog</a></li>
						</ul>
					</div>
				</div>
				<div class="main-header">
					<div class="top-header">
						<div class="container">
							<div class="row">
								<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12  left-content">
									<div class="logo">
										<a href="<?php echo site_url('') ?>"><img src="<?php echo base_url() ;?>assets/pkt/pkt_logo.png" alt=""></a>
									</div>
								</div>
								<div class="col-lg-6 col-md-5 col-sm-6 col-xs-12 midle-content">
									<div class="search-form layout1 box-has-content">
										<div class="search-block">
										  
											<div class="search-inner" id="search-inner">
											<form method="GET" action="<?php echo base_url();?>" enctype="multipart/form-data">
												<input class="search-info input-text text" id="searchs" type="text"  name="search" placeholder="Search..." value="">
											</div>
											<div class="search-choice parent-content">
												<select data-placeholder="All Products" name="type" class="chosen-select">
													<option value="">All products</option>
													<option value="1">Barang Stock</option>
													<option value="2">Barang Non Stock</option>
													<option value="3">Jasa</option>
												</select>
											</div>
											<button class="search-button"><i class="fa fa-search" aria-hidden="true"></i></button>
									   </form>
									   </div>
									</div>
								</div>								
								<div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 right-content">
									<ul class="header-control">
										<li class="hotline">
											<div class="icon">
												<i class="fa fa-phone" aria-hidden="true"></i>
											</div>
											<div class="content">
												<span class="text">Hubung Kami</span>
												<span class="number">+62 548 41202</span>
											</div>
										</li>
										<li class="box-minicart" id="boxminicart">

										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="this-sticky">
						<div class="container">
							<div class="header-nav-wapper main-menu-wapper">
								<div class="row">
									<div class="col-lg-3 col-md-4 col-sm-12" style="background-color:#efefef">
										<div class="vertical-wapper parent-content">
											<div class="block-title show-content">
												<span class="icon-bar">
													<span></span>
													<span></span>
													<span></span>
												</span>
												<span class="text">Categories</span>
											</div>
											<div class="vertical-content hidden-content">
												<ul class="vertical-menu ovic-clone-mobile-menu">
													<li><a href="#" class="ovic-menu-item-title" title="Cameras"><span class="icon"><img src="<?php echo base_url() ;?>assets/techone/images/icon1.png" alt=""></span> Cameras</a></li>
													<li><a href="#" class="ovic-menu-item-title" title="Tv & Audio"><span class="icon"><img src="<?php echo base_url() ;?>assets/techone/images/icon2.png" alt=""></span> Tv & Audio</a></li>
													<li class="menu-item-has-children has-megamenu">
														<a href="#" class="ovic-menu-item-title" title="Laptop & Computer"><span class="icon"><img src="<?php echo base_url() ;?>assets/techone/images/icon3.png" alt=""></span> Laptop & Computer</a>
														<a href="#" class="toggle-sub-menu"></a>
														<div class="sub-menu sub-menu1 mega-menu">
															<div class="row">
																<div class="widget-custom-menu col-xs-12 col-sm-12 col-md-4">
																	<h5 class="title widgettitle">Electronics</h5>
																	<ul>
																		<li><a href="#">Home Audio & Theater</a></li>
																		<li><a href="#">Camera & Video</a></li>
																		<li><a href="#">Headphone</a></li>
																		<li><a href="#">Video Game</a></li>
																		<li><a href="#">Bluetooth & Wireless</a></li>
																		<li><a href="#">TV & Video</a></li>
																	</ul>
																</div>
																<div class="widget-custom-menu col-xs-12 col-sm-12 col-md-4">
																	<h5 class="title widgettitle">Computers</h5>
																	<ul>
																		<li><a href="#">Computer & Tablet</a></li>
																		<li><a href="#">Monitors</a></li>
																		<li><a href="#">Networking</a></li>
																		<li><a href="#">Drivers</a></li>
																	</ul>
																</div>
																<div class="widget-custom-menu col-xs-12 col-sm-12 col-md-4"></div>
																</div>
															<div class="row">
																<div class="widget-custom-menu col-xs-12 col-sm-12 col-md-4">
																	<h5 class="title widgettitle">Laptops</h5>
																	<ul>
																		<li><a href="#">Software</a></li>
																		<li><a href="#">Camera & Video</a></li>
																		<li><a href="#">Networking</a></li>
																		<li><a href="#">Bluetooth & Wireless</a></li>
																		<li><a href="#">Printer & Ink</a></li>
																	</ul>
																</div>
															</div>
														</div>
													</li>
													<li><a href="#" class="ovic-menu-item-title" title="Accessories"><span class="icon"><img src="<?php echo base_url() ;?>assets/techone/images/icon4.png" alt=""></span> Accessories</a></li>
													<li class="menu-item-has-children has-megamenu">
														<a href="#" class="ovic-menu-item-title" title="Smartphone & Table"><span class="icon"><img src="<?php echo base_url() ;?>assets/techone/images/icon5.png" alt=""></span> Smartphone & Table</a>
														<a href="#" class="toggle-sub-menu"></a>
														<div class="sub-menu mega-menu sub-menu2">
															<div class="row">
																<div class="widget-custom-menu col-xs-12 col-sm-12 col-md-4 col-lg-4">
																	<h5 class="title widgettitle">Electronics</h5>
																	<ul>
																		<li><a href="#">Home Audio & Theater</a></li>
																		<li><a href="#">Camera & Video</a></li>
																		<li><a href="#">Headphone</a></li>
																		<li><a href="#">Video Game</a></li>
																		<li><a href="#">Bluetooth & Wireless</a></li>
																		<li><a href="#">TV & Video</a></li>
																	</ul>
																</div>
																<div class="widget-custom-menu col-xs-12 col-sm-12 col-md-4 col-lg-4">
																	<h5 class="title widgettitle">Tablets</h5>
																	<ul>
																		<li><a href="#">Home Audio & Theater</a></li>
																		<li><a href="#">Camera & Video</a></li>
																		<li><a href="#">Headphone</a></li>
																		<li><a href="#">Video Game</a></li>
																		<li><a href="#">Bluetooth & Wireless</a></li>
																		<li><a href="#">TV & Video</a></li>
																	</ul>
																</div>
																<div class="widget-custom-menu col-xs-12 col-sm-12 col-md-4 col-lg-4">
																	<h5 class="title widgettitle">Accessories</h5>
																	<ul>
																		<li><a href="#">Home Audio & Theater</a></li>
																		<li><a href="#">Camera & Video</a></li>
																		<li><a href="#">Headphone</a></li>
																		<li><a href="#">Video Game</a></li>
																		<li><a href="#">Bluetooth & Wireless</a></li>
																		<li><a href="#">TV & Video</a></li>
																	</ul>
																</div>
															</div>
														</div>
													</li>
													<li><a href="#" class="ovic-menu-item-title" title="Printers & Ink"><span class="icon"><img src="<?php echo base_url() ;?>assets/techone/images/icon6.png" alt=""></span> Printers & Ink</a></li>
													<li class="more-item hidden-item"><a href="#" class="ovic-menu-item-title" title="Game & Consoles"><span class="icon"><img src="<?php echo base_url() ;?>assets/techone/images/icon7.png" alt=""></span> Game & Consoles</a></li>
													<li class="more-item hidden-item"> <a href="#" class="ovic-menu-item-title" title="Headphone"><span class="icon"><img src="<?php echo base_url() ;?>assets/techone/images/icon8.png" alt=""></span> Headphone</a></li>
												</ul>
												<div class="view-all-categori">
													<a href="#" class="button">All Categories <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-9 col-md-8 col-sm-12" style="background-color:#efefef">
										<div class="header-nav container-vertical-wapper ">
											<div class="header-nav-inner">
												<div class="box-header-nav">
													<div class=" container-wapper">
									                    <a href="#" class="header-top-menu-mobile"><span class="fa fa-cog" aria-hidden="true"></span></a>
															<a class="menu-bar mobile-navigation " href="#">
									                        <span class="icon">
									                            <span></span>
									                            <span></span>
									                            <span></span>
									                        </span>
									                        <span class="text">Main Menu</span>
									                    </a>
														<ul id="menu-main-menu" class="main-menu clone-main-menu ovic-clone-mobile-menu box-has-content">
															<li class="menu-item">
																<a href="<?php echo site_url('') ?>" class="kt-item-title ovic-menu-item-title" title="Home">BERANDA</a>
															</li>
                                                            <li class="menu-item menu-item-has-children">
																<a href="ourblog.html" class="kt-item-title ovic-menu-item-title" title="Blog">Cart</a>
																<ul class="sub-menu">
																	<li><a href="<?php echo site_url('carts') ?>">Shopping Cart</a></li>
																	<li><a href="<?php echo site_url('carts') ?>">Checkout</a></li>
																</ul>
															</li>
															<li class="menu-item menu-item-has-children">
																<a href="#" class="kt-item-title ovic-menu-item-title" title="Demos">PRODUCT</a>
																<ul class="sub-menu mega-menu demos-menu">
																	<li class="col-xs-12 col-sm-12 col-md-12 col-lg-15 demo-item">
																		<a href="<?php echo base_url();?>?search=&type=1" class="demo-title"><span class="number">1. </span>Barang Stock</a>
																		<a href="<?php echo base_url();?>?search=&type=1"><img src="<?php echo base_url() ;?>assets/techone/images/home1.jpg" alt=""></a>
																	</li>
																	<li class="col-xs-12 col-sm-12 col-md-12 col-lg-15 demo-item">
																		<a href="<?php echo base_url();?>?search=&type=2" class="demo-title"><span class="number">2. </span>Barang Non Stock</a>
																		<a href="<?php echo base_url();?>?search=&type=2"><img src="<?php echo base_url() ;?>assets/techone/images/home2.jpg" alt=""></a>
																	</li>
																	<li class="col-xs-12 col-sm-12 col-md-12 col-lg-15 demo-item">
																		<a href="<?php echo base_url();?>?search=&type=3" class="demo-title"><span class="number">3. </span> Jasa</a>
																		<a href="<?php echo base_url();?>?search=&type=3"><img src="<?php echo base_url() ;?>assets/techone/images/home3.jpg" alt=""></a>
																	</li>
																</ul>
															</li>
															<li class="menu-item menu-item-has-children">
																<a href="#" class="kt-item-title ovic-menu-item-title" title="PAGES">TRANSAKSI</a>
																<ul class="sub-menu">
																	<li><a href="#">Daftar Transaksi</a></li>
																	<li><a href="#">Monitoring Pengiriman</a></li>
																</ul>
															</li>
															
															
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--/Header-->