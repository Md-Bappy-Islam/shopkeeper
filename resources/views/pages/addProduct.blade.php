@extends('layout.app')
@section('name')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="h-10">
                        <div class="row">
                            <form action="{{ route('product.add') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                            <label for="firstNameinput" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="firstNameinput" name="title" value="{{ old('title') }}">
                                            @error('title')
                                                <p class="text-danger"> {{ $message }}</p>
                                            @enderror
                                        </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="compnayNameinput" class="form-label">Description</label>
                                            {{-- <input type="text" class="form-control" id="compnayNameinput" name="description"> --}}
                                            <textarea name="description" value="{{ old('description') }}" id="compnayNameinput" class="form-control"></textarea>
                                            @error('description')
                                            <p class="text-danger"> {{ $message }}</p>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="phonenumberInput" class="form-label">Price</label>
                                            <input type="text" class="form-control"  id="phonenumberInput" name="price" value="{{ old('price') }}" >
                                            @error('price')
                                            <p class="text-danger"> {{ $message }}</p>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="emailidInput" class="form-label">Stock</label>
                                            <input type="text" class="form-control" id="emailidInput" name="stock" value="{{ old('stock') }}" >
                                            @error('stock')
                                            <p class="text-danger"> {{ $message }}</p>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="address1ControlTextarea" class="form-label">Discount</label>
                                            <input type="text" class="form-control" id="address1ControlTextarea" name="discount" value="{{ old('discount') }}" >
                                            @error('discount')
                                            <p class="text-danger"> {{ $message }}</p>
                                        @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="address1ControlTextarea" class="form-label">Brands</label>
                                            <input type="text" class="form-control" id="address1ControlTextarea" name="brands" value="{{ old('brands') }}" >
                                            @error('brands')
                                            <p class="text-danger"> {{ $message }}</p>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="ForminputState" class="form-label">Category</label>
                                            <select id="ForminputState" class="form-select" name="category" value="{{ old('category') }}" >
                                                @foreach ($categorys as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="citynameInput" class="form-label">Images</label>
                                            <input type="File" class="form-control" id="citynameInput" name="image" value="{{ old('image') }}" >
                                            @error('image')
                                            <p class="text-danger"> {{ $message }}</p>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="text-end">
                                            <a class="btn btn-success" href="{{ route('product.all') }}">Back</a>
                                            <input type="submit" value="submit" class="btn  btn-primary " name="submit">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection