<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.front._head')
</head>

<body>

<!-- Preloader -->
<div class="preloader">
    <div class="preload-img">
        <div class="spinnerBounce">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>
<!-- End of Preloader -->

<!-- Nav Search Box -->
<div class="nav-search-box">
    <form>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="eg. feel the love and …">
            <span class="b-line"></span>
            <span class="b-line-under"></span>
            <div class="input-group-append">
                <button type="button" class="btn">
                    <img src="{{ asset('theme-front/images/search-icon.svg') }}" alt="" class="img-fluid svg">
                </button>
            </div>
        </div>
    </form>
</div>
<!-- End of Nav Search Box -->

<!-- Header -->
<header class="header">
    <div class="header-fixed">
        @include('layouts.front._mainNav')
    </div>
</header>
<!-- End of Header -->

<!-- Trending Posts-->
<section class="pb-10">
    <div class="container">
        <!-- Section Title -->
        <div class="section-title text-center">
            <h2>Trending Post</h2>
        </div>
        <!-- Section Title -->

        <div class="row">
            <div class="col-lg-6 order-lg-2">
                <!-- Post -->
                <div class="post-default post-has-bg-img">
                    <div class="post-thumb">
                        <a href="blog-details.html">
                            <div data-bg-img="assets/images/blog/4.jpg') }}"></div>
                        </a>
                    </div>
                    <div class="post-data">
                        <!-- Category -->
                        <div class="cats"><a href="category-result.html">Fashion</a></div>
                        <!-- Title -->
                        <div class="title">
                            <h2><a href="blog-details.html">Understanding The Background <br> Of Fashion</a></h2>
                        </div>
                        <!-- Post Meta -->
                        <ul class="nav meta align-items-center">
                            <li class="meta-author">
                                <img src="{{ asset('theme-front/images/blog/author.jpg') }}" alt="" class="img-fluid">
                                <a href="#">Alex Garry</a>
                            </li>
                            <li class="meta-date"><a href="#">2 Feb 2019</a></li>
                            <li class="meta-comments"><a href="#"><i class="fa fa-comment"></i> 2</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End of Post -->
            </div>
            <div class="col-lg-6 order-lg-1">
                <!-- Post -->
                <div class="post-default post-has-no-thumb">
                    <div class="post-data">
                        <!-- Category -->
                        <div class="cats"><a href="category-result.html">Fashion</a></div>
                        <!-- Title -->
                        <div class="title">
                            <h2><a href="blog-details.html">Understanding The Background Of Fashion</a></h2>
                        </div>
                        <!-- Post Meta -->
                        <ul class="nav meta align-items-center">
                            <li class="meta-author">
                                <img src="{{ asset('theme-front/images/blog/author.jpg') }}" alt="" class="img-fluid">
                                <a href="#">Alex Garry</a>
                            </li>
                            <li class="meta-date"><a href="#">2 Feb 2019</a></li>
                            <li class="meta-comments"><a href="#"><i class="fa fa-comment"></i> 2</a></li>
                        </ul>
                        <!-- Post Desc -->
                        <div class="desc">
                            <p>
                                Integer at faucibus urna. Nullam condimentum leo id elit sagittis auctor. Curabitur elementum nunc...
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End of Post -->

                <!-- Post -->
                <div class="post-default post-has-no-thumb">
                    <div class="post-data">
                        <!-- Category -->
                        <div class="cats"><a href="category-result.html">Travel</a></div>
                        <!-- Title -->
                        <div class="title">
                            <h2><a href="blog-details.html">30 Things to Do Before You Turn 30 Travel Bucket List</a></h2>
                        </div>
                        <!-- Post Meta -->
                        <ul class="nav meta align-items-center">
                            <li class="meta-author">
                                <img src="{{ asset('theme-front/images/blog/author.jpg') }}" alt="" class="img-fluid">
                                <a href="#">Alex Garry</a>
                            </li>
                            <li class="meta-date"><a href="#">2 Feb 2019</a></li>
                            <li class="meta-comments"><a href="#"><i class="fa fa-comment"></i> 2</a></li>
                        </ul>
                        <!-- Post Desc -->
                        <div class="desc">
                            <p>
                                Integer at faucibus urna. Nullam condimentum leo id elit sagittis auctor. Curabitur elementum nunc...
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End of Post -->
            </div>
        </div>
    </div>
</section>
<!-- End of Trending Posts-->

<!-- post with sidebar -->
<div class="container pt-40 pb-90">
    <div class="row">
        @yield('content')
    </div>
</div>
<!-- end of post with sidebar -->

@include('layouts.front._footer')

<!-- Back to Top Button -->
<div class="back-to-top d-flex align-items-center justify-content-center">
    <span><i class="fa fa-long-arrow-up"></i></span>
</div>
<!-- End of Back to Top Button -->
@include('layouts.front._scripts')
</body>
</html>