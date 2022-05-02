<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newspost;


class NewspostController extends Controller
{
    //
    public function index()
    {
        $newsposts = Newspost::all();
        return view('newspost.index',compact('newsposts'));
    }

    public function show($id)
    {
        $newspost = Newspost::find($id);
        return view('newspost.show', compact('newspost'));
    }


}
