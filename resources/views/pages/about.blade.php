@extends('app')

@section('content')

<div class="container-fluid padding" style="background-color: darkred;">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4 text-white">About Us</h1>
            <hr class="a" width="150px">
        </div>
    </div>
</div>


<!--- Cards -->
<section id="contact-us" class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-7">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <address>
                        <h5 class="title"><i class="icon-map-pin text-color"></i> Address</h5>
                        GCU, Lahore, Pakistan.
                    </address>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <h5 class="title"><i class="icon-phone10 text-color"></i> Phone</h5>
                        <div>+92-42-99213340</div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <h5 class="title"><i class="icon-envelope7 text-color"></i> Email Address</h5>
                        <div>info@gcu.edu.pk.com</div>
                    </div>
                </div>
                <hr>
                <p>This is a student organization for the purpose of welfare of needy students. This organization support economically, socially, morally and psychologically deserving students of GC University. After 156 Years of its wonderful history,
                    the Government College, Lahore was raised to the status of a University in 2002. It was renamed as the GC University Lahore. The academic life here has been re-shaped in accordance with its new challenges and we hope to fulfill
                    the expectations that go with a University. The GCU is committed to act as a promoter of quality education for all. This Institution is one of the oldest seats of learning in the Muslim world. As a seat of higher learning GC University
                    blends grand old traditions and modern educational standards to meet the ideals set by persons like Dr. Leitner, philosopher the poet, Dr. Muhammad Iqbal and the Noble Laureate, Dr. Abdus Salam.
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="card mx-auto border-primary" style="width:250px; background-color: darkred; border: solid 1px whitesmoke !important;">
                    <img class="card-img-top" src="asset/img/advisor.jpg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h2 class="card-title">Dr. Khalid Manzoor Butt</h2>
                        <h6 class="card-subtitle text-muted" style="color: white !important; font-weight: lighter !important;">Advisor</h6><br>
                        <a href="https://www.facebook.com/khalid.m.butt.940" target="_blank" class="btn btn-primary" style="background-color:white; color:darkred; border: solid 1px white;">See Profile</a>
                    </div>
                </div>

            </div>
        </div>
</section>
<br>
<!--- End Cards -->

<div class="container-fluid padding">
    <div class="row text-center padding">

        <div class="col-12">

            <hr width="300px">
        </div>
        <img src="asset/img/cabinet.jpg" width="100%">

    </div>
    <hr width="300px">
</div>


@endsection
