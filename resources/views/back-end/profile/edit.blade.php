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
                                    <h4 class="text-900 mb-0" data-anchor="data-anchor">Profile Avatar</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="p-4 code-to-copy">
                                <div class="col-12">
                                    <label class="form-label" for="role">Name - {{ Auth::user()->name }}</label>
                                </div>
                                <div class="col-12">
                                    @if (Auth::user()->avatar)
                                        <div class="col-12">
                                            <img width="90" height="90" class="rounded-circle"
                                                src="{{ '/storage/' . Auth::user()->avatar }}" alt="user avatar" />
                                        </div>
                                        <form method="post" action="{{ route('profile.avatar.delete') }}">
                                            @csrf
                                            @method('patch')
                                            <button class="btn btn-secondary btn-sm me-1 mb-1 mt-1">Remove</button>
                                        </form>
                                    @else
                                        <img width="70" height="70" class="rounded-circle"
                                            src="{{ '/storage/avatars/avatar.png' }}" alt="user avatar">
                                    @endif
                                </div>
                                <form method="post" action="{{ route('profile.destroy') }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('patch')
                                    <div class="col-6 mb-3">

                                        <label class="form-label" for="customFile">Select your Avatar</label>

                                        <input class="form-control" id="avatar" name="avatar" type="file" required
                                            autofocus autocomplete="avatar" />
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border border-300 my-2 mx-2" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom border-300 bg-soft">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-900 mb-0" data-anchor="data-anchor">Profile</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="p-4 code-to-copy">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label class="form-label" for="role">Name - {{ Auth::user()->name }}</label>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label" for="name">First Name</label>
                                        <input class="form-control" id="name" type="text"
                                            placeholder="Enter First Name" value="{{ Auth::user()->name }}" />
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label" for="last_name">Last Name</label>
                                        <input class="form-control" id="last_name" type="text"
                                            placeholder="Enter Last Name" value="{{ Auth::user()->last_name }}" />
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label" for="role">Role Name</label>
                                        <input class="form-control" id="role" type="text"
                                            placeholder="Enter Role Name" />
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label" for="role">Gender</label>
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                            <option selected="">Gender</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                        </select>
                                    </div>

                                    <div class="col-6">
                                        <label class="form-label" for="organizerMultiple">Assign Permissions</label>
                                        <select class="form-select" id="organizerMultiple" data-choices="data-choices"
                                            multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                                            <option value="">Select Permission...</option>
                                            @foreach ($permissions as $key => $value)
                                                @foreach ($value as $permission)
                                                    <option>{{ $permission->name }}</option>
                                                @endforeach
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" id="gridCheck" type="checkbox" />
                                            <label class="form-check-label" for="gridCheck">Active</label>
                                        </div>
                                    </div>

                                    <div class="col-12">

                                        <button class="btn btn-primary" type="submit">Update</button>
                                    </div>
                                </div>
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
