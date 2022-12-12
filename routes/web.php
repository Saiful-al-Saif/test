<?php

use App\Http\Controllers\DepermentController;
use App\Http\Controllers\MamurjorController;
use App\Http\Controllers\Schoolcontroler;
use App\Http\Controllers\ValidationControlller;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the `RouteServiceProvider` within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//name Route

// Route:: get('mamurjor',function(){
//     return 'Saiful Islam';
// })->name('saiful islam');s

//Group Route

Route::group(['prefix'=>'home'],function(){

       Route::get('create',function(){

        return 'home create';

       });

       Route::get('store',function(){

        return 'homr Store';
       });

});


//Route:: get('mamurjor',[Schoolcontroler::class,'index'])->name('one');

//Route::get('/home/{name}/{age}',[Schoolcontroler::class,' mamurjor']);

//Route:: get('mamurjor',[Schoolcontroler::class,'index'])->where('name','[A-Za-z]+')->name('saiful Isalm');

//Resource Route..............

//Route::resource('Student',DepermentController::class);

//Resource By Basic Route..........

// Route::get('student',[DepermentController::class,'index'])->name('student.index');
// Route::get('student/create',[DepermentController::class,'create'])->name('student.create');
// Route::post('student/store',[DepermentController::class,'store'])->name('student.store');
// Route::get('student/{id}',[DepermentController::class,'show'])->name('student.show');
// Route::get('student/{id}/{edit}',[DepermentController::class,'edit'])->name('student.edit');
// Route::put('student/{id}/{update}',[DepermentController::class,'update'])->name('student.update');
// Route::delete('student/destro/{id}',[DepermentController::class,'destroy'])->name('student.destory');


// কন্ট্রোলার এর মাধ্যমে ভিউ থেকে ডাটা পাস করার নিয়ম

//ক্লাস ৭ ভিউ

Route::get('view',[ViewController::class,'index']);

//======================================================


Route::resource('validation',ValidationControlller::class);










