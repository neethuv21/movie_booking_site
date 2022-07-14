<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="\css\style.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <title>Event Website</title>
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
  <body>
    
<nav class="navbar navbar-expand-md bg">
  
    <a class="navbar-brand   fs-3 ms-4 text-white fw-bold " href="#">M-TICKETNEW</a>
  
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="btn">
      <ul class="navbar-nav ms-auto">
        
        <li class="nav-item">
          <a href="\logout" class="nav-link mx-4 fs-5 text-white"><i class="bi bi-box-arrow-left"></i> Logout</i></a>
        </li>
      </ul>
    </div>
  </nav>

  <center>
		<h2  style="margin-top:30px; font-style: italic;color: #67995a;">Booking Details</h2>
<table class="table table-striped w-auto" style="margin-top: 10px;height: 280px;">

  <!--Table head-->
  <thead style="text-align: center;">
    <tr>
      <th style="color:#67995a;">Sl No.</th>
     
      <th style="color:#67995a;">Movie Name</th>
      <th style="color:#67995a;">Theater Name</th>
      <th style="color:#67995a;">Seat Type</th>
      <th style="color:#67995a;">No. of Seats</th>
      <th style="color:#67995a;">Date</th>
      <th style="color:#67995a;">Time</th>
      <th style="color:#67995a;">Status</th>
    </tr>
  </thead>
  <!--Table head-->

  <!--Table body-->
  @foreach($result as $value)  
  <tbody style="text-align: center;">
  	 
    <tr class="table" style="background-color: #CBD18F">
      <th scope="row" >{{$value->id}}</th>
      
	<td style="font-weight: 600;">{{$value->name}}</td>
	<td style="font-weight: 600;">{{$value->tname}}</td>
	<td style="font-weight: 600;">{{$value->seat}}</td>
	<td style="font-weight: 600;">{{$value->nseat}}</td>
	<td style="font-weight: 600;">{{$value->dte}}</td>
	<td style="font-weight: 600;">{{$value->time}}</td>		
  <td style="font-weight: 600;"><span class="badge badge-success rounded-pill d-inline" style="background-color:#876a18;">{{$value->status}}</td> 

  <td><a href="/edit/{{$value->id}}" style="text-decoration:none;"><span class="badge badge-success rounded-pill d-inline" style="background-color:#67995a;">Edit Profile</span></a></td>

	<td><a href="/delete/{{$value->id}}" style="text-decoration:none;"><span class="badge badge-success rounded-pill d-inline" style="background-color:red;">Delete</a></td>		
     
    </tr>
   
  </tbody>
  <!--Table body-->
 @endforeach

</table>
</center>
<footer class="bg text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center " style="background-color:#67995a;border-radius:0 0 30% 30% / 0 0 90% 90%;padding-top: 90px;color: white;height: 218px;">
    © 2022 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">M-Ticketnew.com</a>
  </div>
  <!-- Copyright -->
</footer>

</body>


</html>