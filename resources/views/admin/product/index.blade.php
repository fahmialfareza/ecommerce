@extends('admin.layout.admin')

@section('content')

  <h3>Produk</h3>
  <hr>
  <ul>
    @forelse($products as $product)
    <li>
      <h4>Nama Produk : {{$product->name}}</h4>
      <h4>Kategori : {{count($product->category)?$product->category->name:"N/A"}}</h4>
        <a href="{{route('product.show', $product->id)}}"><input type="submit" value="Detail" class="btn btn-sm btn-primary"></a>
      <form action="{{route('product.destroy', $product->id)}}" method="post">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <input type="submit" value="Hapus" class="btn btn-sm btn-danger">
      </form>
      <hr>
    </li>

      @empty

      <h3>Tidak ada Produk</h3>

    @endforelse
  </ul>
  <nav aria-label="Page navigation"> <!--awal pagination-->
    <ul class="pagination">
      <li>
        {!! $products->links() !!}
      </li>
    </ul>
  </nav> <!--akhir pagination-->

@endsection
