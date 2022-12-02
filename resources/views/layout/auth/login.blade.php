@include('layout.admin.header')
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-5 mt-5">
            <form action="{{url('logedin')}}" method="POST">
                @csrf
                @if(Session::has('message'))
<p class="alert alert-danger">{{ Session::get('message') }}</p>
@endif
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form2Example1" name="email" class="form-control" />
                  <label class="form-label" for="form2Example1">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form2Example2" name="password" class="form-control" />
                  <label class="form-label" for="form2Example2">Password</label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                  <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox"  value="" id="form2Example31" checked />
                      <label class="form-check-label" for="form2Example31"> Remember me </label>
                    </div>
                  </div>

                  <div class="col">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                  </div>
                </div>

                <!-- Submit button -->
                <center>
                    <button type="submit" class="btn btn-primary btn-lg btn-block mb-4">Sign in</button>
                </center>


                <!-- Register buttons -->
                <div class="text-center">
                  <p>Not a member? <a href="{{url('/auth/register')}}">Register</a></p>


                </div>
              </form>

        </div>

    </div>


</div>
@include('layout.admin.footer')
