@extends('admin.layout.admin')

@section('content')

  <h3>Edit Produk</h3>
  <hr>
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      {!! Form::open(['route' => ['product.update', $product->id], 'method' => 'post', 'files' => 'true']) !!}

        <div class="form-group">
          {{ Form::label('name', 'Nama') }}
          {{ Form::textarea('name', $product->name, array('class' => 'form-control')) }}
          @if ($errors->has('name'))
            <p>{{ $errors->first('name') }}</p>
          @endif
        </div>

        <div class="form-group">
          {{ Form::label('description', 'Deskripsi') }}
          {{ Form::text('description', $product->description, array('class' => 'form-control')) }}
          @if ($errors->has('description'))
            <p>{{ $errors->first('description') }}</p>
          @endif
        </div>

        <div class="form-group">
          {{ Form::label('price', 'Harga') }}
          {{ Form::number('price', $product->price, array('class' => 'form-control')) }}
          @if ($errors->has('price'))
            <p>{{ $errors->first('price') }}</p>
          @endif
        </div>

        <div class="form-group">
          {{ Form::label('size', 'Ukuran') }}
          {{ Form::select('size', ['kecil' => 'Kecil', 'sedang' => 'Sedang', 'besar' => 'Besar'], $product->size, ['class' => 'form-control']) }}
          @if ($errors->has('size'))
            <p>{{ $errors->first('size') }}</p>
          @endif
        </div>

        <div class="form-group">
          {{ Form::label('category_id', 'Kategori') }}
          {{ Form::select('category_id', $categories, $product->category_id, ['class' => 'form-control', 'placeholder' => 'Pilih Kategori']) }}
          @if ($errors->has('category_id'))
            <p>{{ $errors->first('category_id') }}</p>
          @endif
        </div>

        <div class="form-group">
          {{ Form::label('image', 'Gambar') }}
          {{ Form::file('image', array('class' => 'form-control')) }}
          @if ($errors->has('image'))
            <p>{{ $errors->first('image') }}</p>
          @endif
        </div>

        {{ Form::submit('Ubah', array('class' => 'btn btn-default')) }}

        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">

      {!! Form::close() !!}
    </div>

  </div>

@endsection
