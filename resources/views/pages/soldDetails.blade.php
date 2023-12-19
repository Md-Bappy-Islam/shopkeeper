@extends('layout.app')
@section('name')


<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="h-10">
                        <div class="row">
                            <div class="listjs-table" id="customerList">
                                <div class="row g-4 mb-3">
                                    <div class="col-sm-auto">
                                        <div>
                                            <a href="{{ route('home') }}" class="btn btn-primary add-btn" ><i class=" ri-arrow-left-line align-bottom me-1"></i> Back </a>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="table-responsive table-card mt-3 mb-1">
                                    <table class="table align-middle table-nowrap" id="customerTable">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Sold Id</th>
                                                <th>Customer Id</th>
                                                <th>Seller Id</th>
                                                <th>Quantity </th>
                                                <th>Unit Price</th>
                                                <th>Total Price</th>
                                                <th>Sold Time</th>
                                            </tr>
                                        </thead>
                                        <thead class="thead-light">
                                           @foreach ($solds as $sold)
                                           <tr nth-child="odd">
                                            <th>{{ $sold->id }}</th>
                                            <th>{{ $sold->customer_id }}</th>
                                            <th>{{ $sold->user_id }}</th>
                                            <th>{{ $sold->quantity }}</th>
                                            <th>{{ $sold->unit_price }}</th>
                                            <th>{{ $sold->total_price }}</th>
                                            <th>{{ $sold->created_at }}</th>
                                          
                                        </tr>
                                           @endforeach
                                        </thead>
                                    </table>
                                    <div class="noresult" style="display: none">
                                        <div class="text-center">
                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#25a0e2,secondary:#00bd9d" style="width:75px;height:75px">
                                            </lord-icon>
                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                            <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
                                                orders for you search.</p>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="d-flex justify-content-end">
                                    <div class="pagination-wrap hstack gap-2">
                                        <a class="page-item pagination-prev disabled" href="javascrpit:void(0)">
                                            Previous
                                        </a>
                                        <ul class="pagination listjs-pagination mb-0"><li class="active"><a class="page" href="#" data-i="1" data-page="8">1</a></li></ul>
                                        <a class="page-item pagination-next" href="javascript:void(0);">
                                            Next
                                        </a>
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

@endsection