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
      <h3 class="box-title">User</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th width="30px">No</th>
          <th>Photo</th>
          <th>Name</th>
          <th>Username</th>
          <th>Email</th>
          <th>Address</th>
          <th>Gender</th>
          <th>Status</th>
          <th>Role</th>
          {{-- <th>Menu</th> --}}
        </tr>
        </thead>
        <tbody>
        @php
          $no = 1;
        @endphp
        @foreach($user as $row)
        <tr>
          <td>{{$no++ }}</td>
          <td><img src="{{ url($row->photos) }}" width="50px"></td>
          <td>{{ $row->name }}</td>
          <td>{{ $row->username }}</td>
          <td>{{ $row->email }}</td>
           <td>{{ $row->address }}</td>
          <td> {{ $row->gender }}</td>
          <td> 
            @if($row->status == 0)
             <a href="{{ url('user/status/'.$row->id) }}" class="btn btn-sm btn-danger"> Non Aktif </a>
            @else
             <a href="{{ url('user/status/'.$row->id) }}" class="btn btn-sm btn-primary">  Aktif </a>
            @endif
          </td>
          <td>{{ $row->role }}</td>
          {{-- <td>
            <a href="{{ url('user/edit/'.$row->id) }}" class="btn btn-sm btn-primary">Edit</a>
            <a href="{{ url('user/delete/'.$row->id) }}" class="btn btn-sm btn-danger">Delete</a>
          </td> --}}
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