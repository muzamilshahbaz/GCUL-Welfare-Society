@extends('app')

@section('content')

<div class="container-fluid padding" style="background-color: darkred;">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4 text-white">Join us and take one step <br> forward with us</h1>
            <hr class="a" width="150px">
        </div>
    </div>
</div>
<!--Join Us Form-->
@if (session('success'))
<div class="alert alert-success">
    <center>
      {{ session('success') }}
    </center>
      </div>
@else
<div class="alert alert-success">
    <center>
      {{ session('unsuccess') }}
    </center>
      </div>
@endif

<div id="join">
    <div class="container">
        <form action="submit" method="post" id="join-us">
            @csrf
            <div class="form-group row">
                <div class="col-8 offset-2">
                    <br><label for="name">Full Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Your name.." required><br>
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Your email address.." required><br>
                    <label for="phone">WhatsApp (Write with Country Code)</label>
                    <input type="tel" class="form-control" name="whatsapp" placeholder="Your WhatsApp number..e.g. 923331234567" required><br>
                    <label for="cnic">CNIC</label>
                    <input type="text" class="form-control" name="cnic" placeholder="Your National Identity Card Number" required><br>
                    <label for="adress">Permanent Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Your Permanent Address.."><br>
                    <label for="country">Country</label>
                    <input type="text" class="form-control" name="country" placeholder="Your Country.." required><br>
                    <label for="state">State/Province</label>
                    <input type="text" class="form-control" name="state" placeholder="Your State or Province.." required><br>
                    <label for="city"> City</label>
                    <input type="text" class="form-control" name="city" placeholder="Your City.."><br>
                    <label for="gender">Gender</label>
                    <select id="gender" class="form-control" name="gender" required>
              <option value="male">Male</option>
              <option value="female">Female</option>

            </select><br>
                    <label for="occupation">Occupation</label>
                    <select id="occupation" class="form-control" name="occupation" required>
              <option value="unemployed">Unemployed</option>
              <option value="employee">Employee</option>
              <option value="student">Student</option>
              <option value="teacher">Teacher</option>
              <option value="businessman">Businessman</option>
              <option value="freelancer">Freelancer</option>
              <option value="blogger">Blogger/Content Creator</option>
              <option value="other">Other</option>
              <option value="not-prefer">Not Prefer To Say</option>
            </select><br>
                    <p>**By Submitting you are agree to terms and conditions.</p> <br>

                    <button type="submit" name="submit" class="col-8 offset-2 btn btn-primary btn-raised" style="background-color: darkred; border: solid 1px white;">Submit</button>
                </div>
            </div>
        </form>

    </div>
</div>




<!--End Join Us Form-->

<br><br><br>


@endsection
