@extends('layout.master')
@section('content')

    <!-- 模态框 -->
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

    <!-- 开始内容页面 -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">联系我们</h1>
            <p>
                Proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet.
            </p>
        </div>
    </div>

    <!-- 开始地图 -->
    <div id="mapid" style="width: 100%; height: 300px;"></div>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <!-- 结束地图 -->

    <!-- 开始联系 -->
    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-9 m-auto" method="post" role="form">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">姓名</label>
                        <input type="text" class="form-control mt-1" id="name" name="name" placeholder="姓名">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">邮箱</label>
                        <input type="email" class="form-control mt-1" id="email" name="email" placeholder="邮箱">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputsubject">主题</label>
                    <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="主题">
                </div>
                <div class="mb-3">
                    <label for="inputmessage">信息</label>
                    <textarea class="form-control mt-1" id="message" name="message" placeholder="信息" rows="8"></textarea>
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-success btn-lg px-3">谈一谈</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- 结束联系 -->

@endsection
