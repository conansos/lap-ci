<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Purchasing System</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('css/bootstrap.css'); ?>" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?php echo base_url('css/business-casual.css'); ?>" rel="stylesheet">
</head>

<body>

    <div class="brand">Purchasing System</div>

    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Purchasing System</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/~b542110009/index.php">Purchasing System</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/index.php/eventsupplies">Supplies</a><!--/~b542110009/index.php/eventsupplies เอาไว้อัพขึ้น SV -->
                    </li>
                    <li><a href="/index.php/eventproduct">Product</a><!--/~b542110009/index.php/eventproduct เอาไว้อัพขึ้น SV -->
                    </li>
                    <li><a href="/index.php/eventpuchasing">Puchasing</a><!--/~b542110009/index.php/eventpuchasing เอาไว้อัพขึ้น SV -->
                    </li>
					</li>
                    <li><a href="#">Check Products</a>
                    </li>
					</li>
                    <li><a href="#">Report</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="<?php echo base_url('img/slide-1.jpg'); ?>" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url('img/slide-2.jpg'); ?>" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url('img/slide-3.jpg'); ?>" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2>
                        <small>Welcome to</small>
                    </h2>
                    <h1>
                        <span class="brand-name">Purchasing System</span>
                    </h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By Parinya Kittiburt & Harit Suriyachote</small>
                    </h2>
                </div>
            </div>
        </div>

    <!-- JavaScript -->
    <script src="<?php echo base_url('js/jquery-1.10.2.js'); ?>"></script>
    <script src="<?php echo base_url('js/bootstrap.js'); ?>"></script>
    <script>
    // Activates the Carousel
    $('.carousel').carousel({
        interval: 5000
    })
    </script>

</body>

</html>
