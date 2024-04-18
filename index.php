<?php
session_start();
$_SESSION["page"] = "home";

?>

    <!-- Head-Title Part -->
    <?php include_once("subpages/head.php"); ?>
    
    <!-- Header Start -->
    <?php include_once("subpages/header.php"); ?>

    <!-- Navigation Bar Start -->
	<?php include_once("subpages/navi-bar.php"); ?>

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/banner-01.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Aoka's Shop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Shop</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Aoka's Cafe</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Cafe</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-03.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Aoka's Wine Selection</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Wines</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->
	
	
	<div class="box-add-products">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md">
					<div class="offer-box-products">
						<a href="shop.php"><img class="img-fluid" src="images/add-img-01.jpg" alt="" /></a>
					</div>
				</div>
				<div class="col-md">
					<div class="offer-box-products">
						<a href="shop.php"><img class="img-fluid" src="images/add-img-01.jpg" alt="" /></a>
					</div>
				</div>
				<div class="col-md">
					<div class="offer-box-products">
						<a href="cafe.php"><img class="img-fluid" src="images/add-img-02.jpg" alt="" /></a>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Start Product -->
    <?php include_once("subpages/featured-products.php"); ?>
    <!-- End Product -->

    <!-- Instagram Pictures Start -->
    <?php include_once("subpages/insta-bar.php"); ?>
    <!-- Instagram Pictures End -->

    <!-- Footer Start -->
    <?php include_once("subpages/footer.php"); ?>
    <!-- Footer End -->


    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>