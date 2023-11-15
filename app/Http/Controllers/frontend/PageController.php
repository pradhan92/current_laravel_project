<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class PageController extends BaseController
{
    public function home(){
       // $categories=Category::all();
        return view("frontend.home");
    }
     public function shop(){
        return view("frontend.shop");
    }
 public function categoryList(){
        return view("frontend.categoryList");
    }
   public function about(){
        return view("frontend.about");
    }   public function contact(){
        return view("frontend.contact");
    }
     public function blog(){
        return view("frontend.blog");
    }
    public function singleProduct(){
        return view("frontend.single-product");
    }
    public function addToCart(){
        return view("frontend.cartList");
    }
    public function checkout(){
        return view("frontend.checkout");
    }
    public function category(){
        return view("frontend.shop");
    }

    public function details(){
        return view("frontend.single-product");
    }
}
