<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tech Blog - Stylish Magazine Blog Template</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/colors.css" rel="stylesheet">
    <link href="css/version/tech.css" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
        <header class="tech-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="tech-index.html"><img src="images/version/tech-logo.png" alt=""></a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item"><a class="nav-link" href="tech-index.html">Home</a></li>
                            <li
                                class="nav-item dropdown has-submenu menu-large hidden-md-down hidden-sm-down hidden-xs-down">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">News</a>
                                <ul class="dropdown-menu megamenu" aria-labelledby="dropdown01"></ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="tech-category-01.html">Gadgets</a></li>
                            <li class="nav-item"><a class="nav-link" href="tech-category-02.html">Videos</a></li>
                            <li class="nav-item"><a class="nav-link" href="tech-category-03.html">Reviews</a></li>
                            <li class="nav-item"><a class="nav-link" href="tech-contact.html">Contact Us</a></li>
                        </ul>
                        <ul class="navbar-nav mr-2">
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-rss"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-android"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-apple"></i></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <section class="section first-section">
            <br><br>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-top clearfix">
                                <h4 class="pull-left">News <a href="#"><i class="fa fa-rss"></i></a></h4>
                            </div>

                            <div class="blog-list clearfix">
                                <?php if (!empty($berita) && is_array($berita)): ?>
                                    <?php foreach ($berita as $news_item): ?>
                                        <div class="blog-box row">
                                            <div class="col-md-4">
                                                <div class="post-media">
                                                    <a href="tech-single.html" title="">
                                                        <img src="<?= base_url('/gambarberita/' . $news_item['gambar']) ?>"
                                                            alt="" class="img-fluid">
                                                        <div class="hovereffect"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="blog-meta big-meta col-md-8">
                                                <h4><a href="#" title=""><?= esc($news_item['judul']); ?></a>
                                                </h4>
                                                <p><?= esc($news_item['deskripsi']); ?></p>
                                                <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html"
                                                        title=""><?= esc($news_item['konten']); ?></a></small>
                                                <small><a href="tech-single.html"
                                                        title=""><?= date('d M, Y', strtotime($news_item['tanggal_publikasi'])); ?></a></small>
                                                <small><a href="tech-author.html" title="">by
                                                        <?= esc($news_item['penulis']); ?></a></small>
                                                <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i>
                                                        1114</a></small>
                                            </div>
                                        </div>
                                        <hr class="invis">
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <p>No News</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-start">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="widget">
                            <div class="footer-text text-left">
                                <a href="index.html"><img src="images/version/tech-footer-logo.png" alt=""
                                        class="img-fluid"></a>
                                <p>Tech Blog is a technology blog, we sharing marketing, news and gadget articles.</p>
                                <div class="social">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i
                                            class="fa fa-facebook"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i
                                            class="fa fa-twitter"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i
                                            class="fa fa-instagram"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i
                                            class="fa fa-google-plus"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i
                                            class="fa fa-pinterest"></i></a>
                                </div>
                                <hr class="invis">
                                <div class="newsletter-widget text-left">
                                    <form class="form-inline">
                                        <input type="text" class="form-control" placeholder="Enter your email address">
                                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <h2 class="widget-title">Popular Categories</h2>
                            <div class="link-widget">
                                <ul>
                                    <li><a href="#">Marketing <span>(21)</span></a></li>
                                    <li><a href="#">SEO Service <span>(15)</span></a></li>
                                    <li><a href="#">Digital Agency <span>(31)</span></a></li>
                                    <li><a href="#">Make Money <span>(22)</span></a></li>
                                    <li><a href="#">Blogging <span>(66)</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <h2 class="widget-title">Copyrights</h2>
                            <div class="link-widget">
                                <ul>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Advertising</a></li>
                                    <li><a href="#">Write for us</a></li>
                                    <li><a href="#">Trademark</a></li>
                                    <li><a href="#">License & Help</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <div class="copyright">&copy; Tech Blog. Design: <a href="http://html.design">HTML Design</a>.
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="dmtop">Scroll to Top</div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>