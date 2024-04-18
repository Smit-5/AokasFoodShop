 <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item <?php if($_SESSION["page"] == 'home') echo "active"; ?>"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item <?php if($_SESSION["page"] == 'about') echo "active"; ?>"><a class="nav-link" href="about.php">About Us</a></li>
                        <li class="nav-item <?php if($_SESSION["page"] == 'cafe') echo "active"; ?>"><a class="nav-link" href="cafe.php">Cafe</a></li>
						<li class="nav-item <?php if($_SESSION["page"] == 'shop') echo "active"; ?>"><a class="nav-link" href="shop.php">Shop</a></li>
						<li class="nav-item <?php if($_SESSION["page"] == 'drinks') echo "active"; ?>"><a class="nav-link" href="drinks.php">Drinks</a></li>
                        <li class="nav-item <?php if($_SESSION["page"] == 'contact-us') echo "active"; ?>"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="side-menu" id='redirectLink' data-url='cart.php'>
							<a href="cart.php">
								<i class="fa fa-shopping-bag"></i>
								<p>Cart</p>
							</a>
						</li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
        </nav>
        <!-- End Navigation -->
    </header>
<!-- End Main Top -->