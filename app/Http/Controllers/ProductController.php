<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(3);
        return view('product.index', [
            'products' => $products,
        ]);
        // $data = Course::where('name', 'like', '%'. $search . '%')
        // ->paginate(2);
        // $data->appends(['q' => $search]);

        // return view('course.index', [
        //     'data' => $data,
        //     'search' => $search,
        // ]);
    }
    public function product_index()
    {
        $products = Product::paginate(3);

        return view('product.product_index', [
            'products' => $products,
        ]);
    }

    public function create()
    {
        $categories = Category::get();
        return view('product.create', [
            'categories' => $categories,
        ]);
    }

    public function store(StoreRequest $request)
    {
        Product::create($request->validated());
        return redirect()->route('index')->with('success', 'Product added successfully.');
    }

    public function edit(Product $product)
    {
        $categories = Category::get();
        return view('product.edit', [
            'product' => $product,
            'categories' => $categories,
        ]);
    }

    public function update(StoreRequest $request, Product $product)
    {
        // Cập nhật sản phẩm
        $product->update($request->validated());
    
        // Chuyển hướng về trang danh sách sản phẩm với thông báo thành công
        return redirect()->route('product_index')->with('success', 'Product updated successfully.');
    }

    public function product_detail(Product $product)
    {
        return view('product.product_detail', [
            'product' => $product,
        ]);
    }
    
}
