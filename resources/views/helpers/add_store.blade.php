@extends('layout.en_master')
@section('content')
    <style>body {
            direction: rtl;
            text-align: right;
            font-family: "Rubik" !important;
        }</style>
    <style>#success_message{ display: none;}</style>

</head>

<div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
        <fieldset>

            <!-- Form Name -->
            <legend>افزودن فروشندگان</legend>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">نام مغازه</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="name_store" placeholder="نام مغازه" class="form-control" value="{{$old('name_store')}}"  type="text">
                    </div>
                </div>
            </div> @if($errors->has("name_store"))
                <span class="text-black-50">{{$errors->first('name_store')}}</span>
            @endif


            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label" >*ضمینه کاری</label>
                <p>ضمینه های کاری را با یک , از هم جدا نمایید (بدون خط فاصله)</p>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="whats_job" placeholder="*ضمینه کاری" class="form-control" value="{{$old('whats_job')}}" type="text">
                    </div>
                </div>
            </div>
            @if($errors->has("whats_job"))
                <span class="text-black-50">{{$errors->first('whats_job')}}</span>
            @endif
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label">ایمیل فروشنده</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input name="email" placeholder="ایمیل فروشنده" class="form-control" value="{{$old('email')}}" type="text">
                    </div>
                </div>
            </div>
            @if($errors->has("email"))
                <span class="text-black-50">{{$errors->first('email')}}</span>
            @endif

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">شماره تماس فروشنده</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input name="phone" placeholder="شماره تماس" class="form-control" value="{{$old('phone')}}" type="text">
                    </div>
                </div>
            </div>
            @if($errors->has("phone"))
                <span class="text-black-50">{{$errors->first('phone')}}</span>
            @endif
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label">وی چت فروشنده</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="wechat" placeholder="WeChat" class="form-control" value="{{$old('wechat')}}" type="text">
                    </div>
                </div>
            </div>
            @if($errors->has("wechat"))
                <span class="text-black-50">{{$errors->first('wechat')}}</span>
            @endif
            <div class="form-group">
                <label class="col-md-4 control-label">*آدرس</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="address" placeholder="*آدرس فروشنده" class="form-control" value="{{$old('address')}}"  type="text">
                    </div>
                </div>
            </div>
            @if($errors->has("address"))
                <span class="text-black-50">{{$errors->first('address')}}</span>
            @endif
            <!-- Text input-->



            <!-- Select Basic -->

            <!-- Text input-->



            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label">وبسایت فروشنده</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                        <input name="website" placeholder="وبسایت فروشنده" class="form-control" value="{{$old('website')}}" type="text">
                    </div>
                </div>
            </div>
            @if($errors->has("website"))
                <span class="text-black-50">{{$errors->first('website')}}</span>
            @endif
            <!-- radio checks -->
            <div class="form-group">
                <label class="col-md-4 control-label">*آیا فروشنده در شهر شما (ایوو) است؟</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label>
                            <input type="radio" name="near" value="yes" /> بله
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="near" value="no" /> خیر
                        </label>
                    </div>
                </div>
            </div>
            @if($errors->has("near"))
                <span class="text-black-50">{{$errors->first('near')}}</span>
            @endif
            <!-- Text area -->

            <div class="form-group">
                <label class="col-md-4 control-label">توضیحات تکمیلی(اختیاری)</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <textarea class="form-control" name="about_full" value="{{$old('about_full')}}" placeholder="توضیحات تکمیلی"></textarea>
                    </div>
                </div>
            </div>
            @if($errors->has("about_full"))
                <span class="text-black-50">{{$errors->first('about_full')}}</span>
            @endif
            <!-- Success message -->
            <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-warning" >افزودن <span class="glyphicon glyphicon-send"></span></button>
                </div>
            </div>

        </fieldset>
    </form>
</div>
</div><!-- /.container --><br><br>
@endsection