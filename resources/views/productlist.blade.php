@extends('layouts.pages')

@section('content')
			<div class="modal ab fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog about" role="document">
					<div class="modal-content about">
						<div class="modal-header">
							<button type="button" class="close ab" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<div class="discount">
									<h3>Get Offers & Discount of</h3>
									<p>Catchy Carz Brand VL in New York</p>
										<form action="#" method="post">
											<select id="country5" onchange="change_country(this.value)" class="frm-field required">
												<option selected="selected" value="-1">-Buying Time Period-</option>
												<option value="0">Just Researching</option>
												<option value="7">1 Week</option>
												<option value="14">2 Weeks</option>
												<option value="30">1 Month</option>
												<option value="60">2 Months</option>
											</select>
											<input type="text" class="Pin code" placeholder="Pin code" required="">
										</form>
								</div>
						</div>
						 <div class="modal-body about">

								<div class="dis-contact">
								  <h4>Contact Information</h4>
												<form action="#" method="post">
													<input type="text" name="name" class="name active" placeholder="Name" required="">
													<input type="text" name="email" class="email" placeholder="Email" required="">
													<input type="text" name="phone" class="phone" placeholder="Phone" required="">
													<div class="d-c">
														<span class="checkbox1">
															<label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>I agree to Terms and Conditions.</label>
														</span>

													</div>
													<input type="submit" value="Find Offers">

													</form>
								</div>
						 </div>
					</div>
				</div>
			</div>
			<!-- //discounts-->
				<!-- //sign-up-->
				<div class="modal ab fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog sign" role="document">
					<div class="modal-content about">
						<div class="modal-header one">
							<button type="button" class="close sg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<div class="discount one">
									<h3>Sign Up</h3>

								</div>
						</div>
						 <div class="modal-body about">
								<div class="login-top sign-top one">
							 <form action="#" method="post">
									<input type="text" name="name" class="name active" placeholder="Your Name" required="">
									<input type="text" name="email" class="email" placeholder="Email" required="">
									<input type="password" name="password" class="password" placeholder="Password" required="">
									<input type="checkbox" id="brand1" value="">
									<label for="brand1"><span></span> Remember me</label>
									<div class="login-bottom one">
									<ul>
										<li>
											<a href="#">Forgot password?</a>
										</li>
										<li>

										  <input type="submit" value="SIGN UP">

										</li>
									<div class="clearfix"></div>
								</ul>
								</div>
								</form>
							</div>


						 </div>
						 <div class="social-icons">
									<ul>
										<li><a href="#"><span class="icons"></span><span class="text">Facebook</span></a></li>
										<li class="twt"><a href="#"><span class="icons"></span><span class="text">Twitter</span></a></li>
										<li class="ggp"><a href="#"><span class="icons"></span><span class="text">Google+</span></a></li>
									</ul>
									</div>

					</div>
				</div>
			</div>
			<!-- //sign-up-->
				<!-- /location-->
				<div class="modal ab fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog sign" role="document">
					<div class="modal-content about">
						<div class="modal-header one">
							<button type="button" class="close sg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<div class="discount one">
									<h3>Please Tell Us Your City</h3>

								</div>
						</div>
						 <div class="modal-body about">
								<div class="login-top sign-top location">
								 <form action="#" method="post">
				                      <select id="country12" onchange="change_country(this.value)" class="frm-field required">
														<option value="null"> Select City</option>
														<option value="city">Amsterdam</option>
														<option value="city">Bahrain</option>
														<option value="city">Cannes</option>
														<option value="city">Dublin</option>
														<option value="city">Edinburgh</option>
														<option value="city">Florence</option>
														<option value="city">Georgia</option>
														<option value="city">Hungary</option>
														<option value="city">Hong Kong</option>
														<option value="city">Johannesburg</option>
														<option value="city">Kiev</option>
														<option value="city">London</option>
													    <option value="city">Others...</option>
										</select>
								</form>
							     </div>


						 </div>


					</div>
				</div>
			</div>
			<!-- //location-->
			<!-- /get-->
				<div class="modal ab fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog sign" role="document">
					<div class="modal-content about">
						<div class="modal-header one">
							<button type="button" class="close sg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<div class="discount one">
									<h3>Make car insurance buying easier</h3>

								</div>
						</div>
						 <div class="modal-body about">
								<div class="login-top sign-top get">
								  <ul class="car-insurance">
								       <li><i class="fa fa-signal" aria-hidden="true"></i><h6> Zero <br> Depreciation</h6></li>
									   <li><i class="fa fa-truck" aria-hidden="true"></i><h6> Road-side <br> assistance</h6></li>
									   <li><i class="fa fa-gavel" aria-hidden="true"></i><h6> Hydro-static <br> cover-lock</h6></li>
								     </ul>
							     <form action="#" method="post">

									<input type="text" name="email" class="email" placeholder="Email" required="">
									<input type="password" name="password" class="password" placeholder="Password" required="">
									<input type="submit" value="Submit">
								</div>
								</form>

							</div>


						 </div>

					</div>
				</div>
			</div>
			<!-- //get-->
		<!--//banner-section-->
				<!--/breadcrumb-->
		    <div class="service-breadcrumb">
				<div class="container">
					<div class="wthree_service_breadcrumb_left">
						<ul>
							<li><a href="index.html">Home</a> <i>|</i></li>
{{--							<li>{{$name}}</li>--}}
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
{{--						<h3>{{$name}}</h3>--}}
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!--//breadcrumb-->
		    <div class="tips w3l">
				<div class="container">
				 <div class="col-md-9 tips-info">
                     @foreach($products as $product)
					 <div class="news-grid">
					    <div class="news-img up">
						  <a href="single.html"> <img src="{{ asset($product->images) }}" alt=" " style="width: 70%;"></a>
						  <span class="price1">NEW</span>
						</div>
					    <div class="news-text coming" style="padding-top: 30px;">
						    <h3><a href="{{ url('products/detail', [ $product['sub_name'] , $product['sub_id']]) }}">{{ $product['sub_name'] }}</a></h3>
							{{-- <h5>Launched On: 07-Jun-2016</h5> --}}
							<p class="news">Price: $ {{ $product->price }}</p>
							<h6>Not rated yet,<a href="#"> Product Detail</a></h6>
							<a href="{{ url('products/detail', [ $product['sub_name'] , $product['sub_id']]) }}" class="read hvr-shutter-in-horizontal">Product Detail</a>
							<a href="{{ route('add.to.cart', $product->sub_id) }}" class="read hvr-shutter-in-horizontal">Add To Cart</a>
							<ul class="p-t">
							  {{-- <li><a href="single.html">Photos</a></li>
							  <li><a href="single.html">All Versions</a></li> --}}
							</ul>
						</div>
                         <div class="clearfix"></div>
					 </div>
                     @endforeach

