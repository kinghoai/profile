@extends('layouts.frontend.app')

@section('title')
    Blog
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/css/carousel.css">
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.css"/>
    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="/css/responsive.css"/>
@endsection

@section('content')
    <div class="blog-main">
        <div class="blog-left blog-listing">
            <div class="blog-top">
                <div class="blog-title"><h2>Blog</h2>
                    <div class="breadcrumbs"><a href="index.html">Home</a>&nbsp;&nbsp;/&nbsp;&nbsp;Blog</div>
                </div>
            </div>
            <div class="row">
                <div class="blog-list">
                    <div class="blog-img"><a href="blog-details.html"><img src="image/work1.jpg" alt=""></a></div>
                    <div class="blog-list-details"><span class="date">Saturday &nbsp;/&nbsp; June 15, 2013</span>
                        <h3><a href="blog-details.html">This is a standard post with a preview image</a></h3>
                        <span class="post-details"><a href="#">Admin</a> &nbsp;/&nbsp; <a href="#">Web Design</a> &nbsp;/&nbsp; <a
                                href="#">23 Comments</a></span>
                        <div class="title-divider"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.</p>
                        <div class="contact-social margin-top30"><a href="https://www.facebook.com" target="_blank"><i
                                    class="fa fa-facebook"></i></a> <a href="https://twitter.com" target="_blank"><i
                                    class="fa fa-twitter"></i></a> <a href="https://www.youtube.com" target="_blank"><i
                                    class="fa fa-youtube"></i></a><a href="https://plus.google.com" target="_blank"><i
                                    class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com"
                                                                         target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="blog-list">
                    <div class="blog-img">
                        <div class="fluid-width-video-wrapper" style="padding-top: 57.4713%;">
                            <iframe src="//www.youtube.com/embed/ZwzY1o_hB5Y" frameborder="0" allowfullscreen=""
                                    id="fitvid348942"></iframe>
                        </div>
                    </div>
                    <div class="blog-list-details"><span class="date">Saturday &nbsp;/&nbsp; June 15, 2013</span>
                        <h3><a href="blog-details.html">This is a standard post with an embedded video</a></h3>
                        <span class="post-details"><a href="#">Admin</a> &nbsp;/&nbsp; <a href="#">Web Design</a> &nbsp;/&nbsp; <a
                                href="#">23 Comments</a></span>
                        <div class="title-divider"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.</p>
                        <div class="contact-social margin-top30"><a href="https://www.facebook.com" target="_blank"><i
                                    class="fa fa-facebook"></i></a> <a href="https://twitter.com" target="_blank"><i
                                    class="fa fa-twitter"></i></a> <a href="https://www.youtube.com" target="_blank"><i
                                    class="fa fa-youtube"></i></a><a href="https://plus.google.com" target="_blank"><i
                                    class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com"
                                                                         target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="blog-list">
                    <div class="blog-img">
                        <div id="owl-demo" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper"
                                     style="width: 2610px; left: 0px; display: block; transition: all 400ms ease 0s; transform: translate3d(-522px, 0px, 0px);">
                                    <div class="owl-item" style="width: 261px;">
                                        <div class="item"><img src="image/work2.jpg" alt=""></div>
                                    </div>
                                    <div class="owl-item" style="width: 261px;">
                                        <div class="item"><img src="image/work-details2.jpg" alt=""></div>
                                    </div>
                                    <div class="owl-item" style="width: 261px;">
                                        <div class="item"><img src="image/work-details3.jpg" alt=""></div>
                                    </div>
                                    <div class="owl-item" style="width: 261px;">
                                        <div class="item"><img src="image/work-details4.jpg" alt=""></div>
                                    </div>
                                    <div class="owl-item" style="width: 261px;">
                                        <div class="item"><img src="image/work-details5.jpg" alt=""></div>
                                    </div>
                                </div>
                            </div>


                            <div class="owl-controls clickable">
                                <div class="owl-pagination">
                                    <div class="owl-page"><span class=""></span></div>
                                    <div class="owl-page"><span class=""></span></div>
                                    <div class="owl-page active"><span class=""></span></div>
                                    <div class="owl-page"><span class=""></span></div>
                                    <div class="owl-page"><span class=""></span></div>
                                </div>
                                <div class="owl-buttons">
                                    <div class="owl-prev">prev</div>
                                    <div class="owl-next">next</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-list-details"><span class="date">Saturday &nbsp;/&nbsp; June 15, 2013</span>
                        <h3><a href="blog-details.html">This is a standard post with a slider gallery</a></h3>
                        <span class="post-details"><a href="#">Admin</a> &nbsp;/&nbsp; <a href="#">Web Design</a> &nbsp;/&nbsp; <a
                                href="#">23 Comments</a></span>
                        <div class="title-divider"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.</p>
                        <div class="contact-social margin-top30"><a href="https://www.facebook.com" target="_blank"><i
                                    class="fa fa-facebook"></i></a> <a href="https://twitter.com" target="_blank"><i
                                    class="fa fa-twitter"></i></a> <a href="https://www.youtube.com" target="_blank"><i
                                    class="fa fa-youtube"></i></a><a href="https://plus.google.com" target="_blank"><i
                                    class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com"
                                                                         target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="blog-list">
                    <div class="blog-img"><a href="blog-details.html"><img src="image/work3.jpg" alt=""></a></div>
                    <div class="blog-list-details"><span class="date">Saturday &nbsp;/&nbsp; June 15, 2013</span>
                        <h3><a href="blog-details.html">This is a standard post with a preview image</a></h3>
                        <span class="post-details"><a href="#">Admin</a> &nbsp;/&nbsp; <a href="#">Web Design</a> &nbsp;/&nbsp; <a
                                href="#">23 Comments</a></span>
                        <div class="title-divider"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.</p>
                        <div class="contact-social margin-top30"><a href="https://www.facebook.com" target="_blank"><i
                                    class="fa fa-facebook"></i></a> <a href="https://twitter.com" target="_blank"><i
                                    class="fa fa-twitter"></i></a> <a href="https://www.youtube.com" target="_blank"><i
                                    class="fa fa-youtube"></i></a><a href="https://plus.google.com" target="_blank"><i
                                    class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com"
                                                                         target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="blog-list">
                    <div class="blog-img"><a href="blog-details.html"><img src="image/work5.jpg" alt=""></a></div>
                    <div class="blog-list-details"><span class="date">Saturday &nbsp;/&nbsp; June 15, 2013</span>
                        <h3><a href="blog-details.html">This is a standard post with a preview image</a></h3>
                        <span class="post-details"><a href="#">Admin</a> &nbsp;/&nbsp; <a href="#">Web Design</a> &nbsp;/&nbsp; <a
                                href="#">23 Comments</a></span>
                        <div class="title-divider"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.</p>
                        <div class="contact-social margin-top30"><a href="https://www.facebook.com" target="_blank"><i
                                    class="fa fa-facebook"></i></a> <a href="https://twitter.com" target="_blank"><i
                                    class="fa fa-twitter"></i></a> <a href="https://www.youtube.com" target="_blank"><i
                                    class="fa fa-youtube"></i></a><a href="https://plus.google.com" target="_blank"><i
                                    class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com"
                                                                         target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="blog-list">
                    <div class="blog-img"><a href="blog-details.html"><img src="image/work-details1.jpg" alt=""></a>
                    </div>
                    <div class="blog-list-details"><span class="date">Saturday &nbsp;/&nbsp; June 15, 2013</span>
                        <h3><a href="blog-details.html">This is a standard post with a preview image</a></h3>
                        <span class="post-details"><a href="#">Admin</a> &nbsp;/&nbsp; <a href="#">Web Design</a> &nbsp;/&nbsp; <a
                                href="#">23 Comments</a></span>
                        <div class="title-divider"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.</p>
                        <div class="contact-social margin-top30"><a href="https://www.facebook.com" target="_blank"><i
                            class="fa fa-facebook"></i></a> <a href="https://twitter.com" target="_blank"><i
                            class="fa fa-twitter"></i></a> <a href="https://www.youtube.com" target="_blank"><i
                            class="fa fa-youtube"></i></a><a href="https://plus.google.com" target="_blank"><i
                            class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="blog-list">
                    <div class="blog-img">
                        <div id="owl-demo1" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper"
                                     style="width: 2610px; left: 0px; display: block; transition: all 400ms ease 0s; transform: translate3d(-522px, 0px, 0px);">
                                    <div class="owl-item" style="width: 261px;">
                                        <div class="item"><img src="image/work2.jpg" alt=""></div>
                                    </div>
                                    <div class="owl-item" style="width: 261px;">
                                        <div class="item"><img src="image/work-details2.jpg" alt=""></div>
                                    </div>
                                    <div class="owl-item" style="width: 261px;">
                                        <div class="item"><img src="image/work-details3.jpg" alt=""></div>
                                    </div>
                                    <div class="owl-item" style="width: 261px;">
                                        <div class="item"><img src="image/work-details4.jpg" alt=""></div>
                                    </div>
                                    <div class="owl-item" style="width: 261px;">
                                        <div class="item"><img src="image/work-details5.jpg" alt=""></div>
                                    </div>
                                </div>
                            </div>


                            <div class="owl-controls clickable">
                                <div class="owl-pagination">
                                    <div class="owl-page"><span class=""></span></div>
                                    <div class="owl-page"><span class=""></span></div>
                                    <div class="owl-page active"><span class=""></span></div>
                                    <div class="owl-page"><span class=""></span></div>
                                    <div class="owl-page"><span class=""></span></div>
                                </div>
                                <div class="owl-buttons">
                                    <div class="owl-prev">prev</div>
                                    <div class="owl-next">next</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-list-details"><span class="date">Saturday &nbsp;/&nbsp; June 15, 2013</span>
                        <h3><a href="blog-details.html">This is a standard post with a slider gallery</a></h3>
                        <span class="post-details"><a href="#">Admin</a> &nbsp;/&nbsp; <a href="#">Web Design</a> &nbsp;/&nbsp; <a
                                href="#">23 Comments</a></span>
                        <div class="title-divider"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.</p>
                        <div class="contact-social margin-top30"><a href="https://www.facebook.com" target="_blank"><i
                                    class="fa fa-facebook"></i></a> <a href="https://twitter.com" target="_blank"><i
                                    class="fa fa-twitter"></i></a> <a href="https://www.youtube.com" target="_blank"><i
                                    class="fa fa-youtube"></i></a><a href="https://plus.google.com" target="_blank"><i
                                    class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com"
                                                                         target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="blog-list">
                    <div class="blog-img"><a href="blog-details.html"><img src="image/work-details4.jpg" alt=""></a>
                    </div>
                    <div class="blog-list-details"><span class="date">Saturday &nbsp;/&nbsp; June 15, 2013</span>
                        <h3><a href="blog-details.html">This is a standard post with a preview image</a></h3>
                        <span class="post-details"><a href="#">Admin</a> &nbsp;/&nbsp; <a href="#">Web Design</a> &nbsp;/&nbsp; <a
                                href="#">23 Comments</a></span>
                        <div class="title-divider"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.</p>
                        <div class="contact-social margin-top30"><a href="https://www.facebook.com" target="_blank"><i
                                    class="fa fa-facebook"></i></a> <a href="https://twitter.com" target="_blank"><i
                                    class="fa fa-twitter"></i></a> <a href="https://www.youtube.com" target="_blank"><i
                                    class="fa fa-youtube"></i></a><a href="https://plus.google.com" target="_blank"><i
                                    class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com"
                                                                         target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="blog-list">
                    <div class="blog-img"><a href="blog-details.html"><img src="image/work-details5.jpg" alt=""></a>
                    </div>
                    <div class="blog-list-details"><span class="date">Saturday &nbsp;/&nbsp; June 15, 2013</span>
                        <h3><a href="blog-details.html">This is a standard post with a preview image</a></h3>
                        <span class="post-details"><a href="#">Admin</a> &nbsp;/&nbsp; <a href="#">Web Design</a> &nbsp;/&nbsp; <a
                                href="#">23 Comments</a></span>
                        <div class="title-divider"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.</p>
                        <div class="contact-social margin-top30"><a href="https://www.facebook.com" target="_blank"><i
                                    class="fa fa-facebook"></i></a> <a href="https://twitter.com" target="_blank"><i
                                    class="fa fa-twitter"></i></a> <a href="https://www.youtube.com" target="_blank"><i
                                    class="fa fa-youtube"></i></a><a href="https://plus.google.com" target="_blank"><i
                                    class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com"
                                                                         target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pagination">
        <ul class="pagerblock">
            <li><a href="javascript:void(0)"><i class="fa fa-angle-left"></i></a></li>
            <li><a href="javascript:void(0)" class="current">1</a></li>
            <li><a href="javascript:void(0)">2</a></li>
            <li><a href="javascript:void(0)">3</a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-angle-right"></i></a></li>
        </ul>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="/js/jquery-2.0.3.min.js"></script>
    <!-- Portfolio Slider-->
    <script type="text/javascript" src="/js/carousel.js"></script>
    <script type="text/javascript" src="/js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="/js/blogsetting.js"></script>
@endsection
