<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


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


Route::get('caut' , function(){
   return view('caut');
});


// // Route::post('caut' , function(Request $request){
// //  $numOne = $request->num1;
// //  $numTwo = $request->num2;
// //  $result = $numOne + $numTwo ;
// //  dd($result);
// // })->name('cal');


Route::post('caut' , function(Request $request){
       $numOne = $request->num1;
       $numTwo = $request->num2;
       $result = $numOne + $numTwo ;
       dd($result);
})->name('cal');



