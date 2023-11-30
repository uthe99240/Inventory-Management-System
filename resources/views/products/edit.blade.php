@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between"><span>Edit Product</span><a
                            class="btn btn-primary" href="{{ route('products.index') }}"> Back</a></div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Error!</strong> <br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('products.update',$product->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                       
                             <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 pb-2">
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 pb-2">
                                    <div class="form-group">
                                        <strong>Quantiy:</strong>
                                        <input type="number" name="quantity" value="{{ $product->quantity }}" class="form-control" placeholder="Quantity">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 pb-2">
                                    <div class="form-group">
                                        <strong>Price:</strong>
                                        <input type="number" name="price" value="{{ $product->price }}" class="form-control" placeholder="Price">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-end">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
