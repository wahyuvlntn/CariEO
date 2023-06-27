<?php

use App\Http\Controllers\PostsController;
use App\Models\Pesanan;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\Posts;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\PernikahanController;
use App\Http\Controllers\UlangtahunController;
use App\Http\Controllers\FarewellController;
use App\Http\Controllers\KonserController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\SellerController;

use App\Http\Controllers\UserController;
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
    return view('home',[
        "title" => "home"
    ]);
});
Route::get('/about', function () {
    return view('about',[
        "title" => "about",
        "name" => "Wahyu Valentino",
        "email" => "wahyuvalentino54@gmail.com"
    ]);
});
Route::get('/blog', [PostsController::class, 'index']);

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);
Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);
Route::get('/dashboard', [DashboardController::class,'index'])->middleware('auth');
Route::get('/dashboard',function(){
    return view('dashboard.index');
})->middleware('auth');
Route::get('/dashboardUser',function(){
    return view('dashboardUser.index');
})->middleware('auth');

Route::resource('/dashboard/produk',DashboardProductController::class)->middleware('auth');
Route::get('/dashboard/profile', [SellerController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/profile', [SellerController::class, 'update'])->middleware('auth');
Route::get('/dashboardUser/profile', [UserController::class, 'edit'])->middleware('auth');
Route::put('/dashboardUser/profile', [UserController::class, 'update'])->middleware('auth');
Route::get('/dashboard', [SellerController::class, 'view'])->middleware('auth');
Route::get('/dashboard/pesanan',function(){
    $userId = auth()->user()->id;

    $pesanans = Pesanan::where('id_seller', $userId)->get();
    
    // Mengambil id_produk dari setiap pesanan
    $produkIds = $pesanans->pluck('id_produk')->toArray();

    // Mengambil data produk berdasarkan id_produk
    $produks = Produk::whereIn('id_produk', $produkIds)->get();
    return view('dashboard.pesanan.index',[
        'pesanans' => $pesanans,
        'produks' => $produks
    ]);
})->middleware('auth');
//  Route::get('/dashboardUser/riwayat', [RiwayatController::class, 'index'])->middleware('auth');
//  Route::get('/dashboardUser/riwayat', [RiwayatController::class, 'edit'])->middleware('auth');
//  Route::put('/dashboardUser/riwayat', [RiwayatController::class, 'update'])->middleware('auth');
// Route::get('/dashboardUser/riwayat',function(){
//     $userId = auth()->user()->id;

//     $pesanans = Pesanan::where('id_user', $userId)->get();
    
//     // Mengambil id_produk dari setiap pesanan
//     $produkIds = $pesanans->pluck('id_produk')->toArray();

//     // Mengambil data produk berdasarkan id_produk
//     $produks = Produk::whereIn('id_produk', $produkIds)->get();
//     return view('dashboardUser.riwayat.index',[
//         'pesanans' => $pesanans,
//         'produks' => $produks,
//         'seller' => User::all()
//     ]);
// })->middleware('auth');

//TAMBAHAN DARI TEN
// Route::get('/dashboardUser/pernikahan',function(){
//     return view('dashboardUser.pernikahan.index',[
//         'produk'=>Produk::where('id_kategori',1)->get(),
//         'seller'=>User::all()        
//     ]);
// })->middleware('auth');

Route::resource('/dashboardUser/pernikahan', PernikahanController::class)->middleware('auth');
Route::resource('/dashboardUser/ulangtahun', UlangtahunController::class)->middleware('auth');
Route::resource('/dashboardUser/farewell', FarewellController::class)->middleware('auth');
Route::resource('/dashboardUser/konser', KonserController::class)->middleware('auth');

Route::get('/dashboardUser/riwayat',function(){
    $userId = auth()->user()->id;

        $pesanans = Pesanan::where('id_user', $userId)->get();
        
        // Mengambil id_produk dari setiap pesanan
        $produkIds = $pesanans->pluck('id_produk')->toArray();

        // Mengambil data produk berdasarkan id_produk
        $produks = Produk::whereIn('id_produk', $produkIds)->get();
        return view('dashboardUser.riwayat.index',[
            'pesanans' => $pesanans,
            'produks' => $produks,
            'seller' => User::all()
        ]);
})->middleware('auth');
Route::get('/dashboard/riwayat', [RiwayatController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/riwayat/', [RiwayatController::class, 'update'])->middleware('auth');
// Route::resource('/dashboardUser/riwayat', RiwayatController::class)->middleware('auth');
// Route::put('/dashboardUser/riwayat/{id}', [RiwayatController::class, 'update'])->name('dashboardUser.riwayat.update');
//Route::resource('/dashboard/profile',UserController::class)->middleware('auth');
