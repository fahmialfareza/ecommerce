@extends('layout.main')

@section('title', 'Kategori ' . $categories->name . ' - Toko Z')
@section('content')
  <!-- products listing -->
  <div class="row"> <!--awal row-->
  <!-- Latest SHirts -->
    <div class="col-md-10 col-md-offset-1"> <!--awal thumbnail-->
      <br><h2>Kategori {{$categories->name}}</h2>
      <hr>
      @forelse($shirts as $shirt)
            <div class="col-xs-6 col-sm-4 col-md-2" style="height: 350px">
              <div class="thumbnail">
                <a href="{{route('shirt', $shirt->id)}}"><img src="{{url('images', $shirt->image)}}"></a>
                <div class="caption">
                  <h5 style="color: grey;">{{$shirt->name}}</h5>
                  <h4 style="color: red">Rp {{$shirt->price}},00</h4>
                </div>
              </div>
            </div>
      @empty
        <h4>Tidak ada Produk</h4>
      @endforelse
    </div>
    <div class="col-md-10 col-md-offset-1">
      <nav aria-label="Page navigation"> <!--awal pagination-->
        <ul class="pagination">
          <li>
            {!! $shirts->links() !!}
          </li>
        </ul>
      </nav> <!--akhir pagination-->
    </div>
  </div>
@endsection
