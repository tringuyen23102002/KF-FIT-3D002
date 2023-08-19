<?php

use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function (){
    return view('test');
});

Route::get('Home', function (){
    echo 'Home';
});
//user use Illuminate\Http\Request;
Route::get('product', function (Request $request){
    echo 'Product List'. $request->query('name');
});


Route::get('user/detail/{id}/{name?}', function ($id, $name = ''){
    return 'User detail : ' .$id. $name;
});

Route::get('master', function(){
    return view('client.layout.master');
});

// Route::get('product', function(){
//     return view('client.pages.product.list');
// });
// Route::get('blog', function(){
//     return view('client.pages.blog.detail');
// });



