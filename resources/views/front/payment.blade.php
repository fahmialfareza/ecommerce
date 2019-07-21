@extends('layout.main')

@section('title', 'Persetujuan Pemesanan - Toko Z')
@section('content')

<br>
<div class="row">
  <div class="col-md-5 col-md-offset-4">
    <form action="{{route('order.confirmation')}}" method="POST" id="payment-form">
      <p><input type="checkbox" required> Setuju untuk membeli sesuai ketentuan yang berlaku.</p>
  </div>
</div>
<div class="row">
  <div class="col-md-8 col-md-offset-5">
        {{csrf_field()}}
        <input type="submit" class="btn btn-success" value="Setuju untuk membeli">
      </form>
  </div>
</div>
<br>
@endsection
