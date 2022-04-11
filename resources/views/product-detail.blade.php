@extends('layouts.pages')

@section('content')
			<div class="modal ab fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog about" role="document">
					<div class="modal-content about">
						<div class="modal-header">
							<button type="button" class="close ab" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<!-- <div class="discount">
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
								</div> -->
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
						{{-- <div class="modal-header one">
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
							</div> --}}


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
		    <div class="service-breadcrumb w3-agile">
				<div class="container">
                    @foreach ($productDetails as $productDetail)
					<div class="wthree_service_breadcrumb_left">
						<ul>
							<li><a href="#">Product</a> <i>|</i></li>
							<li>{{ $productDetail['sub_name'] }}</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>{{ $productDetail['sub_name'] }}</h3>
					</div>
					<div class="clearfix"> </div>
                    @endforeach
				</div>
			</div>
		<!--//breadcrumb-->
		<div class="single w3ls">
		<div class="container">
			<div class="col-md-8 single-left">
				<div class="sample1">
					<div class="carousel" style="height: 341px;">
						<ul>
                            @foreach ($productDetails as $productDetail)
							    <li class=""> <img src="{{ asset($productDetail->images) }}" alt="quibusdam et aut offi"> <div class="caption1	"><span>quibusdam et aut offi</span></div></li>

                            @endforeach

							{{-- <li class=""> <img src="{{ asset('images/5.jpg') }}" alt="Itaque earum rerum hic"> <div class="caption1"><span>Itaque earum rerum hic</span></div></li>
							<li class="current"> <img src="{{ asset('images/3.jpg') }}" alt="doloribus asperio rep"> <div class="caption1"><span>doloribus asperio rep</span></div></li>
							<li> <img src="{{ asset('images/4.jpg') }}" alt="maiores alias consequ"> <div class="caption"><span>maiores alias consequ</span></div></li> --}}
						</ul>

						<div class="controls">
							<div class="prev"></div>
							<div class="next"></div>
						</div>
					</div>
					{{-- <div class="thumbnails">
						<ul>
							<li class=""> <div><img src="{{ asset('images/1.jpg') }}" alt=" "></div> </li>
							<li class=""> <div><img src="{{ asset('images/5.jpg') }}" alt=" "></div> </li>
							<li class="selected"> <div><img src="{{ asset('images/3.jpg') }}" alt=" "></div> </li>
							<li> <div><img src="{{ asset('images/4.jpg') }}" alt=" "></div> </li>
						</ul>
					</div> --}}
				</div>
				<div class="single-left2">
                    <div class="table-responsive-lg">
                        <table class="table table-bordered">
                            @foreach ($productDetails as $productDetail)
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $productDetail['sub_name'] }}</td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>{{ $productDetail['price'] }}</td>
                                </tr>
                                <tr>
                                    <th>Add to Cart</th>
                                    <td><a href="{{ route('add.to.cart', $productDetail->sub_id) }}" class="read hvr-shutter-in-horizontal">Add To Cart</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
					<h3>vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</h3>
					{{-- <ul class="com">
						<li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><a href="#">Admin</a></li>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="#">2 Comments</a></li>
						<li><span class="glyphicon glyphicon-heart" aria-hidden="true"></span><a href="#">50 Likes</a></li>
						<li><span class="glyphicon glyphicon-tag" aria-hidden="true"></span><a href="#">3 Tags</a></li>
					</ul> --}}
					{{-- <div class="single-left2-sub">
						<ul>
							<li>Recent Tags: </li>
							<li><a href="#">Designs</a></li>
							<li><a href="#">Category</a></li>
							<li><a href="#">Packages</a></li>
						</ul>
					</div> --}}
				</div>
				<div class="single-left3">
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
						praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
						excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
						officia deserunt mollitia animi, id est laborum et dolorum fuga.
						<span>Et harum quidem rerum facilis est et expedita distinctio. Nam libero
						tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus
						id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis
						dolor repellendus</span>. Temporibus autem quibusdam et aut officiis debitis
						aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et
						molestiae non recusandae. <span>Itaque earum rerum hic tenetur a sapiente delectus,
						ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis
						doloribus asperiores repellat.
						Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</span></p>
				</div>
				{{-- <div class="single-left4">
					<h4>Share This Post</h4>
					<ul class="social-icons social-icons1">
						<li><a href="#" class="icon icon-border icon-border1 facebook"></a></li>
						<li><a href="#" class="icon icon-border icon-border1 twitter"></a></li>
						<li><a href="#" class="icon icon-border icon-border1 instagram"></a></li>
						<li><a href="#" class="icon icon-border icon-border1 pinterest"></a></li>
					</ul>
				</div> --}}
				{{-- <div class="comments agile-info">
					<h4>Comments</h4>
					<div class="comments-grid">
						<div class="comments-grid-left">
							<img src="{{ asset('images/single.jpg') }}" alt=" " class="img-responsive">
						</div>
						<div class="comments-grid-right">
							<h3><a href="#">Adam Smith</a></h3>
							<h5><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> On 28th May, 2016</h5>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
							<div class="reply">
								<a href="#">Reply</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="comments-grid">
						<div class="comments-grid-left">
							<img src="{{ asset('images/single1.jpg') }}" alt=" " class="img-responsive">
						</div>
						<div class="comments-grid-right">
							<h3><a href="#">James Rick</a></h3>
							<h5><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> On 18th June, 2016</h5>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
							<div class="reply">
								<a href="#">Reply</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div> --}}

			</div>
			<div class="col-md-4 single-right">
				<div class="related-posts">
					<h3>Related Posts</h3>
                    @foreach ($latestPost as $post)
                    <div class="related-post">
						<div class="related-post-left">
							<a href="{{ url('products/detail', [ $post['sub_name'] , $post['sub_id']]) }}"><img src="{{ asset($post['images']) }}" alt=" " class="img-responsive"></a>
						</div>
						<div class="related-post-right">
							<h4 class="p-1"><a href="single.html">{{ $post['sub_name'] }}</a></h4>
							<h4 class="p-1">PKR = {{ $post['price'] }}</h4><br>
                            <a href="{{ url('products/detail', [ $post['sub_name'] , $post['sub_id']]) }}" class="btn btn-info btn-sm">View Product</a>
                            </div>
                        <div class="clearfix"> </div>
					</div>
                    @endforeach
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>


<script src="http://127.0.0.1:8000/js/jquery-1.11.1.min.js"></script>
<script src="http://127.0.0.1:8000/js/jquery.light-carousel.js"></script>
<script>
    $('.sample1').lightCarousel();
</script>
<link href="http://127.0.0.1:8000/css/light-carousel.css" rel="stylesheet" type="text/css">
<script src="http://127.0.0.1:8000/js/bootstrap.js"></script>


    @endsection

