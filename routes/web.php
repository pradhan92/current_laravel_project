<?php

//use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\backend\ColorController;
use App\Http\Controllers\backend\CompanyController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\UsersController;
use App\Http\Controllers\Backend\productController;
use App\Http\Controllers\backend\SizeController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\PageController;
use App\Http\Controllers\ProfileController;
//use Illuminate\Http\Request;
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

// frontend routes
Route::get('/', [PageController::class,'home']);
Route::get('/shop', [PageController::class,'shop']);
Route::get('/about', [PageController::class,'about']);
Route::get('/categoryList', [PageController::class,'categoryList']);
Route::get('/cat/{slug}',[PageController::class,'category']);
Route::get('/contact', [PageController::class,'contact']);
Route::get('/blog', [PageController::class,'blog']);
Route::get('/singleProduct', [PageController::class,'singleProduct']);
Route::get('/addToCart', [PageController::class,'addToCart']);
Route::get('/checkout', [PageController::class,'checkout']);


//simple route
// Route::get('/', function () {
//     return view('frontend.home');
// });
// Route::get('/shop', function () {
//     return view('frontend.shop');
// });
// Route::get('/about', function () {
//     return view('frontend.about');
// });
// Route::get('/category-list', function () {
//     return view('frontend.categoryList');
// });
// Route::get('/contact', function () {
//     return view('frontend.contact');
// });
// Route::get('/blog', function () {
//     return view('frontend.blog');
// });
//auth
// Route::post('register',[AuthController::class,'register']);
// Route::post('login',[AuthController::class,'login']);
// Route::post('logout',[AuthController::class,'logout']);
// Route::post('changePassword',[AuthController::class,'changePassword']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// backend route

Route::get('/admin/login', function () {
    return view('admin.auth.login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//admin dashboard
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

Route::middleware('auth:admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/category',CategoryController::class);
    Route::resource('/product', productController::class);
    Route::resource('/company',CompanyController::class);
    Route::resource('/banner',BannerController::class);
    Route::resource('/brand',BrandController::class);
    Route::resource('/users',UsersController::class);
    Route::resource('/order',OrderController::class);
    Route::resource('/product',productController::class);
    Route::resource('/color',ColorController::class);
    Route::resource('/size',SizeController::class);
});

require __DIR__.'/adminauth.php';

//host
//php artisan serve --host 192.168.3.2
