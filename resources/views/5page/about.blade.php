@extends('layout.master')
@section("title","about us")

@section('content')
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="搜索 ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <section class="bg-success py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1>关于 Raymond</h1>
                    <p>
                        Raymond Trade 于 2024 年成立，目标是提供最佳和最高质量的商业产品。<br>
                        Raymond Trade 的主要目标是为客户识别并提供有利可图且高质量的产品。我们致力于提供有效和创新的商业解决方案，帮助企业提升绩效并实现更高利润。
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="assets/img/about-hero.png" alt="关于英雄">
                </div>
            </div>
        </div>
    </section>
    <!-- Close Banner -->

    <!-- Start Section -->
    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Raymond 一直在您身边！</h1>
                <p>
                    我们为所有尊贵的 Raymond 客户提供的服务
                </p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-plane-departure fa-lg"></i></div>
                    <h2 class="h5 mt-4 text-center">可靠的货运</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa-solid fa-truck-ramp-box"></i></div>
                    <h2 class="h5 mt-4 text-center">快速产品处理</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-percent"></i></div>
                    <h2 class="h5 mt-4 text-center">特别折扣</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-headset fa-lg"></i></div>
                    <h2 class="h5 mt-4 text-center">全天候支持</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->

@endsection
