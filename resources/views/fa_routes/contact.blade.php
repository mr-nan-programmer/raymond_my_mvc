@extends('layout.fa_master')
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


    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">ارتباط با ما </h1>
            <p>
                بخشی که میخواهید با آن ارتباط بگیرید را انتخاب کنید
            </p>
        </div>
    </div>

    <!-- Start Map -->

    <!-- Ena Map -->

    <!-- Start Contact -->

    <!-- End Contact -->    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">انتخاب کنید</h1>
                <p>
                    با کدام بخش میخواهید در ارتباط باشید
                </p>
            </div>
        </div>
        <div class="row" style="; justify-content: space-evenly;"  >


            <div class="col-md-6 col-lg-3 pb-5" >
                <a href="fa/contact/comments" class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa-solid fa-comments"></i></div>
                    <h2 class="h5 mt-4 text-center">نظردهی</h2>
                </a>
            </div>
        
            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa-solid fa-cart-flatbed"></i></div>
                    <h2 class="h5 mt-4 text-center">ثبت سفارش</h2>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-headset fa-lg"></i></div>
                    <h2 class="h5 mt-4 text-center">پشتیبانی</h2>
                </div>
            </div>
        </div>
    </section>


@endsection