@extends('layout.app')
@section('name')
    <div class="main-content">
        <div class="page-content col-md-12">
            <div class="col-md-12 ">
                <a href="/add_product" class="btn btn-danger col-md-2 mb-5 mt-2 "> Add Product </a>
                <h4 class="mb-4">Our Products</h4>
                <hr>
                <div class="row">
                    @if (session("success"))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="mdi mdi-check-all me-2"></i>
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    </div>
                        
                    @endif
                    @foreach ($products as $product)
                        <div class="col-md-3">
                            <div class="product-card">
                                <div class="product-card-img cardimg">
                                    <label class="stock bg-success">In Stock--{{ $product->stock }}</label>
                                    <img src="{{ asset($product->image)  }}" alt="Image">
                                </div>
                                <div class="product-card-body">
                                    <p class="product-brand">{{ $product->brand_name }}</p>
                                    <h5 class="product-name">
                                        <a href="">
                                            {{ $product->title }}
                                        </a>
                                    </h5>
                                    <div>
                                        <span class="selling-price"> ${{ $product->price -$product->discount }}</span>
                                        <span class="original-price"> ${{ $product->price }}</span>
                                    </div>
                                    <div class="mt-3">
                                        <a href="" class="btn btn-primary col-md-7">Add To Cart</a>
                                        <a href="{{ route('product.show',$product->id) }}" class="btn  btn-danger col-md-4"> View </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
