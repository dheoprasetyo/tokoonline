@extends('frontend.index')
@section('slide')
 
@endsection
@section('content')
<div id="heading-breadcrumbs">
    <div class="container">
      <div class="row d-flex align-items-center flex-wrap">
        <div class="col-md-7">
          <h1 class="h2">My Orders</h1>
        </div>
        <div class="col-md-5">
          <ul class="breadcrumb d-flex justify-content-end">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">My Orders</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div id="content">
    <div class="container">
      <div class="row bar mb-0">
        <div id="customer-orders" class="col-md-9">
          <p class="text-muted lead">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>
          <div class="box mt-0 mb-lg-0">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Code</th>
                    <th>Member</th>
                    <th>Ekspedisi</th>
                    <th>Pembayaran</th>
                    <th>Menu</th>
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
                            <a href="{{url('transaction/'.$row->code.'/'.$row->status) }}" class="badge badge-danger">Belum</a>
                          @else
                            <a href="{{url('transaction/'.$row->code.'/'.$row->status) }}" class="btn btn-success btn-xs">Sudah</a>
                          @endif
                      </td>
                      <td>
                        <a href="{{ url('transaction/'.$row->code.'/detail/data') }}" class="btn btn-template-outlined btn-sm">Detail</a>
                      </td>
                      
                  </tr>
                      
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-3 mt-4 mt-md-0">
          <!-- CUSTOMER MENU -->
          <div class="panel panel-default sidebar-menu">
            <div class="panel-heading">
              <h3 class="h4 panel-title">Customer section</h3>
            </div>
            <div class="panel-body">
              <ul class="nav nav-pills flex-column text-sm">
                <li class="nav-item"><a href="customer-orders.html" class="nav-link active"><i class="fa fa-list"></i> My orders</a></li>
                <li class="nav-item"><a href="customer-wishlist.html" class="nav-link"><i class="fa fa-heart"></i> My wishlist</a></li>
                <li class="nav-item"><a href="customer-account.html" class="nav-link"><i class="fa fa-user"></i> My account</a></li>
                <li class="nav-item"><a href="index.html" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- GET IT-->
  <div class="get-it">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 text-center p-3">
          <h3>Do you want cool website like this one?</h3>
        </div>
        <div class="col-lg-4 text-center p-3">   <a href="#" class="btn btn-template-outlined-white">Buy this template now</a></div>
      </div>
    </div>
  </div>
@endsection
@section('script')

@endsection
@show