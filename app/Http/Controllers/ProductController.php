<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\CheckTimeAccess;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller 
{

    // public static function middleware() {
    //     return [CheckTimeAccess::class];
    // }

    public function index() {
        $title = "Product List";
        
        $products = Product::with('category')->get();
        
        return view('admin.product.index', [
            'title' => $title,
            'products' => $products
        ]);
    }

    public function getDetail(?string $id = "123") {
        return view('admin.product.detail', ['id' => $id, 'title' => 'Product Detail']);
    }

    public function create() {
        $categories = Category::where('is_active', true)
                             ->where('is_delete', false)
                             ->get();
        return view('admin.product.add', [
            'title' => 'Add New Product',
            'categories' => $categories
        ]);
    }

    public function store(Request $request) {
        // Validate input
        $request->validate([
            'sku' => 'required|unique:products,sku',
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'sale_price' => 'nullable|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'boolean'
        ]);

        $productData = [
            'sku' => $request->input('sku'),
            'category_id' => $request->input('category_id'),
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'sale_price' => $request->input('sale_price'),
            'stock' => $request->input('stock'),
            'description' => $request->input('description'),
            'is_active' => $request->has('is_active') ? 1 : 0,
            'is_delete' => false
        ];

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $productData['image'] = $imagePath;
        }

        Product::create($productData);
        
        return redirect('/admin/product')->with('success', 'Sản phẩm đã được thêm thành công!');
    }

    public function editView(string $id) {
        $product = Product::find($id);
        $categories = Category::where('is_active', true)
                             ->where('is_delete', false)
                             ->get();
        return view('admin.product.edit', [
            'product' => $product, 
            'title' => 'Edit Product',
            'categories' => $categories
        ]);
    }

    public function edit(Request $request, string $id) {
        $product = Product::findOrFail($id);

        // Validate input
        $request->validate([
            'sku' => 'required|unique:products,sku,' . $id,
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'sale_price' => 'nullable|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'boolean'
        ]);

        // Update product data
        $product->sku = $request->input('sku');
        $product->category_id = $request->input('category_id');
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->sale_price = $request->input('sale_price');
        $product->stock = $request->input('stock');
        $product->description = $request->input('description');
        $product->is_active = $request->has('is_active') ? 1 : 0;

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
        }

        $product->save();

        return redirect('/admin/product')->with('success', 'Sản phẩm đã được cập nhật thành công!');
    }

    public function delete(string $id) {
        Product::destroy($id);
        return redirect('/admin/product');
    }
}
