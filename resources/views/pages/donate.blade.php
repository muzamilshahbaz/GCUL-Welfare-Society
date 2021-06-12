@extends('app')

@section('content')

<div class="container-fluid padding" style="background-color: darkred;">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4 text-white">Donate Us to Help the Helpless.</h1>
            <hr class="a" width="150px">
        </div>
    </div>
</div>

<br><br>

<!--Donation Form-->
<div class="col-8 offset-2">
    <center><p style="font-size: 1.4em">
        By clicking on <b>"Donate Now"</b>, you will be redirected to <b style="color: lawngreen">GoFundMe</b> Website.</p></center>
    <br>
    <center>
        <a class="col-lg-6" id="donate-btn" type="button" href="https://www.gofundme.com/start/education-fundraising" target="__blank">Donate Now</a>

    </center>
    <br><br>

    <img class="rounded mx-auto d-block" src="https://www.660citynews.com/wp-content/blogs.dir/sites/8/2018/11/10/go-fund-me-logo.png">
<br><br>
    <center><p style="font-size: 1.4em">
       No matter how small your donation is, it will be deeply appreciated for a better cause. Your donation will be safely hand over to deserving students and your name will be highlighted of becoming a part of this education fundraising program.</p>
    </center>

</div>

<!--Donation Form-->

<br><br>


@endsection
