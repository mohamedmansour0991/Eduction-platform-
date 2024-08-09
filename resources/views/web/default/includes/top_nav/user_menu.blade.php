@if(!empty($authUser))

    <div class="custom-dropdown navbar-auth-user-dropdown position-relative ml-50">
        <div class="custom-dropdown-toggle d-flex align-items-center navbar-user cursor-pointer">
            <img src="{{ $authUser->getAvatar() }}" class="rounded-circle" alt="{{ $authUser->full_name }}">
            <span class="font-16 user-name ml-10 text-dark-blue font-14">{{ $authUser->full_name }}</span>
        </div>

        <div class="custom-dropdown-body pb-10">

            <div class="dropdown-user-avatar d-flex align-items-center p-15 m-15 mb-10 rounded-sm border">
                <div class="size-40 rounded-circle position-relative">
                    <img src="{{ $authUser->getAvatar() }}" class="img-cover rounded-circle" alt="{{ $authUser->full_name }}">
                </div>

                <div class="ml-5">
                    <div class="font-14 font-weight-bold text-secondary">{{ $authUser->full_name }}</div>
                    <span class="mt-5 text-gray font-12">{{ $authUser->role->caption }}</span>
                </div>
            </div>

            <ul class="my-8">
                @if($authUser->isAdmin())
                    <li class="navbar-auth-user-dropdown-item">
                        <a href="{{ getAdminPanelUrl() }}" class="d-flex align-items-center w-100 px-15 py-10 text-gray font-14 bg-transparent">
                            <img src="/assets/default/img/icons/user_menu/dashboard.svg" class="icons">
                            <span class="ml-5">{{ trans('panel.dashboard') }}</span>
                        </a>
                    </li>

                   
                @else
                    <li class="navbar-auth-user-dropdown-item">
                        <a href="/panel" class="d-flex align-items-center w-100 px-15 py-10 text-gray font-14 bg-transparent">
                            <img src="/assets/default/img/icons/user_menu/dashboard.svg" class="icons">
                            <span class="ml-5">{{ trans('panel.dashboard') }}</span>
                        </a>
                    </li>


                    <li class="navbar-auth-user-dropdown-item">
                        <a href="{{ ($authUser->isUser()) ? '/panel/webinars/purchases' : '/panel/webinars' }}" class="d-flex align-items-center w-100 px-15 py-10 text-gray font-14 bg-transparent">
                            <img src="/assets/default/img/icons/user_menu/my_courses.svg" class="icons">
                            <span class="ml-5">{{ trans('update.my_courses') }}</span>
                        </a>
                    </li>

                    @if(!$authUser->isUser())
                        <li class="navbar-auth-user-dropdown-item">
                            <a href="/panel/financial/sales" class="d-flex align-items-center w-100 px-15 py-10 text-gray font-14 bg-transparent">
                                <img src="/assets/default/img/icons/user_menu/sales_history.svg" class="icons">
                                <span class="ml-5">{{ trans('financial.sales_history') }}</span>
                            </a>
                        </li>
                    @endif

                    <li class="navbar-auth-user-dropdown-item">
                        <a href="/panel/support" class="d-flex align-items-center w-100 px-15 py-10 text-gray font-14 bg-transparent">
                            <img src="/assets/default/img/icons/user_menu/support.svg" class="icons">
                            <span class="ml-5">{{ trans('panel.support') }}</span>
                        </a>
                    </li>

                    @if(!$authUser->isUser() and empty(getFeaturesSettings('mobile_app_status')))
                        <li class="navbar-auth-user-dropdown-item">
                            <a href="{{ $authUser->getProfileUrl() }}" class="d-flex align-items-center w-100 px-15 py-10 text-gray font-14 bg-transparent">
                                <img src="/assets/default/img/icons/user_menu/profile.svg" class="icons">
                                <span class="ml-5">{{ trans('public.profile') }}</span>
                            </a>
                        </li>
                    @endif

                    <li class="navbar-auth-user-dropdown-item">
                        <a href="/panel/setting" class="d-flex align-items-center w-100 px-15 py-10 text-gray font-14 bg-transparent">
                            <img src="/assets/default/img/icons/user_menu/settings.svg" class="icons">
                            <span class="ml-5">{{ trans('panel.settings') }}</span>
                        </a>
                    </li>
                @endif

                <li class="navbar-auth-user-dropdown-item">
                    <a href="/logout" class="d-flex align-items-center w-100 px-15 py-10 text-danger font-14 bg-transparent">
                        <img src="/assets/default/img/icons/user_menu/logout.svg" class="icons">
                        <span class="ml-5">{{ trans('auth.logout') }}</span>
                    </a>
                </li>

            </ul>

        </div>
    </div>
@else
    <div class="d-flex align-items-center ml-md-50">
        <a  href="/login" class="py-5 px-10 mr-10 btn " style="width: 175px;"><span style='    line-height: 10px;padding: 5px;font-size: 20px;color: #3875bf;'><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M11 2a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3zm1.293 6.293a1 1 0 0 1 1.414 0l3 3a1 1 0 0 1 0 1.414l-3 3a1 1 0 0 1-1.414-1.414L13.586 13H5a1 1 0 1 1 0-2h8.586l-1.293-1.293a1 1 0 0 1 0-1.414" clip-rule="evenodd"/></svg></span>{{ trans('auth.login') }}</a>
        <a href="/register" class="py-5 px-5 mr-10 t btn btn-primary btn-block" style='    width: 150px;'><span style="    line-height: 10px;padding: 5px;font-size: 20px;color: #ffffff;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="10" r="3"/><path d="M17 17c0-2.21-2.239-4-5-4s-5 1.79-5 4"/><rect width="18" height="18" x="3" y="3" rx="3"/></g></svg></span>{{ trans('auth.register') }}</a>
    </div>
@endif
