<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(Request $request){
        $products = Product::query()->where('count','>',0);

        if($request->get('query')){
            $query = $request->get('query');

            $products = $products->where('name','LIKE',"%$query%");
        }

        $products = $products->paginate(6)->withQueryString();

        return view('home', [
            'products' => $products
        ]);
    }

    public function admin(Request $request){
        $products = Product::query()->where('count','>',0)->get();

        $PopularProducts = Product::query()->orderBy('order_count','desc')->limit(6)->get();

        $usersCount = User::query()->count();
        $productsCount = Product::query()->count();
        $ordersCount = Product::query()->sum('order_count');

        return view('admin', [
            'products' => $products,
            'PopularProducts' => $PopularProducts,
            'counts' => [$usersCount,$productsCount,$ordersCount]
        ]);
    }

    public function signup(){
        return view('signup');
    }

    public function signin(){
        return view('signin');
    }
}
