<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<style>
		
.divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #c9c06b;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}

	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	

	 <form action="/loginaction" method="post" >
	           @csrf
<section class="vh-100">
  <div class="container-fluid h-custom">

    <div class="row d-flex justify-content-center align-items-center h-100">
    	<a href="\adminlogin"><img src="admin1.png" width="50" height="50" > </a>

      <div class="col-md-9 col-lg-6 col-xl-5">
      	
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image" style="background-color: #c9c06b;">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form>
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            
          </div>
         

          

          <!-- Email input -->
          <div class="form-outline mb-4 col-md-9">
            <input type="email"  class="form-control form-control-lg"
              placeholder="Enter email " name="email" />
            <label class="form-label" for="form3Example3">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3 col-md-9">
            <input type="password" name="password" class="form-control form-control-lg"
              placeholder="Enter password" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>
          <button class="btn btn-warning btn-lg px-5" name="submit" type="submit">Login</button>
              @if(session('error'))
          <p style="color: red;">{{session('error')}}</p>
          @endif

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
           
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="\register"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  
    <!-- Right -->
  </div>
</section>

</body>
</html>