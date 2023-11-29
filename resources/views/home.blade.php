@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between"><span>Sample Products</span><a class="btn btn-success" href="{{ route('products.create') }}"> Add New Product</a></div>

                <div class="card-body">
                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col-sm-4 mb-4">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title"><strong>Name : </strong>{{$product->name}}</h5>
                              <p class="card-text"><strong>Quantity : </strong>{{$product->quantity}} <strong class="ps-3">Price : </strong>{{$product->price}}</p>
                              <a class="btn btn-primary" href="#">Read More</a>
                            </div>
                          </div>
                        </div>
                        @endforeach
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
