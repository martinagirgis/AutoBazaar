<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\models\Category;
use App\models\Product;
use App\models\ProfileMaintenance;
use App\models\SellType;
use App\models\Subscription;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {   
        $products = Product::inRandomOrder()->limit(10)->get();
        $categories = Category::get();
        $autoShops = ProfileMaintenance::inRandomOrder()->limit(10)->get();
        $subscriptions = Subscription::inRandomOrder()->limit(3)->get();
        return view('site.index',compact('products', 'categories', 'autoShops', 'subscriptions'));
    }

    public function category($id)
    {   
        $products = Product::where('category_id',$id)->inRandomOrder()->limit(10)->get();
        $allProducts = Product::where('category_id',$id)->get();
        $sellTypes = SellType::where('category_id',$id)->get();
        return view('site.subcategory',compact('products', 'allProducts', 'sellTypes'));
    }

    public function product($id)
    {   
        $product = Product::find($id);
        return view('site.productDetails',compact('product'));
    }
}
