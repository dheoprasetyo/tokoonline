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
              <th width="400px">Photo</th>
              <th>Name</th>
              {{-- <th>Description</th> --}}
              <th>Stock</th>
              <th>price</th>
              <th>User</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @php
                  $no = 1;
              @endphp
              @foreach($product as $row)
              <tr>
                <td>{{ $no++ }}</td>
                <td ><img src="{{ url($row->photo) }}" width="40px" alt="User Image"></td>
                <td>{{$row->name}}</td>
                {{-- <td>{{$row->description}}</td> --}}
                <td>{{$row->stock}}</td>
                <td>Rp {{number_format($row->price,0,".",".")}}</td>
                <td>{{$row->user->name}}</td>
                <td>
                    <form action="{{ route('product.destroy', $row->id) }}" method="POST">
                    <a href="{{url('admin/product/'.$row->id.'/edit') }}" class="btn btn-primary  btn-xs">Edit</a>
                    
                      {{ csrf_field() }}
                      {{ method_field("DELETE")}}
                      <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                    </form>
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