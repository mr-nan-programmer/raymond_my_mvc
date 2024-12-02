@extends("layout.master")
@section("title", "comments")
@section("content")
    <div class="form-in-contact">
        <div class="line-color"></div>
        <div class="header-contact">
            <h2>你对雷蒙德的看法是什么？</h2>
        </div>
        <img src="https://yiwuraymondcom.com/public/assets/img/green-boc-contact.png" class="image-contacts">
        <div class="lable-intrested">
            <p>如果您的意见和建议可以帮助改进雷蒙德的表现，我们一定会采纳。</p>
        </div>
        <form class="form-contact" method="post" action="">
            <i class="fa-solid fa-at"></i>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInputDisabled" placeholder="name@example.com">
                <label for="floatingInputDisabled">电子邮件地址</label>
            </div>
            <i class="fa-solid fa-user"></i>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" placeholder="name@example.com">
                <label>姓名</label>
            </div>
            <i class="fa-solid fa-message"></i>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="意见或建议" id="floatingTextarea2Disabled" style="height: 100px"></textarea>
                <label for="floatingTextarea2Disabled">意见或建议</label>
            </div>
            <button type="submit" class="btn btn-success">提交到网站评论</button>
        </form>
    </div>
    <br>
@endsection