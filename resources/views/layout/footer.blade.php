<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-4 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
                <h3>About Us</h3>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse.<span>Excepteur sint occaecat cupidatat
                    non proident, sunt in culpa qui officia deserunt mollit.</span></p>
            </div>
            <div class="col-md-4 footer-grid animated wow slideInLeft" data-wow-delay=".6s">
                <h3>Contact Info</h3>
                <ul>
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
                </ul>
            </div>
            <div class="col-md-4 footer-grid animated wow slideInLeft" data-wow-delay=".8s">
                <h3>Blog Posts</h3>
                <div class="footer-grid-sub-grids">
                    <div class="">
                        <h4><a href="{{ route('home') }}">Home</a></h4>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="footer-grid-sub-grids">
                    <div class="">
                        <h4><a href="{{ route('contact-us') }}">Contact Us</a></h4>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="footer-grid-sub-grids">
                    <div class="">
                        <h4><a href="single.html">Privacy & Policy</a></h4>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="footer-logo animated wow slideInUp" data-wow-delay=".5s">
            <h2><a href="{{ route('home') }}">SYSTEMS INTEGRATION <span>Eye it – try it – buy it!</span></a></h2>
        </div>
        <div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
            {{-- <p>&copy 2016 Catchy Carz. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p> --}}
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
