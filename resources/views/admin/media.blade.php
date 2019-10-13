@extends('admin.layout.master')
@section('css')

@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="box box-primary">
            {{-- <div class="box-header with-border"> --}}
                    <div class="row">
                            <div class="col-md-12">
                              <iframe src="/laravel-filemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
                            </div>
                    </div>
            {{-- </div> --}}
        </div>
    </div>
  </div>
@endsection
@section('js')
<script>
  var route_prefix = "{{ url(config('lfm.url_prefix', config('lfm.prefix'))) }}";
 </script>
 <script>
   {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!}
 </script>
 <script>
   $(document).ready(function(){
     // Define function to open filemanager window
     var lfm = function(options, cb) {
         var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
         window.open(route_prefix + '?type=' + options.type || 'image', 'FileManager', 'width=900,height=600');
         window.SetUrl = cb;
     };

   });
 </script>
@endsection