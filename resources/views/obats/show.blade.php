@extends('obats.layout')
@section('content')
<div class="card">
  <div class="card-header">obats Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">nama_obat : {{ $obats->nama_obat }}</h5>
        <p class="card-text">harga_jual : {{ $obats->harga_jual }}</p>
        <p class="card-text">harga_beli : {{ $obats->harga_beli }}</p>
        <p class="card-text">stok : {{ $obats->stok }}</p>
  </div>
      
    </hr>
  
  </div>
</div>