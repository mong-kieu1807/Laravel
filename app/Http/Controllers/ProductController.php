<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $ViewData = [];
        $ViewData['title'] = "Products - Online Shop";
        $ViewData['subtitle'] = "Danh sách sản phẩm";
        $ViewData['products'] = Product::all();
        // Truyền biến $products sang view 'products.index'
        return view('products.index')->with("ViewData", $ViewData);
    }

    public function show($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData["title"] = $product -> getName()." - Online Store";
        $viewData["subtitle"] =  $product -> getName()." - Thông tin sản phẩm.";
        $viewData["product"] = $product;
        return view('products.show')->with("viewData", $viewData);
    }
}
