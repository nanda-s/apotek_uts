@extends('supply.layout')
@section('content')
<div class="card">
  <div class="card-header">supply obat</div>
  <div class="card-body">
      
      <form action="{{ url('supply/' .$supply->id_supply) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id_supply" value="{{$supply->id_supply}}" id="id_supply" />
        <label>Nama obat</label></br>
        <input type="text" name="id_obat" id="id_bat" value="{{$supply->id_obat}}" class="form-control"></br>
        <label>jumlah_obat</label></br>
        <input type="text" name="jumlah_obat" id="jumlah_obat" value="{{$supply->jumlah_obat}}" class="form-control"></br>
        <label>id_supplier</label></br>
        <input type="text" name="id_supplier" id="id_supplier" value="{{$supply->id_supplier}}" class="form-control"></br>
        <label>harga_beli</label></br>
        <input type="text" name="harga_beli" id="harga_beli" value="{{$supply->harga_beli}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop