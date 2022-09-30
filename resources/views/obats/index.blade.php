@extends('obats.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">obat</div>
                    <div class="card-body">
                        <a href="{{ url('/obats/create') }}" class="btn btn-success btn-sm" title="Add New obats">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>nama_obat</th>
                                        <th>harga_jual</th>
                                        <th>harga_beli</th>
                                        <th>stok</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($obats as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama_obat }}</td>
                                        <td>{{ $item->harga_jual }}</td>
                                        <td>{{ $item->harga_beli }}</td>
                                        <td>{{ $item->stok }}</td>
                                        <td>
                                            <a href="{{ url('/obats/' . $item->id_obat) }}" title="View Obats"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/obats/' . $item->id_obat . '/edit') }}" title="Edit Obats"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/obats' . '/' . $item->id_obat) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete obats" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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