@extends('layout.app')
@section('name')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    @if (session("success"))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="mdi mdi-check-all me-2"></i>
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    </div>
                        
                    @endif
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Product Details</h4>
                            <a href="{{ route('product.all') }}" class="btn btn-success ">Back</a>
                        </div>
                    </div>
                </div>
                @foreach ($productDetails as $product)
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row gx-lg-5">
                                    <div class="col-xl-4 col-md-8 mx-auto">
                                        <div class="product-img-slider sticky-side-div">
                                            <div class="swiper product-nav-slider mt-2">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="nav-slide-item ">
                                                            <img src="{{ asset($product->image) }}"
                                                                alt="" class="img-fluid d-block" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <div class="mt-xl-0 mt-5">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <h4>{{ $product->title}}</h4>
                                                    <div class="hstack gap-3 flex-wrap">
                                                        <div><a href="#" class="text-primary d-block">Tommy
                                                                Hilfiger</a></div>
                                                        <div class="vr"></div>
                                                        <div class="text-muted">Seller : <span
                                                                class="text-body fw-medium">{{ $product->user_id}}</span>
                                                        </div>
                                                        <div class="vr"></div>
                                                        <div class="text-muted">Published : <span
                                                                class="text-body fw-medium">{{ $product->created_at}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div>
                                                        <form action="{{ route('product.delete',$product->id) }}" method="POST" class="btn btn-light"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Delete">
                                                        @csrf
                                                        @method ("DELETE")
                                                        <button type="submit"><i class="ri-delete-bin-2-line align-bottom "></i></button>
                                                        </form>
                                                            <a href="{{ route('product.update',$product->id) }}" class="btn btn-light"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Edit"><i class="ri-pencil-fill align-bottom"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="p-2 border border-dashed rounded">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm me-2">
                                                                <div
                                                                    class="avatar-title rounded bg-transparent text-primary fs-24">
                                                                    <i class="ri-money-dollar-circle-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <p class="text-muted mb-1">Price :</p>
                                                                <h5 class="mb-0">{{ $product->price-$product->discount}}</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="p-2 border border-dashed rounded">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm me-2">
                                                                <div
                                                                    class="avatar-title rounded bg-transparent text-primary fs-24">
                                                                    <i class="ri-file-copy-2-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <p class="text-muted mb-1">No. of Orders :</p>
                                                                <h5 class="mb-0">199</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="p-2 border border-dashed rounded">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm me-2">
                                                                <div
                                                                    class="avatar-title rounded bg-transparent text-primary fs-24">
                                                                    <i class="ri-stack-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <p class="text-muted mb-1">Available Stocks :</p>
                                                                <h5 class="mb-0">{{ $product->stock}}</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="p-2 border border-dashed rounded">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm me-2">
                                                                <div
                                                                    class="avatar-title rounded bg-transparent text-primary fs-24">
                                                                    <i class="ri-inbox-archive-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <p class="text-muted mb-1">Total Revenue :</p>
                                                                <h5 class="mb-0">${{ $product->price*199}}</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content mt-5">
                                                <h5 class="fs-14 mb-3">Product Description :</h5>
                                                <nav>
                                                    <ul class="nav nav-tabs nav-tabs-custom nav-primary" id="nav-tab"
                                                        role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="nav-speci-tab"
                                                                data-bs-toggle="tab" href="#nav-speci" role="tab"
                                                                aria-controls="nav-speci"
                                                                aria-selected="true">Specification</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="nav-detail-tab" data-bs-toggle="tab"
                                                                href="#nav-detail" role="tab" aria-controls="nav-detail"
                                                                aria-selected="false">Details</a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                <div class="tab-content border border-top-0 p-4" id="nav-tabContent">
                                                    <div class="tab-pane fade show active" id="nav-speci" role="tabpanel"
                                                        aria-labelledby="nav-speci-tab">
                                                        <div class="table-responsive">
                                                            <table class="table mb-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row" style="width: 200px;">
                                                                            Category</th>
                                                                        <td>{{ $product->category_id}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Brand</th>
                                                                        <td>{{ $product->brand_name}}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="nav-detail" role="tabpanel"
                                                        aria-labelledby="nav-detail-tab">
                                                        <div>
                                                            <h5 class="font-size-16 mb-3">{{ $product->title}}</h5>
                                                            <p>{{ $product->description}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-5">
                                                <div>
                                                    <h5 class="fs-14 mb-3">Ratings & Reviews</h5>
                                                </div>
                                                <div class="row gy-4 gx-0">
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <div class="pb-3">
                                                                <div class="bg-light px-3 py-2 rounded-2 mb-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-grow-1">
                                                                            <div class="fs-16 align-middle text-warning">
                                                                                <i class="ri-star-fill"></i>
                                                                                <i class="ri-star-fill"></i>
                                                                                <i class="ri-star-fill"></i>
                                                                                <i class="ri-star-fill"></i>
                                                                                <i class="ri-star-fill"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-shrink-0">
                                                                            <h6 class="mb-0"></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="text-center">
                                                                    <div class="text-muted">Total <span
                                                                            class="fw-medium">00</span> reviews
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="ps-lg-4">
                                                            <div class="d-flex flex-wrap align-items-start gap-3">
                                                                <h5 class="fs-14">Reviews: </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
