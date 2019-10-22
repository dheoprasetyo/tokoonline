@extends('frontend.index')
@section('slide')
 
@endsection
@section('content')
 <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">All Product</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Product</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  <div id="content">
        <div class="container">
          <div class="row bar">
            <div class="col-md-12">
              <p class="text-muted lead text-center">Jual Komputer dan Gedget terlengkap.</p>
              <div class="products-big">
                <div class="row products">
                  @foreach($product as $row)
                  {{-- <div class="col-lg-3 col-md-4">
                    <div class="row">
                      <div class="image">
                        <a href=""><img src="{{ url($row->photo) }}" alt="" class="img-fluid image1"></a></div>
                      <div class="text">
                        <h3 class="h5"><a href="">
                          {{ $row->name }}
                        </a></h3>
                        <p class="price">Rp. {{ number_format($row->price) }}</p>
                      </div>
                    </div>
                  </div> --}}
                  <div class="col-lg-3 col-md-4">
                      <div class="product">
                        <div class="image"><a href="shop-detail.html"><img src="{{url($row->photo)}}" alt="" class="img-fluid image1"></a></div>
                        <div class="text">
                          <h3 class="h5"><a href="shop-detail.html">{{$row->name}}</a></h3>
                          <p class="price">Rp {{number_format($row->price,0,".",".")}}</p>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
              <div class="pages">
                <div class="col-md-12" >
                     <div style="text-align: center;" >
                      {{ $product->links() }}
                   </div>
            </div>
              </div>
            </div>
          </div>
        </div>
  </div>

@endsection
