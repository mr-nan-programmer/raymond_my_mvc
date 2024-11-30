@extends('layout.en_master')
@section("title","about")

@section('content')
    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
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
                    <h1>About Raymond</h1>
                    <p>
                        Raymond Trade Company was established in 2024 with the aim of providing the best and highest-quality commercial products.<br>
                        The main goal of Raymond Trade is to identify and offer high-quality and profitable products to customers. We strive to provide effective and innovative business solutions to help businesses improve their performance and achieve higher profits.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="assets/img/about-hero.png" alt="About Raymond">
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Raymond is by your side!</h1>
                <p>
                    Our services for all our valued Raymond customers:
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-plane-departure fa-lg"></i></div>
                    <h2 class="h5 mt-4 text-center">Reliable Cargo</h2>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa-solid fa-truck-ramp-box"></i></div>
                    <h2 class="h5 mt-4 text-center">Fast Product Processing</h2>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-percent"></i></div>
                    <h2 class="h5 mt-4 text-center">Special Discounts</h2>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-headset fa-lg"></i></div>
                    <h2 class="h5 mt-4 text-center">24/7 Support</h2>
                </div>
            </div>
        </div>
    </section>

@endsection