<?php

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

Route::get('/greeting/{name?}', function ($name = null) {

    if ($name) {

        echo 'Hello ' . $name . '!';

    } else {

        echo 'Hello World!';

    }

});
Route::get('/login', function() {
    return view('login');
});
Route::post('/login', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admin'
        && $request->password == 'admin') {
        return view('welcome_admin');
    }

    return view('login_error');
});
Route::get('/ProductDiscount',function(){

        return view('ProductDiscount');

});
Route::post('/ProductDiscount',function (Illuminate\Http\Request $request){
    $description = $request->Description;
    $price=$request->Price;
    $discountPercent=$request->DiscountPercent;
    $discountPrice=$price-$price*$discountPercent/100;
    $discountAmount=$price-$discountPrice;
    if($request->Description && $request->Price && $request->DiscountPercent){

        return view('DisplayDiscount', compact('description','price','discountPercent','discountPrice','discountAmount'));
    }
    echo 'Moi Nhap Lai';
});

