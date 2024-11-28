@extends('layout.admin_panel')
@section('content')
    <style>
        h3{
            color: white;
        }
        p{
            color: white;
        }
        h1{
            color: white;
        }
        body {
            direction: rtl;
            text-align: right;
        }
    </style>
        <br><br><br>
        <div class="row" >
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="sparkline9-list responsive-mg-b-30">
                    <div class="sparkline9-hd">
                        <div class="main-sparkline9-hd">
                            <h1>افزودن مغازه</h1>
                        </div>
                    </div>
                    <div class="sparkline9-graph">
                        <div class="basic-login-form-ad">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="basic-login-inner">
                                        <h3>ایجاد مغازه</h3>
                                        <p>اطلاعات و نشانی مغازه را در فرم ها وارد نمایید</p>
                                        <form action="#">
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <label class="login2">نام مغازه </label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <input type="email" class="form-control" placeholder="نام فروشگاه یا مغازه" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <label class="login2">آدرس مغازه</label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <input type="password" class="form-control" placeholder="آدرس مغازه" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <label class="login2">شماره مغازه دار</label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <input type="password" class="form-control" placeholder="شماره مغازه دار" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="login-btn-inner">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <div class="i-checks">
                                                            <label>
                                                                <input type="checkbox"><i></i> Remember me </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <div class="login-horizental">
                                                            <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Sign In</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
