@extends('obats.layout')
@section('content')
<div class="card">
  <div class="card-header">Obat Page</div>
  <div class="card-body">
      
      <form action="{{ url('obats') }}" method="post">
        {!! csrf_field() !!}
        <label>nama_obat</label></br>
        <input type="text" name="nama_obat" id="nama_obat" class="form-control"></br>
        <label>harga_jual</label></br>
        <input type="text" name="harga_jual" id="harga_jual" class="form-control"></br>
        <label>harga_beli</label></br>
        <input type="text" name="harga_beli" id="harga_beli" class="form-control"></br>
        <label>stok</label></br>
        <input type="text" name="stok" id="stok" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop