<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;



Route::get('/', function () {
    return view('welcome');
});


// Route::get('hel',function(){
//     dd("hello");
// });

// Route::get('tea' , function(){
//     dd("Return Page");
// });

// Route::get('pat/dar' , function(){
//     dd("he he");
// });

// Route::get('age/{number}' , function($age){
//     dd($age);
// });

// Route::get('info/{name}/{age}/{role}' , function($name , $age , $role){
//         dd($name . $age . $role);
// });

// Route::get('home/{name}' , function($name) {
//     return $name;
// });

// Route::get('home' , function(){
//     return view('home');
// });

// Route::get('contant' , function(){
//     return view ('user.contant');
// });

// Route::get ('list' , function(){
//     return view ('pad.ui.list');
// });



//GET Method 

// Route::get('userInput' , function(){
//     return view ('userInput');
// });


// Route::post('calculate' , function(){
//     dd('claculating...');
// })->name('cal');


// Route::get('caut' , function(){
//    return view('caut');
// });


// // Route::post('caut' , function(Request $request){
// //  $numOne = $request->num1;
// //  $numTwo = $request->num2;
// //  $result = $numOne + $numTwo ;
// //  dd($result);
// // })->name('cal');


// Route::post('caut' , function(Request $request){
//        $numOne = $request->num1;
//        $numTwo = $request->num2;
//        $result = $numOne + $numTwo ;
//        return view ('caut' , compact('result'));
// })->name('cal');

// Route::get('intl', function(){
//    return view('intl');
// });



// Route::get('user' , function(){
//         return view('UserInput2');
// });

// Route::post('user' , function(Request $request){
//         $numberOne = $request -> num1;
//         $numberTwo = $request -> num2;

//         $result = $numberOne + $numberTwo;

//         // return redirect('user')->with(["result" => $result]);
//         // return view ('UserInput2' , compact('result'));  //store session tempo;
//         return back()->with(["result" => $result]); //client to server
// })->name('dal');



//login Page code 

Route::get('login' , function(){
    return view ('login');
});

Route::post('loginProcess' , function(Request $request){
       $email = 'admin@gmail.com';
       $password = 'admin123';

     $UserEmail = $request -> email;
     $UserPassword = $request -> password;

     if($email == $UserEmail && $password == $UserPassword){
         return back()->with(['loginSuccess' => 'Account Login Success!']);
     }else{
         return back()->with(['loginFail' => 'Account Login Fail! Try Again...']);
     }
})->name('UserLogin');




//page
Route::get('pageOne' , function(){
    return view ('pageOne');
});

Route::get('pageTwo' , function(){
    return view ('pageTwo');
});

Route::get('pageThree' , function(){
    return view ('pageThree');
});

// session

Route::get('sessionPut' , function(){
    return view ('section.put');
})->name('put');

Route::get('sessionShow' , function(){
    $data = Session::get('USER_DATA');

   return view('section.show')->with(['userInfo' => $data]);
})->name('show');




Route::post('saveSession' , function(Request $request){


        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,

        ];

        if($data['name'] != null && $data['email'] != null && $data != null && $data['phone'] != null && $data['address'] != null){
                
            Session::put('USER_DATA' ,$data);
            return back()->with(['success' => 'User Information Saved.....']);
        }else{
            return back()->with(['error' => 'Please fill all field....']);
        }
        
    // $data = new stdClass();
    // $data->name = $request->name;
    // $data->email = $request->email;
    // $data->phone = $request->phone;
    // $data->address = $request->address;
    // dd($data);
})->name('saveSession');