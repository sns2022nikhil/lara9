@include('layout.admin.header')
<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <form action="{{url('save')}}" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="container">
                    <h1>Register</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>

                    <label for="name"><b>Name</b></label>
                    <input type="text" placeholder="Enter Name" name="name" id="email" required>

                    <label for="psw"><b>Email</b></label>
                    <input type="email" placeholder="Enter Email" name="email" id="psw" required>



                    <label for="psw-repeat"><b>Image</b></label>
                    <input type="file" placeholder="upload File" name="image" id="psw-repeat" required>
                    <hr>
                    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                    <button type="submit" class="registerbtn">Submit</button>
                  </div>


                </form>

        </div>
    </div>
</div>

@include('layout.admin.footer')

