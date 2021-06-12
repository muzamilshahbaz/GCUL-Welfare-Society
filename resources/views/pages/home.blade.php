@extends('app')

@section('content')

<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel" data-interval="2500">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="0"></li>
        <li data-target="#slides" data-slide-to="0"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="asset/img/gcubg.jpg" class="mx-auto d-block" width=100%>
            <div class="carousel-caption">
                <h1 class="display-2">Help The Helpless.</h1>
                <br><br>
                <a class="col-4" id="donate-btn" type="button" href="/donate">Donate</a>
            </div>

        </div>
        <div class="carousel-item">
            <img src="asset/img/gcubg2.jpg" class="mx-auto d-block" width=100%>
            <div class="carousel-caption">
                <h1 class="display-2">We Provide every kind of financial assitance to our deserving students.</h1>
                <br><br>
                <a class="col-4" id="donate-btn" type="button" href="/donate">Donate</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="asset/img/gcubg3.jpg" class="mx-auto d-block" width=100%>
            <div class="carousel-caption">
                <h1 class="display-2">We persistently evolve ourselves.</h1>
                <br><br>
                <a class="col-4" id="donate-btn" type="button" href="/donate">Donate</a>
            </div>
        </div>
    </div>
</div>
<!--- End Image Slider -->
<br>
<section  class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-7">
              <h1 class="display-4">Vice Chancellor's Message</h1>
                <hr>
                <p>On behalf of the community of students, faculty and staff at the Government College University, Lahore, I welcome you warmly to our web pages.

                    Since its inception in 1864, the GC University Lahore has been one of the leading higher education institutions in Asia. We are honoured that the spiritual father of our nation, Allama Mohammad Iqbal, is an alumnus of GCU, and proud that two Nobel laureates, Har Gobind Khorana and Abdus Salam, are also amongst our past colleagues. Our Ravians, young and old, have been contributing strongly to the shaping and development of Pakistan.

                    For the last 156 years, we have pursued, nurtured and celebrated excellence in a wide variety of disciplines. It is no coincidence that our motto “Courage to Know” is a call to students, faculty and staff members alike to realize their fullest potential and the University’s mission.


                    Indeed, there is a lot to be proud of in our achievements – yet, there is little time to rest on these laurels. The strategic need is to develop the potential of GC University to maximize our contributions to our youth and to the rest of society.
                </p>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="card mx-auto border-primary" style="width:400px; background-color: darkred; border: solid 1px whitesmoke !important;">
                    <img class="card-img-top" src="https://gcu.edu.pk/wp-content/uploads/2020/03/13173156_10209294367299042_5278527784688309298_o-300x300.jpg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h2 class="card-title">Prof. Dr. Asghar Zaidi</h2>
                        <h6 class="card-subtitle text-muted" style="color: white !important; font-weight: lighter !important;">Vice Chancellor, GC University, Lahore</h6><br>
                        <a href="https://gcu.edu.pk/vice-chancellor" target="_blank" class="btn btn-primary" style="background-color:white; color:darkred; border: solid 1px white;">See Profile</a>
                    </div>
                </div>

            </div>
        </div>
</section>

<!--- About Us -->
<br><br><br>
<center>
    <h1 class="display-3">WHO ARE WE?</h1>
    <h2 class="display-5">Know About About Us</h2>
</center>


<div id="about">
    <div class="container-fluid padding">
        <div class="row">
            <div class="col-8 offset-2" style="background-color: darkred;">
                <p>This is a student organization for the purpose of welfare of needy students. This organization support economically, socially, morally and psychologically deserving students of GC University. After 156 Years of its wonderful history,
                    the Government College, Lahore was raised to the status of a University in 2002. It was renamed as the GC University Lahore. The academic life here has been re-shaped in accordance with its new challenges and we hope to fulfill
                    the expectations that go with a University. The GCU is committed to act as a promoter of quality education for all. This Institution is one of the oldest seats of learning in the Muslim world. As a seat of higher learning GC University
                    blends grand old traditions and modern educational standards to meet the ideals set by persons like Dr. Leitner, philosopher the poet, Dr. Muhammad Iqbal and the Noble Laureate, Dr. Abdus Salam. </div>
        </div>
    </div>
</div>
<!--- End About Us -->

<br><br><br>

<!--- Connect -->
<div class="container-fluid padding">
    <div class="row text-center padding">

        <div class="col-8 offset-2">
            <h2 class="display-4">Connect</h2>
            <hr width="150px">
        </div>
        <div class="col-8 offset-2 social padding" style="background-color: darkred;">
            <a href="https://www.facebook.com/gcuwelfaresociety" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com/gcuniversitylhr" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/gculahore/" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>

    </div>
</div>
<!--- End Connect -->

<a href="/join" target="_blank">
    <center>
        <button class="btn btn joinbtn" type="button">Join Us For The Better Future</button>
    </center>

</a>
<br><br><br><br><br>


@endsection
