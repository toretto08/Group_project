<!DOCTYPE html>
<html>
    <!--Thapa Sanjay -->
    <!--Registration Form-->
<head>
    <title>Registration</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Registration Form
    </div>
    <div class="card-body">
      <form name="main-form" id="main-form" method="post" action="{{url('store-form')}}">
       @csrf
        <div class="form-group">
          <label for="exampleFirstName">First Name</label>
          <input type="text" id="fName" name="fName" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleLastName">Last Name</label>
          <input type="text" id="lName" name="lName" class="form-control" required="">
        </div>
        <div class="form-group">
            <p>Choose an event</p>
            <label for="course">Course</label>
            <input type="radio" id="course" name="event" value="course" checked>
            <label for="service">Service</label>
            <input type="radio" id="service" name="event" value="service">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>
<!--Thapa Sanjay -->
