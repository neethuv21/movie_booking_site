<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="\css\style.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <style type="text/css">
      *{
        
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.bg{
  background-color: #CBD18F;
}
</style>
  </head>

    <body >

    	<nav class="navbar navbar-expand-md bg">
  
    <a class="navbar-brand   fs-3 ms-4 text-white fw-bold " href="#">M-TICKETNEW</a>
  
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="btn">
      <ul class="navbar-nav ms-auto">
        
         <li class="nav-item">
          <a href="\bdetails" class="nav-link mx-2 fs-5 text-white"><i class="bi bi-book"></i> Booking Details</i></a>
        </li>
        <li class="nav-item">
          <a href="\logout" class="nav-link mx-4 fs-5 text-white"><i class="bi bi-box-arrow-left"></i> Logout</i></a>
        </li>
      </ul>
    </div>
  </nav>


<section class="h-100 h-custom" style="background-color:#c9c06b;">
  <div class="container py-1 h-100">
    <div class="row d-flex justify-content-center align-items-center " >
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="bkngimage.jpg"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
            alt="Sample photo" height="100px;">
          <div class="card-body p-4 p-md-5">
          	<center>
             <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Booking Info</h3>
             </center>


            <form action="/bookinsert" method="post">
	           @csrf
            	<div class=" mb-4" style="margin-left: 30px;">
              	 <label for="exampleDatepicker1" class="form-label fw-bold">Movie Name</label>

                <select name="name" class="select" style="width:250px;margin-left: 20px;">
                  <option value="" disabled>Movies</option>
                <option value="shyam">shyam </option>
                                           
                  <option value="aadhi">aadhi</option>
                     <option value="koode">Koode</option>
                 
                </select>

              </div>
              <div class=" mb-4" style="margin-left: 30px;">
              	 <label for="exampleDatepicker1" class="form-label fw-bold">Theater Name</label>

                <select name="tname" class="select"   style="width:250px;margin-left: 12px;">
                  <option value="chilanka theatre">Chilanka Theatre</option>
  
                 <option value="abhilash theatre">Abhilash Theatre</option>
                  <option value="dhanya theatre">dhanya theatre</option>
                 
                </select>

              </div>
               <div class=" mb-4" style="margin-left: 30px;">
              	 <label for="exampleDatepicker1" class="form-label fw-bold">Seat Type</label>

                <select name="seat" class="select"   style="width:250px;margin-left: 43px;">
                 <option value="swing back">Swing Back</option>
  
                 <option value="vip kids sofa">Vip Kids Sofa</option>
                 <option value="vip cinema seat">Vip cinema seat</option>
                </select>

              </div>
               <div class=" mb-4" style="margin-left: 30px;">
              	 <label class="fw-bold"  >No. of Seats</label>

               <input type="number" name="nseat" style="width:250px;margin-left: 25px;">

              </div>

               <div class=" mb-4" style="margin-left: 30px;">
              	 <label class="fw-bold"  >Date</label>

               <input type="date" name="dte" style="width:250px;margin-left: 80px;">

              </div>
              <div class=" mb-4" style="margin-left: 30px;">
              	 <label class="fw-bold" >Time</label>

               <input type="time" name="time" style="width:250px;margin-left: 80px;">

              </div>
              

              

              

              <button type="submit" name="login" class="btn btn-warning btn-lg mb-1" style="margin-left:180px;">Submit</button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 
</body>
</html>