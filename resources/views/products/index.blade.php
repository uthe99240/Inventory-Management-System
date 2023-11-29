@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between"><span>Products List</span><a
                            class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a></div>

                    <div class="card-body">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Product Quantity</th>
                                    <th scope="col">Product Price</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <th scope="row">{{ $product->id }}</th>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">

                                                <a class="btn btn-info"
                                                    href="{{ route('products.show', $product->id) }}">Show</a>

                                                <a class="btn btn-primary"
                                                    href="{{ route('products.edit', $product->id) }}">Edit</a>

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mx-3">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
