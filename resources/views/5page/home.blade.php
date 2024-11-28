@extends('layout.master')
@section("title","Home")

@section('content')

    <!-- 模态框 -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="关闭"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="搜索...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- 开始横幅轮播 -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./public/assets/img/uptrade.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>雷蒙德</b> 贸易</h1>
                                <h3 class="h2">轻松交易</h3>
                                <p>
                                    使用 <strong>雷蒙德贸易</strong> 提升你的交易水平。<br> 与我们一起体验安全且直接的交易！
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./public/assets/img/karshenas.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">质量保证</h1>
                                <h3 class="h2">放心正品保证！</h3>
                                <p>
                                    您从我们这里订购的每一件商品都会经过我们的专家核实质量与真伪后再发货。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./public/assets/img/hamlonaghl.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">灵活配送</h1>
                                <h3 class="h2">您的订单，随时随地配送！</h3>
                                <p>
                                    在雷蒙德，我们让您自由选择您的订单配送方式，不论是何种交通工具，全球配送服务任您选择！
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- 结束横幅轮播 -->

    <!-- 开始本月产品分类 -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">产品分类</h1>
                <p>
                    推荐及高利润产品分类
                </p>
            </div>
        </div>
        <div class="row list-type">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./public/assets/img/digipart.jpg" class="rounded-circle img-fluid border img-type"></a>
                <h2 class="h5 text-center mt-3 mb-3">数码产品</h2>
                <p class="text-center"><a class="btn btn-success">查看所有</a></p>
            </div>
        </div>
    </section>
    <!-- 结束本月产品分类 -->

    <!-- 开始特色产品 -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">近期最具利润产品</h1>
                    <p>
                        我们的专家为您挑选了以下高利润产品。
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./public/assets/img/translate_gb.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">4500000 تومان</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">口袋翻译机</a>
                            <p class="card-text">
                                这款设备体积小，重量轻，非常实用，并且借助人工智能（AI）技术提供高效服务。
                            </p>
                            <p class="text-muted">浏览量（24）</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 结束特色产品 -->


@endsection