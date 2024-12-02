@extends("layout.fa_master")
@section("title", "نظرات | Raymond")
@section("content")
    <div class="form-in-contact">
        <div class="line-color"></div>
        <div class="header-contact"><h2>نظرت راجعب رایموند چیه؟!</h2></div>
        <img src="assets/img/green-boc-contact.png" class="image-contacts">
        <div class="lable-intrested"><p>اگر نظرات و پیشنهادات شما باعث بهبود عملکرد رایموند شود حتما آنها را اعمال میکنیم</p></div>
        <form class="form-contact" method="post" action="">
            <i class="fa-solid fa-at"></i>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInputDisabled" placeholder="name@example.com" >
                <label for="floatingInputDisabled">نشانی ایمیل</label>
            </div>
            <i class="fa-solid fa-user"></i>
            <div class="form-floating mb-3">
                <input type="text" class="form-control"  placeholder="name@example.com" >
                <label>نام</label>
            </div>
            <i class="fa-solid fa-message"></i>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="نظر یا پیشنهاد" id="floatingTextarea2Disabled" style="height: 100px" ></textarea>
                <label for="floatingTextarea2Disabled">نظر یا پیشنهاد</label>
            </div>
            <button type="submit" class="btn btn-success">ارسال به نظرات سایت</button>

        </form>
    </div>
@endsection