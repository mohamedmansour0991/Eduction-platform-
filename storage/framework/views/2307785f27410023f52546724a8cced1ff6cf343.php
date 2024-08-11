<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/">
                <?php if(!empty($generalSettings['site_name'])): ?>
                    <?php echo e(strtoupper($generalSettings['site_name'])); ?>

                <?php else: ?>
                    Platform Title
                <?php endif; ?>
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">
                <?php if(!empty($generalSettings['site_name'])): ?>
                    <?php echo e(strtoupper(substr($generalSettings['site_name'],0,2))); ?>

                <?php endif; ?>
            </a>
        </div>

        <ul class="sidebar-menu">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_general_dashboard_show')): ?>
                <li class="<?php echo e((request()->is(getAdminPanelUrl('/'))) ? 'active' : ''); ?>">
                    <a href="<?php echo e(getAdminPanelUrl('')); ?>" class="nav-link">
                        <i class="fas fa-fire"></i>
                        <span><?php echo e(trans('admin/main.dashboard')); ?></span>
                    </a>
                </li>
            <?php endif; ?>

           

            <?php if($authUser->can('admin_webinars') or
                $authUser->can('admin_bundles') or
                $authUser->can('admin_categories') or
                $authUser->can('admin_filters') or
                $authUser->can('admin_quizzes') or
                $authUser->can('admin_certificate') or
                $authUser->can('admin_reviews_lists') or
                $authUser->can('admin_webinar_assignments') or
                $authUser->can('admin_enrollment') or
                $authUser->can('admin_waitlists')
            ): ?>
                <li class="menu-header"><?php echo e(trans('site.education')); ?></li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_webinars')): ?>
                <li class="nav-item dropdown <?php echo e((request()->is(getAdminPanelUrl('/webinars*', false)) and !request()->is(getAdminPanelUrl('/webinars/comments*', false))) ? 'active' : ''); ?>">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-graduation-cap"></i>
                        <span><?php echo e(trans('panel.classes')); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_webinars_list')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/webinars', false)) and request()->get('type') == 'course') ? 'active' : ''); ?>">
                                <a class="nav-link <?php if(!empty($sidebarBeeps['courses']) and $sidebarBeeps['courses']): ?> beep beep-sidebar <?php endif; ?>" href="<?php echo e(getAdminPanelUrl()); ?>/webinars?type=course"><?php echo e(trans('admin/main.courses')); ?></a>
                            </li>

                    

                           
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_webinars_create')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/webinars/create', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/webinars/create"><?php echo e(trans('admin/main.new')); ?></a>
                            </li>
                        <?php endif; ?>

                      

                      

                    </ul>
                </li>
            <?php endif; ?>

       
    

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_quizzes')): ?>
                <li class="<?php echo e((request()->is(getAdminPanelUrl('/quizzes*', false))) ? 'active' : ''); ?>">
                    <a class="nav-link " href="<?php echo e(getAdminPanelUrl()); ?>/quizzes">
                        <i class="fas fa-file"></i>
                        <span><?php echo e(trans('admin/main.quizzes')); ?></span>
                    </a>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_certificate')): ?>
                <li class="nav-item dropdown <?php echo e((request()->is(getAdminPanelUrl('/certificates*', false))) ? 'active' : ''); ?>">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-certificate"></i>
                        <span><?php echo e(trans('admin/main.certificates')); ?></span>
                    </a>
                    <ul class="dropdown-menu">


                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_certificate_template_list')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/certificates/templates', false))) ? 'active' : ''); ?>">
                                <a class="nav-link"
                                   href="<?php echo e(getAdminPanelUrl()); ?>/certificates/templates"><?php echo e(trans('admin/main.certificates_templates')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_certificate_template_create')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/certificates/templates/new', false))) ? 'active' : ''); ?>">
                                <a class="nav-link"
                                   href="<?php echo e(getAdminPanelUrl()); ?>/certificates/templates/new"><?php echo e(trans('admin/main.new_template')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_certificate_settings')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/certificates/settings', false))) ? 'active' : ''); ?>">
                                <a class="nav-link"
                                   href="<?php echo e(getAdminPanelUrl()); ?>/certificates/settings"><?php echo e(trans('admin/main.setting')); ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_webinar_assignments')): ?>
                <li class="<?php echo e((request()->is(getAdminPanelUrl('/assignments', false))) ? 'active' : ''); ?>">
                    <a href="<?php echo e(getAdminPanelUrl()); ?>/assignments" class="nav-link">
                        <i class="fas fa-pen"></i>
                        <span><?php echo e(trans('update.assignments')); ?></span>
                    </a>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_course_question_forum_list')): ?>
                <li class="<?php echo e((request()->is(getAdminPanelUrl('/webinars/course_forums', false))) ? 'active' : ''); ?>">
                    <a class="nav-link " href="<?php echo e(getAdminPanelUrl()); ?>/webinars/course_forums">
                        <i class="fas fa-comment-alt"></i>
                        <span><?php echo e(trans('update.course_forum')); ?></span>
                    </a>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_course_noticeboards_list')): ?>
                <li class="nav-item dropdown <?php echo e((request()->is(getAdminPanelUrl('/course-noticeboards*', false))) ? 'active' : ''); ?>">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-clipboard-check"></i>
                        <span><?php echo e(trans('update.course_notices')); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_course_noticeboards_list')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/course-noticeboards', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/course-noticeboards"><?php echo e(trans('admin/main.lists')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_course_noticeboards_send')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/course-noticeboards/send', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/course-noticeboards/send"><?php echo e(trans('admin/main.new')); ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_enrollment')): ?>
                <li class="nav-item dropdown <?php echo e((request()->is(getAdminPanelUrl('/enrollments*', false))) ? 'active' : ''); ?>">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-user-plus"></i>
                        <span><?php echo e(trans('update.enrollment')); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_enrollment_history')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/enrollments/history', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/enrollments/history"><?php echo e(trans('public.history')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_enrollment_add_student_to_items')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/enrollments/add-student-to-class', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/enrollments/add-student-to-class"><?php echo e(trans('update.add_student_to_a_class')); ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>

          

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_categories')): ?>
                <li class="nav-item dropdown <?php echo e((request()->is(getAdminPanelUrl('/categories*', false))) ? 'active' : ''); ?>">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-th"></i>
                        <span><?php echo e(trans('admin/main.categories')); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_categories_list')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/categories', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/categories"><?php echo e(trans('admin/main.lists')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_categories_create')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/categories/create', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/categories/create"><?php echo e(trans('admin/main.new')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_trending_categories')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/categories/trends', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/categories/trends"><?php echo e(trans('admin/main.trends')); ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>

     
         






        

            <?php if($authUser->can('admin_users') or
                $authUser->can('admin_roles') or
                $authUser->can('admin_users_not_access_content') or
                $authUser->can('admin_group') or
                $authUser->can('admin_users_badges') or
                $authUser->can('admin_become_instructors_list') or
                $authUser->can('admin_delete_account_requests') or
                $authUser->can('admin_user_login_history') or
                $authUser->can('admin_user_ip_restriction')
            ): ?>
                <li class="menu-header"><?php echo e(trans('panel.users')); ?></li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_users')): ?>
                <li class="nav-item dropdown <?php echo e((request()->is(getAdminPanelUrl('/staffs', false)) or request()->is(getAdminPanelUrl('/students', false)) or request()->is(getAdminPanelUrl('/instructors', false)) or request()->is(getAdminPanelUrl('/organizations', false))) ? 'active' : ''); ?>">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-users"></i>
                        <span><?php echo e(trans('admin/main.users_list')); ?></span>
                    </a>

                    <ul class="dropdown-menu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_staffs_list')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/staffs', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/staffs"><?php echo e(trans('admin/main.staff')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_users_list')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/students', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/students"><?php echo e(trans('public.students')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_instructors_list')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/instructors', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/instructors"><?php echo e(trans('home.instructors')); ?></a>
                            </li>
                        <?php endif; ?>

                       

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_users_create')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/users/create', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/users/create"><?php echo e(trans('admin/main.new')); ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>


            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_users_not_access_content_lists')): ?>
                <li class="<?php echo e((request()->is(getAdminPanelUrl('/users/not-access-to-content', false))) ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/users/not-access-to-content">
                        <i class="fas fa-user-lock"></i> <span><?php echo e(trans('update.not_access_to_content')); ?></span>
                    </a>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_roles')): ?>
                <li class="nav-item dropdown <?php echo e((request()->is(getAdminPanelUrl('/roles*', false))) ? 'active' : ''); ?>">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-user-circle"></i> <span><?php echo e(trans('admin/main.roles')); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_roles_list')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/roles', false))) ? 'active' : ''); ?>">
                                <a class="nav-link active" href="<?php echo e(getAdminPanelUrl()); ?>/roles"><?php echo e(trans('admin/main.lists')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_roles_create')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/roles/create', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/roles/create"><?php echo e(trans('admin/main.new')); ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>

           

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_users_badges')): ?>
                <li class="<?php echo e((request()->is(getAdminPanelUrl('/users/badges', false))) ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/users/badges">
                        <i class="fas fa-trophy"></i>
                        <span><?php echo e(trans('admin/main.badges')); ?></span>
                    </a>
                </li>
            <?php endif; ?>



         

           

            <?php if(
                $authUser->can('admin_forum') or
                $authUser->can('admin_featured_topics')
                ): ?>
                <li class="menu-header"><?php echo e(trans('update.forum')); ?></li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_forum')): ?>
                <li class="nav-item dropdown <?php echo e((request()->is(getAdminPanelUrl('/forums*', false))) ? 'active' : ''); ?>">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-comment-dots"></i>
                        <span><?php echo e(trans('update.forums')); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_forum_list')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/forums', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/forums"><?php echo e(trans('admin/main.lists')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_forum_create')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/forums/create', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/forums/create"><?php echo e(trans('admin/main.new')); ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_featured_topics')): ?>
                <li class="nav-item dropdown <?php echo e((request()->is(getAdminPanelUrl('/featured-topics*', false))) ? 'active' : ''); ?>">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-comment"></i>
                        <span><?php echo e(trans('update.featured_topics')); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_featured_topics_list')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/featured-topics', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/featured-topics"><?php echo e(trans('admin/main.lists')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_featured_topics_create')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/featured-topics/create', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/featured-topics/create"><?php echo e(trans('admin/main.new')); ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_recommended_topics')): ?>
                <li class="nav-item dropdown <?php echo e((request()->is(getAdminPanelUrl('/recommended-topics*', false))) ? 'active' : ''); ?>">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-thumbs-up"></i>
                        <span><?php echo e(trans('update.recommended_topics')); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_recommended_topics_list')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/recommended-topics', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/recommended-topics"><?php echo e(trans('admin/main.lists')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_recommended_topics_create')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/recommended-topics/create', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/recommended-topics/create"><?php echo e(trans('admin/main.new')); ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>

            <?php if($authUser->can('admin_supports') or
                $authUser->can('admin_comments') or
                $authUser->can('admin_reports') or
                $authUser->can('admin_contacts') or
                $authUser->can('admin_noticeboards') or
                $authUser->can('admin_notifications')
            ): ?>
                <li class="menu-header"><?php echo e(trans('admin/main.crm')); ?></li>
            <?php endif; ?>

        

     


           
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_noticeboards')): ?>
                <li class="nav-item dropdown <?php echo e((request()->is(getAdminPanelUrl('/noticeboards*', false))) ? 'active' : ''); ?>">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-sticky-note"></i> <span><?php echo e(trans('admin/main.noticeboard')); ?></span></a>
                    <ul class="dropdown-menu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_noticeboards_list')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/noticeboards', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/noticeboards"><?php echo e(trans('admin/main.lists')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_noticeboards_send')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/noticeboards/send', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/noticeboards/send"><?php echo e(trans('admin/main.new')); ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_notifications')): ?>
                <li class="nav-item dropdown <?php echo e((request()->is(getAdminPanelUrl('/notifications*', false))) ? 'active' : ''); ?>">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-bell"></i>
                        <span><?php echo e(trans('admin/main.notifications')); ?></span>
                    </a>

                    <ul class="dropdown-menu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_notifications_list')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/notifications', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/notifications"><?php echo e(trans('public.history')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_notifications_posted_list')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/notifications/posted', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/notifications/posted"><?php echo e(trans('admin/main.posted')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_notifications_send')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/notifications/send', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/notifications/send"><?php echo e(trans('admin/main.new')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_notifications_templates')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/notifications/templates', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/notifications/templates"><?php echo e(trans('admin/main.templates')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_notifications_template_create')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/notifications/templates/create', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/notifications/templates/create"><?php echo e(trans('admin/main.new_template')); ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>

            <?php if($authUser->can('admin_blog') or
                $authUser->can('admin_pages') or
                $authUser->can('admin_additional_pages') or
                $authUser->can('admin_testimonials') or
                $authUser->can('admin_tags') or
                $authUser->can('admin_regions') or
                $authUser->can('admin_store') or
                $authUser->can('admin_forms') or
                $authUser->can('admin_ai_contents')
            ): ?>
                <li class="menu-header"><?php echo e(trans('admin/main.content')); ?></li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_store')): ?>
                <li class="nav-item dropdown <?php echo e((request()->is(getAdminPanelUrl('/store*', false)) or request()->is(getAdminPanelUrl('/comments/products*', false))) ? 'active' : ''); ?>">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-store-alt"></i>
                        <span><?php echo e(trans('update.store')); ?></span>
                    </a>
                    <ul class="dropdown-menu">

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_store_new_product')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/store/products/create', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/store/products/create"><?php echo e(trans('update.new_product')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_store_products')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/store/products', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/store/products"><?php echo e(trans('update.products')); ?></a>
                            </li>
                        <?php endif; ?>

                      
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_store_products_orders')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/store/orders', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/store/orders"><?php echo e(trans('update.orders')); ?></a>
                            </li>
                        <?php endif; ?>




                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_store_categories_list')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/store/categories', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/store/categories"><?php echo e(trans('admin/main.categories')); ?></a>
                            </li>
                        <?php endif; ?>


                    </ul>
                </li>
            <?php endif; ?>

    
     


            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_forms')): ?>
                <li class="nav-item dropdown <?php echo e((request()->is(getAdminPanelUrl('/forms*', false))) ? 'active' : ''); ?>">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-file-alt"></i>
                        <span><?php echo e(trans('update.form_builder')); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_forms_create')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/forms/create', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/forms/create"><?php echo e(trans('admin/main.new')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_forms_lists')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/forms', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/forms"><?php echo e(trans('admin/main.lists')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_forms_submissions')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/forms/submissions', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/forms/submissions"><?php echo e(trans('update.submissions')); ?></a>
                            </li>
                        <?php endif; ?>

                    </ul>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_ai_contents')): ?>
                <li class="nav-item dropdown <?php echo e((request()->is(getAdminPanelUrl('/ai-contents*', false))) ? 'active' : ''); ?>">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-robot"></i>
                        <span><?php echo e(trans('update.ai_contents')); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_ai_contents_lists')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/ai-contents/lists', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/ai-contents/lists"><?php echo e(trans('update.generated_contents')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_ai_contents_templates_create')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/ai-contents/templates/create', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/ai-contents/templates/create"><?php echo e(trans('update.new_template')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_ai_contents_templates_lists')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/ai-contents/templates', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/ai-contents/templates"><?php echo e(trans('update.service_template')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_ai_contents_settings')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/ai-contents/settings', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/ai-contents/settings"><?php echo e(trans('update.settings')); ?></a>
                            </li>
                        <?php endif; ?>

                    </ul>
                </li>
            <?php endif; ?>

          

            <?php if($authUser->can('admin_documents') or
                $authUser->can('admin_sales_list') or
                $authUser->can('admin_payouts') or
                $authUser->can('admin_offline_payments_list') or
                $authUser->can('admin_subscribe') or
                $authUser->can('admin_registration_packages') or
                $authUser->can('admin_installments')
            ): ?>
                <li class="menu-header"><?php echo e(trans('admin/main.financial')); ?></li>
            <?php endif; ?>

          
           

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_offline_payments_list')): ?>
                <li class="nav-item dropdown <?php echo e((request()->is(getAdminPanelUrl('/financial/offline_payments*', false))) ? 'active' : ''); ?>">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-university"></i> <span><?php echo e(trans('admin/main.offline_payments')); ?></span></a>
                    <ul class="dropdown-menu">
                        <li class="<?php echo e((request()->is(getAdminPanelUrl('/financial/offline_payments', false)) and request()->get('page_type') == 'requests') ? 'active' : ''); ?>">
                            <a href="<?php echo e(getAdminPanelUrl()); ?>/financial/offline_payments?page_type=requests" class="nav-link <?php if(!empty($sidebarBeeps['offlinePayments']) and $sidebarBeeps['offlinePayments']): ?> beep beep-sidebar <?php endif; ?>">
                                <span><?php echo e(trans('panel.requests')); ?></span>
                            </a>
                        </li>

                        <li class="<?php echo e((request()->is(getAdminPanelUrl('/financial/offline_payments', false)) and request()->get('page_type') == 'history') ? 'active' : ''); ?>">
                            <a href="<?php echo e(getAdminPanelUrl()); ?>/financial/offline_payments?page_type=history" class="nav-link">
                                <span><?php echo e(trans('public.history')); ?></span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_subscribe')): ?>
                <li class="nav-item dropdown <?php echo e((request()->is(getAdminPanelUrl('/financial/subscribes*', false))) ? 'active' : ''); ?>">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-cart-plus"></i>
                        <span><?php echo e(trans('admin/main.subscribes')); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_subscribe_list')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/financial/subscribes', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/financial/subscribes"><?php echo e(trans('admin/main.packages')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_subscribe_create')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/financial/subscribes/new', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/financial/subscribes/new"><?php echo e(trans('admin/main.new_package')); ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>



         

     

            <?php if($authUser->can('admin_discount_codes') or
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
            ): ?>
                <li class="menu-header"><?php echo e(trans('admin/main.marketing')); ?></li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_discount_codes')): ?>
                <li class="nav-item dropdown <?php echo e((request()->is(getAdminPanelUrl('/financial/discounts*', false))) ? 'active' : ''); ?>">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-percent"></i>
                        <span><?php echo e(trans('admin/main.discount_codes')); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_discount_codes_list')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/financial/discounts', false)) and empty(request()->get('instructor_coupons'))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/financial/discounts"><?php echo e(trans('admin/main.lists')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_discount_codes_create')): ?>
                            <li class="<?php echo e((request()->is(getAdminPanelUrl('/financial/discounts/new', false))) ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/financial/discounts/new"><?php echo e(trans('admin/main.new')); ?></a>
                            </li>
                        <?php endif; ?>

                    
                    </ul>
                </li>
            <?php endif; ?>



          

          

            <?php if($authUser->can('admin_settings')): ?>
                <li class="menu-header"><?php echo e(trans('admin/main.settings')); ?></li>
            <?php endif; ?>

           

         

            <li>
                <a class="nav-link" href="<?php echo e(getAdminPanelUrl()); ?>/logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span><?php echo e(trans('admin/main.logout')); ?></span>
                </a>
            </li>

        </ul>
        <br><br><br>
    </aside>
</div>
<?php /**PATH J:\Systems\Eduction-platform-\resources\views/admin/includes/sidebar.blade.php ENDPATH**/ ?>