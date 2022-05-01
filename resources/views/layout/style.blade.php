<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body class="">
      <div class="container">
          <div class="row">
              <div class="col-md-6 offset-3 mt-3 text-center">
                 <a href="{{url ('pageOne')}}"><button class="btn btn-outline-danger mx-3">Home</button></a>
                 <a href="{{url ('pageTwo')}}"><button class="btn btn-outline-warning mx-3">About</button></a>
                 <a href="{{url ('pageThree')}}"><button class="btn btn-outline-primary mx-3">Service</button></a>
              </div>
          </div>
           <!-- Not same -->
          @yield('content')
          <!-- Not same -->
      </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>