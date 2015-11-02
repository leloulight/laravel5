<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('welcom-lar', 'WelcomeController@getview');

Route::get('myself', function () {
	return view('myself');
});

Route::get('call-view', function () {
	$hoten = "Nguyen Hoang Minh Tuan";
	$tuoi = "22";
	return view('view', compact('hoten', 'tuoi'));
});

Route::get('silver-thunder', ['as' => 'tiachopbac', function (){
	$hoten = "Nguyen Hoang Minh Tuan";
	$tuoi = "22";
	return view('myself', compact('hoten', 'tuoi'));
}]);

Route::group(['prefix' => 'thuc-don'], function(){
	Route::get('food', function () {
		echo 'Here is site sell food';
	});Route::get('drink', function () {
		echo 'Here is site sell drink';
	});
});

Route::get('thongtin/{hoten}/{tuoi}', function($hoten, $tuoi) {
	return view('view', compact('hoten', 'tuoi'));
});

Route::get('user/{name?}', function ($name = 'tuan') {
    return $name;
})
->where('name', '[A-Za-z]+');

Route::get('redirect/urlto', function() {
	$url = URL::to('thongtin', ['Nguyen Hoang Minh Tuan', '22']);
	return view('myself', compact('url'));
});

Route::get('table/create', function() {
	if (!Schema::hasTable('thanhvien'))
	{
	    Schema::create('thanhvien', function($table) {
		$table->increments('u_id');
		$table->string('u_ho_ten', 100);
		$table->integer('u_sodienthoai');
		$table->dateTime('created_at')->nullable();
		}); 	
	}	
});

Route::get('table/drop', function() {
	Schema::dropIfExists('member');
});

Route::get('table/change', function() {
	Schema::table('thanhvien', function($table) {
		$table->string('u_ho_ten', 150)->change();
	}); 
});

Route::get('products/get-all', function() {
	$data = DB::table('products')->count();
	echo '<pre>';
	print_r($data);
	echo '</pre>';
});

$router->get('get/products', function(App\products $products) {
	$products::where('price', '=', 500000)->delete();
});