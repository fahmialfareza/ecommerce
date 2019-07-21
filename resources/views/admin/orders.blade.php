@extends('admin.layout.admin')
@section('content')
    <h3>Pesanan</h3>
    <hr>
    <ul>
      @foreach ($orders as $order)
        <li>
          <h4>Dipesan oleh {{$order->user->name}} <br> Dengan total harga Rp {{$order->total}},00</h4>

          <form class="pull-right" action="{{route('toggle.deliver', $order->id)}}" method="post" id="deliver-toggle">
            {{ csrf_field() }}
            <label for="delivered">Sudah dikirim</label>
            <input type="checkbox" name="delivered" value="1" {{$order->delivered==1?"checked":""}}>
            <input type="submit" value="Submit">
          </form>

          <div class="clearfix"></div>

          <h5>Produk yang dibeli</h5>
          <table class="table table-bordered">
            <tr>
              <th>Nama</th>
              <th>Jumlah</th>
              <th>Harga</th>
            </tr>
            @foreach ($order->orderItems as $item)
              <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->pivot->qty}}</td>
                <td>Rp {{$item->pivot->total}},00</td>
              </tr>
            @endforeach
          </table>
          <hr>
        </li>
      @endforeach
    </ul>
@endsection
