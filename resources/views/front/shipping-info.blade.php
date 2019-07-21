@extends('layout.main')

@section('title', 'Info Penerima - Toko Z')
@section('content')

<div class="row">
  <br>
  <div class="col-sm-6 col-sm-offset-3">
    <h3>Info Penerima</h3>
    <hr>

    {!! Form::open(['route' => 'address.store', 'method' => 'post']) !!}

    <div class="form-group">
      {{ Form::label('addressline', 'Alamat Lengkap') }}
      {{ Form::text('addressline', null, array('class' => 'form-control')) }}
      @if ($errors->has('addressline'))
        <p>{{ $errors->first('addressline') }}</p>
      @endif
    </div>

    <div class="form-group">
      {{ Form::label('city', 'Kota/Kabupaten') }}
      {{ Form::text('city', null, array('class' => 'form-control')) }}
      @if ($errors->has('city'))
        <p>{{ $errors->first('city') }}</p>
      @endif
    </div>

    <div class="form-group">
      {{ Form::label('state', 'Provinsi') }}
      {{ Form::text('state', null, array('class' => 'form-control')) }}
      @if ($errors->has('state'))
        <p>{{ $errors->first('state') }}</p>
      @endif
    </div>

    <div class="form-group">
      {{ Form::label('zip', 'Kode POS') }}
      {{ Form::number('zip', null, array('class' => 'form-control')) }}
      @if ($errors->has('zip'))
        <p>{{ $errors->first('zip') }}</p>
      @endif
    </div>

    <div class="form-group">
      {{ Form::label('phone', 'Phone') }}
      {{ Form::number('phone', null, array('class' => 'form-control')) }}
      @if ($errors->has('phone'))
        <p>{{ $errors->first('phone') }}</p>
      @endif
    </div>

    {!! Form::submit('Proceed to Payment', array('class' => 'btn btn-success')) !!}

    {!! Form::close() !!}
  </div>
</div>
<br>

@endsection
