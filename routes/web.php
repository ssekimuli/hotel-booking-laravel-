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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

////auth client routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/books', 'HomeController@books')->name('books');
Route::get('/allbooks', 'HomeController@allbooks')->name('allbooks');
Route::get('/myprofile', 'HomeController@myprofile')->name('myprofile');
Route::post('/roomcart', 'bookingController@roomcart')->name('roomcart');
Route::get('/myroom', 'bookingController@myroom')->name('myroom');
Route::delete('/delete/{id}', 'bookingController@cartdelete');
Route::get('/logout', 'bookingController@logout')->name('logout');
///END

//open routes 
Route::get('/rooms', 'bookingController@room');
Route::get('/service', 'bookingController@service');
Route::get('/profile', 'bookingController@profile');
Route::get('/contact', 'bookingController@contactus');
Route::get('/aboutus', 'bookingController@aboutus');
//END

// payment routes
Route::get('/cart', 'bookingController@cart')->name('cart');//checkout fom
Route::post('/pay', 'bookingController@pay')->name('pay');
Route::get('/verify', 'bookingController@verify')->name('verify');
//end

///administration
Route::get('/clients', 'bookingController@clients');
Route::get('/roles', 'bookingController@role');
Route::get('/amenities', 'bookingController@amenities');
Route::get('/edit/{id}', 'bookingController@edit');
Route::get('/category', 'bookingController@category');
Route::get('/package', 'bookingController@package');
Route::get('/addroom', 'bookingController@addroom');
Route::get('/available', 'bookingController@available');
Route::get('/today', 'bookingController@today');
Route::get('/tomorrow', 'bookingController@tomorrow');
Route::get('/yesterday', 'bookingController@yesterday');
Route::get('/pending', 'bookingController@pending');
Route::get('/week', 'bookingController@week');
Route::get('/month', 'bookingController@month');
Route::get('/year', 'bookingController@year');
Route::get('/admindash', 'bookingController@admindash');
Route::POST('/addcategory', 'bookpanelController@addcategory');
Route::POST('/addrole', 'bookpanelController@addrole');
Route::POST('/addpackage', 'bookpanelController@addpackage');
Route::POST('/add_amenty', 'bookpanelController@add_amenties');
Route::post('/addrooms', 'bookpanelController@addrooms');
Route::post('/editroom/{RMid}', 'bookpanelController@editroom');
Route::delete('/del/{id}', 'bookpanelController@del');


//END


