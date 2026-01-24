<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Index() {
        $title = "Product List";
        return view('product.index', ['title' => $title, 
        "products"=>[
            ["id"=>1, "name"=>"Iphone", "price"=>100],
            ["id"=>2, "name"=>"Oppo", "price"=>200],
            ["id"=>3, "name"=>"Samsung", "price"=>300],
        ]]);
    }

    public function getDetail(?string $id = "123") {
        return view('product.detail', ['id' => $id]);
    }

    public function create() {
        return view('product.add');
    }

    public function store(Request $request) {
        // $productName = $request->input('product_name');
        // $productPrice = $request->input('product_price');
        // return response()->json([
        //     'product_name' => $productName,
        //     'product_price' => $productPrice
        // ]);
        return $request->all();
    }
}
