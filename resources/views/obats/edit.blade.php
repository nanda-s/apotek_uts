@extends('obats.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Obat</div>
  <div class="card-body">
      
      <form action="{{ url('obats/' .$obats->id_obat) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id_obat" value="{{$obats->id_obat}}" id="id_obat" />
        <label>Nama</label></br>
        <input type="text" name="nama_obat" id="nama_obat" value="{{$obats->nama_obat}}" class="form-control"></br>
        <label>harga_jual</label></br>
        <input type="text" name="harga_jual" id="harga_jual" value="{{$obats->harga_jual}}" class="form-control"></br>
        <label>harga_beli</label></br>
        <input type="text" name="harga_beli" id="harga_beli" value="{{$obats->harga_beli}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop