<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/">
                @if(!empty($generalSettings['site_name']))
                    {{ strtoupper($generalSettings['site_name']) }}
                @else
                    Platform Title
                @endif
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">
                @if(!empty($generalSettings['site_name']))
                    {{ strtoupper(substr($generalSettings['site_name'],0,2)) }}
                @endif
            </a>
        </div>

        <ul class="sidebar-menu">
            @can('admin_general_dashboard_show')
                <li class="{{ (request()->is(getAdminPanelUrl('/'))) ? 'active' : '' }}">
                    <a href="{{ getAdminPanelUrl('') }}" class="nav-link">
                        <i class="fas fa-fire"></i>
                        <span>{{ trans('admin/main.dashboard') }}</span>
                    </a>
                </li>
            @endcan

           

            @if($authUser->can('admin_webinars') or
                $authUser->can('admin_bundles') or
                $authUser->can('admin_categories') or
                $authUser->can('admin_filters') or
                $authUser->can('admin_quizzes') or
                $authUser->can('admin_certificate') or
                $authUser->can('admin_reviews_lists') or
                $authUser->can('admin_webinar_assignments') or
                $authUser->can('admin_enrollment') or
                $authUser->can('admin_waitlists')
            )
                <li class="menu-header">{{ trans('site.education') }}</li>
            @endif

            @can('admin_webinars')
                <li class="nav-item dropdown {{ (request()->is(getAdminPanelUrl('/webinars*', false)) and !request()->is(getAdminPanelUrl('/webinars/comments*', false))) ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-graduation-cap"></i>
                        <span>{{ trans('panel.classes') }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        @can('admin_webinars_list')
                            <li class="{{ (request()->is(getAdminPanelUrl('/webinars', false)) and request()->get('type') == 'course') ? 'active' : '' }}">
                                <a class="nav-link @if(!empty($sidebarBeeps['courses']) and $sidebarBeeps['courses']) beep beep-sidebar @endif" href="{{ getAdminPanelUrl() }}/webinars?type=course">{{ trans('admin/main.courses') }}</a>
                            </li>

                    

                           
                        @endcan()

                        @can('admin_webinars_create')
                            <li class="{{ (request()->is(getAdminPanelUrl('/webinars/create', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/webinars/create">{{ trans('admin/main.new') }}</a>
                            </li>
                        @endcan()

                      

                      

                    </ul>
                </li>
            @endcan()

       
    

            @can('admin_quizzes')
                <li class="{{ (request()->is(getAdminPanelUrl('/quizzes*', false))) ? 'active' : '' }}">
                    <a class="nav-link " href="{{ getAdminPanelUrl() }}/quizzes">
                        <i class="fas fa-file"></i>
                        <span>{{ trans('admin/main.quizzes') }}</span>
                    </a>
                </li>
            @endcan()

            @can('admin_certificate')
                <li class="nav-item dropdown {{ (request()->is(getAdminPanelUrl('/certificates*', false))) ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-certificate"></i>
                        <span>{{ trans('admin/main.certificates') }}</span>
                    </a>
                    <ul class="dropdown-menu">


                        @can('admin_certificate_template_list')
                            <li class="{{ (request()->is(getAdminPanelUrl('/certificates/templates', false))) ? 'active' : '' }}">
                                <a class="nav-link"
                                   href="{{ getAdminPanelUrl() }}/certificates/templates">{{ trans('admin/main.certificates_templates') }}</a>
                            </li>
                        @endcan

                        @can('admin_certificate_template_create')
                            <li class="{{ (request()->is(getAdminPanelUrl('/certificates/templates/new', false))) ? 'active' : '' }}">
                                <a class="nav-link"
                                   href="{{ getAdminPanelUrl() }}/certificates/templates/new">{{ trans('admin/main.new_template') }}</a>
                            </li>
                        @endcan

                        @can('admin_certificate_settings')
                            <li class="{{ (request()->is(getAdminPanelUrl('/certificates/settings', false))) ? 'active' : '' }}">
                                <a class="nav-link"
                                   href="{{ getAdminPanelUrl() }}/certificates/settings">{{ trans('admin/main.setting') }}</a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan

            @can('admin_webinar_assignments')
                <li class="{{ (request()->is(getAdminPanelUrl('/assignments', false))) ? 'active' : '' }}">
                    <a href="{{ getAdminPanelUrl() }}/assignments" class="nav-link">
                        <i class="fas fa-pen"></i>
                        <span>{{ trans('update.assignments') }}</span>
                    </a>
                </li>
            @endcan

            @can('admin_course_question_forum_list')
                <li class="{{ (request()->is(getAdminPanelUrl('/webinars/course_forums', false))) ? 'active' : '' }}">
                    <a class="nav-link " href="{{ getAdminPanelUrl() }}/webinars/course_forums">
                        <i class="fas fa-comment-alt"></i>
                        <span>{{ trans('update.course_forum') }}</span>
                    </a>
                </li>
            @endcan()

            @can('admin_course_noticeboards_list')
                <li class="nav-item dropdown {{ (request()->is(getAdminPanelUrl('/course-noticeboards*', false))) ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-clipboard-check"></i>
                        <span>{{ trans('update.course_notices') }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        @can('admin_course_noticeboards_list')
                            <li class="{{ (request()->is(getAdminPanelUrl('/course-noticeboards', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/course-noticeboards">{{ trans('admin/main.lists') }}</a>
                            </li>
                        @endcan

                        @can('admin_course_noticeboards_send')
                            <li class="{{ (request()->is(getAdminPanelUrl('/course-noticeboards/send', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/course-noticeboards/send">{{ trans('admin/main.new') }}</a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan

            @can('admin_enrollment')
                <li class="nav-item dropdown {{ (request()->is(getAdminPanelUrl('/enrollments*', false))) ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-user-plus"></i>
                        <span>{{ trans('update.enrollment') }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        @can('admin_enrollment_history')
                            <li class="{{ (request()->is(getAdminPanelUrl('/enrollments/history', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/enrollments/history">{{ trans('public.history') }}</a>
                            </li>
                        @endcan

                        @can('admin_enrollment_add_student_to_items')
                            <li class="{{ (request()->is(getAdminPanelUrl('/enrollments/add-student-to-class', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/enrollments/add-student-to-class">{{ trans('update.add_student_to_a_class') }}</a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan

          

            @can('admin_categories')
                <li class="nav-item dropdown {{ (request()->is(getAdminPanelUrl('/categories*', false))) ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-th"></i>
                        <span>{{ trans('admin/main.categories') }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        @can('admin_categories_list')
                            <li class="{{ (request()->is(getAdminPanelUrl('/categories', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/categories">{{ trans('admin/main.lists') }}</a>
                            </li>
                        @endcan()
                        @can('admin_categories_create')
                            <li class="{{ (request()->is(getAdminPanelUrl('/categories/create', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/categories/create">{{ trans('admin/main.new') }}</a>
                            </li>
                        @endcan()
                        @can('admin_trending_categories')
                            <li class="{{ (request()->is(getAdminPanelUrl('/categories/trends', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/categories/trends">{{ trans('admin/main.trends') }}</a>
                            </li>
                        @endcan()
                    </ul>
                </li>
            @endcan()

     
         






        

            @if($authUser->can('admin_users') or
                $authUser->can('admin_roles') or
                $authUser->can('admin_users_not_access_content') or
                $authUser->can('admin_group') or
                $authUser->can('admin_users_badges') or
                $authUser->can('admin_become_instructors_list') or
                $authUser->can('admin_delete_account_requests') or
                $authUser->can('admin_user_login_history') or
                $authUser->can('admin_user_ip_restriction')
            )
                <li class="menu-header">{{ trans('panel.users') }}</li>
            @endif

            @can('admin_users')
                <li class="nav-item dropdown {{ (request()->is(getAdminPanelUrl('/staffs', false)) or request()->is(getAdminPanelUrl('/students', false)) or request()->is(getAdminPanelUrl('/instructors', false)) or request()->is(getAdminPanelUrl('/organizations', false))) ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-users"></i>
                        <span>{{ trans('admin/main.users_list') }}</span>
                    </a>

                    <ul class="dropdown-menu">
                        @can('admin_staffs_list')
                            <li class="{{ (request()->is(getAdminPanelUrl('/staffs', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/staffs">{{ trans('admin/main.staff') }}</a>
                            </li>
                        @endcan()

                        @can('admin_users_list')
                            <li class="{{ (request()->is(getAdminPanelUrl('/students', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/students">{{ trans('public.students') }}</a>
                            </li>
                        @endcan()

                        @can('admin_instructors_list')
                            <li class="{{ (request()->is(getAdminPanelUrl('/instructors', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/instructors">{{ trans('home.instructors') }}</a>
                            </li>
                        @endcan()

                       

                        @can('admin_users_create')
                            <li class="{{ (request()->is(getAdminPanelUrl('/users/create', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/users/create">{{ trans('admin/main.new') }}</a>
                            </li>
                        @endcan()
                    </ul>
                </li>
            @endcan


            @can('admin_users_not_access_content_lists')
                <li class="{{ (request()->is(getAdminPanelUrl('/users/not-access-to-content', false))) ? 'active' : '' }}">
                    <a class="nav-link" href="{{ getAdminPanelUrl() }}/users/not-access-to-content">
                        <i class="fas fa-user-lock"></i> <span>{{ trans('update.not_access_to_content') }}</span>
                    </a>
                </li>
            @endcan

            @can('admin_roles')
                <li class="nav-item dropdown {{ (request()->is(getAdminPanelUrl('/roles*', false))) ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-user-circle"></i> <span>{{ trans('admin/main.roles') }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        @can('admin_roles_list')
                            <li class="{{ (request()->is(getAdminPanelUrl('/roles', false))) ? 'active' : '' }}">
                                <a class="nav-link active" href="{{ getAdminPanelUrl() }}/roles">{{ trans('admin/main.lists') }}</a>
                            </li>
                        @endcan()
                        @can('admin_roles_create')
                            <li class="{{ (request()->is(getAdminPanelUrl('/roles/create', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/roles/create">{{ trans('admin/main.new') }}</a>
                            </li>
                        @endcan()
                    </ul>
                </li>
            @endcan()

           

            @can('admin_users_badges')
                <li class="{{ (request()->is(getAdminPanelUrl('/users/badges', false))) ? 'active' : '' }}">
                    <a class="nav-link" href="{{ getAdminPanelUrl() }}/users/badges">
                        <i class="fas fa-trophy"></i>
                        <span>{{ trans('admin/main.badges') }}</span>
                    </a>
                </li>
            @endcan()



         

           

            @if(
                $authUser->can('admin_forum') or
                $authUser->can('admin_featured_topics')
                )
                <li class="menu-header">{{ trans('update.forum') }}</li>
            @endif

            @can('admin_forum')
                <li class="nav-item dropdown {{ (request()->is(getAdminPanelUrl('/forums*', false))) ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-comment-dots"></i>
                        <span>{{ trans('update.forums') }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        @can('admin_forum_list')
                            <li class="{{ (request()->is(getAdminPanelUrl('/forums', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/forums">{{ trans('admin/main.lists') }}</a>
                            </li>
                        @endcan()
                        @can('admin_forum_create')
                            <li class="{{ (request()->is(getAdminPanelUrl('/forums/create', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/forums/create">{{ trans('admin/main.new') }}</a>
                            </li>
                        @endcan()
                    </ul>
                </li>
            @endcan()

            @can('admin_featured_topics')
                <li class="nav-item dropdown {{ (request()->is(getAdminPanelUrl('/featured-topics*', false))) ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-comment"></i>
                        <span>{{ trans('update.featured_topics') }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        @can('admin_featured_topics_list')
                            <li class="{{ (request()->is(getAdminPanelUrl('/featured-topics', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/featured-topics">{{ trans('admin/main.lists') }}</a>
                            </li>
                        @endcan()
                        @can('admin_featured_topics_create')
                            <li class="{{ (request()->is(getAdminPanelUrl('/featured-topics/create', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/featured-topics/create">{{ trans('admin/main.new') }}</a>
                            </li>
                        @endcan()
                    </ul>
                </li>
            @endcan()

            @can('admin_recommended_topics')
                <li class="nav-item dropdown {{ (request()->is(getAdminPanelUrl('/recommended-topics*', false))) ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-thumbs-up"></i>
                        <span>{{ trans('update.recommended_topics') }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        @can('admin_recommended_topics_list')
                            <li class="{{ (request()->is(getAdminPanelUrl('/recommended-topics', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/recommended-topics">{{ trans('admin/main.lists') }}</a>
                            </li>
                        @endcan()
                        @can('admin_recommended_topics_create')
                            <li class="{{ (request()->is(getAdminPanelUrl('/recommended-topics/create', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/recommended-topics/create">{{ trans('admin/main.new') }}</a>
                            </li>
                        @endcan()
                    </ul>
                </li>
            @endcan()

            @if($authUser->can('admin_supports') or
                $authUser->can('admin_comments') or
                $authUser->can('admin_reports') or
                $authUser->can('admin_contacts') or
                $authUser->can('admin_noticeboards') or
                $authUser->can('admin_notifications')
            )
                <li class="menu-header">{{ trans('admin/main.crm') }}</li>
            @endif

        

     


           
            @can('admin_noticeboards')
                <li class="nav-item dropdown {{ (request()->is(getAdminPanelUrl('/noticeboards*', false))) ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-sticky-note"></i> <span>{{ trans('admin/main.noticeboard') }}</span></a>
                    <ul class="dropdown-menu">
                        @can('admin_noticeboards_list')
                            <li class="{{ (request()->is(getAdminPanelUrl('/noticeboards', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/noticeboards">{{ trans('admin/main.lists') }}</a>
                            </li>
                        @endcan

                        @can('admin_noticeboards_send')
                            <li class="{{ (request()->is(getAdminPanelUrl('/noticeboards/send', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/noticeboards/send">{{ trans('admin/main.new') }}</a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan

            @can('admin_notifications')
                <li class="nav-item dropdown {{ (request()->is(getAdminPanelUrl('/notifications*', false))) ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-bell"></i>
                        <span>{{ trans('admin/main.notifications') }}</span>
                    </a>

                    <ul class="dropdown-menu">
                        @can('admin_notifications_list')
                            <li class="{{ (request()->is(getAdminPanelUrl('/notifications', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/notifications">{{ trans('public.history') }}</a>
                            </li>
                        @endcan

                        @can('admin_notifications_posted_list')
                            <li class="{{ (request()->is(getAdminPanelUrl('/notifications/posted', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/notifications/posted">{{ trans('admin/main.posted') }}</a>
                            </li>
                        @endcan

                        @can('admin_notifications_send')
                            <li class="{{ (request()->is(getAdminPanelUrl('/notifications/send', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/notifications/send">{{ trans('admin/main.new') }}</a>
                            </li>
                        @endcan

                        @can('admin_notifications_templates')
                            <li class="{{ (request()->is(getAdminPanelUrl('/notifications/templates', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/notifications/templates">{{ trans('admin/main.templates') }}</a>
                            </li>
                        @endcan

                        @can('admin_notifications_template_create')
                            <li class="{{ (request()->is(getAdminPanelUrl('/notifications/templates/create', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/notifications/templates/create">{{ trans('admin/main.new_template') }}</a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan

            @if($authUser->can('admin_blog') or
                $authUser->can('admin_pages') or
                $authUser->can('admin_additional_pages') or
                $authUser->can('admin_testimonials') or
                $authUser->can('admin_tags') or
                $authUser->can('admin_regions') or
                $authUser->can('admin_store') or
                $authUser->can('admin_forms') or
                $authUser->can('admin_ai_contents')
            )
                <li class="menu-header">{{ trans('admin/main.content') }}</li>
            @endif

            @can('admin_store')
                <li class="nav-item dropdown {{ (request()->is(getAdminPanelUrl('/store*', false)) or request()->is(getAdminPanelUrl('/comments/products*', false))) ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-store-alt"></i>
                        <span>{{ trans('update.store') }}</span>
                    </a>
                    <ul class="dropdown-menu">

                        @can('admin_store_new_product')
                            <li class="{{ (request()->is(getAdminPanelUrl('/store/products/create', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/store/products/create">{{ trans('update.new_product') }}</a>
                            </li>
                        @endcan()

                        @can('admin_store_products')
                            <li class="{{ (request()->is(getAdminPanelUrl('/store/products', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/store/products">{{ trans('update.products') }}</a>
                            </li>
                        @endcan()

                      
                        @can('admin_store_products_orders')
                            <li class="{{ (request()->is(getAdminPanelUrl('/store/orders', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/store/orders">{{ trans('update.orders') }}</a>
                            </li>
                        @endcan()




                        @can('admin_store_categories_list')
                            <li class="{{ (request()->is(getAdminPanelUrl('/store/categories', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/store/categories">{{ trans('admin/main.categories') }}</a>
                            </li>
                        @endcan()


                    </ul>
                </li>
            @endcan

    
     


            @can('admin_forms')
                <li class="nav-item dropdown {{ (request()->is(getAdminPanelUrl('/forms*', false))) ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-file-alt"></i>
                        <span>{{ trans('update.form_builder') }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        @can('admin_forms_create')
                            <li class="{{ (request()->is(getAdminPanelUrl('/forms/create', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/forms/create">{{ trans('admin/main.new') }}</a>
                            </li>
                        @endcan()

                        @can('admin_forms_lists')
                            <li class="{{ (request()->is(getAdminPanelUrl('/forms', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/forms">{{ trans('admin/main.lists') }}</a>
                            </li>
                        @endcan()

                        @can('admin_forms_submissions')
                            <li class="{{ (request()->is(getAdminPanelUrl('/forms/submissions', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/forms/submissions">{{ trans('update.submissions') }}</a>
                            </li>
                        @endcan()

                    </ul>
                </li>
            @endcan

            @can('admin_ai_contents')
                <li class="nav-item dropdown {{ (request()->is(getAdminPanelUrl('/ai-contents*', false))) ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-robot"></i>
                        <span>{{ trans('update.ai_contents') }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        @can('admin_ai_contents_lists')
                            <li class="{{ (request()->is(getAdminPanelUrl('/ai-contents/lists', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/ai-contents/lists">{{ trans('update.generated_contents') }}</a>
                            </li>
                        @endcan()

                        @can('admin_ai_contents_templates_create')
                            <li class="{{ (request()->is(getAdminPanelUrl('/ai-contents/templates/create', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/ai-contents/templates/create">{{ trans('update.new_template') }}</a>
                            </li>
                        @endcan()

                        @can('admin_ai_contents_templates_lists')
                            <li class="{{ (request()->is(getAdminPanelUrl('/ai-contents/templates', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/ai-contents/templates">{{ trans('update.service_template') }}</a>
                            </li>
                        @endcan()

                        @can('admin_ai_contents_settings')
                            <li class="{{ (request()->is(getAdminPanelUrl('/ai-contents/settings', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/ai-contents/settings">{{ trans('update.settings') }}</a>
                            </li>
                        @endcan()

                    </ul>
                </li>
            @endcan

          

            @if($authUser->can('admin_documents') or
                $authUser->can('admin_sales_list') or
                $authUser->can('admin_payouts') or
                $authUser->can('admin_offline_payments_list') or
                $authUser->can('admin_subscribe') or
                $authUser->can('admin_registration_packages') or
                $authUser->can('admin_installments')
            )
                <li class="menu-header">{{ trans('admin/main.financial') }}</li>
            @endif

          
           

            @can('admin_offline_payments_list')
                <li class="nav-item dropdown {{ (request()->is(getAdminPanelUrl('/financial/offline_payments*', false))) ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-university"></i> <span>{{ trans('admin/main.offline_payments') }}</span></a>
                    <ul class="dropdown-menu">
                        <li class="{{ (request()->is(getAdminPanelUrl('/financial/offline_payments', false)) and request()->get('page_type') == 'requests') ? 'active' : '' }}">
                            <a href="{{ getAdminPanelUrl() }}/financial/offline_payments?page_type=requests" class="nav-link @if(!empty($sidebarBeeps['offlinePayments']) and $sidebarBeeps['offlinePayments']) beep beep-sidebar @endif">
                                <span>{{ trans('panel.requests') }}</span>
                            </a>
                        </li>

                        <li class="{{ (request()->is(getAdminPanelUrl('/financial/offline_payments', false)) and request()->get('page_type') == 'history') ? 'active' : '' }}">
                            <a href="{{ getAdminPanelUrl() }}/financial/offline_payments?page_type=history" class="nav-link">
                                <span>{{ trans('public.history') }}</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endcan

            @can('admin_subscribe')
                <li class="nav-item dropdown {{ (request()->is(getAdminPanelUrl('/financial/subscribes*', false))) ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-cart-plus"></i>
                        <span>{{ trans('admin/main.subscribes') }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        @can('admin_subscribe_list')
                            <li class="{{ (request()->is(getAdminPanelUrl('/financial/subscribes', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/financial/subscribes">{{ trans('admin/main.packages') }}</a>
                            </li>
                        @endcan

                        @can('admin_subscribe_create')
                            <li class="{{ (request()->is(getAdminPanelUrl('/financial/subscribes/new', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/financial/subscribes/new">{{ trans('admin/main.new_package') }}</a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan



         

     

            @if($authUser->can('admin_discount_codes') or
                $authUser->can('admin_cart_discount') or
                $authUser->can('admin_abandoned_cart') or
                $authUser->can('admin_product_discount') or
                $authUser->can('admin_feature_webinars') or
                $authUser->can('admin_gift') or
                $authUser->can('admin_promotion') or
                $authUser->can('admin_advertising') or
                $authUser->can('admin_newsletters') or
                $authUser->can('admin_advertising_modal') or
                $authUser->can('admin_registration_bonus') or
                $authUser->can('admin_floating_bar_create') or
                $authUser->can('admin_purchase_notifications') or
                $authUser->can('admin_product_badges')
            )
                <li class="menu-header">{{ trans('admin/main.marketing') }}</li>
            @endif

            @can('admin_discount_codes')
                <li class="nav-item dropdown {{ (request()->is(getAdminPanelUrl('/financial/discounts*', false))) ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-percent"></i>
                        <span>{{ trans('admin/main.discount_codes') }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        @can('admin_discount_codes_list')
                            <li class="{{ (request()->is(getAdminPanelUrl('/financial/discounts', false)) and empty(request()->get('instructor_coupons'))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/financial/discounts">{{ trans('admin/main.lists') }}</a>
                            </li>
                        @endcan

                        @can('admin_discount_codes_create')
                            <li class="{{ (request()->is(getAdminPanelUrl('/financial/discounts/new', false))) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ getAdminPanelUrl() }}/financial/discounts/new">{{ trans('admin/main.new') }}</a>
                            </li>
                        @endcan

                    
                    </ul>
                </li>
            @endcan



          

          

            @if($authUser->can('admin_settings'))
                <li class="menu-header">{{ trans('admin/main.settings') }}</li>
            @endif

           

         

            <li>
                <a class="nav-link" href="{{ getAdminPanelUrl() }}/logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>{{ trans('admin/main.logout') }}</span>
                </a>
            </li>

        </ul>
        <br><br><br>
    </aside>
</div>
