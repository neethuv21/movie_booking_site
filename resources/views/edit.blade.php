<!doctype html>
<html>
<head>

	<style type="text/css">
		.gradient-custom {
/* fallback for old browsers */
background: #c9c06b;


}

.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<body>

		<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            @foreach($result as $value)
         <form action="/editaction/{{$value->id}}" method="post">
	      @csrf

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text"  name="username" class="form-control form-control-lg"  value="{{$value->username}}"/>
                    <label class="form-label" >User Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="email"  name="email" class="form-control form-control-lg" value="{{$value->email}}" />
                    <label class="form-label" >Email</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="password" class="form-control form-control-lg" name="password" value="{{$value->password}}"  />
                    <label  class="form-label">Password</label>
                  </div>

                </div>
                
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text"  name="phone" value="{{$value->phone}}" class="form-control form-control-lg" />
                    <label class="form-label" >Phone Number</label>
                  </div>

                </div>
               
              </div>

             

              <div class="mt-4 pt-2">
                <input class="btn btn-warning btn-lg" type="submit" value="Update" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
	
    
 		</body>

		</html>
      

<!--<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	name<input type="text" name="username">
	email<input type="text" name="email" >
	phone<input type="text" name="phone" >
	password<input type="text" name="password" >
	gender<input type="text" name="gender">
	address<input type="text" name="address" value="{{$value->address}}">
	<input type="submit" name="submit" value="update">
</form>
@endforeach
</body>
</html> -->