@extends('supply.layout')
@section('content')
<div class="card">
  <div class="card-header">Supply Page</div>
  <div class="card-body">
      
      <form action="{{ url('supply
    ') }}" method="post">
        {!! csrf_field() !!}
        <label>id_obat</label></br>
        <input type="text" name="id_obat" id="id_obat" class="form-control"></br>
        <label>harga beli</label></br>
        <input type="text" name="harga beli" id="harga beli" class="form-control"></br>
        <label>jumlah_obat</label></br>
        <input type="text" name="jumlah_obat" id="jumlah_obat" class="form-control"></br>
        <label>id_supplier</label></br>
        <input type="text" name="id_supplier" id="id_supplier" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop