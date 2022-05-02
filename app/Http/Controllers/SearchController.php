<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Socialite;
use App\Product;


class SearchController extends Controller
// {
// public function index(Request $request)
// {
// $keywords = $request->input('keyword');
// if(!empty($keywords)) {
//     foreach ($keywords as $keyword) {
//         $productmatchs = Product::where('name','like','%'.$keyword.'%')->orWhere('description', 'like', '%' . $keyword . '%')->get();
//     }
//       return view('search', ['productmatchs' => $productmatchs, 'keywords' => $keywords]);
// }
// }
// }

{
  public function index(Request $request)
  {
  $searchs = $request->input('search');
  $matchs = Product::where('name','like','%'.$searchs.'%')
  ->orWhere('description','like','%'.$searchs.'%')
  ->get();
  return view('search',['matchs' => $matchs, 'searchs' => $searchs]);
  }
}
