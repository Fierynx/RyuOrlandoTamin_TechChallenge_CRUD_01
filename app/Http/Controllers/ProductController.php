<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function view(){
        $products = Product::paginate(10);
        return view('dashboard', compact('products'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required','string'],
            'quantity' => ['required','numeric'],
            'price' => ['required','numeric'] 
        ]);

        Product::create($request->all());
        return redirect('/products');
    }

    public function edit($id){
        $product = Product::find($id);
        if(!$product){
            abort(404);
        }
        return  view('edit', compact('product'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => ['required','string'],
            'quantity' => ['required','numeric'],
            'price' => ['required','numeric'] 
        ]);
        
        Product::find($id)->update($request->all());

        return redirect('/products');
    }

    public function delete($id){
        $product = Product::find($id);
        if(!$product){
            abort(404);
        }
        $product->delete();
        return redirect('/products');
    }
}
