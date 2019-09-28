@extends('admin.layout.master')
@section('css')
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
        <div class="col-md-4">
           <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Add Category</h3>
                </div>
                <form role="form" action="{{url('/category')}}" method="POST">
                {{ csrf_field() }}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control"  placeholder="Enter Category" name="name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Slug</label>
                      <input type="text" class="form-control"  placeholder="Enter Slug" name="slug">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Icon</label>
                      <input type="text" class="form-control"  placeholder="Enter Icon Font Awesome" name="icon">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Parent Caegory</label>
                      <select class="form-control" name="parent_id">
                         <option value="">Select</option>
                         @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
        </div>
        <div class="col-md-8">
           <div class="box">
        <div class="box-header">
          <h3 class="box-title">Category</h3>
        </div>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No</th>
              <th width="400px">Category</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @php
                  $no = 1;
              @endphp
              @foreach($categories as $category)
              <tr>
                <td width="40px">{{ $no++ }}</td>
                <td>{{ $category->name }}
                  <ul>
                    @foreach($category->children as $subcategory)
                       <li class="table_list"> - {{ $subcategory->name }} </li>
                    @endforeach
                  </ul>
                </td>
                <td>
                <form action="{{ route('admin.category.destroy',$category->id) }}" method="post">
                  <a href="{{url('category/'.$category->id.'/edit') }}" class="btn btn-primary  btn-xs">Edit</a>
                  {{ csrf_field() }}
                  {{ method_field('DELETE')}}
                  <input type="submit" name="" value="Delete" class="btn btn-danger  btn-xs">
                 </form>
                  <ul>
                    @foreach($category->children as $subcategory)
                       <form action="{{ route('admin.category.destroy',$subcategory->id) }}" method="post">
                       <li class="table_list"  style="margin-left: -43px"> <a href="{{url('category/'.$subcategory->id.'/edit') }}" class="btn btn-primary  btn-xs">Edit</a>
                            {{ csrf_field() }}
                            {{ method_field('DELETE')}}
                            <input type="submit" name="" value="Delete" class="btn btn-danger btn-xs">
                           </form>
                       </li>
                    @endforeach
                  </ul>
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
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
@endsection