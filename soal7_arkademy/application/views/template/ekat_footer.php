	<!--Footer-->
		<div class="modal fade bd-example-modal-lg" data-backdrop="static" data-keyboard="false" tabindex="-1">
			<div class="modal-dialog modal-sm"><center>
				<div class="modal-content" style="width:75px;color:#1d66ad;background-color:white;padding:15px">
					<span class="fa fa-refresh fa-spin fa-3x"></span>
				</div>
			</div>
		</div>
	<footer>

		<div class="footer layout1 home1">
			<div class="special-container">
			<div class="container">
				<div class="main-footer">
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 col-ss-12">
							<div class="widget widget-text">
								<h3 class="widgettitle">Informasi Kontak</h3>
								<div class="content">
									<h5 class="subtitle">Alamat</h5>
									<p class="des">Jl. James Simandjuntak No. 1 Bontang 75313 Kalimantan Timur, Indonesia</p>
									<h5 class="subtitle">Telepon</h5>
									<p class="des">+62 548 41202, 41203</p>
                                    <h5 class="subtitle">Fax</h5>
									<p class="des">+62 548 41616, 41626</p>
									<h5 class="subtitle">Email</h5>
									<p class="des">corsec@pupukkaltim.com</p>
								</div>
							</div>
							<ul class="list-socials">
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 col-ss-12">							
							<div class="row auto-clear">								
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ts-12 ">
									<div class="widget widget-custom-menu">
										<h3 class="widgettitle">Informasi</h3>
										<ul >
											<li><a href="#">Ketentuan Pengiriman</a></li>
											<li><a href="#">Kebijakan Privasi</a></li>
											<li><a href="#">Syarat dan Ketentuan</a></li>
											<li><a href="#">Hubungi Kami</a></li>
											<li><a href="#">Sitemap</a></li>
										</ul>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ts-12">
									<div class="widget widget-custom-menu">
										<h3 class="widgettitle">Customer Services</h3>
										<ul >
											<li><a href="#">Shipping & Returns</a></li>
											<li><a href="#">Secure Shopping</a></li>
											<li><a href="#"> International Shipping</a></li>
											<li><a href="#">Affiliates</a></li>
											<li><a href="contact.html">Contact</a></li>
										</ul>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ts-12">
									<div class="widget widget-custom-menu">
										<h3 class="widgettitle">Payment & Shipping</h3>
										<ul >
											<li><a href="#">Terms of Use</a></li>
											<li><a href="#">Payment Methods</a></li>
											<li><a href="#">Shipping Guide</a></li>
											<li><a href="#">Locations We Ship To</a></li>
											<li><a href="#">Estimated Delivery Time</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-note">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 left-content">
							<div class="coppy-right">
								<h3 class="content">© Copyright 2019 <span class="site-name"> PT. Pupuk Kalimantan Timur</span> All rights reserved</h3>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 right-content">
							<ul class="list-payment">
								<li><a href="#"><img src="<?php echo base_url() ;?>assets/techone/images/payment1.png" alt=""></a></li>
								<li><a href="#"><img src="<?php echo base_url() ;?>assets/techone/images/payment2.png" alt=""></a></li>
								<li><a href="#"><img src="<?php echo base_url() ;?>assets/techone/images/payment3.png" alt=""></a></li>
								<li><a href="#"><img src="<?php echo base_url() ;?>assets/techone/images/payment4.png" alt=""></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</footer>
	<!--/Footer-->
	<a class="back-to-top" href="#"></a>
	<script src="<?php echo base_url() ;?>assets/techone/js/jquery-2.1.4.min.js"></script>
	<script src="<?php echo base_url() ;?>assets/techone/js/bootstrap.min.js" ></script>
	<script src="<?php echo base_url() ;?>assets/techone/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url() ;?>assets/techone/js/owl.thumbs.min.js"></script>
	<script src="<?php echo base_url() ;?>assets/techone/js/magnific-popup.min.js"></script>
	<script src="<?php echo base_url() ;?>assets/techone/js/ovic-mobile-menu.js"></script>
	<script src="<?php echo base_url() ;?>assets/techone/js/mobilemenu.min.js"></script>
	<script src="<?php echo base_url() ;?>assets/techone/js/jquery.plugin-countdown.min.js"></script>
	<script src="<?php echo base_url() ;?>assets/techone/js/jquery-countdown.min.js"></script>
	<script src="<?php echo base_url() ;?>assets/techone/js/jquery-ui.min.js"></script>
	<script src="<?php echo base_url() ;?>assets/techone/js/jquery.scrollbar.min.js"></script>
	<script src="<?php echo base_url() ;?>assets/techone/js/chosen.min.js"></script>
	<script src="<?php echo base_url() ;?>assets/techone/js/frontend.js"></script>
	<script>	
	calculatecart();
	function calculatecart(idusr="1") {
			$.ajax({
					type:'POST',
					url:'<?php echo base_url();?>carts/getdata',
					data:{
						id_user	   : "<?= $this->session->userdata("id") ?>"
					},

					success:function(datas){
						datas=JSON.parse(datas);
						var html = `<div class="minicart">
										<div class="cart-block  box-has-content">
											<a href="shopping-cart.html" class="cart-icon"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span class="count">`+datas.count+`</span></a>
										</div>
										<div class="cart-inner">
											<h5 class="title">You have <span class="count-item">`+datas.count+`</span> item(s) in your cart</h5>
											<ul class="list-item" id="listcart" style="height:250px;overflow:auto">`;
						var totalprice = 0;
						datas.data.forEach( data=> {
									html+=`	<li class="product-item">
												<a href="#" class="thumb"><img src="`+data.url_image+`" alt="" style="height:100px;width:100px"></a>
												<div class="info">
													<a href="detail.html" class="product-name">`+data.name+`</a>
													<div class="product-item-qty">
														<span class="number price">
															<span class="qty">1</span> x <span >Rp.`+data.price+`</span>
														</span>
													</div>
												</div>
											</li>`;

								totalprice = totalprice	+ data.price;                            
						});
						html+=`	</ul>
									<div class="subtotal">
										<span class="text">Total : </span>
										<span class="total-price">Rp.`+datas.total+`</span>
									</div>
									<div class="group-button-checkout">
										<a href="<?php echo site_url('home/cart_controller')?>">View cart</a>
										<a href="checkout.html">Checkout</a>
									</div>
								</div>
							</div>`
						//console.log(totalprice);
						
					var totalhtml = `<span class="text">Cart: </span>`+totalprice;
					
					document.getElementById("boxminicart").innerHTML = html;
					$('.modal').modal('hide');
				  }
				});
	}</script>
</body>
</html>