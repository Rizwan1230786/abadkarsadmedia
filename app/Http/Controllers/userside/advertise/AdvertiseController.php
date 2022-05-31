<?php

namespace App\Http\Controllers\userside\advertise;

use App\Models\Order;
use App\Models\Product;
use App\Models\Webpages;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customeruser;
use Illuminate\Support\Facades\Auth;

class AdvertiseController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.advertise.advertise', get_defined_vars());
    }
    public function refresh()
    {
        $products = Product::all();
        $refresh = Product::where('name', 'Refresh Listing')->first();
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.advertise.refresh_adevertise', get_defined_vars());
    }
    public function premium()
    {
        $products = Product::all();
        $premium = Product::where('name', 'Premium Listing')->first();
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.advertise.premium_advertise', get_defined_vars());
    }
    public function hot()
    {
        $products = Product::all();
        $hot = Product::where('name', 'Hot Listing')->first();
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.advertise.hot_advertise', get_defined_vars());
    }
    public function superhot()
    {
        $products = Product::all();
        $superhot = Product::where('name', 'Super Hot Listing')->first();
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.advertise.super_hot_adevertise', get_defined_vars());
    }
    public function cart()
    {
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.advertise.add_to_cart.cart', get_defined_vars());
    }
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('message', 'Product added to cart successfully!');
    }
    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('message', 'Cart updated successfully');
        }
    }
    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            return response(['status' => true]);
        }
    }
    public function checkout()
    {
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.advertise.add_to_cart.checkout', get_defined_vars());
    }
    public function place_order(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'phone_number' => 'required',
            'zipcode'   => 'required|regex:/^[0-9]{3,7}$/'
        ]);
        $data = $request->all();
        $query = Order::create($data);
        $cart = session()->get('cart');
        foreach ($cart as $item) {
            OrderItem::create([
                'order_id' => $query->id,
                'product_name' => $item['name'],
                'quantity' => $item['quantity'],
                'price' => $item['price']
            ]);
        }
        if (Auth::user()->address == Null) {
            $user = Customeruser::where('id', Auth::user()->id)->first();
            $user->address = $request->input('address');
            $user->lastname = $request->input('last_name');
            $user->country = $request->input('country');
            $user->contact = $request->input('phone_number');
            $user->update();
        }
        if ($request->user_id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->user_id])) {
                unset($cart[$request->user_id]);
                session()->put('cart', $cart);
            }
        }
        if(isset($query) && !empty($query)){
            return redirect('user/advertise')->with('message', 'Place order successfully!');
        }else{
            return redirect()->back()->with('error', 'please check your problem');
        }
    }
}
