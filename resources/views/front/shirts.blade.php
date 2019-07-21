@extends('layout.main')

@section('title', 'Pencarian "' . \Request::get('search') . '" - Toko Z')
@section('content')
  <!-- products listing -->
  <div class="row"> <!--awal row-->
  <!-- Latest SHirts -->
    <div class="col-md-10 col-md-offset-1"> <!--awal thumbnail-->
      <br><h2>Pencarian untuk "{{\Request::get('search')}}"</h2>
      <hr>
      @forelse($shirts->chunk(12) as $chunk)
        @foreach($chunk as $shirt)
            <div class="col-xs-6 col-sm-4 col-md-2" style="height: 350px">
              <div class="thumbnail">
                <a href="{{route('shirt', $shirt->id)}}"><img src="{{url('images', $shirt->image)}}"></a>
                <div class="caption">
                  <h5 style="color: grey;">{{$shirt->name}}</h5>
                  <h4 style="color: red">Rp {{$shirt->price}},00</h4>
                </div>
              </div>
            </div>
        @endforeach
      @empty
        <h4>Pencarian tidak ditemukan</h4>
      @endforelse
    </div>
    <div class="col-md-10 col-md-offset-1">
      <nav aria-label="Page navigation"> <!--awal pagination-->
        <ul class="pagination">
          <li>
            {!! $shirts->appends(Request::only('search'))->links() !!}
          </li>
        </ul>
      </nav> <!--akhir pagination-->
    </div>
  </div>
@endsection
