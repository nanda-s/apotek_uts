@extends('supply.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">supply obat</div>
                    <div class="card-body">
                        <a href="{{ url('/supply/create') }}" class="btn btn-success btn-sm" title="Add New supply">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>id_obat</th>
                                        <th>jumlah_obat</th>
                                        <th>harga_beli</th>
                                        <th>id_supplier</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($supply as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->id_obat }}</td>
                                        <td>{{ $item->jumlah_obat }}</td>
                                        <td>{{ $item->harga_beli }}</td>
                                        <td>{{ $item->id_supplier }}</td>
                                        <td>
                                            <a href="{{ url('/supply/' . $item->id_supply) }}" title="View supply"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/supply/' . $item->id_supply . '/edit') }}" title="Edit supply"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/supply' . '/' . $item->id_supply) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete supply" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection