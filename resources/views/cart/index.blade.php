@extends('layout.main')

@section('content')

<br>

<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <h3>Keranjang Belanja</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2 col-md-offset-1">
        <h4>Nama</h4>
      </div>
      <div class="col-md-2">
        <h4>Harga</h4>
      </div>
      <div class="col-md-2">
        <h4>Jumlah</h4>
      </div>
      <div class="col-md-2">
        <h4>Ukuran</h4>
      </div>
      <div class="col-md-2">
      </div>
    </div>
    @foreach($cartItems as $cartItem)
    <div class="row">
      <div class="col-md-2 col-md-offset-1">
        <h5>
          {{$cartItem->name}}
        </h5>
      </div>
      <div class="col-md-2">
        <h5>Rp {{$cartItem->price}},00</h5>
      </div>
      <div class="col-md-2">
        {!! Form::open(['route' => ['cart.update', $cartItem->rowId], 'method' => 'PUT']) !!}
        <input type="text" class="form-control" name="qty" value="{{$cartItem->qty}}">
      </div>
      <div class="col-md-2">
        {!! Form::select('size', ['small' => 'Small', 'medium' => 'Medium', 'large' => 'Large'], $cartItem->options->has('size')?$cartItem->options->size:'', array('class' => 'form-control')) !!}
      </div>
      <div class="col-md-2">
        <input style="float: left" type="submit" class="btn btn-success btn-sm" value="Ok">
        {!! Form::close() !!}

        <form action="{{route('cart.destroy',$cartItem->rowId)}}" method="post">
          {{csrf_field()}}
          {{method_field('DELETE')}}
          <input type="submit" class="btn btn-danger btn-sm" value="Hapus">
        </form>
      </div>
    </div>
    @endforeach
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-1">
        <h4>
          Pajak : Rp {{Cart::tax()}},00 <br>
          Sub Total : Rp {{Cart::subtotal()}},00 <br>
          Total : Rp {{Cart::total()}},00
        </h4>
      </div>
      <div class="col-md-4">
        <h4>
          Jumlah item : {{Cart::count()}}
        </h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-1">
        <a href="{{route('checkout.shipping')}}" class="btn btn-primary form-control">Checkout</a>
      </div>
    </div>
  </div>
</div>
<br>

@endsection
