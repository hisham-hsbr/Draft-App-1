@extends('back-end.layouts.app')

@section('add-head-links')
    <link href="{{ asset('back-end-links/phoenix/public/vendors/choices/choices.min.css') }}" rel="stylesheet">
@endsection
@section('main-content')
    <div class="mb-12">
        <div class="card shadow-none border border-300 mb-3 mt-6" data-component-card="data-component-card">
            <div class="card-header p-4 border-bottom border-300 bg-soft">
                <div class="row g-3 justify-content-between align-items-center">
                    <div class="col-12 col-md">
                        <h4 class="text-900 mb-0" data-anchor="data-anchor">Multiple Select Example</h4>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="p-4 code-to-copy">
                    <label for="organizerMultiple">Multiple</label>
                    <select class="form-select" id="organizerMultiple" data-choices="data-choices" multiple="multiple"
                        data-options='{"removeItemButton":true,"placeholder":true}'>
                        <option value="">Select organizer...</option>
                        <option>Massachusetts Institute of Technology</option>
                        <option>University of Chicago</option>
                        <option>GSAS Open Labs At Harvard</option>
                        <option>California Institute of Technology</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('add-footer-links')
    <script src="{{ asset('back-end-links/phoenix/public/vendors/choices/choices.min.js') }}"></script>
@endsection
