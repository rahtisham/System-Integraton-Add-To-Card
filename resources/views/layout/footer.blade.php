<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="row justify-content-center">
        <div class="footer-grids">
            <div class="col-md-4 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
                <h3>About Us</h3>
                <p>Systems Engineering is an R&D based organization manufacturing computer and industrial products. Established in 1994, we have been serving the microcomputer and electronics market in Pakistan with the reputation of locally manufacturing and marketing electronics products with full backup and support ensuring complete customer satisfaction.</span></p>
            </div>
            <div class="col-md-1 footer-grid animated wow slideInLeft" data-wow-delay=".7s"></div>
            <div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".6s">
                <h3>Contact Info</h3>
                <ul>
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Office # 412, 4th Floor, Madina <span> City Mall, Abdullah Haroon Road, Saddar,</span> <span>Karachi-74400, Pakistan </span></li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@systemsintegration.com">info@systemsintegration.com</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+923360837535</li>
                </ul>
            </div>
            <div class="col-md-1 footer-grid animated wow slideInLeft" data-wow-delay=".7s"></div>
            <div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".7s">
                <h3>Our Products</h3>
                <a href="{{ url('products/Salaat Panel/1') }}"><p>Salaat Panel</p></a>
                <a href="{{ url('products/Panel Horizontal/7') }}"><p>Salaat Panel Horizontal</p></a>
                <a style="color: gray;" href="{{ url('products/Salaat Panel Vertical/6') }}">Salaat Panel Vertical</p></a>
                <a style="color: gray;" href="{{ url('products/Salaat Panel With Quran & Azan/9') }}">Salaat Panel With Quran & Azan</p></a>
                <a style="color: gray;" href="{{ url('products/Jamaat Next Change Panel/10') }}">Jamaat Next Change Panel</p></a>
                <a style="color: gray;" href="{{ url('products/Salaat Clock With Quran & Azan/11') }}">Salaat Clock With Quran & Azan</p></a>
                <a style="color: gray;" href="{{ url('products/Plain Clock/3') }}">Plain Clock</p></a>

                <!--<div class="footer-grid-left">
                    <a href="single.html"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
                </div>
                <div class="footer-grid-left">
                    <a href="single.html"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
                </div>
                <div class="footer-grid-left">
                    <a href="single.html"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
                </div>
                <div class="footer-grid-left">
                    <a href="single.html"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
                </div>
                <div class="footer-grid-left">
                    <a href="single.html"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
                </div>
                <div class="footer-grid-left">
                    <a href="single.html"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
                </div>
                <div class="footer-grid-left">
                    <a href="single.html"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
                </div>
                <div class="footer-grid-left">
                    <a href="single.html"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
                </div> -->
                <div class="clearfix"> </div>
            </div>
            <!-- <div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".8s">
                <h3>Blog Posts</h3>
                <div class="footer-grid-sub-grids">
                    <div class="">
                        <h4><a href="single.html">culpa qui officia deserunt</a></h4>
                        <p>Posted On 25/3/2016</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="footer-grid-sub-grids">
                    {{-- <div class="footer-grid-sub-grid-left">
                        <a href="single.html"><img src="images/10.jpg" alt=" " class="img-responsive" /></a>
                    </div> --}}
                    <div class="">
                        <h4><a href="single.html">Quis autem vel eum iure</a></h4>
                        <p>Posted On 25/4/2016</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="footer-grid-sub-grids">
                    {{-- <div class="footer-grid-sub-grid-left">
                        <a href="single.html"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
                    </div> --}}
                    <div class="">
                        <h4><a href="single.html">Quis autem vel eum iure</a></h4>
                        <p>Posted On 25/5/2016</p>
                    </div>
                    <div class="clearfix"> </div>
                    <a href="https://api.whatsapp.com/send?phone=3197010240285" class="btn btn-success" style="background-color: #25D366;">Contact us on WhatsApp</a>

                </div>
            </div> -->
            <div class="clearfix"> </div>
        </div>
        <div class="footer-logo animated wow slideInUp" data-wow-delay=".5s">
            <h2><a href="index.html">Systems Integration <span>Eye it – try it – buy it!</span></a></h2>
        </div>
        <div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
            <p>&copy 2021 Systems Integration. All rights reserved</a></p>
        </div>
                    </div> 
                </div>
</div>

<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<script type="text/javascript" src="js/jquery.zoomslider.min.js"></script>

<script type="text/javascript">
    $(window).load(function() {
        $("#flexiselDemo").flexisel({
            visibleItems:1,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed:1000,
            pauseOnHover:true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint:640,
                    visibleItems: 1
                },
                tablet: {
                    changePoint:768,
                    visibleItems: 1
                }
            }
        });
    });
</script>
<script type="text/javascript">
    $(window).load(function() {
        $("#flexiselDemo1").flexisel({
            visibleItems: 4,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover:true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint:640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint:768,
                    visibleItems: 3
                }
            }
        });
    });
</script>

</body>
</html>
