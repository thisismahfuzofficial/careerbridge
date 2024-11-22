<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.net/pwa/chatzy/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 09:21:43 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Chatzy">
    <meta name="keywords" content="Chatzy">
    <meta name="author" content="Chatzy">
    <link rel="manifest" href="manifest.json">
    <link rel="icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/x-icon">
    <title>Chatzy App</title>
    <link rel="apple-touch-icon" href="{{ asset('assets/images/logo/favicon.png') }}">
    <meta name="theme-color" content="#01AA85">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Chatzy">
    <meta name="msapplication-TileImage" content="{{ asset('assets/images/logo/favicon.png') }}">

    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">

    <!-- iconsax css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/iconsax.css') }}">

    <!-- swiper css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/swiper-bundle.min.css') }}">

    <!-- bootstrap css -->
    <link rel="stylesheet" id="rtl-link" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}">
    <!-- template css -->
    <link rel="stylesheet" id="change-link" type="text/css" href="{{ asset('assets/css/style.css') }}">
    @stack('styles')

</head>

<body>
    <!-- header starts -->
    @if (Route::is('page.home'))
        <x-app.app-header />
    @endif

    <!-- header end -->



    <!-- story section starts -->

    <!-- story section end -->
    <!-- chat section starts -->
    {{ $slot }}
    <!-- chat section end -->

    {{-- <div class="new-part">
        <a href="add-chat-contact.html" class="new-chat-icon">
            <img class="img-fluid icon" src="{{asset('assets/images/svg/messages.svg')}}" alt="messages">
        </a>
    </div> --}}



    <!-- panel-space start -->
    <section class="panel-space"></section>
    <!-- panel-space end -->

    <!-- bottom navbar start -->
    <x-app.nav />
    <!-- bottom navbar end -->

    <!-- search offcanvas starts -->
    <div class="offcanvas offcanvas-top search-offcanvas" tabindex="-1" id="search-offcanvas">
        <div class="offcanvas-header">
            <a href="setting.html" data-bs-dismiss="offcanvas">
                <i class="iconsax icon-btn" data-icon="chevron-left"> </i>
            </a>
            <div class="form-input">
                <input type="search" class="form-control search" id="inputusername" placeholder="Search here...">
                <i class="iconsax search" data-icon="search-normal-2"> </i>
            </div>
        </div>

        <div class="offcanvas-body">
            <ul class="search-categories-list">
                <li>
                    <div class="search-categories-box">
                        <img class="img img-fluid" src="{{ asset('assets/images/svg/video.svg') }}" alt="video">
                        <h6>Video</h6>
                    </div>
                </li>
                <li>
                    <div class="search-categories-box">
                        <img class="img img-fluid" src="{{ asset('assets/images/svg/gallery.svg') }}" alt="video">
                        <h6>Photos</h6>
                    </div>
                </li>
                <li>
                    <div class="search-categories-box">
                        <img class="img img-fluid" src="{{ asset('assets/images/svg/headphone.svg') }}" alt="video">
                        <h6>Audios</h6>
                    </div>
                </li>
                <li>
                    <div class="search-categories-box">
                        <img class="img img-fluid" src="{{ asset('assets/images/svg/document.svg') }}" alt="video">
                        <h6>Documents</h6>
                    </div>
                </li>
                <li>
                    <div class="search-categories-box">
                        <img class="img img-fluid" src="{{ asset('assets/images/svg/gif.svg') }}" alt="video">
                        <h6>GIFs</h6>
                    </div>
                </li>
                <li>
                    <div class="search-categories-box">
                        <img class="img img-fluid" src="{{ asset('assets/images/svg/link.svg') }}" alt="video">
                        <h6>Links</h6>
                    </div>
                </li>

                <li>
                    <div class="search-categories-box">
                        <img class="img img-fluid" src="{{ asset('assets/images/svg/message.svg') }}" alt="video">
                        <h6>Unread</h6>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- search offcanvas end -->

    <!-- add story modal starts -->
    <div class="modal fade add-modal" id="add-story-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Add Story</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <ul class="story-list">
                        <li>
                            <div class="story-types-box">
                                <div class="story-image">
                                    <img src="assets/images/icons/gallery.png" alt="gallery">
                                </div>
                                <h5>Select From Gallery</h5>
                            </div>
                        </li>
                        <li>
                            <div class="story-types-box">
                                <div class="story-image">
                                    <img src="assets/images/icons/camera.png" alt="camera">
                                </div>
                                <h5>Open Camera</h5>
                            </div>
                        </li>
                        <li>
                            <div class="story-types-box">
                                <div class="story-image">
                                    <img src="assets/images/icons/text.png" alt="text">
                                </div>
                                <h5>Write Text</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- add story modal end  -->

    <!-- friend story modal starts -->
    <div class="modal fade story-modal" id="friend-story" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="swiper story__slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide position-relative">
                                <img class="img-fluid story-img" src="assets/images/story-img1.png" alt="story-img">
                                <div class="story-person-content">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="story-person-img">
                                            <img class="img-fluid person-icon" src="assets/images/profile/p2.png"
                                                alt="p2">
                                        </div>
                                        <h3> Albert Flores</h3>
                                        <h6>10 min ago</h6>
                                    </div>
                                    <a href="#" data-bs-dismiss="modal">
                                        <i class="iconsax close-btn" data-icon="add"> </i>
                                    </a>
                                </div>

                                <form class="message-inputarea">
                                    <input type="text" class="message-input" placeholder="Type here...">
                                    <img class="img-fluid smile" src="{{ asset('assets/images/svg/smile.svg') }}"
                                        alt="">
                                    <i class="iconsax file" data-icon="paperclip-2"> </i>
                                    <i class="iconsax mic" data-icon="mic-2"> </i>

                                    <a href="home.html" type="button" class="message-send-btn">
                                        <i class="iconsax icon-btn" data-icon="send-2"> </i>
                                    </a>
                                </form>
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid story-img" src="assets/images/story-img2.png" alt="story-img">
                                <div class="story-person-content">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="story-person-img">
                                            <img class="img-fluid person-icon" src="assets/images/profile/p2.png"
                                                alt="p2">
                                        </div>
                                        <h3> Albert Flores</h3>
                                        <h6>10 min ago</h6>
                                    </div>
                                    <a href="#" data-bs-dismiss="modal">
                                        <i class="iconsax close-btn" data-icon="add"> </i>
                                    </a>
                                </div>

                                <form class="message-inputarea">
                                    <input type="text" class="message-input" placeholder="Type here...">
                                    <img class="img-fluid smile" src="{{ asset('assets/images/svg/smile.svg') }}"
                                        alt="">
                                    <i class="iconsax file" data-icon="paperclip-2"> </i>
                                    <i class="iconsax mic" data-icon="mic-2"> </i>

                                    <a href="home.html" type="button" class="message-send-btn">
                                        <i class="iconsax icon-btn" data-icon="send-2"> </i>
                                    </a>
                                </form>
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid story-img" src="assets/images/story-img3.png" alt="story-img">
                                <div class="story-person-content">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="story-person-img">
                                            <img class="img-fluid person-icon" src="assets/images/profile/p2.png"
                                                alt="p2">
                                        </div>
                                        <h3> Albert Flores</h3>
                                        <h6>10 min ago</h6>
                                    </div>
                                    <a href="#" data-bs-dismiss="modal">
                                        <i class="iconsax close-btn" data-icon="add"> </i>
                                    </a>
                                </div>
                                <form class="message-inputarea">
                                    <input type="text" class="message-input" placeholder="Type here...">
                                    <img class="img-fluid smile" src="{{ asset('assets/images/svg/smile.svg') }}"
                                        alt="">
                                    <i class="iconsax file" data-icon="paperclip-2"> </i>
                                    <i class="iconsax mic" data-icon="mic-2"> </i>

                                    <a href="home.html" type="button" class="message-send-btn">
                                        <i class="iconsax icon-btn" data-icon="send-2"> </i>
                                    </a>
                                </form>
                            </div>
                        </div>
                        <div class="story__pagination swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- friend story modal end -->

    <!-- iconsax js -->
    <script src="{{ asset('assets/js/iconsax.js') }}"></script>

    <!-- bootstrap js -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- swiper js -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-swiper.js') }}"></script>



    <!-- script js -->
    <script src="{{ asset('assets/js/script.js') }}"></script>


    @stack('scripts')
</body>


<!-- Mirrored from themes.pixelstrap.net/pwa/chatzy/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 09:22:03 GMT -->

</html>
