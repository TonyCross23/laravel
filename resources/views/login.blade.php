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
<body class="bg-info">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3 mt-5">
                <div class="card">
                    <div class="card-header text-center fs-3">
                        LogIn Page
                   <form action="{{ url ('loginProcess')}}" method="POST">
                       @csrf
                   </div>
                    <div class="card-body">

                      <!-- session message start  -->
                        @if(Session::has('loginSuccess'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                         {{Session::get('loginSuccess')}}
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        @if(Session::has('loginFail'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                         {{Session::get('loginFail')}}
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                      <!-- session message end  -->
                        <div class="mb-3 px-5">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter Your Enamil">
                        </div>

                        <div class="mb-3 px-5">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
                        </div>
                        <div class="float-end px-5 mb-3">
                           <input type="submit" value="LogIn" class="btn bg-dark text-white ">
                        </div>
                    </div>
                   
                   </form>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>