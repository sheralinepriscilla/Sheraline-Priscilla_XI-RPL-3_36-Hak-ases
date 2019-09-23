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
    //return view('welcome');
    echo "selamat datang shier";
});

Route::get('/satu', function () {
    //return view('welcome');
    echo "one";
});

Route::get('/dua', function () {
    //return view('welcome');
    echo "two";
});

Route::get('/tiga', function () {
    //return view('welcome');
    echo "three";
});

Route::get('/empat', function () {
    //return view('welcome');
    echo "four";
});

Route::get('/lima', function () {
    //return view('welcome');
    echo "five";
});

Route::get('/enam', function () {
    //return view('welcome');
    echo "six";
});

Route::get('/tujuh', function () {
    //return view('welcome');
    echo "seven";
});

Route::get('/delapan', function () {
    //return view('welcome');
    echo "eight";
});

Route::get('/sembilan', function () {
    //return view('welcome');
    echo "nine";
});

Route::get('/sepuluh', function () {
    //return view('welcome');
    echo "ten";
});

//2, manggil view
Route::get('/sepuluh', function () {
    return view('telo');
    //lokasi view 
}); 

Route::get('/nemplate', function () {
    return view('template');
    //lokasi view
});

//3. MANGGIL CONTROLLER
Route::get('/usang', 'UsangController@index');
/* file controllernya namanya usangController
   nama url usang 
   index nama functionnya 
*/
Route::get('/jeruk', 'UsangController@godog');

Route::get('/terong', 'Kentang@sandal');

Route::get('/nemplate', function () {
    return view('template');
    //lokasi view
});

//tambahkan ini pada routemu 
//Route::get('/', 'Kontak@index');

Route::resource('kontak', 'Kontak');

Route::resource('kabupaten', 'Kabupaten');

Route::get('/', function(){
    return view('index');
});

Route::resource ('satpam', 'Satpam');

Route::resource ('/barang', 'Barang');

Route::resource ('/pembelian', 'Pembelian');

Route::resource('/barangg', 'Barangg');

Route::resource('/penjualann', 'Penjualann');

Route::resource('/pembeliann', 'Pembeliann');

Route::get('/',function(){
    return view('index');
});

Route::get('login', 'Login@index');
Route::post('/login/cek','Login@cek');
Route::get('/logout','Login@logout');
Route::get('/','Dashboard@index');

Route::resource('/kabupaten', 'Kabupaten');
Route::resource('/penjualan', 'Penjualan');
Route::resource('/barang', 'Barang');
Route::resource('/pembelian', 'Pembelian');