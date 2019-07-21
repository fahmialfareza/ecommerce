<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
   <link rel="shortcut icon" href="{{asset('img/tokoz.png')}}">
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <title>@yield('title')</title>
   <!-- Bootstrap -->
   <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{asset('css/style.css')}}" rel="stylesheet">

   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
  </head>

   <body>
     <nav class="navbar navbar" style="background:#1ba0e2;"> <!--awal navigasi atas-->
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <div class="navbar-header">
                <a href="{{route('home')}}" class="navbar-brand"><img src="{{asset('img/tokoz_putih.png')}}" style="weight:25px; height:25px;"></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#target-list">
                  <span class="icon-bar" style="background:white;"></span>
                  <span class="icon-bar" style="background:white;"></span>
                  <span class="icon-bar" style="background:white;"></span>
                </button>
              </div>
              <div class="collapse navbar-collapse" id="target-list warna-text">
                <ul class="nav navbar-nav">
                  <li><a href="{{route('home')}}" style="color:white;">Beranda</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;">Kategori <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="/category/1"> Pria </a></li>
                      <li><a href="/category/2"> Wanita </a></li>
                      <li><a href="/category/3"> Anak </a></li>
                      <li role="separator" class="divider"></li> <!--pemisah-->
                      <li><a href="/category/4"> Olahraga </a></li>
                      <li><a href="/category/5"> Kasual </a></li>
                    </ul>
                  </li>
                  <li>
                    <form role="search" class="navbar-form" action="{{route('shirts')}}" method="GET">
                      <div class="form-group">
                        <input type="text" name="search" class="form-control" placeholder="Cari iklan ...">
                        <button type="submit" class="btn btn-default">Cari</button>
                      </div>
                    </form>
                  </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="/cart" style="color: white;"><span class="glyphicon glyphicon-shopping-cart"></span> Keranjang <span class="badge badge-red">{{Cart::count()}}</span></a></li>
                  @if (Auth::check())
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;">Hai, {{Auth::user()->name}}<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        @if (Auth::user()->isAdmin())
                          <li><a href="/admin">Admin</a></li>
                        @endif
                        <li><a href="{{route('logout')}}">Logout</a></li>
                      </ul>
                    </li>
                  @else
                    <li>
                      <a href="{{route('login')}}" style="color: white;"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                    </li>
                  @endif
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav> <!--akhir navigasi atas-->

       @yield('content')

   <div class="nav"> <!--awal footer-->
         <div class="navbar navbar-bottom" style="background:#1ba0e2;">
           <div class="container">
             <div class="row"> <!--logo-->
               <div class="col-md-12">
                 <div class="row">
                   <div class="col-xs-5 col-md-5">
                     <br><hr>
                   </div>
                   <div class="col-xs-2 col-md-2">
                     <br>
                     <center>
                       <img src="{{asset('img/tokoz_putih.png')}}" style="height:50px; weight:50px;">
                     </center>
                   </div>
                   <div class="col-xs-5 col-md-5">
                     <br><hr>
                   </div>
                 </div>
               </div>
             </div>
             <div class="row" style="color:white;">
               <center>
                 <div class="col-md-4">
                   <h2>Tentang TOKO Z</h2>
                   <p>
                     <b><i>TOKO Z</i></b> merupakan toko terpercaya yang menyediakan semua kebutuhan baju yanng dibutuhkan masyarakan dengan gaya masa kini.
                     <b><i>TOKO Z</i></b> menyediakan transaksi yang halal dan tanpa riba.
                   </p>
                 </div>
                 <div class="col-md-4">
                   <h2>Kategori</h2>
                     <a href="/category/1" style="color:white;"> Pria <br></a>
                     <a href="/category/2" style="color:white;"> Wanita <br></a>
                     <a href="/category/3" style="color:white;"> Anak <br></a>
                     <a href="/category/4" style="color:white;"> Kasual <br></a>
                     <a href="/category/5" style="color:white;"> Olahraga <br></a>
                 </div>
                 <div class="col-md-4">
                   <h2>Kontak</h2>
                   <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>  Banyuwangi Indah</p>
                   <p><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>  0864-9856-1000</p>
                 </div>
             </center>
             </div>
           </div>
           <br>
           <center style="background:rgb(2, 117, 216); color:white;">
             <br>
             Copyright &copy; 2017 Kelompok Pemweb - R
             <br>
             <br>
           </center>
         </div>
       </div> <!--akhir footer-->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  </body>
</html>
