@extends('layout.master')
@section("title","联系我们 | Raymond")

@section('content')

    <!-- 模态框 -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="关闭"></button>
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

    <!-- 页面内容开始 -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">联系我们</h1>
            <p>
                选择您想联系的部门。
            </p>
        </div>
    </div>

    <!-- 地图开始 -->

    <!-- 地图部分 -->

    <!-- 联系部分开始 -->

    <!-- 联系部分结束 -->
    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">选择</h1>
                <p>
                    您想联系哪个部门？
                </p>
            </div>
        </div>

        <div class="row contact-menu-align"  >
            <a href="/contact/comments" class="a-contact-menu">
            <div class="col-md-6 col-lg-3 pb-5 contact-width" >
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa-solid fa-comments"></i></div>
                    <h2 class="h5 mt-4 text-center">反馈</h2>
                </div>
            </div>
            </a>
            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa-solid fa-cart-flatbed"></i></div>
                    <h2 class="h5 mt-4 text-center">订单注册</h2>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-headset fa-lg"></i></div>
                    <h2 class="h5 mt-4 text-center">支持</h2>
                </div>
            </div>
        </div>
    </section>


@endsection
