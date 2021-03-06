<?php
$title = 'Alexander Popov — Yii PHP Web Developer';
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Alex Popov">
        <meta name="author" content="Alex Popov">

        <title><?php echo $title; ?></title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="css/main.css" type="text/css">

        <!-- Custom Fonts -->
        <!--    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>-->
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

        <!-- Plugin CSS -->
        <link rel="stylesheet" href="css/animate.min.css" type="text/css">

        <!-- Custom CSS -->
        <!--    <link rel="stylesheet" href="css/creative.css" type="text/css">-->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body id="page-top">

        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <!--            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand page-scroll" href="#page-top"><?php echo $title; ?></a>
                            </div>-->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="#about">About</a>
                        </li>
                        <!--<li>
                            <a class="page-scroll" href="#services">Services</a>
                        </li>-->
                        <li>
                            <a class="page-scroll" href="#portfolio">Portfolio</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <header id="about">
            <div class="header-content">
                <div class="header-content-inner">
                    <img src="http://ryanscherf.net/images/me-nose.gif" class="img-circle img-avatar">
                    <h1>Popov Alexander
                        <span>Yii PHP Web Developer</span>
                    </h1>
                    <hr>
                    <p>
                        <span class="label label-default"><?php echo date('Y') - 2007; ?>+ years of experience</span>
                        <span class="label label-default">Master's degree of Computer Technologies</span>
                        <span class="label label-default">Yii Framework</span>
                        <span class="label label-default">PHP</span>
                        <span class="label label-default">MySQL</span>
                        <span class="label label-default">PostgreSQL</span>
                        <span class="label label-default">JQuery</span>
                        <span class="label label-default">Ajax</span>
                        <span class="label label-default">CodeIgniter</span>
                        <span class="label label-default">Wordpress</span>
                        <span class="label label-default">HTML</span>
                        <span class="label label-default">CSS</span>
                    </p>
                    <a href="#about" class="btn btn-primary btn-xl page-scroll wow fadeIn">Contact</a>
                </div>
            </div>
        </header>

<!--    <section class="bg-primary" id="about_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">We've got what you need!</h2>
                    <hr class="light">
                    <p class="text-faded">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
                    <a href="#" class="btn btn-default btn-xl">Get Started!</a>
                </div>
            </div>
        </div>
    </section> -->

        <section id="services" class="bg-dark">
            <!--        <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2 class="section-heading">At Your Service</h2>
                                <hr class="primary">
                            </div>
                        </div>
                    </div>-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-mobile wow bounceIn text-primary"></i>
                            <h3>Responsive Design</h3>
                            <p class="text-muted">Our templates are updated regularly so they don't break.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-skype wow bounceIn text-primary" data-wow-delay=".1s"></i>
                            <h3>Support</h3>
                            <p class="text-muted">You can use this theme as is, or you can make changes!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-clock-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
                            <h3>Fast Development</h3>
                            <p class="text-muted">We update dependencies to keep things fresh.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                            <h3>Made with Love</h3>
                            <p class="text-muted">You have to make your websites with love these days!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="no-padding bg-dark" id="portfolio">
            <div class="container-fluid">
                <div class="row no-gutter">
                    <div class="col-lg-4 col-sm-6 wow fadeIn portfolio-block">
                        <a href="#" class="portfolio-box">
                            <img src="img/portfolio/cont.png" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-name">
                                        CRM
                                    </div>
                                    <div class="project-category text-faded">
                                        Yii + MySQL + Bootstrap + JQuery
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <div class="desc">CRM</div>
                                <div class="price"><span class="text-muted">from</span> $790</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeIn portfolio-block">
                        <a href="#" class="portfolio-box">
                            <img src="img/portfolio/landing.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-name">
                                        Landing page
                                    </div>
                                    <div class="project-category text-faded">
                                        Responsive HTML + CSS3 + JQuery
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <div class="desc">Landing page</div>
                                <div class="price"><span class="text-muted">from</span> $90</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeIn portfolio-block">
                        <a href="#" class="portfolio-box">
                            <img src="img/portfolio/donzip.png" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-name">
                                        Promo site
                                    </div>
                                    <div class="project-category text-faded">
                                        Responsive HTML + CSS3 + Wordpress + 5 static pages
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <div class="desc">Promo site</div>
                                <div class="price"><span class="text-muted">from</span> $190</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeIn portfolio-block">
                        <a href="http://apopovbox.myjino.ru/gscrape/" target="blank" class="portfolio-box">
                            <img src="img/portfolio/gscrape.png" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-name">
                                        Web Scraper
                                    </div>
                                    <div class="project-category text-faded">
                                        Google, Bing, Yahoo etc.
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <div class="desc">Web Scraper</div>
                                <div class="price"><span class="text-muted">from</span> $70</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeIn portfolio-block">
                        <a href="#" class="portfolio-box">
                            <img src="img/portfolio/sc.png" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-name">
                                        E-commerce
                                    </div>
                                    <div class="project-category text-faded">
                                        Yii + MySQL + Bootstrap + JQuery
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <div class="desc">E-commerce</div>
                                <div class="price"><span class="text-muted">from</span> $490</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeIn portfolio-block">
                        <a href="#" class="portfolio-box">
                            <img src="img/portfolio/autoter.png" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-name">
                                        Catalog
                                    </div>
                                    <div class="project-category text-faded">
                                        Yii + MySQL + Bootstrap + JQuery
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <div class="desc">Catalog</div>
                                <div class="price"><span class="text-muted">from</span> $290</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

<!--        <aside class="bg-dark">
            <div class="container text-center">
                <div class="call-to-action">
                    <h2>Free Download at Start Bootstrap!</h2>
                    <a href="#" class="btn btn-default btn-xl wow tada">Download Now!</a>
                </div>
            </div>
        </aside>-->

        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2 class="section-heading">Let's work together!</h2>
                        <hr class="primary">
                        <!--<p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>-->
                    </div>
                    <div class="col-lg-1 col-lg-offset-4 text-center">
                        <a href="https://github.com/b059ae" target="blank">
                            <i class="fa fa-github fa-3x wow bounceIn"></i>
                        </a>
                        <!--<p>123-456-6789</p>-->
                    </div>
                    <div class="col-lg-1 text-center">
                        <i class="fa fa-linkedin fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                        <!--<p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>-->
                    </div>
                    <div class="col-lg-1 text-center">
                        <i class="fa fa-twitter fa-3x wow bounceIn" data-wow-delay=".3s"></i>
                    </div>
                    <div class="col-lg-1 text-center">
                        <i class="fa fa-skype fa-3x wow bounceIn" data-wow-delay=".4s"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="space20">
                        </div>
                        <!-- BEGIN FORM-->
                        <form action="javascript:;">
                            <h3 class="form-section">Feedback</h3>
                            <p>
                                Lorem ipsum dolor sit amet, Ut wisi enim ad minim veniam, quis nostrud exerci. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat consectetuer
                            </p>
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="fa fa-check"></i>
                                    <input type="text" placeholder="Subject" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="fa fa-user"></i>
                                    <input type="text" placeholder="Name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="fa fa-envelope"></i>
                                    <input type="password" placeholder="Email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Feedback" rows="3=6" class="form-control"></textarea>
                            </div>
                            <button class="btn green" type="submit">Submit</button>
                        </form>
                        <!-- END FORM-->
                    </div>
                </div>
            </div>
        </section>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/jquery.fittext.js"></script>
        <script src="js/wow.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/creative.js"></script>

    </body>

</html>
