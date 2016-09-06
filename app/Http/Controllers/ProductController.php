<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\products;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
    	$products = \App\Post::all();

    	return view('products.index', compact('products'));
    }
}
