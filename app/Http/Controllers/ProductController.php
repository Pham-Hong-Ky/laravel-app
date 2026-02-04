<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\CheckTimeAccess;
use App\Models\Product;
use Illuminate\Routing\Controllers\HasMiddleware;

class ProductController extends Controller 
{

    // public static function middleware() {
    //     return [CheckTimeAccess::class];
    // }

    public function Index() {
        $title = "Product List";
        
        $products = Product::all();
        
        return view('admin.product.index', [
            'title' => $title,
            'products' => $products
        ]);
    }

    public function getDetail(?string $id = "123") {
        return view('admin.product.detail', ['id' => $id, 'title' => 'Product Detail']);
    }

    public function create() {
        return view('admin.product.add', ['title' => 'Add New Product']);
    }

    public function store(Request $request) {
        $name = $request->input('product_name');
        $price = $request->input('product_price');
        $stock = $request->input('product_stock');
        Product::create([
            'name' => $name,
            'price' => $price,
            'stock' => $stock,
        ]);
        return redirect('/product');
    }

    public function editView(string $id) {
        $product = Product::find($id);
        return view('admin.product.edit', ['product' => $product, 'title' => 'Edit Product']);
    }

    public function edit(Request $request, string $id) {
        $product = Product::find($id);

        $product->name = $request->input('product_name');
        $product->price = $request->input('product_price');
        $product->stock = $request->input('product_stock');
        
        $product->save();

        return redirect('/product');
    }

    public function delete(string $id) {
        Product::destroy($id);
        return redirect('/product');
    }
}
