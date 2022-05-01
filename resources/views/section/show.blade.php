@extends('section.LayOut.style')

@section('head')
  <div class="container">
      <div class="row">
          <div class="col-md-6 offset-3">
              <div class="card  mt-4">
                  <div class="card-header text-center ">
                      USER INFORMATION
                  </div>
                  <div class="card-body">
                      <div class="m-3">
                          <label for="">Name : {{ $userInfo['name'] }}</label>
                      </div>

                      <div class="m-3">
                          <label for="">Email : {{ $userInfo['email'] }}</label>
                      </div>

                      <div class="m-3">
                          <label for="">Phone : {{ $userInfo['phone'] }}</label>
                      </div>

                      <div class="m-3">
                          <label for="">Address : {{ $userInfo['address'] }}</label>
                      </div>

                  </div>

              </div>
          </div>
      </div>
  </div>
@endsection