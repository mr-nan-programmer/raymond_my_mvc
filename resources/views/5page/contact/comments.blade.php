@extends("layout.master")
@section("title", "意见 | Raymond")
@section("content")<div class="background-red">
    <div class="form-in-contact">
        <div class="line-color"></div>
        <div class="header-contact">
            <h2>What do you think about Raymond?</h2>
        </div>
        <img src="assets/img/green-boc-contact.png" class="image-contacts">
        <div class="lable-intrested">
            <p>If your feedback and suggestions improve Raymond's performance, we will definitely implement them.</p>
        </div>
        <form class="form-contact" method="post" action="">
            <i class="fa-solid fa-at"></i>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInputDisabled" placeholder="name@example.com">
                <label for="floatingInputDisabled">Email Address</label>
            </div>
            <i class="fa-solid fa-user"></i>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" placeholder="name@example.com">
                <label>Name</label>
            </div>
            <i class="fa-solid fa-message"></i>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Feedback or Suggestions" id="floatingTextarea2Disabled" style="height: 100px"></textarea>
                <label for="floatingTextarea2Disabled">Feedback or Suggestions</label>
            </div>
            <button type="submit" class="btn btn-success">Submit to Site Feedback</button>
        </form>
    </div>
</div>
@endsection