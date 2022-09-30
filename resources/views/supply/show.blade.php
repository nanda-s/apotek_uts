@extends('supply.layout')
@section('content')
<div class="card">
  <div class="card-header">supply Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">id_bat : {{ $supply->id_bat }}</h5>
        <p class="card-text">jumlah_obat : {{ $supply->jumlah_obat }}</p>
        <p class="card-text">harga_beli : {{ $supply->harga_beli }}</p>
        <p class="card-text">id_supplier : {{ $supply->id_supplier }}</p>
  </div>
      
    </hr>
  
  </div>
</div>