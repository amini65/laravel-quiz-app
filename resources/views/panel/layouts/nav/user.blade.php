<div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
    <!--begin::Menu wrapper-->
    <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
        @if(\Illuminate\Support\Facades\Auth::user())
            <img alt="Pic" src="{{ asset(\Illuminate\Support\Facades\Auth::user()->image) }}">
        @else
            <img alt="Pic" src="{{ asset('images/avatar.svg') }}" />
        @endif
    </div>
    <!--begin::User account menu-->
    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
        <!--begin::Menu item-->
        <div class="menu-item px-3">
            <div class="menu-content d-flex align-items-center px-3">
                <!--begin::Avatar-->
                <div class="symbol symbol-50px me-5">
                    @if(\Illuminate\Support\Facades\Auth::user())
                        <img alt="Pic" src="{{ asset(\Illuminate\Support\Facades\Auth::user()->image) }}">
                    @else
                        <img alt="Pic" src="{{ asset('images/avatar.svg') }}" />
                    @endif
                </div>
                <!--end::Avatar-->
                <!--begin::Username-->
                <div class="d-flex flex-column">
                    <div class="fw-bold d-flex align-items-center fs-5">{!! \Illuminate\Support\Facades\Auth::user()->name !!}
                        <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span></div>
                    <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{!! \Illuminate\Support\Facades\Auth::user()->email !!}</a>
                </div>
                <!--end::Username-->
            </div>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu separator-->
        <div class="separator my-2"></div>
        <!--end::Menu separator-->
        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <a href="#" class="menu-link px-5">{{__('profile')}}</a>
        </div>

        <div class="separator my-2"></div>
        <!--end::Menu separator-->
        <!--begin::Menu item-->
        <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
            <a href="#" class="menu-link px-5">
                <span class="menu-title position-relative">Language
                <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
                <img class="w-15px h-15px rounded-1 ms-2" src="{{ asset('images/flags/united-states.svg') }}" alt="" /></span></span>
            </a>
            <!--begin::Menu sub-->
            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="#" class="menu-link d-flex px-5 active">
                            <span class="symbol symbol-20px me-4">
                                <img class="rounded-1" src="{{ asset('images/flags/united-states.svg') }}" alt="" />
                            </span>English</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="#" class="menu-link d-flex px-5">
                        <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="{{ asset('images/flags/spain.svg') }}" alt="" />
                        </span>Spanish</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="#" class="menu-link d-flex px-5">
                        <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="{{ asset('images/flags/germany.svg') }}" alt="" />
                        </span>German</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="#" class="menu-link d-flex px-5">
                        <span class="symbol symbol-20px me-4">
                             <img class="rounded-1" src="{{ asset('images/flags/japan.svg') }}" alt="" />
                        </span>Japanese</a>
                </div>
            </div>
            <!--end::Menu sub-->
        </div>


        <div class="menu-item px-5">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="menu-link px-5">{{ __('sign out') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        <!--end::Menu item-->
    </div>
</div>
