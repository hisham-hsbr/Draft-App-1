<div class="border-300">
    @foreach (Auth()->user()->unreadNotifications as $notification)
    <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
        <div class="d-flex align-items-center justify-content-between position-relative">
            <div class="d-flex">
                <div class="avatar avatar-m status-online me-3">
                    <div class="avatar-name rounded-circle">
                        <span>J</span>
                    </div>
                </div>
                <div class="flex-1 me-sm-3">
                    <h4 class="fs--1 text-black">{{ $notification->data['name'] }}</h4>
                    <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal">
                        <span class="me-1 fs--2">📅</span>{{ $notification->data['data'] }}<br/><span class="ms-2 text-400 fw-bold fs--2">{{ $notification->created_at->diffForHumans() }}</span>
                    </p>
                    <p class="text-800 fs--1 mb-0">
                        <span class="me-1 fas fa-clock"></span><span class="fw-bold">{{ $notification->created_at->format('h:i:s A') }}, </span> {{ $notification->created_at->format('D M Y') }}
                    </p>
                </div>
            </div>
            <div class="font-sans-serif d-none d-sm-block">
                <button
                    class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                    type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                    aria-expanded="false" data-bs-reference="parent">
                    <span class="fas fa-ellipsis-h fs--2 text-900"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-end py-2">
                    <a class="dropdown-item" href="{{ route('markAsRead',$notification->id) }}">Mark as unread</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    @foreach (Auth()->user()->readNotifications as $notification)
        <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read border-bottom">
            <div class="d-flex align-items-center justify-content-between position-relative">
                <div class="d-flex">
                    <div class="avatar avatar-m status-online me-3">
                        <img class="rounded-circle"
                            src="{{ asset('back-end-links/phoenix/public/assets/img/team/40x40/30.webp') }}"
                            alt="" />
                    </div>
                    <div class="flex-1 me-sm-3">
                        <h4 class="fs--1 text-black">{{ $notification->data['name'] }}</h4>
                        <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal">
                            <span class="me-1 fs--2">💬</span>{{ $notification->data['data'] }}<br/><span
                                class="ms-2 text-400 fw-bold fs--2">{{ $notification->created_at->diffForHumans() }}</span>
                        </p>
                        <p class="text-800 fs--1 mb-0">
                            <span class="me-1 fas fa-clock"></span><span class="fw-bold">{{ $notification->created_at->format('h:i:s A') }}, </span> {{ $notification->created_at->format('D M Y') }}
                        </p>
                    </div>
                </div>
                <div class="font-sans-serif d-none d-sm-block">
                    <button
                        class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                        type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                        aria-expanded="false" data-bs-reference="parent">
                        <span class="fas fa-ellipsis-h fs--2 text-900"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end py-2">
                        <a class="dropdown-item" href="#!">Mark as unread</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div>
{{-- <div class="border-300">
    <div
        class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
        <div
            class="d-flex align-items-center justify-content-between position-relative">
            <div class="d-flex">
                <div class="avatar avatar-m status-online me-3">
                    <img class="rounded-circle"
                        src="{{ asset('back-end-links/phoenix/public/assets/img/team/40x40/57.webp') }}"
                        alt="" />
                </div>
                <div class="flex-1 me-sm-3">
                    <h4 class="fs--1 text-black">Kiera Anderson</h4>
                    <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal">
                        <span class="me-1 fs--2">💬</span>Mentioned
                        you in a comment.<span
                            class="ms-2 text-400 fw-bold fs--2"></span>
                    </p>
                    <p class="text-800 fs--1 mb-0">
                        <span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">9:11 AM </span>August
                        7,2021
                    </p>
                </div>
            </div>
            <div class="font-sans-serif d-none d-sm-block">
                <button
                    class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                    aria-haspopup="true" aria-expanded="false"
                    data-bs-reference="parent">
                    <span class="fas fa-ellipsis-h fs--2 text-900"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-end py-2">
                    <a class="dropdown-item" href="#!">Mark as unread</a>
                </div>
            </div>
        </div>
    </div>
    <div
        class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
        <div
            class="d-flex align-items-center justify-content-between position-relative">
            <div class="d-flex">
                <div class="avatar avatar-m status-online me-3">
                    <img class="rounded-circle"
                        src="{{ asset('back-end-links/phoenix/public/assets/img/team/40x40/59.webp') }}"
                        alt="" />
                </div>
                <div class="flex-1 me-sm-3">
                    <h4 class="fs--1 text-black">Herman Carter</h4>
                    <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal">
                        <span class="me-1 fs--2">👤</span>Tagged you
                        in a comment.<span class="ms-2 text-400 fw-bold fs--2"></span>
                    </p>
                    <p class="text-800 fs--1 mb-0">
                        <span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">10:58 PM </span>August
                        7,2021
                    </p>
                </div>
            </div>
            <div class="font-sans-serif d-none d-sm-block">
                <button
                    class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                    aria-haspopup="true" aria-expanded="false"
                    data-bs-reference="parent">
                    <span class="fas fa-ellipsis-h fs--2 text-900"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-end py-2">
                    <a class="dropdown-item" href="#!">Mark as unread</a>
                </div>
            </div>
        </div>
    </div>
    <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read">
        <div
            class="d-flex align-items-center justify-content-between position-relative">
            <div class="d-flex">
                <div class="avatar avatar-m status-online me-3">
                    <img class="rounded-circle"
                        src="{{ asset('back-end-links/phoenix/public/assets/img/team/40x40/58.webp') }}"
                        alt="" />
                </div>
                <div class="flex-1 me-sm-3">
                    <h4 class="fs--1 text-black">
                        Benjamin Button
                    </h4>
                    <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal">
                        <span class="me-1 fs--2">👍</span>Liked your
                        comment.<span class="ms-2 text-400 fw-bold fs--2"></span>
                    </p>
                    <p class="text-800 fs--1 mb-0">
                        <span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">10:18 AM </span>August
                        7,2021
                    </p>
                </div>
            </div>
            <div class="font-sans-serif d-none d-sm-block">
                <button
                    class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                    aria-haspopup="true" aria-expanded="false"
                    data-bs-reference="parent">
                    <span class="fas fa-ellipsis-h fs--2 text-900"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-end py-2">
                    <a class="dropdown-item" href="#!">Mark as unread</a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- <div class="border-300">
    <div
        class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read border-bottom">
        <div
            class="d-flex align-items-center justify-content-between position-relative">
            <div class="d-flex">
                <div class="avatar avatar-m status-online me-3">
                    <img class="rounded-circle"
                        src="{{ asset('back-end-links/phoenix/public/assets/img/team/40x40/30.webp') }}"
                        alt="" />
                </div>
                <div class="flex-1 me-sm-3">
                    <h4 class="fs--1 text-black">Jessie Samson</h4>
                    <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal">
                        <span class="me-1 fs--2">💬</span>Mentioned
                        you in a comment.<span
                            class="ms-2 text-400 fw-bold fs--2">10m</span>
                    </p>
                    <p class="text-800 fs--1 mb-0">
                        <span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">10:41 AM </span>August
                        7,2021
                    </p>
                </div>
            </div>
            <div class="font-sans-serif d-none d-sm-block">
                <button
                    class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                    aria-haspopup="true" aria-expanded="false"
                    data-bs-reference="parent">
                    <span class="fas fa-ellipsis-h fs--2 text-900"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-end py-2">
                    <a class="dropdown-item" href="#!">Mark as unread</a>
                </div>
            </div>
        </div>
    </div>
    <div
        class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read border-bottom">
        <div
            class="d-flex align-items-center justify-content-between position-relative">
            <div class="d-flex">
                <div class="avatar avatar-m status-online me-3">
                    <img class="rounded-circle"
                        src="{{ asset('back-end-links/phoenix/public/assets/img/team/40x40/30.webp') }}"
                        alt="" />
                </div>
                <div class="flex-1 me-sm-3">
                    <h4 class="fs--1 text-black">Jessie Samson</h4>
                    <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal">
                        <span class="me-1 fs--2">💬</span>Mentioned
                        you in a comment.<span
                            class="ms-2 text-400 fw-bold fs--2">10m</span>
                    </p>
                    <p class="text-800 fs--1 mb-0">
                        <span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">10:41 AM </span>August
                        7,2021
                    </p>
                </div>
            </div>
            <div class="font-sans-serif d-none d-sm-block">
                <button
                    class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                    aria-haspopup="true" aria-expanded="false"
                    data-bs-reference="parent">
                    <span class="fas fa-ellipsis-h fs--2 text-900"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-end py-2">
                    <a class="dropdown-item" href="#!">Mark as unread</a>
                </div>
            </div>
        </div>
    </div>
    <div
        class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
        <div
            class="d-flex align-items-center justify-content-between position-relative">
            <div class="d-flex">
                <div class="avatar avatar-m status-online me-3">
                    <div class="avatar-name rounded-circle">
                        <span>J</span>
                    </div>
                </div>
                <div class="flex-1 me-sm-3">
                    <h4 class="fs--1 text-black">Jane Foster</h4>
                    <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal">
                        <span class="me-1 fs--2">📅</span>Created an
                        event.<span class="ms-2 text-400 fw-bold fs--2">20m</span>
                    </p>
                    <p class="text-800 fs--1 mb-0">
                        <span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">10:20 AM </span>August
                        7,2021
                    </p>
                </div>
            </div>
            <div class="font-sans-serif d-none d-sm-block">
                <button
                    class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                    aria-haspopup="true" aria-expanded="false"
                    data-bs-reference="parent">
                    <span class="fas fa-ellipsis-h fs--2 text-900"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-end py-2">
                    <a class="dropdown-item" href="#!">Mark as unread</a>
                </div>
            </div>
        </div>
    </div>
    <div
        class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
        <div
            class="d-flex align-items-center justify-content-between position-relative">
            <div class="d-flex">
                <div class="avatar avatar-m status-online me-3">
                    <img class="rounded-circle avatar-placeholder"
                        src="{{ asset('back-end-links/phoenix/public/assets/img/team/40x40/avatar.webp') }}"
                        alt="" />
                </div>
                <div class="flex-1 me-sm-3">
                    <h4 class="fs--1 text-black">Jessie Samson</h4>
                    <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal">
                        <span class="me-1 fs--2">👍</span>Liked your
                        comment.<span class="ms-2 text-400 fw-bold fs--2">1h</span>
                    </p>
                    <p class="text-800 fs--1 mb-0">
                        <span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">9:30 AM </span>August
                        7,2021
                    </p>
                </div>
            </div>
            <div class="font-sans-serif d-none d-sm-block">
                <button
                    class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                    aria-haspopup="true" aria-expanded="false"
                    data-bs-reference="parent">
                    <span class="fas fa-ellipsis-h fs--2 text-900"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-end py-2">
                    <a class="dropdown-item" href="#!">Mark as unread</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="border-300">
    <div
        class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
        <div
            class="d-flex align-items-center justify-content-between position-relative">
            <div class="d-flex">
                <div class="avatar avatar-m status-online me-3">
                    <img class="rounded-circle"
                        src="{{ asset('back-end-links/phoenix/public/assets/img/team/40x40/57.webp') }}"
                        alt="" />
                </div>
                <div class="flex-1 me-sm-3">
                    <h4 class="fs--1 text-black">Kiera Anderson</h4>
                    <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal">
                        <span class="me-1 fs--2">💬</span>Mentioned
                        you in a comment.<span
                            class="ms-2 text-400 fw-bold fs--2"></span>
                    </p>
                    <p class="text-800 fs--1 mb-0">
                        <span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">9:11 AM </span>August
                        7,2021
                    </p>
                </div>
            </div>
            <div class="font-sans-serif d-none d-sm-block">
                <button
                    class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                    aria-haspopup="true" aria-expanded="false"
                    data-bs-reference="parent">
                    <span class="fas fa-ellipsis-h fs--2 text-900"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-end py-2">
                    <a class="dropdown-item" href="#!">Mark as unread</a>
                </div>
            </div>
        </div>
    </div>
    <div
        class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
        <div
            class="d-flex align-items-center justify-content-between position-relative">
            <div class="d-flex">
                <div class="avatar avatar-m status-online me-3">
                    <img class="rounded-circle"
                        src="{{ asset('back-end-links/phoenix/public/assets/img/team/40x40/59.webp') }}"
                        alt="" />
                </div>
                <div class="flex-1 me-sm-3">
                    <h4 class="fs--1 text-black">Herman Carter</h4>
                    <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal">
                        <span class="me-1 fs--2">👤</span>Tagged you
                        in a comment.<span class="ms-2 text-400 fw-bold fs--2"></span>
                    </p>
                    <p class="text-800 fs--1 mb-0">
                        <span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">10:58 PM </span>August
                        7,2021
                    </p>
                </div>
            </div>
            <div class="font-sans-serif d-none d-sm-block">
                <button
                    class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                    aria-haspopup="true" aria-expanded="false"
                    data-bs-reference="parent">
                    <span class="fas fa-ellipsis-h fs--2 text-900"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-end py-2">
                    <a class="dropdown-item" href="#!">Mark as unread</a>
                </div>
            </div>
        </div>
    </div>
    <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read">
        <div
            class="d-flex align-items-center justify-content-between position-relative">
            <div class="d-flex">
                <div class="avatar avatar-m status-online me-3">
                    <img class="rounded-circle"
                        src="{{ asset('back-end-links/phoenix/public/assets/img/team/40x40/58.webp') }}"
                        alt="" />
                </div>
                <div class="flex-1 me-sm-3">
                    <h4 class="fs--1 text-black">
                        Benjamin Button
                    </h4>
                    <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal">
                        <span class="me-1 fs--2">👍</span>Liked your
                        comment.<span class="ms-2 text-400 fw-bold fs--2"></span>
                    </p>
                    <p class="text-800 fs--1 mb-0">
                        <span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">10:18 AM </span>August
                        7,2021
                    </p>
                </div>
            </div>
            <div class="font-sans-serif d-none d-sm-block">
                <button
                    class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                    aria-haspopup="true" aria-expanded="false"
                    data-bs-reference="parent">
                    <span class="fas fa-ellipsis-h fs--2 text-900"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-end py-2">
                    <a class="dropdown-item" href="#!">Mark as unread</a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
