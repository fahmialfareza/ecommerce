@extends('layout.main')

@section('title', 'Selamat datang di Toko Z')
@section('content')

  <img src="img/logo_header.png" class="img-responsive">

  <div class="container-fluid">
      <div class="row"> <!--awal row-->
      <!-- Latest SHirts -->
        <div class="col-md-10 col-md-offset-1"> <!--awal thumbnail-->
          <br><h2>Produk terbaru</h2>
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
      <div class="row">
        <div class="col-md-5  col-md-offset-1">
          <a href="/category/5">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> <!--carousel kasual-->
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="img/kas_1.jpg">
                <div class="carousel-caption">
                  <h3>Kasual 1</h3>
                </div>
              </div>
              <div class="item">
                <img src="img/kas_2.jpg">
                <div class="carousel-caption">
                  <h3>Kasual 2</h3>
                </div>
              </div>
              <div class="item">
                <img src="img/kas_3.jpg">
                <div class="carousel-caption">
                  <h3>Kasual 3</h3>
                </div>
              </div>
              <div class="item">
                <img src="img/kas_4.jpg">
                <div class="carousel-caption">
                  <h3>Kasual 4</h3>
                </div>
              </div>
            </div>
            </a>
          </div> <!--akhir carousel-->
        </div>
        <div class="col-md-5">
          <a href="/category/4">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> <!--carousel sport-->
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="img/sport_1.jpg">
                <div class="carousel-caption">
                  <h3>Sport 1</h3>
                </div>
              </div>
              <div class="item">
                <img src="img/sport_2.jpg">
                <div class="carousel-caption">
                  <h3>Sport 2</h3>
                </div>
              </div>
              <div class="item">
                <img src="img/sport_3.jpg">
                <div class="carousel-caption">
                  <h3>Sport 3</h3>
                </div>
              </div>
            </div>
            </a>
          </div> <!--akhir carousel-->
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-3 col-md-offset-1">
          <a href="/category/1">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> <!--carousel pria-->
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="img/men_1.jpg">
                <div class="carousel-caption">
                  <h3>Pria 1</h3>
                </div>
              </div>
              <div class="item">
                <img src="img/men_2.jpg">
                <div class="carousel-caption">
                  <h3>Pria 2</h3>
                </div>
              </div>
              <div class="item">
                <img src="img/men_3.jpg">
                <div class="carousel-caption">
                  <h3>Pria 3</h3>
                </div>
              </div>
            </div>
            </a>
          </div> <!--akhir carousel-->
        </div>
        <div class="col-md-4">
          <a href="/category/2">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> <!--carousel wanita-->
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="img/wan_1.png">
                <div class="carousel-caption">
                  <h3>Wanita 1</h3>
                </div>
              </div>
              <div class="item">
                <img src="img/wan_3.jpg">
                <div class="carousel-caption">
                  <h3>wanita 2</h3>
                </div>
              </div>
            </div>
            </a>
          </div> <!--akhir carousel-->
        </div>
        <div class="col-md-3">
          <a href="/category/3">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> <!--carousel anak-->
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="img/kid_1.jpg">
                <div class="carousel-caption">
                  <h3>Anak 1</h3>
                </div>
              </div>
              <div class="item">
                <img src="img/kid_2.jpg">
                <div class="carousel-caption">
                  <h3>Anak 2</h3>
                </div>
              </div>
              <div class="item">
                <img src="img/kid_3.jpg">
                <div class="carousel-caption">
                  <h3>Anak 3</h3>
                </div>
              </div>
            </div>
            </a>
          </div> <!--akhir carousel-->
        </div>
      </div>
  </div>
  <!-- Footer -->
  <br>
@endsection
