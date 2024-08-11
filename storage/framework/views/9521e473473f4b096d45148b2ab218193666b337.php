<?php $__env->startPush('styles_top'); ?>
    <link rel="stylesheet" href="/assets/default/learning_page/styles.css" />
    <link rel="stylesheet" href="/assets/default/vendors/video/video-js.min.css">
    <link href="https://vjs.zencdn.net/7.20.2/video-js.css" rel="stylesheet">

    <style>
        .video-container {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        .overlay-box {
            position: absolute;
            top: 10%;
            left: 10%;
            background: rgba(74, 71, 71, 0.5);
            color: rgb(240, 227, 227);
            padding: 10px;
            border-radius: 5px;
            font-size: 20px;
            z-index: 100;
            pointer-events: none;
            animation: moveBox 10s linear infinite;
        }

        .youtube-header-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 60px;
            background-color: rgb(255, 255, 255);
            /* Default for mobile */
            z-index: 1000;
            pointer-events: auto;
        }

        .bottom-panel {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 70px;
            /* Adjust as needed */
            background-color: rgb(255, 255, 255);
            /* Default for mobile */
            z-index: 200;
            /* Higher than other z-index values */
            pointer-events: auto;
            /* Ensure the panel captures pointer events */
        }

        /* For PC */
        @media (min-width: 768px) {
            .youtube-header-overlay {
                background-color: rgba(0, 0, 0, 0.8);
                /* Background color for PC */
            }

            .bottom-panel {
                background-color: rgba(0, 0, 0, 0.8);
                /* Background color for PC */
            }
        }



        @keyframes moveBox {
            0% {
                top: 5%;
                left: 5%;
            }

            25% {
                top: 5%;
                left: calc(100% - 15%);
            }

            50% {
                top: calc(100% - 15%);
                left: calc(100% - 15%);
            }

            75% {
                top: calc(100% - 15%);
                left: 5%;
            }

            100% {
                top: 5%;
                left: 5%;
            }
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="learning-page">
        <?php echo $__env->make('web.default.course.learningPage.components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="d-flex position-relative">
            <div id="video-content" class="video-container">
                <iframe id="youtube-iframe" width="100%" height="98%"
                    src="<?php echo e($course['files'][0]['file']); ?>?autoplay=1&modestbranding=1&playsinline=1&rel=0&controls=0"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin">
                </iframe>

                <div class="youtube-header-overlay"></div>
                <div id="overlay" class="overlay-box"></div>
                <div class="bottom-panel"></div> <!-- Bottom panel added here -->
            </div>

            <div class="learning-page-tabs show">
                <ul class="nav nav-tabs py-15 d-flex align-items-center justify-content-around" id="tabs-tab"
                    role="tablist">
                    <!-- Tabs go here -->
                </ul>

                <div class="tab-content h-100" id="nav-tabContent">
                    <div class="pb-20 tab-pane fade show active h-100" id="content" role="tabpanel"
                        aria-labelledby="content-tab">
                        <?php echo $__env->make('web.default.course.learningPage.components.content_tab.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="pb-20 tab-pane fade h-100" id="quizzes" role="tabpanel" aria-labelledby="quizzes-tab">
                        <?php echo $__env->make('web.default.course.learningPage.components.quiz_tab.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="pb-20 tab-pane fade h-100" id="certificates" role="tabpanel"
                        aria-labelledby="certificates-tab">
                        <?php echo $__env->make('web.default.course.learningPage.components.certificate_tab.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts_bottom'); ?>
    <script src="/assets/default/vendors/video/video.min.js"></script>
    <script src="/assets/default/vendors/video/vimeo.js"></script>
    <script src="https://vjs.zencdn.net/7.20.2/video.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/videojs-youtube@2.8.0/dist/videojs-youtube.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var overlayBox = document.getElementById('overlay');
            var fullName = '<?php echo e($user->full_name); ?>';
            var mobile = '<?php echo e($user->mobile); ?>';

            overlayBox.textContent = fullName + "\n" + mobile;

            function keepOverlayInBounds() {
                var videoContainer = document.querySelector('.video-container');
                var containerRect = videoContainer.getBoundingClientRect();
                var overlayRect = overlayBox.getBoundingClientRect();

                if (overlayRect.left < containerRect.left) {
                    overlayBox.style.left = '10px';
                }
                if (overlayRect.top < containerRect.top) {
                    overlayBox.style.top = '10px';
                }
                if (overlayRect.right > containerRect.right) {
                    overlayBox.style.left = containerRect.width - overlayRect.width - 10 + 'px';
                }
                if (overlayRect.bottom > containerRect.bottom) {
                    overlayBox.style.top = containerRect.height - overlayRect.height - 10 + 'px';
                }
            }

            overlayBox.onmousedown = function(e) {
                e.preventDefault();
                var shiftX = e.clientX - overlayBox.getBoundingClientRect().left;
                var shiftY = e.clientY - overlayBox.getBoundingClientRect().top;

                function moveAt(pageX, pageY) {
                    overlayBox.style.left = pageX - shiftX + 'px';
                    overlayBox.style.top = pageY - shiftY + 'px';
                    keepOverlayInBounds();
                }

                moveAt(e.pageX, e.pageY);

                function onMouseMove(e) {
                    moveAt(e.pageX, e.pageY);
                }

                document.addEventListener('mousemove', onMouseMove);

                overlayBox.onmouseup = function() {
                    document.removeEventListener('mousemove', onMouseMove);
                    overlayBox.onmouseup = null;
                };
            };

            overlayBox.ondragstart = function() {
                return false;
            };

            document.addEventListener('contextmenu', function(e) {
                e.preventDefault();
            });

            // Ensure the bottom panel is visible
            var bottomPanel = document.querySelector('.bottom-panel');
            bottomPanel.style.display = 'block';
        });

        // Load the IFrame Player API code asynchronously
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // Create an <iframe> (and YouTube player)
        var player;

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('youtube-iframe', {
                events: {
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        function onPlayerStateChange(event) {
            if (event.data === YT.PlayerState.ENDED) {
                document.getElementById('youtube-iframe').style.display = 'none';
                // Optionally, you can also redirect the user
                // window.location.href = 'https://your-redirect-url.com';
            }
        }
    </script>

    <script type="text/javascript" src="/assets/default/vendors/dropins/dropins.js"></script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script src="/assets/default/js/parts/video_player_helpers.min.js"></script>
    <script src="/assets/learning_page/scripts.min.js"></script>

    <?php if((!empty($isForumPage) && $isForumPage) || (!empty($isForumAnswersPage) && $isForumAnswersPage)): ?>
        <script src="/assets/learning_page/forum.min.js"></script>
    <?php endif; ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('web.default.layouts.app', ['appFooter' => false, 'appHeader' => false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\Systems\Eduction-platform-\resources\views/web/default/course/learningPage/index.blade.php ENDPATH**/ ?>