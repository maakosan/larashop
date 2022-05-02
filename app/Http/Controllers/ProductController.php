<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }
    public function show($id)
    {
        $products = Product::find($id);
        return view('product.show', compact('products'));
    }

  public function cate($categoryslug)
  {
    $products = Product::where('categoryslug1','like','%'.$categoryslug.'%')
    ->orWhere('categoryslug2','like', '%' .$categoryslug. '%')
    -> orWhere('categoryslug3', 'like', '%' .$categoryslug. '%')
    ->get();


    return view('product.category',['products' => $products, 'slug' => $categoryslug]);
  }



}
