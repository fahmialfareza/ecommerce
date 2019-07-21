<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Order;
use App\Mail\Orders;
use App\Mail\OrderShipped;

class CheckoutController extends Controller
{
    public function shipping()
    {
      return view('front.shipping-info');
    }

    public function payment()
    {
      return view('front.payment');
    }

    public function storePayment(Request $request)
    {

      Order::createOrder();

      return redirect()->route('order.confirmation', $order);

    }
}
