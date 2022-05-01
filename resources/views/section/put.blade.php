@extends('section.LayOut.style')

@section('head')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="">
                       @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                         {{Session::get('success')}}
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        @if(Session::has('error'))
                        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                         {{Session::get('error')}}
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                      

                    <form action="{{ route('saveSession')}}" method="POST">
                        @csrf
                        <div class="m-2">
                            <label for="">Name</label>
                            <input type="text" class="form-control" placeholder="Enter Your Name" name="name">
                        </div>

                        <div class="m-2">
                            <label for="">Email</label>
                            <input type="email" class="form-control" placeholder="Enter Your Email" name="email">
                        </div>

                        <div class="m-2">
                            <label for="">Phone Number</label>
                            <input type="enumber" class="form-control" placeholder="Enter Your Phone Number" name="phone">
                        </div>

                        <div class="m-2">
                            <label for="">Address</label>
                            <input type="text" class="form-control" placeholder="Enter Your Address" name="address">
                        </div>

                        <div class="m-2">
                            <input type="submit" value="Save" class="btn btn-danger float-end">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection