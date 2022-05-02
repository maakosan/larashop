<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Socialite;
use App\Newspost;
use App\Product;


class TopController extends Controller
{
    //
    public function index()
    {
        $newsposts = Newspost::all();
        $products = Product::latest('updated_at')->get();
        return view('index', compact('newsposts','products'));
    }

}
