<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
    //
    public function home()
    {
        return view('home');
    }

    public function product()
    {
        $products = DB::table('products')->get();

        return view('product', compact('products'));
    }

    public function inputp(Request $request)
    {
        $name = $request->name;
        $price = $request->price;
        $description = $request->description;
        $stock = $request->stock;
        $img_path = time() . '.' . $request->img_path->extension();
        $request->img_path->move(public_path('assets/uploaded'), $img_path);

        // $img_path = $request->file('img_path');
        // $request->img_path->move(public_path('assets/uploaded'), $img_path);

        $isTrue = DB::table('products')->insert([
            'name' => $name,
            'price' => $price,
            'description' => $description,
            'stock' => $stock,
            'img_path' => $img_path,
        ]);

        if ($isTrue) {
            return redirect('product');
        }

        return redirect('prodinput');
    }

    public function ordernow ($id)
    {
        // $data = DB::table('orders')->join('products', 'products.id', '=', 'orders.product_id')->select('products.name', 'products.price', 'products.description', 'products.stock')->where('product_id', $id)->get();

        // $product_id = $request->id;
        // $buyer_name = $request->buyer_name;
        // $buyer_contact = $request->buyer_contact;
        // $amount = $request->amount;

        // DB::table('orders')->insert([
        //     'product_id' => $product_id,
        //     'buyer_name' => $buyer_name,
        //     'buyer_contact' => $buyer_contact,
        //     'amount' => $amount,
        // ]);

        // $quantity = $products['quantity'] - $amount;

        // DB::table('products')->where('id', $request->$product_id)->update([
        //     'quantity' => $request->quantity,
        // ]);

        $products = DB::table('products')->where('id', $id)->get();

        return view('orderadd', compact('products'));
    }

    public function addorder (Request $request)
    {
        // $data = DB::table('orders')->join('products', 'products.id', '=', 'orders.product_id')->select('products.name', 'products.price', 'products.description', 'products.stock')->where('product_id', $id)->get();

        $product_id = $request->product_id;
        $buyer_name = $request->buyer_name;
        $buyer_contact = $request->buyer_contact;
        $amount = $request->amount;

        DB::table('orders')->insert([
            'product_id' => $product_id,
            'buyer_name' => $buyer_name,
            'buyer_contact' => $buyer_contact,
            'amount' => $amount,            
        ]); 
        
        // foreach($quantity->products as $quantity) {
        //     $stock = DB::table('products')->where('id', $product_id)->get();
        //     $stock->decrement('stock', $amount);
        // }
        
        // $quantity = ($products['quantity']) - $amount);
        
        // DB::table('products')->decrement('stock', $amount)->where('id', $request->$product_id)->update([
        //     // 'stock' => $request->stock,
        //     'stock' =>$request->decrement('stock', $amount),
        // ]);
        
        return redirect('orderadd');
    }

    public function delete($id)
    {
        $isTrue = DB::table('products')
            ->where('id', $id)
            ->delete();

        return redirect('product');
    }

    public function order()
    {
        $products = DB::table('products')->get();

        return view('order', compact('products'));
    }

    public function history()
    {
        $orders = DB::table('orders')->get();

        return view('history', compact('orders'));
    }

    public function edit($id)
    {
        $products = DB::table('products')->where('id', $id)->get();

        return view('produpdate', compact('products'));
    }

    public function update(Request $request)
    {
        $products = DB::table('products')->get();

        // if ($request->img_change == null){
        //     $products->img_path = $request->img_path;
        // } else {
        //     $img_path = time() . '.' . $request->img_path->extension();
        //     $request->img_path->move(public_path('assets/uploaded'), $img_path);
        //     $products->img_path = $img_path;
        // }
                
        DB::table('products')->where('id', $request->id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'stock' => $request->stock,
            'img_path' => $request->img_path,
        ]);
        
        return redirect('product');
    }
}
