@extends(getTemplate().'.layouts.app')

@push('styles_top')
    <link rel="stylesheet" href="/assets/default/vendors/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/select2/select2.min.css">
@endpush

<style>
    .top-navbar {
height: 100px!important;
    position: absolute!important;
    z-index: 9999!important;
    width: 100%!important;
}.top-navbar a {
    color: #fff;
    font-weight: 500;
}
.top-navbar button {
    color: #fff !important;
    opacity: 1 !important;
}a.navbar-brand.navbar-order.d-flex.align-items-center.justify-content-center.mr-0.ml-auto .img-cover {
    filter: brightness(10);
}
</style>

@section('content')

        <div class="home-years__head bg-orange-800 text-slate-100"><div class="relative pt-50 px-50 overflow-hidden">
        <div class="home-years__title font-big py-5 font-w-bold relative"><div class="relative overflow-hidden container " style='padding-top: 150px;margin-bottom: 30px;'>أحدث الكورسات</div></div></div><svg class="svg-waves fill-primary-container" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none"><defs><path id="waveHref" d="M-160 44c30 0 58-18 88-18s58 18 88 18 58-18 88-18 58 18 88 18v44h-352z"></path></defs><g class="svg-waves__parallax"><use xlink:href="#waveHref" x="48"></use><use xlink:href="#waveHref" x="48" y="3"></use><use xlink:href="#waveHref" x="48" y="5"></use><use xlink:href="#waveHref" x="48" y="7"></use></g></svg></div>
                   

   

    <div class="container mt-30">

        <section class="mt-lg-50 pt-lg-20 mt-md-40 pt-md-40">
            <form action="/classes" method="get" id="filtersForm">

            

                <div class="row mt-20">
                    <div class="col-12 col-lg-12">

                        @if(empty(request()->get('card')) or request()->get('card') == 'grid')
                            <div class="row">
                                @foreach($webinars as $webinar)
                                    <div class="col-12 col-lg-4 mt-20">
                                        @include('web.default.includes.webinar.grid-card',['webinar' => $webinar])
                                    </div>
                                @endforeach
                            </div>

                        @elseif(!empty(request()->get('card')) and request()->get('card') == 'list')

                            @foreach($webinars as $webinar)
                                @include('web.default.includes.webinar.list-card',['webinar' => $webinar])
                            @endforeach
                        @endif

                    </div>


          
                </div>

            </form>
            <div class="mt-50 pt-30">
                {{ $webinars->appends(request()->input())->links('vendor.pagination.panel') }}
            </div>
        </section>
    </div>

@endsection

@push('scripts_bottom')
    <script src="/assets/default/vendors/select2/select2.min.js"></script>
    <script src="/assets/default/vendors/swiper/swiper-bundle.min.js"></script>

    <script src="/assets/default/js/parts/categories.min.js"></script>
@endpush
