<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    //
    public function index(){
        $data = Product::all();
        return view('product', ['products' => $data]);
    }
    public function addProducts(){
        return view('addproducts');
    }
    public function addProductStore(Request $req){
       $data = $req->validate([
        'name' => 'required',
        'price' => 'required',
        'category' => 'required',
        'description' => 'required'

       ]);

        if($req->hasFile('gallery')){
            $data['gallery'] = $req->file('gallery')->store('gallery', 'public');
        }
      
        $user = new Product;
      $user->create($data);

        return redirect('/');
    }

    public function detail($id){
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }
    
    public function addToCart(Request $req){
        if($req->session()->has('user'))
        {
        $cart = new Cart;
        $cart->user_id = $req->session()->get('user')['id'];
        $cart->product_id = $req->product_id;
        $cart->save();
        return redirect('/');

        }
        else{
            return redirect('/login');
        }
    }
    public static function cartItem(){
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
        
    }
    public function search(Request  $request){
        return view('search', ['products' => Product::latest()->filter(['search'])->get()
    ]);
    }
    public function cartList(){
        
        $userId=Session::get('user')['id'];
       $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*', 'cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);
    }
    public function removeCart($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }
    public function orderNow(){
        $userId=Session::get('user')['id'];
       $total= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');

        return view('ordernow',['total'=>$total]);
    }
    public function orderPlace(Request $req){
        $userId=Session::get('user')['id'];
        $allCart = Cart::where('user_id', $userId)->get();
        foreach($allCart as $cart){
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->address = $req->address;
            $order->save();
           Cart::where('user_id', $userId)->delete();
           
        }
        return redirect('/');


    }

    public function myOrders(){
        $userId = Session::get('user')['id'];
        $orders = DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userId)
        ->get();

        return view('myorders',['orders'=>$orders]);
    }
    public function manageProducts(){
        $data = new Product;
        return view('manage', ['products'=>$data->get()]);

       
    }
    /*
    public function manageProducts(){
        $userId=Session::get('user')['id'];
        $data = Product::
        where('user_id',$userId)->get();
        return view('manage', ['products'=>$data]);

       
    }*/
    public function delete($id){
      Product::destroy($id);
        return redirect('manage');

    }

   
    public function editStore(Product $id){
        
        return view('edit', ['products' => $id]);
        
    }
    public function update(Request $request, Product $id){
        $formFields = $request->validate([
         'name' => 'required',
         'price' => 'required',
         'category' => 'required',
         'description' => 'required'
 
        ]);
 
         if($request->hasFile('gallery')){
             $formFields['gallery'] = $request->file('gallery')->store('gallery', 'public');
         }
                                        
         $id->update($formFields);

         return redirect('/');

        }
}
