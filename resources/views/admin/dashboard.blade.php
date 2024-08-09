 @extends('admin.layouts.app')

@push('libraries_top')
    <link rel="stylesheet" href="/assets/admin/vendor/owl.carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/admin/vendor/owl.carousel/owl.theme.min.css">

@endpush

@section('content')


    <section class="section">
        
<h3 style='color:#fff'>اختصارات سريعة </h3>
  
        <div class="row">

                <div class="col-lg-2 col-md-6 col-sm-6 col-23">
                    <a href="{{ getAdminPanelUrl() }}/webinars/create" class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                
                            </div>
                            <div class="card-body">
                            كورس جديد
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <a href="{{ getAdminPanelUrl() }}/financial/discounts/new" class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-plus"></i></div>
                        <div class="card-wrap">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                               كود تفعيل
                            </div>
                        </div>
                    </a>
                </div>

            @can('admin_general_dashboard_new_tickets')
                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <a href="{{ getAdminPanelUrl() }}/categories/create" class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-plus"></i></div>
                        <div class="card-wrap">
                            <div class="card-header">
                               
                            </div>
                            <div class="card-body">
                               قسم جديد
                            </div>
                        </div>
                    </a>
                </div>
            @endcan

         
                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <a href="{{ getAdminPanelUrl() }}/assignments" class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-book"></i></div>
                        <div class="card-wrap">
                            <div class="card-header">
                               
                            </div>
                            <div class="card-body">
                                الواجب
                            </div>
                        </div>
                    </a>
                </div>


        </div>


        
    </section>

    <section class="card">
        <div class="card-body">
            
            <div class="row">
                <div class="col-md-12">
                    <div class="media-body">
                        <div class="text-primary mt-0 mb-1 font-weight-bold">جميع الحقوق محفوظة لمنصة مرحلة المالكة للمنصة</div>
                        <div class=" text-small font-600-bold mb-2">يتم تحديث المنصة تقريبا بشكل يومي لتصحيح الاخطاء وإضافة امكانيات جديدة لو واجهت اي عطل او اي مشكلة يرجى التواصل معنا على الواتساب .</div>
                    </div>
                </div>

                


            </div>
        </div>
    </section>
@endsection

@push('scripts_bottom')
    <script src="/assets/default/vendors/chartjs/chart.min.js"></script>
    <script src="/assets/admin/vendor/owl.carousel/owl.carousel.min.js"></script>

    <script src="/assets/admin/js/dashboard.min.js"></script>

    <script>
        (function ($) {
            "use strict";

            @if(!empty($getMonthAndYearSalesChart))
            makeStatisticsChart('saleStatisticsChart', saleStatisticsChart, 'Sale', @json($getMonthAndYearSalesChart['labels']),@json($getMonthAndYearSalesChart['data']));
            @endif

            @if(!empty($usersStatisticsChart))
            makeStatisticsChart('usersStatisticsChart', usersStatisticsChart, 'Users', @json($usersStatisticsChart['labels']),@json($usersStatisticsChart['data']));
            @endif

        })(jQuery)
    </script>
@endpush
