<?php

namespace App\Http\Controllers;

use App\Mail\Orders;
use App\Mail\OrderShipped;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function Orders($type='')
    {
      if ($type == 'pending') {
        $orders = Order::where('delivered', '0')->get();
      } elseif ($type == 'delivered') {
        $orders = Order::where('delivered', '1')->get();
      } else {
        $orders = Order::all();
      }

      return view('admin.orders', compact('orders'));
    }

    public function toggledeliver(Request $request, $orderId)
    {
      $order = Order::find($orderId);
      if ($request->has('delivered')) {

        Mail::to($order->user)->send(new OrderShipped($order));

        $order->delivered=$request->delivered;
      } else {
        $order->delivered="0";
      }
      $order->save();

      return back();
    }

    public function orderconfirmation(Request $request)
    {
      Order::createOrder();

      $userid = Auth::user()->id;

      $orderid = DB::table('orders')->select('id')->where('user_id', '=', (string) $userid)->orderBy('created_at', 'desc')->first();

      $idorder = null;

      foreach ($orderid as $id) {
        $idorder = (string) $id;
      }

      $order = Order::find($idorder);

      Mail::to($order->user)->send(new Orders($order));

      return redirect()->route('home');
    }
}
