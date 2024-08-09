@extends(getTemplate().'.layouts.app')

@push('styles_top')

@endpush


@section('content')
    @if((!empty($webinars) and count($webinars)) or (!empty($products) and count($products)) or (!empty($teachers) and count($teachers)) or (!empty($organizations) and count($organizations)))
        <section class="site-top-banner search-top-banner opacity-04 position-relative">
          
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-12 col-md-9 col-lg-7">
                        <div class="top-search-form">
                            <h1 class="text-white font-30 white-space-pre-wrap" style='font-size:40px'>{{ trans('site.result_find',['count' => $resultCount , 'search' => request()->get('search')]) }}</h1>

                  
                        </div>
                    </div>
                </div>
            </div>
               <div class="waveWrapper waveAnimation">
  <div class="waveWrapperInner bgTop">
    <div class="wave waveTop" style="filter: brightness(202.5);background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')"></div>
  </div>
  <div class="waveWrapperInner bgMiddle">
    <div class="wave waveMiddle" style="filter: brightness(202.5);background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')"></div>
  </div>
  <div class="waveWrapperInner bgBottom">
    <div class="wave waveBottom" style="filter: brightness(202.5);background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"></div>
  </div>
</div>
    </section>
<style>
.site-top-banner {
        height: 300px !important;
}
@keyframes move_wave {
    0% {
        transform: translateX(0) translateZ(0) scaleY(1)
    }
    50% {
        transform: translateX(-25%) translateZ(0) scaleY(0.55)
    }
    100% {
        transform: translateX(-50%) translateZ(0) scaleY(1)
    }
}
.waveWrapperInner {
    position: absolute;
    width: 100%;
    overflow: hidden;
    height: 100%;
    bottom: -1px;
}
.bgTop {
    opacity: 0.5;
}
.bgMiddle {
    opacity: 0.75;
}

.wave {
    position: absolute;
    left: 0;
    width: 200%;
    height: 100%;
    background-repeat: repeat no-repeat;
    background-position: 0 bottom;
    transform-origin: center bottom;
}
.waveTop {
    background-size: 50% 100px;
}
.waveAnimation .waveTop {
  animation: move-wave 3s;
   -webkit-animation: move-wave 3s;
   -webkit-animation-delay: 1s;
   animation-delay: 1s;
}
.waveMiddle {
    background-size: 50% 120px;
}
.waveAnimation .waveMiddle {
    animation: move_wave 10s linear infinite;
}
.waveBottom {
    background-size: 50% 100px;
}
.waveAnimation .waveBottom {
    animation: move_wave 15s linear infinite;
}
</style>
        </section>

        <div class="container">
            @if(!empty($webinars) and count($webinars))
                <section class="mt-50">
                   

                    <div class="row">
                        @foreach($webinars as $webinar)
                            <div class="col-md-6 col-lg-4 mt-30">
                                @include(getTemplate().'.includes.webinar.grid-card',['webinar' => $webinar])
                            </div>
                        @endforeach
                    </div>
                </section>
            @endif

            @if(!empty($products) and count($products))
                <section class="mt-50">
                

                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-md-6 col-lg-4 mt-30">
                                @include('web.default.products.includes.card',['product' => $product])
                            </div>
                        @endforeach
                    </div>
                </section>
            @endif

            @if(!empty($teachers) and count($teachers))
                <section class="mt-50">
                  

                    <div class="row">
                        @foreach($teachers as $teacher)
                            <div class="col-6 col-md-3 col-lg-2 mt-30">
                                <div class="user-search-card text-center d-flex flex-column align-items-center justify-content-center">
                                    <div class="user-avatar">
                                        <img src="{{ $teacher->getAvatar() }}" class="img-cover rounded-circle" alt="{{ $teacher->full_name }}">
                                    </div>
                                    <a href="{{ $teacher->getProfileUrl() }}">
                                        <h4 class="font-16 font-weight-bold text-dark-blue mt-10">{{ $teacher->full_name }}</h4>
                                        <span class="d-block font-14 text-gray mt-5">{{ $teacher->bio }}</span>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            @endif

            @if(!empty($organizations) and count($organizations))
                <section class="mt-50">

                    <div class="row">

                        @foreach($organizations as $organization)
                            <div class="col-md-6 col-lg-3 mt-30">
                                <a href="{{ $organization->getProfileUrl() }}" class="home-organizations-card d-flex flex-column align-items-center justify-content-center">
                                    <div class="home-organizations-avatar">
                                        <img src="{{ $organization->getAvatar() }}" class="img-cover rounded-circle" alt="{{ $organization->full_name }}">
                                    </div>
                                    <div class="mt-25 d-flex flex-column align-items-center justify-content-center">
                                        <h3 class="home-organizations-title">{{ $organization->full_name }}</h3>
                                        <p class="home-organizations-desc mt-10">{{ $organization->bio }}</p>
                                        <span class="home-organizations-badge badge mt-15">{{ $organization->getActiveWebinars(true) }} {{ trans('product.courses') }}</span>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </section>
            @endif
        </div>
    @else

        <div class="no-result status-failed my-50 d-flex align-items-center justify-content-center flex-column">
            <div class="no-result-logo">
                <img src="/assets/default/img/no-results/search.png" alt="">
            </div>
            <div class="container">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-12 col-md-9 col-lg-7">
                        <div class="d-flex align-items-center flex-column mt-30 text-center w-100">
                            <h2>{{ trans('site.no_result_search') }}</h2>
                            <p class="mt-5 text-center white-space-pre-wrap">{{ trans('site.no_result_search_hint',['search' => request()->get('search')]) }}</p>

                            <div class="search-input bg-white p-10 mt-20 flex-grow-1 shadow-sm rounded-pill w-100">
                                <form action="/search" method="get">
                                    <div class="form-group d-flex align-items-center m-0">
                                        <input type="text" name="search" class="form-control border-0" value="{{ request()->get('search','') }}" placeholder="{{ trans('home.slider_search_placeholder') }}"/>
                                        <button type="submit" class="btn btn-primary rounded-pill">{{ trans('home.find') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
