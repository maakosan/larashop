<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;


class EventController extends Controller
{
    public function index(Request $request)
    {

        $search = $request->input('search');
        if (!empty($search)) {
            $products = Event::all();
            // $products = products::where('name', $search)->orderBy('created_at', 'desc')->get();
        } else {
            $products = Product::all();
            // $products = products::orderBy('created_at', 'desc')->get();
        }
        return view('event.index', compact('products'));
    }
}
