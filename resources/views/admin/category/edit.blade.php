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
  <title>Update Category - Tumbas.id</title>
	@endsection
	@section('content')
  <div class="row">
    <div class="col-md-12">
       <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Update Category</h3>
            </div>
            <form role="form" action="{{ route('category.update',$category->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control"  placeholder="Enter Category" name="name" value="{{ $category->name }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Slug</label>
                  <input type="text" class="form-control"  placeholder="Enter Slug" name="slug" value="{{ $category->slug }}">
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Icon</label>
                  <input type="text" class="form-control"  placeholder="Enter Icon Font Awesome" name="icon" value="{{ $category->icon }}">
                </div>
                <div class="form-group">
                      @if($category->parent_id == null)
                        <input type="hidden" name="parent_id" value="">
                      @else
                       <label for="exampleInputPassword1">Parent Caegory</label>
                       <select class="form-control" name="parent_id">
                          @foreach($categorys as $cas)
                          <option value="{{ $cas->id }}"
                              @if($cas->id == $category->parent_id)
                              selected="selected"
                              @endif
                               >{{ $cas->name }}</option>
                          @endforeach
                         </select>
                      @endif
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="back" class="btn btn-danger">Back</button>
              </div>
            </form>
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
@show
