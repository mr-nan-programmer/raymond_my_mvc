
@extends('layout.fa_master')
@section("title","رایموند ترید")
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



    <!-- Start Banner Hero -->
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
                                <h1 class="h1 text-success"><b>رایموند </b>ترید</h1>
                                <h3 class="h2">تجارت آسان است </h3>
                                <p>
                                    با رایموند ترید تجارتت رو   <strong> ارتقا  </strong>بده .<br> معامله مستقیم و امن رو با ما تجربه کنید !
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
                                <h1 class="h1">تضمین کیفیت</h1>
                                <h3 class="h2">از اصالت کالا مطمئن شو !</h3>
                                <p>
                                    هر کالایی که نزد ما سفارش میدهید قبل از ارسال توسط کارشناسان ما اصالت و کیفیت کالا  تایید شده و سپس ارسال صورت میگیرد .
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
                                <h1 class="h1">تنوع در ارسال</h1>
                                <h3 class="h2">سفارش شما، هرجا و با هر وسیله حمل و نقلی که بخواهید!</h3>
                                <p>
                                    ما در Raymond به شما این آزادی را می‌دهیم که سفارش خود را دقیقاً طبق سلیقه‌تان و با هر وسیله حمل و نقلی که راحت‌تر هستید، دریافت کنید اون هم در سراسر جهان !
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
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">دسته بندی محصولات</h1>
                <p>
                    دسته بندی محصولات پیشنهادی و پر سود
                </p>
            </div>
        </div>
        <div class="row list-type">

            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./public/assets/img/digipart.jpg" class="rounded-circle img-fluid border img-type"></a>
                <h2 class="h5 text-center mt-3 mb-3">لوازم دیجیتالی</h2>
                <p class="text-center"><a class="btn btn-success">دیدن همه</a></p>
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">پر سود ترین کالا های اخیر</h1>
                    <p>
                        کارشناسان ما به دنبال پر سود ترین کالا ها برای شما محصولات زیر را انتخاب کردند .
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
                                <li class="text-muted text-right">4,500,000 تومان</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">مترجم جیبی</a>
                            <p class="card-text">
                                این دستگاه حجم و وزن کمی دارد ضمن اینکه این دستگاه بسیار کاربردی است و از هوش مصنوعی (Ai) کمک میگیرد
                            </p>
                            <p class="text-muted">بازدید (24)</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End Featured Product -->

@endsection