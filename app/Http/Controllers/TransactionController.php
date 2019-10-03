<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('transaction.index', compact(['product']));
    }

    public function show()
    {
        $product = Product::all();
        return response()->json($product);
    }

    public function showid($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }
}