{{--                    <div class="blog-pagenat">--}}
{{--                        <ul>--}}
{{--                            <li><a class="frist" href="#">Prev</a></li>--}}
{{--                            <li><a href="#">1</a></li>--}}
{{--                            <li><a href="#">2</a></li>--}}
{{--                            <li><a href="#">3</a></li>--}}
{{--                            <li><a href="#">4</a></li>--}}
{{--                            <li><a href="#">5</a></li>--}}
{{--                            <li><a class="last" href="#">Next</a></li>--}}
{{--                            <div class="clearfix"> </div>--}}
{{--                        </ul>--}}
{{--                     </div>--}}
				</div>
			    <div class="col-md-3 advice-right w3-agile">
					<div class="blo-top">
						<div class="tech-btm one">
						<img src="{{ asset('salaat/spt-mini_urdu.jpg') }}" class="img-responsive" alt="">
						</div>
					</div>
					<div class="blo-top">
						<div class="tech-btm">
						<h4>Sign up to our newsletter</h4>
						<p>Pellentesque dui, non felis. Maecenas male</p>
							<div class="name">
								 <form action="#" method="post">
									<input type="text" name="email" class="email" placeholder="Enter your email address" required="">
									<input type="submit" value="Subscribe">
								</form>
								<div class="clearfix"> </div>
						</div>
					</div>
					</div>
					<div class="blo-top1">
					<div class="agileits_twitter_posts">
					<h4>Twitter Posts</h4>

					<ul>
						<li><i class="fa fa-twitter" aria-hidden="true"></i> 01 day ago<span>Non numquam <a href="#">http://sd.ds/13jklf#</a>
							eius modi tempora incidunt ut labore et
							<a href="#">http://sd.ds/1389kjklf#</a>quo nulla.</span></li>
						<li><i class="fa fa-twitter" aria-hidden="true"></i> 02 day ago<span>Con numquam <a href="#">http://fd.uf/56hfg#</a>
							eius modi tempora incidunt ut labore et
							<a href="#">http://fd.uf/56hfg#</a>quo nulla.</span></li>
						<li><i class="fa fa-twitter" aria-hidden="true"></i> 03 day ago<span>Qon numquam <a href="#">http://gf.ds/gre21#</a>
							eius modi tempora incidunt ut labore et
							<a href="#">http://gf.ds/gre21#</a>quo nulla.</span></li>
					</ul>
					</div>
				</div>
					{{-- <div class="blo-top1 w3l">
						<div class="tech-btm">
						<h4>Top stories of the week </h4>
							<div class="blog-grids">
								<div class="blog-grid-left">
									<a href="single.html"><img src="/images/f1.jpg" class="img-responsive" alt=""></a>
								</div>
								<div class="blog-grid-right">

									<h5><a href="single.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="blog-grids">
								<div class="blog-grid-left">
									<a href="single.html"><img src="/images/f2.jpg" class="img-responsive" alt=""></a>
								</div>
								<div class="blog-grid-right">

									<h5><a href="single.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="blog-grids">
								<div class="blog-grid-left">
									<a href="single.html"><img src="images/f3.jpg" class="img-responsive" alt=""></a>
								</div>
								<div class="blog-grid-right">

									<h5><a href="single.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="blog-grids lost">
								<div class="blog-grid-left">
									<a href="single.html"><img src="/images/f4.jpg" class="img-responsive" alt=""></a>
								</div>
								<div class="blog-grid-right">

									<h5><a href="single.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
								</div>
								<div class="clearfix"> </div>
							</div>
							</div>
						</div>
					</div> --}}
					<div class="clearfix"> </div>
			</div>
		</div>

@endsection


<script>
    var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
        showRight = document.getElementById( 'showRight' ),
        body = document.body;

    showRight.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( menuRight, 'cbp-spmenu-open' );
        disableOther( 'showRight' );
    };

    function disableOther( button ) {
        if( button !== 'showRight' ) {
            classie.toggle( showRight, 'disabled' );
        }
    }
</script>
<script>
    var sidebarbtn = document.getElementById('sidebar-btn');
    var sidebar = document.getElementById('sidebar');
    sidebarbtn.addEventListener('click', function () {
        if(sidebar.classList.contains('visible')){
            sidebar.classList.remove('visible');
        }else {
            sidebar.className = 'visible';
        }
    });
</script>
