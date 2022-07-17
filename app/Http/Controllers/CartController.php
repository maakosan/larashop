<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Socialite;
use Illuminate\Support\Facades\Session;
use App\Cart;

class CartController extends Controller
{
  public function index()
  {
  $cart_id = Session::get('cart');
  $cart =Cart::find($cart_id);

  $total_price = 0;
  foreach ($cart->products as $product){
      $total_price += $product->price * $product->pivot->quantity;
    }
  return view('cart.index')
  ->with('line_items',$cart->products)
  ->with('total_price',$total_price);
  }

  public function checkout()
  {
    $cart_id = Session::get('cart');
    $cart = Cart::find($cart_id);

    $line_items = [];
    foreach($cart->products as $product){
      $line_item = [
        'name' =>  $product->name,
        'description' => $product->description,
        'amount' => $product->price,
        'quantity' => $product->pivot->quantity,
        'currency' =>'jpy',
      ];
      array_push($line_items,$line_item);
    }

\Stripe\Stripe::setApiKey(env('STRIPE_SETCRET_KEY'));

$session = \Stripe\Checkout\Session::create([
  'payment_method_types'=>['cart'],
  'line_items'=>[$line_items],
  'success_url'=>route('product.index'),
  'cancel_url'=>route('cart.index'),
]);

return view('cart.checkout',[
  'session'=>$session,
  'publlicKey'=>env('STRIPE_PUBLIC_KEY')
]);
  }
}