<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
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
Route::get('/',[CompanyController::class, 'index'])->name('index');
Route::group(['middleware' => ['auth']], function () {

    Route::get('/admin',[AdminController::class, 'indek'])->name('admin');
    // Produk
    Route::get('/admin/new/produk', [AdminController::class,'buat'])->name('buat');
    Route::post('/admin/newp/produk', [AdminController::class,'buatpost'])->name('buatpost');
    Route::get('/admin/edit/produk/{id}', [AdminController::class, 'edit'])->name('edit');
    Route::any('/admin/edit/produkp/{id}', [AdminController::class, 'editpost'])->name('editpost');
    Route::get('/admin/new/kategori', [AdminController::class,'buatkategori'])->name('buatkategori');
    Route::post('/admin/new/kategorip', [AdminController::class,'buatkategorip'])->name('buatkategorip');
    Route::post('/admin/delete/{id}', [AdminController::class, 'delete'])->name('delete');
    Route::get('/admin/produk',[AdminController::class, 'produk'])->name('produk');
    // Testimoni
    Route::get('/admin/testimoni',[AdminController::class, 'testimoni'])->name('testimoni');
    Route::get('/admin/new/testimoni',[AdminController::class, 'buattesti'])->name('buattesti');
    Route::get('/admin/edit/testimoni/{id}',[AdminController::class, 'edittesti'])->name('edittesti');
    Route::any('/admin/edit/testimonip/{id}',[AdminController::class, 'edittestip'])->name('edittestip');
    Route::post('/admin/delete/testimoni/{id}',[AdminController::class, 'deletetesti'])->name('deletetesti');
    Route::post('/admin/new/testimonip',[AdminController::class, 'buattestip'])->name('buattestip');
    // FAQ
    Route::get('/admin/faq',[AdminController::class, 'faq'])->name('faq');
    Route::get('/admin/new/faq',[AdminController::class, 'buatfaq'])->name('buatfaq');
    Route::get('/admin/edit/faq/{id}',[AdminController::class, 'editfaq'])->name('editfaq');
    Route::any('/admin/edit/faqp/{id}',[AdminController::class, 'editfaqp'])->name('editfaqp');
    Route::post('/admin/new/faqp',[AdminController::class, 'buatfaqp'])->name('buatfaqp');
    Route::post('/admin/delete/faq/{id}',[AdminController::class, 'deletefaq'])->name('deletefaq');
    // TanyaJawab
    Route::any('/qna', [HomeController::class, 'qnapost'])->name('qnapost');
    Route::get('/admin/qnalist',[AdminController::class, 'qnalist'])->name('qnalist');


});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
