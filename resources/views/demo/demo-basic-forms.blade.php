@extends('back-end.layouts.app')

@section('add-head-links')
    <link href="{{ asset('back-end-links/phoenix/public/vendors/choices/choices.min.css') }}" rel="stylesheet">
@endsection
@section('main-content')
    <div class="mt-4">
        <div class="row g-4">
            <div class="col-12 col-xl-12 order-1 order-xl-0">
                <div class="mb-9">
                    <div class="card shadow-none border border-300 my-2 mx-2" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom border-300 bg-soft">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-900 mb-0" data-anchor="data-anchor">Form Grid Layout</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="p-4 code-to-copy">
                                <form class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label" for="inputEmail4">Email</label>
                                        <input class="form-control" id="inputEmail4" type="email" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="inputPassword4">Password</label>
                                        <input class="form-control" id="inputPassword4" type="password" />
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="inputAddress">Address</label>
                                        <input class="form-control" id="inputAddress" type="text"
                                            placeholder="1234 Main St" />
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="inputAddress2">Address 2</label>
                                        <input class="form-control" id="inputAddress2" type="text"
                                            placeholder="Apartment, studio, or floor" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="inputCity">City</label>
                                        <input class="form-control" id="inputCity" type="text" />
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label" for="inputState">State</label>
                                        <select class="form-select" id="inputState">
                                            <option selected="selected">Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label" for="inputZip">Zip</label>
                                        <input class="form-control" id="inputZip" type="text" />
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label" for="organizerMultiple">Multiple</label>
                                        <select class="form-select" id="organizerMultiple" data-choices="data-choices"
                                            multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                                            <option value="">Select organizer...</option>
                                            <option>Massachusetts Institute of Technology</option>
                                            <option>University of Chicago</option>
                                            <option>GSAS Open Labs At Harvard</option>
                                            <option>California Institute of Technology</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" id="gridCheck" type="checkbox" />
                                            <label class="form-check-label" for="gridCheck">Check meout</label>
                                        </div>
                                    </div>

                                    <div class="col-12">

                                        <button class="btn btn-primary" type="submit">Sign in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
        <div class="toast align-items-center text-white bg-dark border-0 light" id="icon-copied-toast" role="alert"
            aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body p-3"></div>
                <button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>
@endsection
@section('add-footer-links')
    <script src="{{ asset('back-end-links/phoenix/public/vendors/choices/choices.min.js') }}"></script>
@endsection
