@include('layout.admin.header')
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>



    <div class="col-md-6 mt-5">
        <h2 class="display-6 text-center">Register Your Data</h2>
        <form class="mx-1 mx-md-4"  action="{{url('savedata')}}" method="POST">
            @csrf
        <div class="d-flex flex-row align-items-center mb-4">
          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
          <div class="form-outline flex-fill mb-0">
            <input type="text" id="form3Example1c" name="name" class="form-control" />
            <label class="form-label" for="form3Example1c">Your Name</label>
          </div>
        </div>

        <div class="d-flex flex-row align-items-center mb-4">
          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
          <div class="form-outline flex-fill mb-0">
            <input type="email" id="form3Example3c" name="email" class="form-control" />
            <label class="form-label" for="form3Example3c">Your Email</label>
          </div>
        </div>

        <div class="d-flex flex-row align-items-center mb-4">
          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
          <div class="form-outline flex-fill mb-0">
            <input type="password" id="form3Example4c" name="password" class="form-control" />
            <label class="form-label" for="form3Example4c">Password</label>
          </div>
        </div>



        <div class="form-check d-flex justify-content-center mb-5">
          <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
          <label class="form-check-label" for="form2Example3">
            I agree all statements in <a href="#!">Terms of service</a>
          </label>
        </div>

        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
          <button type="submit" class="btn btn-primary btn-lg">Register</button>
        </div>

      </form>
    </div>
</div>


</div>
@include('layout.admin.footer')
