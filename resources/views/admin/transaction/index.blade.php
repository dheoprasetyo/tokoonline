@extends('admin.layout.master')
@section('css')
<!-- DataTables -->
{{-- <link rel="stylesheet" href="{{ asset('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}"> --}}
<style type="text/css">
.table_list {
list-style: none;
padding: 3px;
margin-left: -30px;
}
</style>
@endsection
@section('content')
<div class="row">
        <div class="col-md-12">
           <div class="box">
        <div class="box-header">
          <h3 class="box-title">Product</h3>
        </div>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No</th>
              <th>Code</th>
              <th>Member</th>
              <th>Ekspedisi</th>
              <th>Pembayaran</th>
              <th>Menu</th>
              {{-- <th>Action</th> --}}
            </tr>
            </thead>
            <tbody>
              @php
                  $no = 1;
              @endphp
              @foreach ($transaction as $row)
              <tr>
                  <td>{{$no++}}</td>
                  <td>{{$row->code}}</td>
                  <td>{{$row->user->name}}</td>
                  <td>{{ $row->ekspedisi['name'] }}</td>
                  <td>
                      @if ($row->status == 0)
                        <a href="{{url('transaction/'.$row->code.'/'.$row->status) }}" class="btn btn-primary btn-xs">Belum</a>
                      @else
                        <a href="{{url('transaction/'.$row->code.'/'.$row->status) }}" class="btn btn-success btn-xs">Sudah</a>
                      @endif
                  </td>
                  <td>
                    <a href="{{ url('transaction/'.$row->code.'/detail/data') }}" class="btn btn-sm btn-success">Detail</a>
                  </td>
                  
              </tr>
                  
              @endforeach
              
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
        </div>
        </div>
      </div>
@endsection
@section('js')
<script>
    $(function () {
      $('#example1').DataTable()
    //   $('#example2').DataTable({
    //     'paging'      : true,
    //     'lengthChange': false,
    //     'searching'   : false,
    //     'ordering'    : true,
    //     'info'        : true,
    //     'autoWidth'   : false
    //   })
    })
  </script>
@endsection