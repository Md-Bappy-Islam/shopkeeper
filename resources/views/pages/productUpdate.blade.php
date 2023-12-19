@extends('layout.app')
@section('name')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="h-10">
                        <div class="row">
                            @if (session("success"))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-check-all me-2"></i>
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                            </div>
                                
                            @endif
                            @foreach ($productDetails as $product)
                            <form action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method("PUT")
                                <div class="row">
                                    <div class="col-12">
                                            <label for="firstNameinput" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="firstNameinput" name="title" value="{{ $product->title }}">
                                            @error('title')
                                                <p class="text-danger"> {{ $message }}</p>
                                            @enderror
                                        </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="compnayNameinput" class="form-label">Description</label>
                                            {{-- <input type="text" class="form-control" id="compnayNameinput" name="description"> --}}
                                            <textarea name="description" value="{{ $product->description}}" id="compnayNameinput" class="form-control">{{ $product->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="phonenumberInput" class="form-label">Price</label>
                                            <input type="text" class="form-control"  id="phonenumberInput" name="price" value="{{ $product->price }}" >
                                            @error('price')
                                            <p class="text-danger"> {{ $message }}</p>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="emailidInput" class="form-label">Stock</label>
                                            <input type="text" class="form-control" id="emailidInput" name="stock" value="{{ $product->stock }}" >
                                            @error('stock')
                                            <p class="text-danger"> {{ $message }}</p>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="address1ControlTextarea" class="form-label">Discount</label>
                                            <input type="text" class="form-control" id="address1ControlTextarea" name="discount" value="{{ $product->discount }}" >
                                            @error('discount')
                                            <p class="text-danger"> {{ $message }}</p>
                                        @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="address1ControlTextarea" class="form-label">Brands</label>
                                            <input type="text" class="form-control" id="address1ControlTextarea" name="brands" value="{{ $product->brand_name }}" >
                                            @error('brands')
                                            <p class="text-danger"> {{ $message }}</p>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="ForminputState" class="form-label">Category</label>
                                            <select id="ForminputState" class="form-select" name="category" value="" >
                                                @foreach ($categorys as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="citynameInput" class="form-label">Images</label>
                                            <input type="File" class="form-control" id="citynameInput" name="image" >
                                        
                                            @error('image')
                                            <p class="text-danger"> {{ $message }}</p>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="text-end">
                                            <a class="btn btn-success" href="{{ route('product.show',$product->id) }}">Back</a>
                                            <input type="submit" value="submit" class="btn  btn-primary " name="submit">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection