@extends('admin.layout.admin')

@section('content')

  <h3>Tambah Produk</h3>
  <hr>
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      {!! Form::open(['route' => 'product.store', 'method' => 'post', 'files' => 'true']) !!}

        <div class="form-group">
          {{ Form::label('name', 'Nama') }}
          {{ Form::text('name', null, array('class' => 'form-control')) }}
          @if ($errors->has('name'))
            <p>{{ $errors->first('name') }}</p>
          @endif
        </div>

        <div class="form-group">
          {{ Form::label('description', 'Deskripsi') }}
          {{ Form::textarea('description', null, array('class' => 'form-control')) }}
          @if ($errors->has('description'))
            <p>{{ $errors->first('description') }}</p>
          @endif
        </div>

        <div class="form-group">
          {{ Form::label('price', 'Harga') }}
          {{ Form::number('price', null, array('class' => 'form-control')) }}
          @if ($errors->has('price'))
            <p>{{ $errors->first('price') }}</p>
          @endif
        </div>

        <div class="form-group">
          {{ Form::label('size', 'Ukuran') }}
          {{ Form::select('size', ['kecil' => 'Kecil', 'sedang' => 'Sedang', 'besar' => 'Besar'], null, ['class' => 'form-control']) }}
          @if ($errors->has('size'))
            <p>{{ $errors->first('size') }}</p>
          @endif
        </div>

        <div class="form-group">
          {{ Form::label('category_id', 'Kategori') }}
          {{ Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Pilih Kategori']) }}
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

        {{ Form::submit('Tambah', array('class' => 'btn btn-default')) }}

      {!! Form::close() !!}
    </div>

  </div>

@endsection
