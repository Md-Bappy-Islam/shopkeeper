@extends('layout.app')
@section('name')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="h-10">
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <a href="{{ route('summery.today') }}">
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                            Today
                                                        </p>
                                                    </div>

                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h3 class="fs-22 fw-semibold ff-secondary mb-4">
                                                            Sold items-- <span class="counter-value"
                                                                data-target="{{ $todaySales }}">0</span>
                                                        </h3>
                                                        <h3 class="fs-22 fw-semibold ff-secondary mb-4">
                                                            Ammount-$<span class="counter-value"
                                                                data-target="{{ $TotoalPrice }}">0</span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <a href="{{ route('summery.yesterday') }}">
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                            Yesterday
                                                        </p>
                                                    </div>

                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h3 class="fs-22 fw-semibold ff-secondary mb-4">
                                                            Sold items-- <span class="counter-value"
                                                                data-target="{{ $YesterdayTotalSale }}">0</span>
                                                        </h3>
                                                        <h3 class="fs-22 fw-semibold ff-secondary mb-4">
                                                            Ammount-$<span class="counter-value"
                                                                data-target="{{ $YesterdayTotalAmmount }}">0</span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <a href="{{ route('summery.thismonth') }}">
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                            This Month
                                                        </p>
                                                    </div>

                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h3 class="fs-22 fw-semibold ff-secondary mb-4">
                                                            Sold items-- <span class="counter-value"
                                                                data-target="{{ $ThisMonthTotalSale }}">0</span>
                                                        </h3>
                                                        <h3 class="fs-22 fw-semibold ff-secondary mb-4">
                                                            Ammount-$<span class="counter-value"
                                                                data-target="{{ $ThisMonthTotalAmmount }}">0</span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <a href="{{ route('summery.lastmonth') }}">
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                            Last Month
                                                        </p>
                                                    </div>

                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h3 class="fs-22 fw-semibold ff-secondary mb-4">
                                                            Sold items-- <span class="counter-value"
                                                                data-target="{{ $LastMonthTotalSale }}">0</span>
                                                        </h3>
                                                        <h3 class="fs-22 fw-semibold ff-secondary mb-4">
                                                            Ammount-$<span class="counter-value"
                                                                data-target="{{ $LastMonthTotalAmmount }}">0</span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @include('components.guest.products') --}}
@endsection
