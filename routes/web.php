<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


route::get("/", function () {
    return view('home');
})->name('home');

route::prefix('pages')->group(function (){
    route::get("/about", function () {
        return view('pages/about');
    })->name('about');
    route::get("/contact", function () {
        return view('pages/contact');
    })->name('contact');
    route::get("/cv", function () {
        return view('pages/cv');
    });
});



/************************************************/
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/aboutsss', function () {
//     return view('about');
// })->name('about');
// route::redirect('/about','/test');

// Route::get('/posts', function () {
//     return view('post');
// })->name('mypost');

/***********************************************/

// Route::get('/about/{id?}', function (string $id = null) {    //optional mark by question mark
//     if($id)
//         return "<h1>About ID:". $id ."</h1>";
//     else
//         return "<h1>About ID not found</h1>";
// })->where('id', '[0-9]+');
// })->where('id', '[a-zA-Z]+');

// Route::get('/about/{id?}', function (string $id = null) {    //optional mark by question mark
//     if($id)
//         return "<h1>About ID:". $id ."</h1>";
//     else
//         return "<h1>About ID not found</h1>";
// })->whereIn('id', ['name','email','phone']);


// Route::get('/about/{id?}', function (string $id = null) {    //optional mark by question mark
//     if($id)
//         return "<h1>About ID:". $id ."</h1>";
//     else
//         return "<h1>About ID not found</h1>";
// })->whereAlpha('id');


// Route::get('/about/{id?}', function (string $id = null) {    //optional mark by question mark
//     if($id)
//         return "<h1>About ID:". $id ."</h1>";
//     else
//         return "<h1>About ID not found</h1>";
// })->whereNumber('id');



// Route::view('/about', 'about');      //route name -> file name
