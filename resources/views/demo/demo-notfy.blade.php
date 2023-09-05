@extends('back-end.layouts.app')

@section('add-head-links')
    <link href="{{ asset('back-end-links/phoenix/public/vendors/choices/choices.min.css') }}" rel="stylesheet">
@endsection
@section('main-content')
    <div class="mt-4">
        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
        @endif
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
                                <form class="row g-3" role="form" action="{{ route('n.store') }}" method="post"
                                    enctype="multipart/form-data" id="quickForm">
                                    {{ csrf_field() }}
                                    {{ method_field('patch') }}
                                    <div class="col-12">
                                        <label class="form-label" for="role">Message</label>
                                        <input class="form-control" id="message" type="text" name="message"
                                            value="{{ old('message') }}" placeholder="Enter Message" />
                                        @if (count($errors) > 0)
                                            @foreach ($errors->get('name') as $error)
                                                {{-- <p class="alert alert-danger">{{ $error }}</p> --}}
                                                <label style="color: red" class="form-label" for="role">{{ $error }}</label>
                                            @endforeach
                                        @endif
                                    </div>

                                    <div class="col-6">
                                        <label class="form-label" for="organizerMultiple">Assign Permissions</label>
                                        <select class="form-select" name="user[]" id="organizerMultiple"
                                            data-choices="data-choices" multiple="multiple"
                                            data-options='{"removeItemButton":true,"placeholder":true}'>
                                            <option value="">Select user...</option>
                                            @foreach ($users as $user)
                                                    <option value="{{ $user->id }}" id="{{ $user->id }}">
                                                        {{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" name="status" value="1" id="status"
                                                type="checkbox" />
                                            <label class="form-check-label" for="status">Active</label>
                                        </div>
                                    </div>

                                    <div class="col-12">

                                        <button class="btn btn-primary" type="submit">Save</button>
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
