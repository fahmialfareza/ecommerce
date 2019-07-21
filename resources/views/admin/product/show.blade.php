@extends('admin.layout.admin')

@section('content')

  <div class="container-fluid"> <!--awal dari conta-->
    <div class="row">
      <div class="col-md-8 col-md-offset-2"> <!--level1-->
        <h2>Deskripsi Produk "{{$shirt->name}}"</h2><hr>
        <div class="row">
          <div class="col-md-3"> <!--level2 gambar-->
            <div class="thumbnail">
              <img src="{{url('images', $shirt->image)}}" alt="">
            </div>
          </div>
          <div class="col-md-5"> <!--level2 deskripsi-->
            <p>{{$shirt->description}}</p>
            <h4 style="color: red">Rp {{$shirt->price}},00</h4>
            <a href="{{route('product.edit', $shirt->id)}}">
              <span><button type="submit" class="btn btn-primary">Edit</button></span>
              </span>
            </a>
          </div>
        </div>
        <hr>
      </div>
    </div>
  </div> <!--akhir container-->
  <br><br>

@endsection
