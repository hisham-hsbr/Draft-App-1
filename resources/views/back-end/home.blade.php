@extends('back-end.layouts.app')

@section('main-content')
    <div class="col-12 col-md-6">
        <div class="card h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5 class="mb-2">Top coupons</h5>
                        <h6 class="text-700">Last 7 days</h6>
                    </div>
                </div>
                <div class="pb-4 pt-3">
                    <div class="echart-top-coupons" style="height: 115px; width: 100%"></div>
                </div>
                <div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="bullet-item bg-primary me-2"></div>
                        <h6 class="text-900 fw-semi-bold flex-1 mb-0">
                            Percentage discount
                        </h6>
                        <h6 class="text-900 fw-semi-bold mb-0">72%</h6>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="bullet-item bg-primary-200 me-2"></div>
                        <h6 class="text-900 fw-semi-bold flex-1 mb-0">
                            Fixed card discount
                        </h6>
                        <h6 class="text-900 fw-semi-bold mb-0">18%</h6>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="bullet-item bg-info-500 me-2"></div>
                        <h6 class="text-900 fw-semi-bold flex-1 mb-0">
                            Fixed product discount
                        </h6>
                        <h6 class="text-900 fw-semi-bold mb-0">10%</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
