@include("layout.link")
@include("layout.script")

        <!DOCTYPE html>

<html lang="zh">

<head>
    <title>@yield("title")</title>
@yield("link")
</head>

<body id="body-zh">
<!-- Start Top Nav -->
<nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
    <div class="container text-light">
        <div class="w-100 d-flex justify-content-between">
            <div>
                <i class="fa fa-envelope mx-2"></i>
                <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:raymond@yiwuraymondcom.com">info@yiwuraymondcom.com</a>
                <i class="fa fa-phone mx-2"></i>
                <a class="navbar-sm-brand text-light text-decoration-none" href="tel:+98-09123632803">+98-09123632803</a>
            </div>
            <div>
                <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
            </div>
        </div>
    </div>
</nav>
<!-- Close Top Nav -->

<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
            雷蒙德
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">首页</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">关于我们</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">联系我们</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/products">产品</a>
                    </li>
                </ul>
            </div>
            <div class="navbar align-self-center d-flex">
                <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                    <div class="input-group">
                        <input type="text" class="form-control search-input" id="inputMobileSearch" placeholder="搜索 ...">
                        <div class="input-group-text">
                            <i class="fa fa-fw fa-search"></i>
                        </div>
                    </div>
                </div>
                <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                    <i class="fa fa-fw fa-search text-dark mr-2"></i>
                </a>
                <!-- Language Selector -->
                <span class="lang-nav nav-icon position-relative text-decoration-none ">
                    <i class="fa fa-solid fa-globe text-dark mr-3"></i>
                    <div class="lang-menu">
                        <ul>
                            <li>
                                <a href="/en">English</a>
                            </li>
                            <li>
                                <a href="/" >Chinese</a>
                            </li>
                            <li>
                                <a href="/fa" >Persian</a>
                            </li>
                        </ul>
                    </div>
                </span>
            </div>
        </div>

    </div>
</nav>
<!-- Close Header -->

@yield('content')

<!-- Start Footer -->
<footer class="bg-dark" id="tempaltemo_footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 pt-5">
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">雷蒙德</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li>
                        <i class="fas fa-map-marker-alt fa-fw"></i>
                        中国，义乌市
                    </li>
                    <li>
                        <i class="fa fa-phone fa-fw"></i>
                        <a class="text-decoration-none" href="tel:010-020-0340">+98-9128330575</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope fa-fw"></i>
                        <a class="text-decoration-none" href="mailto:info@yiwuraymondcom.com">info@yiwuraymondcom.com</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">产品</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="#">数字产品</a></li>
                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">热门链接</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="#">首页</a></li>
                    <li><a class="text-decoration-none" href="#">关于我们</a></li>
                    <li><a class="text-decoration-none" href="#">产品</a></li>
                    <li><a class="text-decoration-none" href="#">联系我们</a></li>
                    <li><a class="text-decoration-none" href="#">立即订购</a></li>
                </ul>
            </div>

        </div>

    </div>

    <div class="row text-light mb-4">
        <div class="col-12 mb-3">
            <div class="w-100 my-3 border-top border-light"></div>
        </div>
        <div class="col-auto me-auto">
            <ul class="list-inline text-left footer-icons">
                <li class="list-inline-item border border-light rounded-circle text-center">
                    <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                </li>
                <li class="list-inline-item border border-light rounded-circle text-center">
                    <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                </li>
                <li class="list-inline-item border border-light rounded-circle text-center">
                    <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                </li>
                <li class="list-inline-item border border-light rounded-circle text-center">
                    <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                </li>
            </ul>
        </div>
        <div class="col-auto">
            <form method="post" action="">

                <label class="sr-only" for="subscribeEmail">Email address</label>
                <div class="input-group mb-2">
                    <input type="text" class="form-control bg-dark border-light input-email" id="subscribeEmail" placeholder="Email address">
                    <button class="input-group-text btn-success text-light" type="submit">Subscribe</button>
                </div>
            </form>

        </div>
    </div>
    </div>

    <div class="w-100 bg-black py-3">
        <div class="container">
            <div class="row pt-2">
                <div class="col-12">
                    <p class="text-left text-light">
                        Copyright &copy; <span id="now-year"></span> Raymond
                        | Creator : <a rel="sponsored" href="https://templatemo.com" target="_blank">RedFarm</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- End Footer -->

<!-- Start Script -->
@yield("script")

<!-- End Script -->
</body>

</html>