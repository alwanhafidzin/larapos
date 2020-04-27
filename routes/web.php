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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dika', function () {
//     return "Nama saya Dika";
// });

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/produk', 'ProdukController@index');

// Route::get('/produk/P001', 'ProdukController@informasiProduk');

// Route::get('/input', 'DikaController@input');

// Route::post('/proses', 'DikaController@proses');

// Route::get('/', 'UserController@userData');
// Route::get('/user', 'UserController@userData');
// Route::get('/user/profile/[id]', 'UserController@userProfile');
// Route::get('/user/add', 'UserController@userAdd');
// Route::get('/user/add/[id]/[name]', 'UserController@userAddData');


// Route::get('/', 'PageController@index');

// Route::get('/page/contact', 'PageController@contactPage');
// Route::get('/page/contact/save', 'PageController@contactSaveAction');
// Route::post('/page/contact/save', 'PageController@contactSaveAction');

// Route::get('/page/{id}', 'PageController@singlePage');

Route::get('/', 'PagesController@index');
Route::get('/pages/{id}', 'PagesController@singlePage');

Route::get('/blog/', 'PagesController@blog');
Route::get('/blog/{id}', 'PagesController@singleBlog');

Route::get('/blog/delete/{id}', 'PagesController@singleBlogDelete');

Route::get('/blog/edit/{id}', 'PagesController@singleBlogEdit');
Route::post('/blog/edit/save', 'PagesController@singleBlogEditSave');

Route::get('/blog/add/post', 'PagesController@singleBlogAddPost');
Route::post('/blog/add/post/save', 'PagesController@singleBlogAddSave');

Route::get('/login', 'GuestController@login');
Route::post('/login/action', 'GuestController@loginAction');

Route::get('/dashboard', 'DashboardController@index');
Route::get('/sign-out', 'DashboardController@signOut');

Route::get('/api/dashboard/laporan-pendapatan', 'ApiDashboardController@getLaporanPendapatan');

Route::get('/produk', 'ProdukController@index');
Route::get('/upload/form', 'ProdukController@uploadForm');
Route::post('/upload/action', 'ProdukController@uploadAction');
Route::get('/produk/edit/{id}', 'ProdukController@produkEdit');
Route::post('/produk/edit/save', 'ProdukController@produkEditSave');
Route::get('/produk/detail/{id}', 'ProdukController@produkDetail');
Route::get('/produk/delete/{id}', 'ProdukController@produkDelete');

Route::get('/reporting', 'ReportingController@index');
Route::get('/reporting/preview', 'ReportingController@previewPdf');
Route::get('/reporting/print', 'ReportingController@printPdf');

Route::get('/shopping', 'ShoppingController@ListProduk');
Route::get('/shopping/cart', 'ShoppingController@cart');
Route::get('/shopping/cart/checkout/{notaId}', 'ShoppingController@checkout');

Route::get('/invoice', 'InvoiceController@index');
Route::get('/invoice/preview', 'InvoiceController@previewPdf');
Route::get('/invoice/print', 'InvoiceController@printPdf');