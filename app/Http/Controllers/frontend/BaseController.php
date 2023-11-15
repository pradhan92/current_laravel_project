<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    //making global variable with constructor variables
 public function __construct(){
    $categories = Category::all();
    $size = Size::all();
    $brands = Brand::all();
    $colors = Color::all();
    $products = Product::all();

    View::share([
        'categories' => $categories,
        'sizes' => $size,
        'brands' => $brands,
        'colors' => $colors,
        'products'=>$products
    ]);
 }
}
