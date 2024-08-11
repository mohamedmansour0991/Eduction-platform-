@php
    $showLoading = true;

    // Check if any content is present to determine whether to show the loading screen
    if (
        (!empty($noticeboards) && $noticeboards) ||
        !empty($assignment) ||
        (!empty($isForumPage) && $isForumPage) ||
        (!empty($isForumAnswersPage) && $isForumAnswersPage)
    ) {
        $showLoading = false;
    }
@endphp

<div class="learning-content" id="">
    <!-- Display the appropriate content based on conditions -->
    @if (!empty($isForumAnswersPage) && $isForumAnswersPage)
        @include('web.default.course.learningPage.components.forum.forum_answers')
    @elseif(!empty($isForumPage) && $isForumPage)
        @include('web.default.course.learningPage.components.forum.forum')
    @elseif(!empty($noticeboards) && $noticeboards)
        @include('web.default.course.learningPage.components.noticeboards')
    @elseif(!empty($assignment))
        @include('web.default.course.learningPage.components.assignment')
    @endif

    <!-- Loading screen -->
    {{-- <div class="learning-content-loading align-items-center justify-content-center flex-column w-100 h-100 {{ $showLoading ? 'd-flex' : 'd-none' }}">
        <img src="/assets/default/img/loading.gif" alt="{{ trans('update.please_wait_for_the_content_to_load') }}">
        <p class="mt-10">{{ trans('update.please_wait_for_the_content_to_load') }}</p>
    </div>
     --}}

    <iframe id="youtube-iframe" width="100%" height="95%"
        src="{{ $course['files'][0]['file'] }}?rel=0&modestbranding=1&showinfo=0&controls=1" title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin">
    </iframe>



    <!-- Overlay box -->
    <div id="overlay" class="overlay-box">
        <!-- Content to display in the overlay -->
    </div>
</div>
