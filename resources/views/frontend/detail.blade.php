@extends('frontend.index')
{{-- @section('header')
    <title>{{ $name }} - Tumbas.id</title>
@endsection --}}
@section('slide')
 
@endsection
@section('content')
<div id="heading-breadcrumbs">
    <div class="container">
      <div class="row d-flex align-items-center flex-wrap">
        <div class="col-md-7">
          <h1 class="h2">{{$product->name}}</h1>
        </div>
        <div class="col-md-5">
          <ul class="breadcrumb d-flex justify-content-end">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="shop-category.html">Ladies</a></li>
            <li class="breadcrumb-item"><a href="shop-category.html">Tops</a></li>
            <li class="breadcrumb-item active">White Blouse Armani</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
 <div id="content">
        <div class="container">
          <div class="row bar">
            <div class="col-md-9">
                <div id="productMain" class="row">
                  <div class="col-sm-6">
                    <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                      <div> <img src="{{url($product->photo)}}" alt="" class="img-fluid"></div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="box">
                      <form>
                        
                        <p class="price">Rp {{number_format($product->price,0,".",".")}}</p>
                        {{-- <h3>Pengiriman</h3> --}}
                        <br>
                        <p class="text-center">Weight : {{ $product->weight }}</p>
                        <p class="text-center">Stock : {{ $product->stock }}</p>
                        <div class="sizes">
                        <select class="bs-select">
                        @php
                            for($i=1; $i <= $product->stock; $i++){
                                echo '<option value="small">'.$i.'</option>';
                            }
                        @endphp
                        </select>
                      </div>
                      <br>
                        <div class="sizes">
                            <select class="bs-select">
                            <option value="small">JNE</option>
                            <option value="medium">TIKI</option>
                            {{-- <option value="large">Large</option>
                            <option value="x-large">X Large</option> --}}
                            </select>
                        </div>
                        <p class="text-center">
                          <button type="submit" class="btn btn-template-outlined"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                          <button type="submit" data-toggle="tooltip" data-placement="top" title="Add to wishlist" class="btn btn-default"><i class="fa fa-heart-o"></i></button>
                        </p>
                      </form>
                    </div>
                    <div data-slider-id="1" class="owl-thumbs">
                      <button class="owl-thumb-item"><img src="img/detailsquare.jpg" alt="" class="img-fluid"></button>
                      <button class="owl-thumb-item"><img src="img/detailsquare2.jpg" alt="" class="img-fluid"></button>
                      <button class="owl-thumb-item"><img src="img/detailsquare3.jpg" alt="" class="img-fluid"></button>
                    </div>
                  </div>
                </div>
                <div id="details" class="box mb-4 mt-4">
                  {!!$product->description!!}
                </div>
                <div id="product-social" class="box social text-center mb-5 mt-5">
                  <h4 class="heading-light">Show it to your friends</h4>
                  <ul class="social list-inline">
                    <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="external facebook"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="external gplus"><i class="fa fa-google-plus"></i></a></li>
                    <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="external twitter"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="email"><i class="fa fa-envelope"></i></a></li>
                  </ul>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-6">
                    <div class="box text-uppercase mt-0 mb-small">
                      <h3>You may also like these products</h3>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="product">
                      <div class="image"><a href="#"><img src="img/product2.jpg" alt="" class="img-fluid image1"></a></div>
                      <div class="text">
                        <h3 class="h5"><a href="shop-detail.html">Fur coat</a></h3>
                        <p class="price">$143</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="product">
                      <div class="image"><a href="#"><img src="img/product3.jpg" alt="" class="img-fluid image1"></a></div>
                      <div class="text">
                        <h3 class="h5"><a href="shop-detail.html">Fur coat</a></h3>
                        <p class="price">$143</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="product">
                      <div class="image"><a href="#"><img src="img/product1.jpg" alt="" class="img-fluid image1"></a></div>
                      <div class="text">
                        <h3 class="h5"><a href="shop-detail.html">Fur coat</a></h3>
                        <p class="price">$143</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-6">
                    <div class="box text-uppercase mt-0 mb-small">
                      <h3>Products viewed recently</h3>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="product">
                      <div class="image"><a href="#"><img src="img/product3.jpg" alt="" class="img-fluid image1"></a></div>
                      <div class="text">
                        <h3 class="h5"><a href="shop-detail.html">Fur coat</a></h3>
                        <p class="price">$143</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="product">
                      <div class="image"><a href="#"><img src="img/product1.jpg" alt="" class="img-fluid image1"></a></div>
                      <div class="text">
                        <h3 class="h5"><a href="shop-detail.html">Fur coat</a></h3>
                        <p class="price">$143</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="product">
                      <div class="image"><a href="#"><img src="img/product2.jpg" alt="" class="img-fluid image1"></a></div>
                      <div class="text">
                        <h3 class="h5"><a href="shop-detail.html">Fur coat</a></h3>
                        <p class="price">$143</p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-3">
              <!-- MENUS AND FILTERS-->
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                  <h3 class="h4 panel-title">Categories</h3>
                </div>
                <div class="panel-body">
                  <ul class="nav nav-pills flex-column text-sm category-menu">
                      @foreach($category as $cat)
                        <li class="nav-item"><a href="{{ url('/category/'.$cat->slug) }}" class="nav-link active d-flex align-items-center justify-content-between"><span> {{ $cat->name }}  </span><span class="badge badge-light">{{ count($cat->children)}}</span></a>
                          <ul class="nav nav-pills flex-column">
                               @foreach($cat ->children as $sub)
                              <li class="nav-item"><a href="{{ url('/category/'.$sub->slug) }}" class="nav-link"> {{ $sub->name }}</a></li>
                                @endforeach
                          </ul>
                        </li>
                       @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection